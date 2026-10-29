<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $descricao;
    public $marca;
    public $categoria;
    public $preco_custo;
    public $preco_venda;
    public $quantidade;
    public $estoque;
    public $validade;

    public function store(){
        $produto = Produto::create([
            'nome' => $this->nome,
            'descricao' =>$this->descricao,
            'marca' =>$this->marca,
            'categoria' =>$this->categoria,
            'preco_custo' =>$this->preco_custo,
            'preco_venda' =>$this->preco_venda,
            'quantidade' =>$this->quantidade,
            'estoque' =>$this->estoque,
            'validade' =>$this->validade,

            session()->flash('Cadastrado com sucesso!')
        ]);
    }

    public function render()
    {
        return view('livewire.produto-create');
    }
}
