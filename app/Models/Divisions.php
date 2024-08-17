<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisions extends Model
{
    protected $fillable = [
        'name',
        'province_id',
        // Add other attributes as needed
    ];

    use HasFactory;

     // Define the inverse relationship
     public function province()
     {
         return $this->belongsTo(Provinces::class);
     }
}
