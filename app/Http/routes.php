<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

/* * ******    RESPONDENDO A QUESTÃO DO MÓDULO 3 SOBRE ROTAS * * * * * * * * */
//
/* Criação das rotas
  Agora que você já possui os dois models criados, crie as rotas necessárias para que possamos realizar um CRUD em cada model.
  Para facilitar a administração do arquivo de rotas, as mesmas deverão ser totalmente agrupadas pelo prefixo: admin e pelo seu próprio model.
  Exemplo: admin/products, admin/categories
  OBS: Enquanto nem todos os controllers e actions ainda não estão definidos, aponte as rotas para um controller e action qualquer.
  OBS 2: Todas as rotas devem possuir nome e seus parâmetros devem ser validados.
 */

/*
 *          +  +  + PROFESSOR TIVE UMA DÚVIDA + + + + 
 *      Quando utilizo o name route(coloco um apelido com o 'as') tive dúvidas
 *      porque quando utilizo o parâmetro Route::get('categoriagerais/{id?}'
 *      No exemplo da aula não vi nenhum teste com parametros e o "as"
 *      na hora de criar a rota coloca no as com ou sem parâmetros, exemplo:
 *      assim: 'categoriagerais/{id?}',['as'=>'categorias',...
 * 
 *   ou assim: 'categoriagerais/{id?}',['as'=>'categorias/{id?}',...
 *      
 *       OBS: FAVOR ME REPORTAR OS ERROS PARA QUE EU APRENDA, OBRIGADO.
 * 
 *  */

//// INICIO
//
//Route::pattern('id', '[0-9]+');
//Route::group(['prefix' =>'admin'], function(){
//    Route::get('categoriagerais/{id?}',['as'=>'categorias', function($id = null) {
//        if ($id) {
//            $category = new \Portfolio\Category();
//            $c = $category->find($id);
//            echo("<br/><br/>");
//            return $c->name;
//        } else {
//            return "<br/>Não possui ID.<br/>";
//        }
//    }]);
//   echo(route('categorias'));
//   echo("<br/><br/>");
//    
//    Route::get('produtosgerais/{id?}',['as'=>'produtos',function($id = null) {
//        if ($id) {
//            $products = new \Portfolio\Products();
//            $p = $products->find($id);
//            echo("<br/><br/>");
//            return $p->name;
//        } else {
//            return "<br/>Não possui ID.<br/>";
//        }
//    }]);
//   echo("<br/><br/>"); 
//   echo(route('produtos'));
//
//  
//});

//FIM
/********ROTAS DAS CATEGORIAS ***********/
Route::get('categories', ['as'=>'categories','uses'=>'CategoriesController@index']);
Route::post('categories', ['as'=>'categories.store','uses'=>'CategoriesController@store']);
Route::get('categories/create', ['as'=>'categories.create','uses'=>'CategoriesController@create']);
Route::get('categories/{id}/destroy', ['as'=>'categories.destroy','uses'=>'CategoriesController@destroy']);
Route::put('categories/{id}/update', ['as'=>'categories.update','uses'=>'CategoriesController@update']);
Route::get('categories/{id}/edit', ['as'=>'categories.edit','uses'=>'CategoriesController@edit']);
/* FIM DAS ROTAS CATEGORIAS   */


/******** INICIO DAS ROTAS PRODUCTS *****/
Route::get('products', ['as'=>'products','uses'=>'ProductsController@index']);
Route::post('products', ['as'=>'products.store','uses'=>'ProductsController@store']);
Route::get('products/create', ['as'=>'products.create','uses'=>'ProductsController@create']);
Route::get('products/{id}/destroy', ['as'=>'products.destroy','uses'=>'ProductsController@destroy']);
Route::put('products/{id}/update', ['as'=>'products.update','uses'=>'ProductsController@update']);
Route::get('products/{id}/edit', ['as'=>'products.edit','uses'=>'ProductsController@edit']);
/******** FIM DAS ROTAS PRODUCTS *****/


//Route::get('categories', 'CategoriesController@index');


//Route::get('categories/create', 'CategoriesController@create');

//Route::post('categories', 'CategoriesController@store');



//Route::get('categorias', 'AdminCategoriesController@consulta');

//Testando este no momento
Route::get('exemplo', 'WelcomeController@exemplo');

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'EcommerceController@index');

//Direciona para o index através do caminho localhost:8000/admin/categories
Route::get('admin/categories', 'AdminCategoriesController@index');

//Direciona para o index através do caminho localhost:8000/admin/categories
Route::get('admin/products', 'AdminProductsController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);




