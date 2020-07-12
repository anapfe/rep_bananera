<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tag;
use \App\Project;
use \App\Product;
use \App;
use Session;

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
  public function index()
  {
    $tags = Tag::orderBy('es_name', 'asc')->get();
    $projects = Project::orderBy('year', 'DESC')->get();

    foreach ($projects as $project) {
      $project->etiquetas = "";
      foreach ($project->tags as $key => $tag) {
        if ( $key === 0 ) {
          $project->etiquetas .= $tag->es_name;
        } else {
          $project->etiquetas .= ", " . $tag->es_name;
        }
      }
    }

    $param = [
      'tags' => $tags,
      'projects' => $projects
    ];
    return view('index', $param);
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
