<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Contract;
use App\Models\Invoice;
use Illuminate\Http\Request;

class CustomerController extends Controller
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

            $clientes = Customer::where([
                ['company' , 'like' , '%' .$search. '%']
                ])->get();

        }else{
            $clientes = Customer::orderBy('id' , 'desc')->cursorPaginate(10);
        }
        

        return view('clientes' , ['clientes' => $clientes ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contratos = Contract::all();

        return view('clientes-create' , ['contratos' => $contratos ]);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function invoice(Request $request)
    {
            dd($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();

        $customer->company = $request->company;
        $customer->name = $request->name;
        $customer->cpf = $request->cpf;
        $customer->cnpj = $request->rcnpj;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->cep = $request->cep;
        $customer->street = $request->endereco;
        $customer->number = $request->numero;
        $customer->complement = $request->complemento;
        $customer->counter = $request->bairro;
        $customer->city = $request->cidade;
        $customer->sign = $request->sign;
        $customer->status = 1;
        $customer->product = $request->product;
        $customer->setup = $request->setup;
        $customer->price = $request->price;
        

        $customer->save();

        return redirect('/produtos/auto-center#contrate')->with('msg' , 'Cadastrado');

        dd($request);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAdmin(Request $request)
    {
        $customer = new Customer();

        $customer->company = $request->company;
        $customer->name = $request->name;
        $customer->cpf = $request->cpf;
        $customer->cnpj = $request->rcnpj;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->cep = $request->cep;
        $customer->street = $request->endereco;
        $customer->number = $request->numero;
        $customer->complement = $request->complemento;
        $customer->counter = $request->bairro;
        $customer->city = $request->cidade;
        $customer->sign = $request->sign;
        $customer->status = 1;
        $customer->product = $request->product;
        $customer->setup = $request->setup;
        $customer->price = $request->price;
        $customer->contract = $request->contract;
        $customer->day_payment = $request->day_payment;

        $customer->save();

        return redirect('/dashboard/clientes')->with('msg' , 'Cadastrado');

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
       // $clientes = Customer::where([
        //    ['id' , 'like' , '%' .$id. '%']
        //    ])->get();

        $clientes = Customer::findOrFail($id);

        $invoice = Invoice::where('customer' , $id )->get();
        
        return view('cobranca' , ['clientes' => $clientes , "invoices" => $invoice ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Customer::findOrFail($id);

        $contratos = Contract::all();

        return view('clientes-update' , ['clientes' => $clientes  , 'contratos' => $contratos ]);
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
        $customer = Customer::find($request->id);

        $customer->company = $request->company;
        $customer->name = $request->name;
        $customer->cpf = $request->cpf;
        $customer->cnpj = $request->rcnpj;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->cep = $request->cep;
        $customer->street = $request->endereco;
        $customer->number = $request->numero;
        $customer->complement = $request->complemento;
        $customer->counter = $request->bairro;
        $customer->city = $request->cidade;
        $customer->sign = $request->sign;
        $customer->status = 1;
        $customer->product = $request->product;
        $customer->setup = $request->setup;
        $customer->price = $request->price;
        $customer->day_payment = $request->day_payment;
        

        $customer->save();

        return redirect('/dashboard/clientes')->with('msg' , 'Cadastrado');

        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
