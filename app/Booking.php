<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        "vehicle",
        "service",
        "sub",
        "schedule",
        "pick-up",
        "drop-off",
        "amount",
        "customer_id",
        "status",
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'customer_id');
    }

    public function photo()
    {
        return $this->hasOne('App\Gallery', 'user_id', 'customer_id')->where('purpose', 'selfie_photo');
    }
}
