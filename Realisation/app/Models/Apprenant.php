<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
   protected $table = 'apprenant';

   protected $fillable = [
    'name',
    'email',
    'password'
   ];

   public $timestamps = true;

}
