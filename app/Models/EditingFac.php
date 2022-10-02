<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditingFac extends Model
{
    use HasFactory;

    public function inventories()
    {
        return $this->belongsToMany(Inventory::class); // Your University model
    }
}
