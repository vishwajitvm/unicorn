<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $casts = [
        'main_machine_name' => 'array',
        'sub_machine_name' => 'array' ,
    ] ;
}
