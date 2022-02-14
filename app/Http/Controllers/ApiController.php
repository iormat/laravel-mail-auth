<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;

class ApiController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function apiGetVideogames() {
        $data = Videogame::all();
        return json_encode($data);
    }

    public function apiDeleteVideogame($id) {
        $videogame = Videogame::findOrFail($id);
        $videogame -> delete();
        return json_encode($videogame);
    }

}
