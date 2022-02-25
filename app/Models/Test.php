<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    
    //Make fields fillable 
    protected $fillable = ['name', 'member_id'];
}
