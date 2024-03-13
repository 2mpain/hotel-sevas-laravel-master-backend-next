<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelRoomType extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        "type",
        "description",
        "price",
        "image"
    ];

    public function rooms()
    {
        return $this->hasMany(HotelRoom::class, 'room_type_id');
    }
}
