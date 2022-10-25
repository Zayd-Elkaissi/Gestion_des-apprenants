<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
   protected $table = 'apprenant';

   protected $fillable = [
    'first_name',
    'last_name',
    'password',
    'promotion_id'
   ];

   public $timestamps = true;

   public function promotions()
    {
        return $this->belongsTo(Promotion::class, 'id', 'apprenant_id');
    }

}
