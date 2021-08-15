<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use PDF;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('index')->with('productos', $productos);
    }

    //Metodo para generar PDF
    public function createPDF(){
        //Recuperar todos los productos de la db
        $productos = Producto::all();

        view()->share('productos', $productos);
        $pdf = PDF::loadView('index', $productos);

        return $pdf->download('archivo-pdf.pdf');

    }
}
