<?php

namespace splittlogic\plop\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\plop\plop;

class plopController extends Controller
{


  public function index ()
  {

    $content = 'This is splittlogic/plop'; 

    return view('plop::blank', ['content' => $content]);

  }


}
