<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class WatchTime extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'class_id', 'minutes'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function classModel()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
