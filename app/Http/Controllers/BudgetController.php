<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Budget;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');

        if($search){

            $budget = Budget::where([
                ['name' , 'like' , '%' .$search. '%']
                ])->get();

        }else{
        $budget = Budget::paginate(10);
        return view('orcamento' , ["budget" => $budget]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orcamento-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $budget = new Budget();

        $budget->company = $request->company;
        $budget->name = $request->name;
        $budget->email = $request->email;
        $budget->phone = $request->phone;
        $budget->content = $request->content;
        $budget->price = $request->price;
        $budget->payment_method = $request->payment_method;
        $budget->time = $request->time;
        $budget->data = date("Y-m-d");
        $budget->status = 1;

        $budget->save();

        return redirect('/dashboard/orcamentos')->with('msg' , 'Boa');

        
        dd($request);
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
        $budget = Budget::findOrFail($id);
        return view('orcamento-update' , ["orcamento" => $budget ]);
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
        $budget =  Budget::find($request->id);

        $budget->company = $request->company;
        $budget->name = $request->name;
        $budget->email = $request->email;
        $budget->phone = $request->phone;
        $budget->content = $request->content;
        $budget->price = $request->price;
        $budget->payment_method = $request->payment_method;
        $budget->time = $request->time;
        $budget->data = date("Y-m-d");
        $budget->status = 1;

        $budget->save();

        return redirect('/dashboard/orcamentos')->with('msg' , 'Boa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Budget::findOrFail($id)->delete();
        return redirect('dashboard/orcamentos')->with('msg' , 'Evento Editado com sucesso');
    }
}
