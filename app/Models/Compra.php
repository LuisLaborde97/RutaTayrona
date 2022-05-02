<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = ['id_cliente','id_reserva','id_adicional','id_producto','id_pagos', 'metodo_de_pago','total_compra', 'recibo_compra'];
}
