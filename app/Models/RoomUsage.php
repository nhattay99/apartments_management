<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomUsage extends Model
{
    use HasFactory;

    public function apartment_room() {
        $this->belongsTo(ApartmentRoom::class);
    }
}
