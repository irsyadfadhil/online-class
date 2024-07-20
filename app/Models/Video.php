<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Video extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'videos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'type',
        'title',
        'instructor',
        'instructor_title',
        'thumbnail_url',
        'video_url'
    ];
}
