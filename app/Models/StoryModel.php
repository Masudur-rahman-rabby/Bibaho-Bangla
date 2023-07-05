<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryModel extends Model
{
    use HasFactory;
    protected $table='storys';
    protected $fillable=[
        'groom_picture',
        'bride_picture',
        'title',
        'story',
    ];

}
