<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprovalsticket extends Model
{
    protected $fillable = [
        'id_ticket',
        'id_user',
        'status',
        'reason',
        'updated_by',
    ];
    protected $primaryKey = 'id';
}
