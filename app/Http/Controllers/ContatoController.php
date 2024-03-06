<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // print_r($request->input('nome'));
        // echo '<br>';
        // echo $request->input('email');

        /* $contato = new SiteContato();
            $contato->nome = $request->input('Nome');
            $contato->telefone = $request->input('Telefone');
            $contato->email = $request->input('E-mail');
            $contato->motivo_contato = $request->input('motivo_contato');
            $contato->mensagem = $request->input('mensagem');

            print_r($contato->getAttributes());
            if ($contato->nome != '') {
                # code...
                $contato->save();
            } */

            $contato = new SiteContato();
            $contato->fill($request->all());
            print_r($contato->getAttributes());
            if ($request->input('email') != '') {
                # code...
                $contato->save();
            }

       return view('site.contato', ['titulo' => 'contato(site)']);
    }
}
