<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
        //echo "A somsa de $p1 + $p2:". ($p1+$p2);

        //Array associativo 
        // return view('site.teste', ['p1'=> $p1, 'p2' => $p2]);

        //Método compact
        // return view('site.teste', compact('p1', 'p2'));

        //Método with
        return view('site.teste')->with('xyz', $p1)->with('zzz', $p2);
    }
}
