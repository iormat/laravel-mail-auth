<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;
use Illuminate\Support\Facades\Mail;
use App\Mail\DeletedGame;
use Illuminate\Support\Facades\Auth;

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

        Mail::to('test@mail.test') -> send(new DeletedGame($videogame));
        Mail::to(Auth::user() -> email) -> send(new DeletedGame($videogame));
        return json_encode($videogame);
    }

}
