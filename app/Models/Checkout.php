<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'camp_id','payment_status', 'midtrans_url', 'midtrans_booking_code'];

    // public function setExpiredAttribute($value)
    // {
    //     $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    // }

    public function Camp()
    {
        return $this->belongsTo(Camp::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
