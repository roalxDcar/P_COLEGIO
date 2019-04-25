<?php

namespace App\Http\Controllers\Auth;

use App\Config;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    protected $redirectTo = '/home';

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){    
        // $this->validateForm($request);
        $fecha_actual = date("Y-m-d H:i:00");
        $usuario = User::where('email',$request->email)->first();
        if(!is_null($usuario)){
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password]) 
                && $usuario->intentos < 3 && $usuario->fecha_bloqueo <= $fecha_actual && $usuario->total_intento != 3)
            {
                $usuario->intentos = 0;
                $usuario->total_intento = 0;
                $usuario->save();
                $data['estado'] = 'aceptado';
                return $data;
            }else{
                if($usuario->fecha_bloqueo <= $fecha_actual){
                    if($usuario->intentos < 2){
                        $usuario->intentos = $usuario->intentos + 1;
                        $usuario->save();
                        $data['estado'] = 'intentando';
                        $data['usuario'] = $usuario;
                        return $data;
                    }else{
                        if($usuario->total_intento == 2 || $usuario->total_intento == 3){
                            $usuario->total_intento = 3;
                            $usuario->save();
                            $data['estado'] = 'comuniquese';
                            $data['usuario'] = $usuario;
                            return $data;
                        }else{
                            if($usuario->total_intento < 1){
                                $con = Config::first();
                                $fecha = date("y-m-d H:i:00",strtotime($fecha_actual."+ ".$con->primer_intento." minutes"));
                                $usuario->fecha_bloqueo = $fecha;
                                $usuario->intentos = 0;
                                $usuario->total_intento = 1;
                                $usuario->save();
                                $data['estado'] = 'primero';
                                $data['usuario'] = $usuario;
                                return $data;
                            }else{
                                $con = Config::first();
                                $fecha = date("y-m-d H:i:00",strtotime($fecha_actual."+ ".$con->segundo_intento." minutes"));
                                $usuario->fecha_bloqueo = $fecha;
                                $usuario->intentos = 0;
                                $usuario->total_intento = 2;
                                $usuario->save();
                                $data['estado'] = 'segundo';
                                $data['usuario'] = $usuario;
                                return $data;
                            }
                        }
                    }
                }else{
                    $data['estado'] = 'bloqueado';
                    $data['usuario'] = $usuario;
                    return $data;
                }
            }
        }else{
            $data['estado'] = 'noExiste';
            return $data;
        } 
    }

    public function validateForm($request){
        $this->validate($request,[
            $this->username() => 'required|string',
            'password' => 'required|string' 
        ]);
    }

    public function username(){
        return 'email';
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
