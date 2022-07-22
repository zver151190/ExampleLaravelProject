<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'user_comment',
            'administrator_comment',
            'track_number',
            'status_id',
        ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class);
    }
}
