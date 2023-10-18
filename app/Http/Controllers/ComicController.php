<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    //
}

class ComicController extends Controller
{
  public function index()
  {
    $comicsj = Comic::all();
    return view('comic.index', compact('houses'));
  }
}