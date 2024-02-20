<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moduloEB extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function empresaEmisora()
    {
        return $this->belongsTo(Empresaemisora::class, 'empresa_emisora_id');    
    }
}
