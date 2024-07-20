<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassPlan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'class_plans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'features',
        'max_users',
        'class_options',
        'price',
        'promo_price'
    ];

}
