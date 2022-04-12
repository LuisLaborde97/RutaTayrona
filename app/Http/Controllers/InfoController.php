<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function home(){

        $tours = Tour::join('img_producto','tours.id', '=', 'img_producto.id_producto')
        ->select('tours.id','nombre', 'precio', 'descripcion', 'presentacion', 'url')->where('img_producto.estado', 1)
        ->get();

        $tours2 = Tour::join('img_producto','tours.id', '=', 'img_producto.id_producto')
        ->select('tours.id','nombre', 'precio', 'descripcion', 'presentacion', 'url')->where('img_producto.estado', 2)
        ->get();
        
        
        return view('info-tayrona.home', compact('tours'), compact('tours2'));
    }

    public function contact(){
        return view('info-tayrona.contact-us');
    }

    public function sobre_nosotros(){
        return view('info-tayrona.about');
    }

    
}
