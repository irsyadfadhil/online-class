<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Classes extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['mentor_id', 'name'];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function watchTimes()
    {
        return $this->hasMany(WatchTime::class);
    }
}
