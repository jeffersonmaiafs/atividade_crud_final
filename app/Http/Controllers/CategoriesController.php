<?php
namespace Portfolio\Http\Controllers;
use Illuminate\Http\Request;
use Portfolio\Category;
use Portfolio\Http\Requests;
use Portfolio\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    
    //atributo privado para a categoryModel
    private $categoryModel;
    
    
    //Metodo construtor
    public function __construct(Category $categoryModel){
       
        $this->categoryModel = $categoryModel;
    }
    
    
    public function index(){
       $categories = $this->categoryModel->all();
       return view('categories.index',compact('categories'));
    }
    
    public function create(){
    
        //alterei para o uso de noma da rota
//        return view('categories.create');
        return view('categories.create');
    }
    
    public function store(Requests\CategoryRequest $request)
    {
        $input = $request->all();
        $category = $this->categoryModel->fill($input);
        $category->save();
        return redirect()->route('categories');
    }
    
    public function destroy($id){
        $this->categoryModel->find($id)->delete();
        return redirect()->route('categories');
    }
    
    public function edit($id){
        
        $category = $this->categoryModel->find($id);
        return view('categories.edit',compact('category'));
    }
    public function update(Requests\CategoryRequest $request, $id){
        
        $this->categoryModel->find($id)->update($request->all());
        return redirect()->route('categories');
    } 
}

