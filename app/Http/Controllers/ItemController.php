<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearItemRequest;
use App\Http\Requests\EditarItemRequest;
use App\Item;
use App\Mantenimiento;
use Illuminate\Http\Request;

class ItemController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mantenimientos = Mantenimiento::all();
		$items = Item::paginate(5);
        return view('Items.crear',compact('items','mantenimientos'));
	}

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
	public function store(CrearItemRequest $request)
	{
		$item = Item::create($request->all());
		$mantenimientos = Mantenimiento::all();
		$items = Item::paginate(5);
        return view('Items.crear',compact('items','mantenimientos'));
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
		$item = Item::findOrFail($id);
        return view('Items.editar',compact('item'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarItemRequest $request,$id)
	{
		$item = Item::findOrFail($id);
        $item->fill($request->all());
        $item->save();
        return redirect('items');
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
