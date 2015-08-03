<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CrearServicioRequest;
use App\Http\Requests\EditarServicioRequest;
use App\Http\Controllers\Controller;
use App\Servicio;

use Illuminate\Http\Request;

class ServicioController extends Controller {

<<<<<<< HEAD
    public function __construct()
    {
        $this->middleware('auth');
    }
=======
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
		$servicios = Servicio::paginate(5);
		
		return view('Servicios\Servicio.crear',compact('servicios'));		

	}
>>>>>>> b4a00a98088474016041f640610e8a4853dc812c

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $servicios = Servicio::paginate(5);

<<<<<<< HEAD
        return view('Servicios\Servicio.crear',compact('servicios'));        
=======
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CrearServicioRequest $request)
	{
		$servicio = Servicio::create($request->all());
		return view('home');
	}
>>>>>>> b4a00a98088474016041f640610e8a4853dc812c

    }

<<<<<<< HEAD
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CrearServicioRequest $request)
    {
        $servicio = Servicio::create($request->all());
        return view('home');
    }
=======
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$servicio = Servicio::findOrFail($id);
        return view('Servicios\Servicio.editar',compact('servicio'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarServicioRequest $request,$id)
	{
		$servicio = Servicio::findOrFail($id);
        $servicio->fill($request->all());
        $servicio->save();
        return redirect('servicios');
	}
>>>>>>> b4a00a98088474016041f640610e8a4853dc812c

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
        $servicio = Servicio::findOrFail($id);
       return view('Servicios\Servicio.editar',compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(EditarServicioRequest $request,$id)
    {
       $servicio = Servicio::findOrFail($id);
       $servicio->fill($request->all());
       $servicio->save();
       return redirect('servicios');
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
