<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataModel extends Model
{
    use HasFactory;
    protected $table='biodatas';
    protected $primaryKey='id';
    protected $fillable=[
        'profile_picture',
        'name',
        'age',
        'gender',
        'phone',
        'religion',
        'cast',
        'interested_in',
        'age_preference',
        'religion_preference',
        'cast_preference',];

}
