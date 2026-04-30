<?php

namespace App\Http\Controllers;
use App\Models\UsuariosModel;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
public function mostrar_login() {
        return view('login');
    }

public function loguear_usuario(Request $request)
    {
        $usuario = UsuariosModel::where('email', $request->email)
                                ->where('password', $request->password)
                                ->first();

        if (!$usuario) {
            return back()->with('error', 'Correo o contraseña incorrectos');
        }

        return "Usuario Logueado correctamente"; 
    }

   
public function registrar()
    {
        return view('registrar');
    }

public function registrar_usuario(Request $request)
    {
    $existe = UsuariosModel::where('email', $request->email)->first();

    if ($existe) {
        return back()->with('error', 'Este correo ya está registrado');
    }

    $usuario = new UsuariosModel();
    $usuario->nombre   = $request->name;
    $usuario->email    = $request->email;
    $usuario->password = $request->password;
    $usuario->telefono = $request->telefono;
    $usuario->save();

    return redirect('/login')->with('success', 'Usuario registrado exitosamente');
 }

public function mostrar_cambiar_password()
    {
        return view('cambiarpassword');
    }

public function cambiar_password(Request $request)
    {
        $usuario = UsuariosModel::where('email', $request->email)
                                ->where('password', $request->password_actual)
                                ->first();

        if (!$usuario) {
            return back()->with('error', 'El correo o la contraseña actual son incorrectos');
        }

        if ($request->password_nueva !== $request->password_confirmar) {
            return back()->with('error', 'Las contraseñas nuevas no coinciden');
        }

        $usuario->password = $request->password_nueva;
        $usuario->save();

        return redirect('/login')->with('success', 'Contraseña cambiada exitosamente');
    }

}