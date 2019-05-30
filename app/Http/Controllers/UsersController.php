<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createUser;
use App\Http\Requests\UpdateUser;
use App\User;
use Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Caffeinated\Shinobi\Models\Role;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createUser $request)
    {
        //logo
            
                $ruta = public_path().'/images/avatar/';
                $imagenOriginal = $request->file('avatar');
                $imagen = Image::make($imagenOriginal);
                $temp_name = time() . '.' . $imagenOriginal->getClientOriginalName();
                $imagen->resize(300,300);
                $imagen->save($ruta.$temp_name, 100);
                Storage::disk('public')->put($temp_name, file_get_contents($imagenOriginal->getRealPath() ) );

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['pwd']);
        $user->avatar = $temp_name;
        $user->save();

        session()->flash('mensaje', 'Usuario creado con éxito!');
        return view('users.create');
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
    public function edit(Request $request)
    {
        $roles = Role::get();
        $user = User::where('id', $request->id)->first();
        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request)
    {
        $user = User::where('id', $request->id)->first();
        //logo
            if ($request->avatar) {
               $ruta = public_path().'/images/avatar/';
                $imagenOriginal = $request->file('avatar');
                $imagen = Image::make($imagenOriginal);
                $temp_name = time() . '.' . $imagenOriginal->getClientOriginalName();
                $imagen->resize(300,300);
                $imagen->save($ruta.$temp_name, 100);
                Storage::disk('public')->put($temp_name, file_get_contents($imagenOriginal->getRealPath() ) );
                $user->avatar = $temp_name;
            }
                

        if ($request->name) {
            $user->name = $request->name;
        }

        if ($request->email) {
            $user->email = $request->email;
        }
        
        if ($request->pwd) {
            $user->password = Hash::make($request['pwd']);
        }
        
        
        
        $user->update();

        

        $user->roles()->sync($request->get('roles'));

        session()->flash('mensaje', 'Usuario actualizado con éxito!');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->delete();
        session()->flash('mensaje', 'Usuario eliminado con éxito!');
        return redirect()->route('users.index');
    }

    // BUSCADOR

        public function buscadorUsuarios(Request $request)
        {
            $nombre = $request->get('buscar');
            $users = User::orderBy('id', 'DESC')
            ->Search($nombre)
            ->paginate(20);
            
            if (!$users) {
                session()->flash('mensaje', 'No se encontraron resultados');
                return redirect()->route('users.index');
            }
            else
            {
            return view('users.index', compact('users'));
            }
        }
}
