<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    protected $table='payments';
    protected $fillable = [
        'user_id',
        'transaction_id',
        'customer_name',
        'mobile_number',
        'payment_option',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
