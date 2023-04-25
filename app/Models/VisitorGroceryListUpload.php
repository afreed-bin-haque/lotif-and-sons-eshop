<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorGroceryListUpload extends Model
{
    use HasFactory;
    protected $fillable = [
        'main_img',
        'phone',
        'address',
        'zone',
        'date',
        'total_cost',
        'payment_method',
        'payment_status',
        'picked_by',
        'status'
    ];
}
