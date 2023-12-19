<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class HomeController extends Controller
{
    public readonly Produto $produto;
    
    public function __construct(){
        $this->produto = new Produto();
    }


    public function index(){
        $produtos = new Produto();

        $produtos = $this->produto->all();
        return view('produto', ['produtos' => $produtos]);
    }
}
