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

/* * ******    RESPONDENDO A QUEST�O DO M�DULO 3 SOBRE ROTAS * * * * * * * * */
//
/* Cria��o das rotas
  Agora que voc� j� possui os dois models criados, crie as rotas necess�rias para que possamos realizar um CRUD em cada model.
  Para facilitar a administra��o do arquivo de rotas, as mesmas dever�o ser totalmente agrupadas pelo prefixo: admin e pelo seu pr�prio model.
  Exemplo: admin/products, admin/categories
  OBS: Enquanto nem todos os controllers e actions ainda n�o est�o definidos, aponte as rotas para um controller e action qualquer.
  OBS 2: Todas as rotas devem possuir nome e seus par�metros devem ser validados.
 */

/*
 *          +  +  + PROFESSOR TIVE UMA D�VIDA + + + + 
 *      Quando utilizo o name route(coloco um apelido com o 'as') tive d�vidas
 *      porque quando utilizo o par�metro Route::get('categoriagerais/{id?}'
 *      No exemplo da aula n�o vi nenhum teste com parametros e o "as"
 *      na hora de criar a rota coloca no as com ou sem par�metros, exemplo:
 *      assim: 'categoriagerais/{id?}',['as'=>'categorias',...
 * 
 *   ou assim: 'categoriagerais/{id?}',['as'=>'categorias/{id?}',...
 *      
 *       OBS: FAVOR ME REPORTAR OS ERROS PARA QUE EU APRENDA, OBRIGADO.
 * 
 *  */

// INICIO

Route::pattern('id', '[0-9]+');
Route::group(['prefix' =>'admin'], function(){
    Route::get('categoriagerais/{id?}',['as'=>'categorias', function($id = null) {
        if ($id) {
            $category = new \Portfolio\Category();
            $c = $category->find($id);
            echo("<br/><br/>");
            return $c->name;
        } else {
            return "<br/>N�o possui ID.<br/>";
        }
    }]);
   echo(route('categorias'));
   echo("<br/><br/>");
    
    Route::get('produtosgerais/{id?}',['as'=>'produtos',function($id = null) {
        if ($id) {
            $products = new \Portfolio\Products();
            $p = $products->find($id);
            echo("<br/><br/>");
            return $p->name;
        } else {
            return "<br/>N�o possui ID.<br/>";
        }
    }]);
   echo("<br/><br/>"); 
   echo(route('produtos'));

  
});

//FIM

//Route::get('categorias', 'AdminCategoriesController@consulta');

//Testando este no momento
Route::get('exemplo', 'WelcomeController@exemplo');

Route::get('/', 'WelcomeController@index');

//Direciona para o index atrav�s do caminho localhost:8000/admin/categories
Route::get('admin/categories', 'AdminCategoriesController@index');

//Direciona para o index atrav�s do caminho localhost:8000/admin/categories
Route::get('admin/products', 'AdminProductsController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);




