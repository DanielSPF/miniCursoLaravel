<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Models\User;

use Auth;



class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('admin.profile', compact('user'));
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
    public function update(Request $request)
    {
        $id = Auth::user()->id;

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:1000', Rule::unique('users')->ignore(Auth::user()->id)],
            'address' => ['string', 'max:255'], 
            'city' => ['string', 'max:100'], 
            'state' => ['string', 'max:100'], 
            ],[
                'first_name.required' => 'Por favor insira o primeiro nome.',
                'last_name.required' => 'Por favor insira o segundo nome.',
                'email.required' => 'O endereço de e-mail é obrigatório',
            ]
        );

        $user = User::where('id', $id)->first();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->about_me = $request->about_me;
        $user->save();

        return redirect()->back()->with('success', 'Dados atualizados com sucesso!');
    }

}
