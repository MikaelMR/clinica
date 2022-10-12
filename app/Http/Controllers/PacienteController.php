<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function CalcularIMC($nome, $peso, $altura, $sexo){
        $sexo = strtolower($sexo);
        $nome = ucfirst($nome);

        if(is_numeric($peso) && is_numeric($altura)){
            $imcv = $peso / ($altura * $altura);
        }else{
            return "Informe apenas valores válidos.";
        }

        if($sexo == 'masculino'){
            $abreviacao = "Sr.";
        }elseif($sexo == 'feminino'){
            $abreviacao = "Sra.";
        }else{
            return "Informe apenas valores válidos.";
        }

        $imcf = number_format($imcv,1);
        if ($imcv < 18.5) {
            $resultado = "Olá $abreviacao $nome, seu IMC é $imcf. Você está abaixo do peso, e pode experienciar fadiga, stress e ansiedade.";
        }elseif ($imcv >= 18.5 && $imcv <= 24.9) {
                $resultado = "Olá $abreviacao $nome, seu IMC é $imcf. Você está no peso normal.";
        }elseif ($imcv >= 25 && $imcv <= 29.9)
            $resultado = "Olá $abreviacao $nome, seu IMC é $imcf. Você está sobrepeso, e é susceptível a fadiga, má circulação e varizes.";
        elseif ($imcv >= 30 && $imcv <= 34.9) {
            $resultado = "Olá $abreviacao $nome, seu IMC é $imcf. Você tem Obesidade de grau I, e é susceptível a diabetes, angina, infarto e aterosclerose.";
        }elseif ($imcv >= 35 && $imcv <= 40) {
            $resultado = "Olá $abreviacao $nome, seu IMC é $imcf. Você tem Obesidade de grau II, e pode experienciar apneia do sono e falta de ar.";
        }elseif ($imcv > 40) {
            $resultado = "Olá $abreviacao $nome, seu IMC é $imcf. Você tem Obesidade de grau III, e é susceptível a refluxo, dificuldade para se mover, escaras, diabetes, infarto e AVC.";
        }else {
            return "Informe apenas valores válidos.";
        }

        return view('imc', compact('resultado','imcf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
