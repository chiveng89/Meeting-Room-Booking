<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panol extends Model
{
    use HasFactory;
    protected $fillable = [
        'staff_name', 'staff_id', 'staff_department', 'room', 'date', 'start_time', 'end_time', 'meeting_type', 'description',
    ];

}
