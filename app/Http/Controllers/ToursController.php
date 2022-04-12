<?php

namespace App\Http\Controllers;


use App\Models\Tour;
use APP\Models\img_producto;
use App\Models\Paises;

class ToursController extends Controller
{
    public function index($id){

        $tour = Tour::join('img_producto', 'tours.id', '=', 'img_producto.id_producto')->select('url', 'nombre', 'descripcion','duracion_dias','precio' )->where('img_producto.estado', 3)->where('tours.id', $id)->get();

        $pais = Paises::all();
        
        return view('tour.tour', compact('tour'), compact('pais'));
    }

    public function show(){
        $tours = Tour::join('img_producto','tours.id', '=', 'img_producto.id_producto')
                  ->select('tours.id','nombre', 'precio', 'url')->where('img_producto.estado', 2)
                  ->get();
                        

        return view('tour.tours', compact('tours'));
    } 

}
