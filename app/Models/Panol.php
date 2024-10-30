<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panol extends Model
{
    use HasFactory;
    protected $table = 'panol';
    public $timestamps = false;
    protected $fillable = [
        'room', 'staff_name', 'staff_id', 'staff_department','meeting_type', 'description','date', 'start_time', 'end_time',
    ];

}
