<?php

namespace App\Http\Controllers;

use App\Models\Recepcione;
use Illuminate\Http\Request;

/**
 * Class RecepcioneController
 * @package App\Http\Controllers
 */
class RecepcioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recepciones = Recepcione::paginate();

        return view('recepcione.index', compact('recepciones'))
            ->with('i', (request()->input('page', 1) - 1) * $recepciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recepcione = new Recepcione();
        return view('recepcione.create', compact('recepcione'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Recepcione::$rules);

        $recepcione = Recepcione::create($request->all());

        $recepcione->estado_notificacion = 'PENDIENTE';

        $recepcione->save();

        $recepcione = Recepcione::find($recepcione->$id);

        $recepcione->notify(new FcmNotification());

        return redirect()->route('recepciones.index')
            ->with('success', 'La recepción se ha creado exitosamente!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recepcione = Recepcione::find($id);

        return view('recepcione.show', compact('recepcione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recepcione = Recepcione::find($id);

        return view('recepcione.edit', compact('recepcione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Recepcione $recepcione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recepcione $recepcione)
    {
        request()->validate(Recepcione::$rules);

        $recepcione->update($request->all());

        return redirect()->route('recepciones.index')
            ->with('success', 'La recepción se ha actualizado exitosamente!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recepcione = Recepcione::find($id)->delete();

        return redirect()->route('recepciones.index')
            ->with('success', 'La recepción se ha eliminado exitosamente!');
    }


    
}
