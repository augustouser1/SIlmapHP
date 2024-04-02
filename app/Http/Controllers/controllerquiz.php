<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerquiz extends Controller
{
    private $perguntas = array();

    public function __construct(){
        $this->perguntas['pagina1'] = 'D';
        $this->perguntas['pagina2'] = 'C';
        $this->perguntas['pagina3'] = 'B';
        $this->perguntas['pagina4'] = 'A';
        $this->perguntas['pagina5'] = 'A';
        $this->perguntas['pagina6'] = 'B';
        $this->perguntas['pagina7'] = 'D';
        $this->perguntas['pagina8'] = 'A';
    }

    public function index(){
        session(['acertos' => 0]);
        return view('pagina1');
    }

    public function dadosPagina1(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta1' => $resposta]);

        if(strcmp($this->perguntas['pergunta1'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => 'acertos']);
            session(['resultado1'=> 'Acertou']);
        }else
            session(['resultado1' => 'Errou']);
        
        return view('pagina2');
    }

    public function dadosPagina2(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta2' => $resposta]);

        if(strcmp($this->perguntas['pergunta2'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => 'acertos']);
            session(['resultado2'=> 'Acertou']);
        }else
            session(['resultado2' => 'Errou']);
        
        return view('pagina3');
    }

    public function dadosPagina3(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta3' => $resposta]);

        if(strcmp($this->perguntas['pergunta3'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => 'acertos']);
            session(['resultado3'=> 'Acertou']);
        }else
            session(['resultado3' => 'Errou']);
        
        return view('pagina4');
    }

    public function dadosPagina4(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta4' => $resposta]);

        if(strcmp($this->perguntas['pergunta4'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => 'acertos']);
            session(['resultado4'=> 'Acertou']);
        }else
            session(['resultado4' => 'Errou']);
        
        return view('pagina5');
    }

    public function dadosPagina5(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta5' => $resposta]);

        if(strcmp($this->perguntas['pergunta5'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => 'acertos']);
            session(['resultado5'=> 'Acertou']);
        }else
            session(['resultado5' => 'Errou']);
        
        return view('pagina6');
    }

    public function dadosPagina6(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta6' => $resposta]);

        if(strcmp($this->perguntas['pergunta6'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => 'acertos']);
            session(['resultado6'=> 'Acertou']);
        }else
            session(['resultado6' => 'Errou']);
        
        return view('pagina7');
    }

    public function dadosPagina7(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta7' => $resposta]);

        if(strcmp($this->perguntas['pergunta7'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => 'acertos']);
            session(['resultado7'=> 'Acertou']);
        }else
            session(['resultado7' => 'Errou']);
        
        return view('pagina8');
    }

    public function dadosPagina8(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta8' => $resposta]);

        if(strcmp($this->perguntas['pergunta8'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => 'acertos']);
            session(['resultado8'=> 'Acertou']);
        }else
            session(['resultado8' => 'Errou']);
        
        $dados= array();

        $dados[1]['gabarito'] = $this->perguntas['pergunta1'];
        $dados[1]['resposta'] = session('resposta1');
        $dados[1]['resultado'] = session('resultado1');

        $dados[2]['gabarito'] = $this->perguntas['pergunta2'];
        $dados[2]['resposta'] = session('resposta2');
        $dados[2]['resultado'] = session('resultado2');
      
        
        $dados[3]['gabarito'] = $this->perguntas['pergunta3'];
        $dados[3]['resposta'] = session('resposta3');
        $dados[3]['resultado'] = session('resultado3');

        $dados[4]['gabarito'] = $this->perguntas['pergunta4'];
        $dados[4]['resposta'] = session('resposta4');
        $dados[4]['resultado'] = session('resultado4');
      
        $dados[5]['gabarito'] = $this->perguntas['pergunta5'];
        $dados[5]['resposta'] = session('resposta5');
        $dados[5]['resultado'] = session('resultado5');
      
        $dados[6]['gabarito'] = $this->perguntas['pergunta6'];
        $dados[6]['resposta'] = session('resposta6');
        $dados[6]['resultado'] = session('resultado6');

        $dados1[7]['gabarito'] = $this->perguntas['pergunta7'];
        $dados[7]['resposta'] = session('resposta7');
        $dados[7]['resultado'] = session('resultado7');
      
        $dados1[8]['gabarito'] = $this->perguntas['pergunta8'];
        $dados[8]['resposta'] = session('resposta8');
        $dados[8]['resultado'] = session('resultado8');

        $acertos = session('acertos');

        if($acertos == 10)
             $dados['mensagem'] = "Fantástico, você é o próprio Tolkien, você acertou" . $acertos  ." de 10";
        else if($acertos > 7)
             $dados['mensagem'] = "Top, quase indo pra valinor,você acertou" . $acertos  ." de 10";
        else if($acertos > 5)
             $dados['mensagem'] = "Mais ou menos, um mortal acima da média, você acertou" . $acertos  ." de 10";
        else if($acertos ==5) 
             $dados['mensagem'] = "Médio como a terra média, você acertou" . $acertos  ." de 10";
        else 
             $dados['mensagem'] = "Precisa conhecer mais sobre o universo de Tolkien, você acertou" . $acertos  ." de 10";
             
             return view('resultado', compact('dados'));
    
    }

    
    
}


