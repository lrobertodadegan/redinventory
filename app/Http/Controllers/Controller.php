<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function setConfig(Request $request){

    }

    public function getConfig(){

        $arquivo = explode(env('APP_NAME'), dirname(__FILE__));
        $arquivo = $arquivo[0] . env('APP_NAME') . '/params';

        if($arquivo[1] == ':')
            $arquivo = str_replace('/','\\', $arquivo);
        else
            $arquivo = str_replace('\\','/',$arquivo);

        $ip          =  null;
        $db          =  null;
        $usuario_db  =  null;
        $senha_db    =  null;
        $rede        =  null;
        $range       =  null;
        $ignore      =  null;
        $usuario_win =  null;
        $senha_win   =  null;
        $usuario_lin =  null;
        $senha_lin   =  null;

        return view('config',[
            'ip_db'      => $ip,
            'db'         => $db,
            'usuario_db' => $usuario_db,
            'senha_db'   => $senha_db,
            'rede'       => $rede,
            'range'      => $range,
            'ignore'     => $ignore,
            'usuario_win'=> $usuario_win,
            'senha_win'  => $senha_win,
            'usuario_lin'=> $usuario_lin,
            'senha_lin'  => $senha_lin,
        ]);
    }
}
