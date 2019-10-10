<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Auth;

class PasswordController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'password_current' => ['required', 'string', 'max:30', 
            function ($attribute, $value, $fail) {
                if (!\Hash::check($value, Auth::user()->password)) {
                    return $fail(__('Senha incorreta'));
                }
            }
            ],
            'password' => ['required', 'confirmed', 'string', 'min:8', 'max:30'],
            ],[
                'password.required' => 'Sua senha não pode ser nula.',
                'password.min' => 'Sua senha não pode conter menos de oito caracteres.',
                'password.max' => 'Sua senha deve conter no maximo 30 caracteres.',
                'password.confirmed' => 'Desculpe, mas a confirmação se difere da senha.',

                'password_current.required' => 'Sua senha não pode ser nula.',
                'password_current.max' => 'Sua senha deve conter no maximo 30 caracteres.',
            ]
        );

        return redirect()->back()->with('success', 'Senha atualizada com sucesso!');
    }
}
