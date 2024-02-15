<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'nik',
        'nama',
        'id_location',
        'total_ticket',
        'total_kategori_ticket',
        'total_solved_time',
        'rate',
        'status',
        'updated_by',
     ];

     protected $primaryKey = 'id';

     public function Locations()
    {
        return $this->belongsTo(Locations::class, 'id_location', 'id');
    }
}
