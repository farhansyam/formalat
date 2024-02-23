<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = 'History';


    public function equipment()
    {
        return Equipment::where('id', $this->id_equipment);
    }
}
