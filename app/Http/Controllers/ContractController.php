<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contract;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $contrato = Contract::all();
        return view('contratos' , ['contratos' => $contrato ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('contratos-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad = new Contract();

        $cad->title = $request->title;
        $cad->content = $request->content;

        $cad->save();

        return redirect('dashboard/contratos')->with('msg' , 'Cadastrado');
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
    public function edit($id)
    {
        $contrato = Contract::findOrFail($id);

        return view('contratos-update' , ['contrato' => $contrato ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      
        $contrato =  Contract::find($request->id);

        $contrato->title = $request->title;
        $contrato->content = $request->content;

        $contrato->save();

        return redirect('dashboard/contratos')->with('msg' , 'Cadastrado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contract::findOrFail($id)->delete();
        return redirect('dashboard/contratos')->with('msg' , 'Evento Editado com sucesso');
    }
}
