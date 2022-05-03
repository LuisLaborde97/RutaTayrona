<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Paises;
use App\Models\Producto;


class ToursControllerUS extends Controller
{
    public function index_us($id){

        $tour = DB::select("SELECT productos_us.id, productos_us.nombre as nombre_producto, productos_us.descripcion, precios_us.precio_base, adicionales_us.nombre, adicionales_us.precio, img_producto.url FROM rutatayrona.productos_us, rutatayrona.precios_us, rutatayrona.adicionales_us, rutatayrona.img_producto WHERE productos_us.id = '$id' AND productos_us.id = precios_us.id_producto AND img_producto.id_producto = '$id' AND img_producto.estado = 3");

        $pais = Paises::all();

        /*$totalIti = DB::select("SELECT * FROM rutatayrona.itinerario WHERE id_producto = '$id' ");*/

        $titulo = DB::select("SELECT itinerario_us.id, itinerario_us.dia, itinerario_us.titulo FROM rutatayrona.itinerario_us WHERE itinerario_us.id_producto = '$id'");

        $checks = DB::select("SELECT checks_us.id, checks_us.id_itinerario, checks_us.checks FROM rutatayrona.checks_us, rutatayrona.itinerario WHERE checks_us.id_itinerario
        = itinerario.id AND itinerario.id_producto = '$id'");

        $incluye = DB::select("SELECT incluye FROM rutatayrona.incluye WHERE incluye.id_producto = '$id'");

        

        $adicionales = DB::select("select adicionales_us.id, adicionales_us.nombre, adicionales_us.descripcion, adicionales_us.precio from rutatayrona.adicionales_us WHERE adicionales_us.id_producto = '$id'");

      
        $recomendacion = DB::select("SELECT recomendacion FROM rutatayrona.recomendacion_us WHERE id_producto = '$id'");

        $consejos = DB::select("SELECT consejo FROM rutatayrona.consejos_us WHERE id_producto = '$id' ");
        
        return view('tour.tour_us', compact('tour', 'pais', 'adicionales', 'titulo','checks', 'incluye', 'recomendacion', 'consejos'));
    }

    public function show_us(){
        $tours = DB::select("SELECT productos_us.id, productos_us.nombre, img_producto.url, precios_us.precio_base FROM rutatayrona.productos_us
        ,rutatayrona.img_producto, rutatayrona.precios_us WHERE img_producto.estado = 2 AND precios_us.id_producto =
        productos_us.id AND img_producto.id_producto = productos_us.id");
    
        return view('tour.tours_us', compact('tours'));
    } 
}
