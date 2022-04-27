<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Tour;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function home(){

        $tours = Producto::join('img_producto','productos.id', '=', 'img_producto.id_producto')
        ->select('productos.id','nombre', 'descripcion', 'presentacion', 'url')->where('img_producto.estado', 1)
        ->get();

        $tours2 = Producto::join('img_producto','productos.id', '=', 'img_producto.id_producto')->join('precios', 'precios.id_producto','productos.id')->select('productos.id','productos.nombre', 'productos.descripcion', 'presentacion', 'url', 'precios.precio_base')->where('img_producto.estado', 2)
        ->get();

        
        return view('info-tayrona.home', compact('tours'), compact('tours2'));
    }

    public function contact(){
        return view('info-tayrona.contact-us');
    }

    public function sobre_nosotros(){
        return view('info-tayrona.about');
    }

    public function insertar(){
        return view('welcome');
    }

    
}
