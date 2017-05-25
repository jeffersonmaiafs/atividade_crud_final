<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;
use Portfolio\Products;
use Portfolio\Http\Requests;
use Portfolio\Http\Controllers\Controller;

class ProductsController extends Controller
{
     //atributo privado para a Products
    private $productsModel;
    
    
    //Metodo construtor
    public function __construct(Products $productsModel){
       
       $this->productsModel = $productsModel;
    }
    
    
    public function index(){
       $products = $this->productsModel->all();
       return view('products.index',compact('products'));
    }
    
    public function create(){
    
        //alterei para o uso de noma da rota
//        
        return view('products.create');
    }
    
    public function store(Requests\ProductsRequest $request)
    {
        $input = $request->all();
        $products = $this->productsModel->fill($input);
        $products->save();
        return redirect()->route('products');
    }
    
    public function destroy($id){
        $this->productsModel->find($id)->delete();
        return redirect()->route('products');
    }
    
    public function edit($id){
        
        $products = $this->productsModel->find($id);
        return view('products.edit',compact('products'));
    }
    public function update(Requests\ProductsRequest $request, $id){
        
        $this->productsModel->find($id)->update($request->all());
        return redirect()->route('products');
    } 
}
