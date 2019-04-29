<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Punishment;
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
        $current_date = date("Y-m-d H:i:00");
        $user = User::where('email',$request->email)->first();
        if(!is_null($user)){
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password]) 
                && $user->attempts < 3 && $user->lock_date <= $current_date && $user->total_attempts != 3)
            {
                $user->attempts = 0;
                $user->total_attempts = 0;
                $user->save();
                $data['estado'] = 'aceptado';
                return $data;
            }else{
                if($user->lock_date <= $current_date){
                    if($user->attempts < 2){
                        $user->attempts = $user->attempts + 1;
                        $user->save();
                        $data['estado'] = 'intentando';
                        $data['user'] = $user;
                        return $data;
                    }else{
                        if($user->total_attempts == 2 || $user->total_attempts == 3){
                            $user->total_attempts = 3;
                            $user->save();
                            $data['estado'] = 'comuniquese';
                            $data['user'] = $user;
                            return $data;
                        }else{
                            if($user->total_attempts < 1){
                                $con = Punishment::first();
                                $date = date("y-m-d H:i:00",strtotime($current_date."+ ".$con->punishment1." minutes"));
                                $user->lock_date = $date;
                                $user->attempts = 0;
                                $user->total_attempts = 1;
                                $user->save();
                                $data['estado'] = 'primero';
                                $data['user'] = $user;
                                return $data;
                            }else{
                                $con = Punishment::first();
                                $date = date("y-m-d H:i:00",strtotime($current_date."+ ".$con->punishment2." minutes"));
                                $user->lock_date = $date;
                                $user->attempts = 0;
                                $user->total_attempts = 2;
                                $user->save();
                                $data['estado'] = 'segundo';
                                $data['user'] = $user;
                                return $data;
                            }
                        }
                    }
                }else{
                    $data['estado'] = 'bloqueado';
                    $data['user'] = $user;
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
