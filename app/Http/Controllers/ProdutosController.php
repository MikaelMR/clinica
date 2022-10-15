<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    private $produtos = [
        [
            'nome' => 'Processador Intel I9',
            'categoria' => 'Informática',
            'preco' => 1899.90,
            'novo' => true,
            'promocao' => false
        ],
        [
            'nome' => 'Guitarra Fender Stratocaster',
            'categoria' => 'Instrumentos musicais',
            'preco' => 9899.90,
            'novo' => true,
            'promocao' => false
        ],
        [
            'nome' => 'TV Sony 59"',
            'categoria' => 'Eletrônicos',
            'preco' =>  2499.90,
            'novo' => true,
            'promocao' => true
        ],
        [
            'nome' => 'Soundbar LG XPTO',
            'categoria' => 'Eletrônicos',
            'preco' =>  899.90,
            'novo' => true,
            'promocao' => true
        ],
        [
            'nome' => 'Processador AMD Ryzen 3',
            'categoria' => 'Informática',
            'preco' => 399.90,
            'novo' => false,
            'promocao' => false
        ],
        [
            'nome' => 'iPhone 8 - 64GB',
            'categoria' => 'Celulares',
            'preco' =>  1899.90,
            'novo' => false,
            'promocao' => false
        ],
        [
            'nome' => 'Smartphone Samsung Galaxy S20',
            'categoria' => 'Celulares',
            'preco' =>  1299.90,
            'novo' => false,
            'promocao' => true
        ]
    ];

    public function index()
    {
        $produtos = array_filter($this->produtos);

        return view('main', ['produtos' => $produtos]);
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
