<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    protected $fillable = [
        'name',
        'division_id',
        // Add other attributes as needed
    ];

    use HasFactory;

     // Define the inverse relationship
    public function division()
    {
        return $this->belongsTo(Divisions::class);
    }
}
