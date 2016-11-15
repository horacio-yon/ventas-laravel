<?php

namespace sisVenta\Http\Controllers;

use Illuminate\Http\Request;

use sisVenta\Http\Requests;

use sisVenta\User;
use Illuminate\Support\Facades\Redirect;
use sisVenta\Http\Requests\UsuarioFormRequest;
use sisVenta\Http\Requests\EditUserRequest;
use DB;
class UsuarioController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if($request)
    	{
    		$query=trim($request->get('searchText'));
    		$usuarios =DB::table('users')->where('name','LIKE','%'.$query.'%')
    				   ->orderBy('id','desc')
    				   ->paginate(7);

    		return view('seguridad.usuario.index',["usuarios"=>$usuarios,'searchText'=>$query]);
    	}
    }

    public function create()
    {
    	return view("seguridad.usuario.create");
    }

    public function store(UsuarioFormRequest $request)
    {
    	$usuario= new User();
    	$usuario->fill($request->all());
    	$usuario->save();

    	return Redirect::to('seguridad/usuario');
    }

    public function edit($id)
    {
    	return  view("seguridad.usuario.edit",["usuario"=>User::findOrFail($id)]);
    }

    public function update(EditUserRequest $request,$id)

    {
    	$usuario= User::findOrFail($id);

        $usuario->fill($request->all());
    	$usuario->save();

    	return Redirect::to('seguridad/usuario');

    }

    public function destroy($id)
    {
    	$usuario = DB::table('users')->where('id','=',$id)->delete();

    	return Redirect::to('seguridad/usuario');
    }

}
