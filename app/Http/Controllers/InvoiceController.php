<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function entradasCreate()
    {
        return view('entradas-create');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saidasCreate()
    {
        return view('saidas-create');
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function entradas()
    {
        $inicio = request('inicio');
        $fim = request('fim');
        $status = request('status');

       

        if(!empty($inicio)){

         
            $start = $inicio;
            $end = $fim;
    
    
           $invoice = Invoice::whereBetween('day_payment', [$start, $end])->where('mode' , '1')->where('status' , $status)->get();

        }else{

        $start = date('Y-m-1');
        $end = date('Y-m-30');


       $invoice = Invoice::whereBetween('day_payment', [$start, $end])->where('mode' , '1')->get();

    }

       return view('entradas' , ['invoice' => $invoice]);
    }


         /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saidas()
    {
        $inicio = request('inicio');
        $fim = request('fim');
        $status = request('status');

       

        if(!empty($inicio)){

         
            $start = $inicio;
            $end = $fim;
    
    
           $invoice = Invoice::whereBetween('day_payment', [$start, $end])->where('mode' , '0')->where('status' , $status)->get();

        }else{

        $start = date('Y-m-1');
        $end = date('Y-m-30');


       $invoice = Invoice::whereBetween('day_payment', [$start, $end])->where('mode' , '0')->get();

    }

       return view('saidas' , ['invoice' => $invoice]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        //Tipo Parcelas
        if ($request->type == 2) {

            for ($i = 1; $i <= $request->quote; $i++) {

                $conta = $i - 1;

                $vencimento = date('Y-m-d', strtotime("+{$conta} month", strtotime($request->day_payment)));
                echo $i;

                echo "</br>";

                echo $vencimento;

                $agora = date("Y-m-d");

                if ($agora >= $vencimento) {
                    echo  $status = 'paid';
                }

                if ($agora <= $vencimento) {
                    echo  $status = 'unpaid';
                }

                $invoice = new Invoice();

                $invoice->description = $request->description;
                $invoice->price = $request->price;
                $invoice->day_payment = $vencimento;
                $invoice->type = $request->type;
                $invoice->quote = $i;
                $invoice->customer = $request->customer;
                $invoice->mode = $request->mode;
                $invoice->status = $status;

                $invoice->save();
            }
            return redirect("dashboard/clientes/cobranca/$request->customer")->with('msg' . 'boa');

            dd($request);
        }
        //Tipo Unica
        if ($request->type == 1) {

            $agora = date("Y-m-d");

            if ($agora >= $request->day_payment) {
                $status = 'paid';
            }

            if ($agora <= $request->day_payment) {
                $status = 'unpaid';
            }

            $invoice = new Invoice();

            $invoice->description = $request->description;
            $invoice->price = $request->price;
            $invoice->day_payment = $request->day_payment;
            $invoice->type = $request->type;
            $invoice->quote = $request->quote;
            $invoice->customer = $request->customer;
            $invoice->mode = $request->mode;
            $invoice->status = $status;

            $invoice->save();

            return redirect("dashboard/clientes/cobranca/$request->customer")->with('msg' . 'boa');
            dd($request);
        }
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEntradas(Request $request)
    {
        // dd($request);
        //Tipo Parcelas
        if ($request->type == 2) {

            for ($i = 1; $i <= $request->quote; $i++) {

                $conta = $i - 1;

                $vencimento = date('Y-m-d', strtotime("+{$conta} month", strtotime($request->day_payment)));
                echo $i;

                echo "</br>";

                echo $vencimento;

                $agora = date("Y-m-d");

                if ($agora >= $vencimento) {
                    echo  $status = 'paid';
                }

                if ($agora <= $vencimento) {
                    echo  $status = 'unpaid';
                }

                $invoice = new Invoice();

                $invoice->description = $request->description;
                $invoice->price = $request->price;
                $invoice->day_payment = $vencimento;
                $invoice->type = $request->type;
                $invoice->quote = $i;
                $invoice->customer = $request->customer;
                $invoice->mode = $request->mode;
                $invoice->status = $status;

                $invoice->save();
            }
            return redirect("dashboard/entradas")->with('msg' . 'boa');

            dd($request);
        }
        //Tipo Unica
        if ($request->type == 1) {

            $agora = date("Y-m-d");

            if ($agora >= $request->day_payment) {
                $status = 'paid';
            }

            if ($agora <= $request->day_payment) {
                $status = 'unpaid';
            }

            $invoice = new Invoice();

            $invoice->description = $request->description;
            $invoice->price = $request->price;
            $invoice->day_payment = $request->day_payment;
            $invoice->type = $request->type;
            $invoice->quote = $request->quote;
            $invoice->customer = $request->customer;
            $invoice->mode = $request->mode;
            $invoice->status = $status;

            $invoice->save();

            return redirect("dashboard/entradas")->with('msg' . 'boa');
            dd($request);
        }
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSaidas(Request $request)
    {
        // dd($request);
        //Tipo Parcelas
        if ($request->type == 2) {

            for ($i = 1; $i <= $request->quote; $i++) {

                $conta = $i - 1;

                $vencimento = date('Y-m-d', strtotime("+{$conta} month", strtotime($request->day_payment)));
                echo $i;

                echo "</br>";

                echo $vencimento;

                $agora = date("Y-m-d");

                if ($agora >= $vencimento) {
                    echo  $status = 'paid';
                }

                if ($agora <= $vencimento) {
                    echo  $status = 'unpaid';
                }

                $invoice = new Invoice();

                $invoice->description = $request->description;
                $invoice->price = $request->price;
                $invoice->day_payment = $vencimento;
                $invoice->type = $request->type;
                $invoice->quote = $i;
                $invoice->customer = $request->customer;
                $invoice->mode = $request->mode;
                $invoice->status = $status;

                $invoice->save();
            }
            return redirect("dashboard/saidas")->with('msg' . 'boa');

            dd($request);
        }
        //Tipo Unica
        if ($request->type == 1) {

            $agora = date("Y-m-d");

            if ($agora >= $request->day_payment) {
                $status = 'paid';
            }

            if ($agora <= $request->day_payment) {
                $status = 'unpaid';
            }

            $invoice = new Invoice();

            $invoice->description = $request->description;
            $invoice->price = $request->price;
            $invoice->day_payment = $request->day_payment;
            $invoice->type = $request->type;
            $invoice->quote = $request->quote;
            $invoice->customer = $request->customer;
            $invoice->mode = $request->mode;
            $invoice->status = $status;

            $invoice->save();

            return redirect("dashboard/saidas")->with('msg' . 'boa');
            dd($request);
        }
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
        $invoice = Invoice::findOrFail($id);

        return view('cobranca-update', ['invoice' => $invoice]);
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editEntradas($id)
    {
        $invoice = Invoice::findOrFail($id);

        return view('entradas-update', ['invoice' => $invoice]);
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSaidas($id)
    {
        $invoice = Invoice::findOrFail($id);

        return view('saidas-update', ['invoice' => $invoice]);
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
        $invoice =  Invoice::find($request->id);

        $invoice->description = $request->description;
        $invoice->price = $request->price;
        $invoice->day_payment = $request->day_payment;
        $invoice->type = $request->type;
        $invoice->quote = $request->quote;
        $invoice->status = $request->status;
        $invoice->customer = $request->customer;
        $invoice->mode = $request->mode;

        $invoice->save();

        return redirect("dashboard/clientes/cobranca/update/$request->id");
        dd($request);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateEntradas(Request $request)
    {
        $invoice =  Invoice::find($request->id);

        $invoice->description = $request->description;
        $invoice->price = $request->price;
        $invoice->day_payment = $request->day_payment;
        $invoice->type = $request->type;
        $invoice->quote = $request->quote;
        $invoice->status = $request->status;
        $invoice->customer = $request->customer;
        $invoice->mode = $request->mode;

        $invoice->save();

        return redirect("dashboard/entradas");
        dd($request);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSaidas(Request $request)
    {
        $invoice =  Invoice::find($request->id);

        $invoice->description = $request->description;
        $invoice->price = $request->price;
        $invoice->day_payment = $request->day_payment;
        $invoice->type = $request->type;
        $invoice->quote = $request->quote;
        $invoice->status = $request->status;
        $invoice->customer = $request->customer;
        $invoice->mode = $request->mode;

        $invoice->save();

        return redirect("dashboard/saidas");
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

        Invoice::findOrFail($id)->delete();
        return redirect('dashboard/clientes')->with('msg', 'Evento Editado com sucesso');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyEntradas($id)
    {

        Invoice::findOrFail($id)->delete();
        return redirect('dashboard/entradas')->with('msg', 'Entrada removido com sucesso');
    }

         /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroySaidas($id)
    {

        Invoice::findOrFail($id)->delete();
        return redirect('dashboard/saidas')->with('msg', 'Entrada removido com sucesso');
    }
}
