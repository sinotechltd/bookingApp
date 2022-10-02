<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_booking extends Model
{
    use HasFactory;
    protected $table = 'master_bookings';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function mInventory()
    {
        return $this->belongsToMany(Inventory::class); // Your University model
    }
}
