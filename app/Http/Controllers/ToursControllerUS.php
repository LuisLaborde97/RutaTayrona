<?php

namespace App\Http\Controllers;


use App\Models\Tour;
use APP\Models\img_producto;
use App\Models\Paises;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ToursController extends Controller
{
    public function index_us($id){

        $tour = DB::select("SELECT productos_us.id, productos_us.nombre as nombre_producto, productos_us.descripcion, precios_us.precio_base, adicionales_us.nombre, adicionales_us.precio, img_producto.url FROM rutatayrona.productos, rutatayrona.precios, rutatayrona.adicionales_us, rutatayrona.img_producto WHERE productos.id = '$id' AND productos.id = precios.id_producto AND img_producto.id_producto = '$id' AND img_producto.estado = 3");

        $pais = Paises::all();

        /*$totalIti = DB::select("SELECT * FROM rutatayrona.itinerario WHERE id_producto = '$id' ");*/

        $titulo = DB::select("SELECT itinerario.id, itinerario.dia, itinerario.titulo FROM rutatayrona.itinerario WHERE itinerario.id_producto = '$id'");

        $checks = DB::select("SELECT checks_us.id, checks_us.id_itinerario, checks_us.checks FROM rutatayrona.checks_us, rutatayrona.itinerario WHERE checks_us.id_itinerario
        = itinerario.id AND itinerario.id_producto = '$id'");

        $incluye = DB::select("SELECT incluye FROM rutatayrona.incluye WHERE incluye.id_producto = '$id'");

        

        $adicionales = DB::select("select adicionales_us.id, adicionales_us.nombre, adicionales_us.descripcion, adicionales_us.precio from rutatayrona.adicionales_us WHERE adicionales_us.id_producto = '$id'");

      
        $recomendacion = DB::select("SELECT recomendacion FROM rutatayrona.recomendaciones_us WHERE id_producto = '$id'");

        $consejos = DB::select("SELECT consejo FROM rutatayrona.consejos_us WHERE id_producto = '$id' ");
        
        return view('tour.tour', compact('tour', 'pais', 'adicionales', 'titulo','checks', 'incluye', 'recomendacion', 'consejos'));
    }

    public function show_us(){
        $tours = Producto::join('img_producto','productos.id', 'img_producto.id_producto')
                  ->select('productos.id','nombre', 'url')->where('img_producto.estado', 2)
                  ->get();
    
        return view('tour.tours', compact('tours'));
    } 

}
