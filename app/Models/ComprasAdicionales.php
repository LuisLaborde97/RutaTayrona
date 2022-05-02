<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComprasAdicionales extends Model
{
    use HasFactory;

    protected $fillable = ['id_compra', 'id_adicional'];
}
