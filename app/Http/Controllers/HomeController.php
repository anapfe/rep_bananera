<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tag;
use \App\Project;
use \App\Product;
use \App;
use \Session;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    //$this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    // dd($request->session()->ajax());
    //filtro de proyectos
    $request->session()->put('tag', $request
    ->has('tag') ? $request->get('tag') : ($request->session()
    ->has('tag') ? $request->session()->get('tag') : ''));

    //comparo el dato traigo por request y el de la DB
    $tag = Tag::where("es_name", "=", $request->session()->get('tag'))->first();
    //se traen todos los nombres para pasarlos por el filtro
    $tags = Tag::orderBy('es_name', 'asc')->get();

    // si tag está vacio, traeme todos los proyectos
    if ($tag != '') {
      $projects = $tag->projects;
    } else {
      $projects = Project::orderBy('year', 'DESC')->get();
    }

    //este bloque está para que si hay una petición ajax solamente vaya a los datos sin toda la info HTML que no es parseable o no es JSONEABLE
    if ($request->ajax()) {
      //va a los datos
      return view('index', compact('tag', 'tags', 'projects'));
    } else {
      // va a la página normal
      return view('ajax', compact('tag', 'tags', 'projects'));
    }
  }

  // cambiar idioma
  public function changeLang($lang)
  {
    Session::put('locale', $lang);
    App::setLocale($lang);
    return redirect()->back();
  }

  //index administrador
  public function indexAdmin()
  {
    return view('indexAdmin');
  }

  public function us() {
    return view('studio');
  }

  // por ahora lo dejamos con mailto
  // public function contactUs() {
  //   return view('contactUs');
  // }

  public function store() {
    $products = Product::all();
    $param = [
      'products' => $products
    ];
    return view('store', $param);
  }
}
