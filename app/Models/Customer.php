<?php

namespace App\Models;

use App\Models\Equipment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    
    public function equipment()
    {
        return Equipment::where('customer', $this->nama);
    }

    public function history()
    {
        return $this->hasMany(History::class, 'customer', 'nama');
    }
}

