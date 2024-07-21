<?php

namespace App\Repositories;

use App\Models\WatchTime;
use App\Models\Subscription;
use App\Repositories\ProfitSharingRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ProfitSharingRepository implements ProfitSharingRepositoryInterface
{
    public function calculate()
    {
        $subscriptions = Subscription::all();
        $adminFee = 0.20; // 20%

        // Calculate net amount per user
        $netAmounts = [];
        foreach ($subscriptions as $subscription) {
            $userId = $subscription->user_id;
            $netAmount = $subscription->amount * (1 - $adminFee);

            if (!isset($netAmounts[$userId])) {
                $netAmounts[$userId] = 0;
            }
            $netAmounts[$userId] += $netAmount;
        }

        // Total time watched per class by each user
        $watchTimes = WatchTime::with(['classModel.mentor'])
            ->select('user_id', 'class_id', DB::raw('SUM(minutes) as total_minutes'))
            ->groupBy('user_id', 'class_id')
            ->get();

        // Calculate share per class
        $classShares = [];
        foreach ($watchTimes as $watchTime) {
            $userId = $watchTime->user_id;
            $classId = $watchTime->class_id;
            $totalMinutes = $watchTime->total_minutes;

            if (isset($netAmounts[$userId])) {
                $userTotalMinutes = $watchTimes->where('user_id', $userId)->sum('total_minutes');
                $percentage = $totalMinutes / $userTotalMinutes;
                $shareAmount = $netAmounts[$userId] * $percentage;

                if (!isset($classShares[$classId])) {
                    $classShares[$classId] = 0;
                }
                $classShares[$classId] += $shareAmount;
            }
        }

        // Format the shares for response with 2 decimal places
        $shares = [];
        foreach ($classShares as $classId => $shareAmount) {
            $totalMinutes = $watchTimes->where('class_id', $classId)->sum('total_minutes');
            $class = $watchTimes->where('class_id', $classId)->first()->classModel;
            $className = $class->name ?? 'Unknown';
            $mentorName = $class->mentor->name ?? 'Unknown';

            $shares[] = [
                'class_id' => $classId,
                'class_name' => $className,
                'mentor_name' => $mentorName,
                'total_minutes' => $totalMinutes,
                'share_amount' => round($shareAmount, 2),
            ];
        }

        return $shares;
    }
}
