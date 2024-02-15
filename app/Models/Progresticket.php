<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progresticket extends Model
{
    protected $fillable = [
       'id_ticket',
       'tgl_tindakan',
       'tindakan',
       'tindakan_lama',
       'updated_by',
    ];

    protected $primaryKey = 'id';

    public function Tickets()
    {
        return $this->belongsTo(Tickets::class, 'id_ticket', 'id');
    }

}
