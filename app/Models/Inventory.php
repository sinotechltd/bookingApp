<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    // public function bookingtbl()
    // {
    //     return $this->belongsToMany(EditingFac::class); // Your University model
    // }
    public function mbookingtbl()
    {
        return $this->belongsToMany(Master_booking::class); // Your University model
    }
}
