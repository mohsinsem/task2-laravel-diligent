<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    protected $fillable = [
        'name',
        // Add other attributes as needed
    ];

    use HasFactory;

     // Define the relationship
     public function divisions()
     {
         return $this->hasMany(Division::class);
     }
}
