<?php

namespace App\Http\Controllers;

use App\Models\ProductoUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoControllerUS extends Controller
{
    public function homeUS(){

        $tours = DB::select("SELECT productos_us.id, nombre, descripcion, presentacion, url FROM rutatayrona.productos_us, rutatayrona.img_producto
        WHERE productos_us.id = img_producto.id_producto AND img_producto.estado = 1");

        $tours2 =DB::select("SELECT productos_us.id, precios_us.precio_base, productos_us.nombre, productos_us.descripcion, presentacion, url FROM rutatayrona.productos_us, rutatayrona.img_producto
        , rutatayrona.precios_us WHERE productos_us.id = img_producto.id_producto AND img_producto.estado = 2 AND precios_us.id_producto = productos_us.id");


        
        return view('info-tayrona.home_us', compact('tours'), compact('tours2'));
    }

    public function contactUS(){
        return view('info-tayrona.contact-USD');
    }

    public function sobre_nosotrosUS(){
        return view('info-tayrona.about_us');
    }
}
