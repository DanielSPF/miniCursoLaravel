<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class ManagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('is_admin', true)->paginate(10);

        return view('admin.managers', compact('users'));
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
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:1000'],
            'address' => ['string', 'max:255'], 
            'city' => ['string', 'max:100'], 
            'state' => ['string', 'max:100'], 
            'password' => ['required', 'confirmed', 'string', 'min:8', 'max:30'],
            ],[
                'password.required' => 'Sua senha não pode ser nula.',
                'password.min' => 'Sua senha não pode conter menos de oito caracteres.',
                'password.max' => 'Sua senha deve conter no maximo 30 caracteres.',
                'password.confirmed' => 'Desculpe, mas a confirmação se difere da senha.',
                'first_name.required' => 'Por favor insira o primeiro nome.',
                'last_name.required' => 'Por favor insira o segundo nome.',
                'email.required' => 'O endereço de e-mail é obrigatório',
            ]
        );

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = mb_strtoupper($request->state);
        $user->is_admin = TRUE;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success','Cadastro efetuado com sucesso!');
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
        if(Auth::user()->id == $id){
            User::destroy($id);
        }

        return redirect()->route('site');
    }
}
