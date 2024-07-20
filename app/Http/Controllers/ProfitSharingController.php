<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfitSharingController extends Controller
{
    public function calculate()
    {
        $totalSubscriptionAmount = 69000; // 69rb
        $adminFee = 0.20; // 20%
        $netAmount = $totalSubscriptionAmount * (1 - $adminFee);

        // Total time watched per class
        $totalWatchTimes = WatchTime::select('class_id', DB::raw('SUM(minutes) as total_minutes'))
            ->groupBy('class_id')
            ->get();

        $totalMinutes = $totalWatchTimes->sum('total_minutes');

        // Calculate share per class
        $shares = $totalWatchTimes->map(function ($watchTime) use ($netAmount, $totalMinutes) {
            $percentage = $watchTime->total_minutes / $totalMinutes;
            $shareAmount = $netAmount * $percentage;

            return [
                'class_id' => $watchTime->class_id,
                'share_amount' => $shareAmount,
            ];
        });

        return response()->json($shares);
    }
}
