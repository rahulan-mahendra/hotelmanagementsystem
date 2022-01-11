<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function roomTypes(){
        return $this->belongsTo(RoomType::class, 'room_type_id', 'id');
    }

    public function departments(){
        return $this->belongsTo(Department::class, 'department_id','id');
    }
}
