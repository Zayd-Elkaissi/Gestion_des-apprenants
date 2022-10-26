<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
   protected $table = 'apprenants';

   protected $fillable = [
    'first_name',
    'last_name',
    'email',
    'promotion_id'
   ];

   public $timestamps = true;

   public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

}
