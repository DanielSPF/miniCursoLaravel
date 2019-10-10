<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rota do Site
Route::get('/', function () {

    return view('site.index');

})->name('site');

// Grupo de Rotas do Admin
Route::group(['middleware' => ['auth', 'admin'], 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/membros', 'MembersController@index')->name('members');
    Route::get('/administradores', 'ManagersController@index')->name('managers');
    // Perfil
    Route::get('/perfil', 'ProfileController@index')->name('profile');

    Route::put('/perfil', 'ProfileController@update')->name('profile.update');

    Route::put('/password', 'PasswordController@update')->name('password.update');
});

// Grupo de Rotas do Member
Route::group(['middleware' => ['auth', 'member'], 'namespace' => 'Member', 'prefix' => 'member', 'as' => 'member.'], function(){
    
    Route::get('/home', 'HomeController@index')->name('home');
    // Perfil
    Route::get('/perfil', 'ProfileController@index')->name('profile');

});

// Personaliza o menu
// * Não acho necessário criar um controller só pra isso...
Route::post('/colors', function(Illuminate\Http\Request $request){
    
    auth()->user()->menu_back_color = $request->back_color;
    auth()->user()->menu_active_color = $request->active_color;

    $save = auth()->user()->save();
    
    if (!$save) {

        if (auth()->user()->is_admin) {
            return redirect()->route('admin.home')->with('error', 'Ops... Houve um erro ao atualizar as definições!');
        } else {
            return redirect()->route('member.home')->with('error', 'Ops... Houve um erro ao atualizar as definições!');       
        }
    }

    if (auth()->user()->is_admin) {
        return redirect()->route('admin.home')->with('success', 'Definições atualizadas com sucesso!');
    } else {
        return redirect()->route('member.home')->with('success', 'Definições atualizadas com sucesso!');       
    }

})->middleware('auth')->name('chance.colors');

// Rotas da autentificação
Auth::routes();


