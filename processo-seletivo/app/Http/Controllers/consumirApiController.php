<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\ConsumirAPI;

class consumirApiController extends Controller
{
    public function index(Request $request){
        $simbolo = $request['simbolo'];

        try{
        $response=Http::get("https://cloud.iexapis.com/stable/stock/{$simbolo}/quote?token=pk_b252f0fb4b6d4f3ea9217007e5ded4b2");
        if($response->json()){
            $symbol=$response['symbol'];
            $companyName=$response['companyName'];
            $latestPrice=$response['latestPrice'];
            $latestTime=$response['latestTime'];
            $iexRealtimePrice=$response['iexRealtimePrice'];

                session()->flash('mensagem', "Feito com sucesso!");

            return view('chamadaApi', ['symbol'=>$symbol,'companyName'=>$companyName,'latestPrice'=>$latestPrice,'latestTime'=>$latestTime, 'iexRealtimePrice'=>$iexRealtimePrice]);
        }else{
            session()->flash('mensagem', "Erro ao efetuar requisição, simbolo não encontrado!");
            return redirect()->route('principal');
        }
        }catch(Exception $e){
            session()->flash('mensagem', "Erro ao efetuar requisição!", $e);
            dd($e);

        }
    }



       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view();
    }

}
