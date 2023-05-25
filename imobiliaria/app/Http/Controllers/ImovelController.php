<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Imovel;

class ImovelController extends Controller
{

    public function index(){

        return view('welcome',[]);

    }

    public function locar(){

        return view('imoveis.locar');

    }

    public function verImoveis(){

        $search=request('search');

        if($search){
            $imoveis=Imovel::where(
                [
                    ['titulo','like', '%'.$search.'%']
                ])->get();
        }else{
            $imoveis=Imovel::all();
        }


        return view('imoveis.imoveis',[
            'imoveis' => $imoveis,
            'search' => $search,
        ]);

    }

    public function verImovelUnico($id){

        $imovel=Imovel::findOrFail($id);
        
        return view('imoveis.imovel',[
            'imovel' => $imovel,
        ]);
    }

    public function cadastrarImovel(){

        return view('imoveis.cadastrar');
    
    }

    public function store(Request $request){

        $imovel= new Imovel;
        //lado esquerdo nome da coluna no banco | lado direito name dos inputs na view
        $imovel->titulo = $request->titulo;
        $imovel->val_diaria = $request->valorDiaria;
        $imovel->CEP = $request->cep;
        $imovel->descricao = $request->descricao;
        $imovel->caracteristicas = $request->caracteristicas;
        $imovel->max_pessoas = $request->maximoPessoas;
        $imovel->min_dias = $request->minimoDias;

        $imovel->save();

        return redirect('/')->with('msg','Imovel cadastrado.');
    }


}
