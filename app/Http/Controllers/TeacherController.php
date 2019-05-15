<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Teachers;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id_rol','=',2)->get();
        $teacher = Teachers::all();

//une en un array
//$datos = ['user' => $user, 'teacher' => $teacher];
//return view('welcome')->with('datos', $datos);

        //dd($user->teachers);
        return view('teachers.index',compact('user','teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->paternal = $request->paternal;
        $user->maternal = $request->maternal;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->ci = $request->ci;
        $user->cellphone = $request->cellphone;
        $user->phone = $request->phone;
        $user->id_rol = 2;
        $user->save();

        $teacher = new Teachers();
        $user = User::where("ci","=",$user->ci)->first();
        //dd($user->iduser);
        $teacher->id_user = $user->iduser;
        $teacher->specialty = $request->speciality;
        $teacher->num_item = $request->numberItem;
        $teacher->cv = $request->cv;
        $teacher->teachercol = $request->teacherSchool;
        $teacher->save();
        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teachers $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit( $teache){
        $user = User::where("iduser","=",$teache)->first();
        $teacher = Teachers::where("id_user","=",$teache)->first();
        //dd($teacher);
        return view('teachers.update',compact('user','teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $teacher)
    {
        //dd($teacher);
        $user = User::find($teacher);
        $user->name = $request->name;
        $user->paternal = $request->paternal;
        $user->maternal = $request->maternal;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->cellphone = $request->cellphone;
        $user->phone = $request->phone;
        $user->update();

        $teacher = Teachers::where("id_user","=",$teacher)->first();
        $teacher->specialty = $request->speciality;
        $teacher->cv = $request->cv;
        $teacher->teachercol = $request->teacherSchool;
        $teacher->update();

        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teachers $teacher)
    {
        $teacher = Teachers::find($teacher)->first();
        $user = User::where('iduser',$teacher->id_user)->first();
        $user->estate = 0;
        $user->update();
        return redirect()->route('teacher.index');
    }
}
