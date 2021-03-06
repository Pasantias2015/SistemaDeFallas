<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CrearPersonaRequest;
use App\Http\Controllers\Controller;

use App\Persona;
use Illuminate\Http\Request;
use App\Operador;


class OperadorController extends Controller {

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    // Establecer la cabecera de tipo de contenido - en este caso image/jpeg


        $persona = Persona::find(9);
        header('Content-Type: image/jpg');

// Imprimir la imagen
imagejpeg($persona->foto);
        
        
        
        return view('Operadores.operadores',compact ('operadores'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
                    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CrearPersonaRequest $request)
    {
        $persona = Persona::create($request->all());
        return redirect()->route('home');
        if($request->rol == 'Supervisor')
        {
            $operador = new Operador;
            $operador->persona_id =$persona->id;
            $operador->save();
        }
       
        
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}