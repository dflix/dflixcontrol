<?php

namespace App\Http\Controllers;

use App\Exports\MarketingExport;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

use App\Models\Marketing;

use Maatwebsite\Excel\Facades\Excel;

class MarketingController extends Controller
{
    public function export() 
    {
        
        return Excel::download(new MarketingExport, 'lista_dflix.xlsx');
        
    }

    public function truncate(){

         Marketing::truncate();
         return redirect('/dashboard/marketing')->with('msg' , 'Boa');
        

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $marketing = Marketing::all();

        return view('marketing' , ["marketing" => $marketing]);
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
        $trata = explode("www.facebook.com+%E2%80%BA+...+%E2%80%BA", $request);
        $i = 0;
        foreach ($trata as $valor) {
            $i++;
            $trata2 = explode("%0D%0AL%", $valor);

        $trata3 = explode("+", $valor);

            $trata3 = str_replace("%28", "", $trata3);
            $trata3 = str_replace("%29", "", $trata3);

            $trata3 = str_replace("-", "", $trata3);
            $trata3 = str_replace(".", "", $trata3);
            $trata3 = str_replace("%", "", $trata3);
            $trata3 = str_replace("A", "", $trata3);
            $trata3 = str_replace("a", "", $trata3);
            $trata3 = str_replace("B", "", $trata3);
            $trata3 = str_replace("b", "", $trata3);
            $trata3 = str_replace("C", "", $trata3);
            $trata3 = str_replace("c", "", $trata3);
            $trata3 = str_replace("D", "", $trata3);
            $trata3 = str_replace("d", "", $trata3);
            $trata3 = str_replace("E", "", $trata3);
            $trata3 = str_replace("e", "", $trata3);
            $trata3 = str_replace("F", "", $trata3);
            $trata3 = str_replace("f", "", $trata3);
            $trata3 = str_replace("G", "", $trata3);
            $trata3 = str_replace("g", "", $trata3);
            $trata3 = str_replace("H", "", $trata3);
            $trata3 = str_replace("h", "", $trata3);
            $trata3 = str_replace("I", "", $trata3);
            $trata3 = str_replace("i", "", $trata3);
            $trata3 = str_replace("J", "", $trata3);
            $trata3 = str_replace("j", "", $trata3);
            $trata3 = str_replace("K", "", $trata3);
            $trata3 = str_replace("k", "", $trata3);
            $trata3 = str_replace("L", "", $trata3);
            $trata3 = str_replace("l", "", $trata3);
            $trata3 = str_replace("M", "", $trata3);
            $trata3 = str_replace("m", "", $trata3);
            $trata3 = str_replace("N", "", $trata3);
            $trata3 = str_replace("n", "", $trata3);
            $trata3 = str_replace("O", "", $trata3);
            $trata3 = str_replace("o", "", $trata3);
            $trata3 = str_replace("P", "", $trata3);
            $trata3 = str_replace("p", "", $trata3);
            $trata3 = str_replace("Q", "", $trata3);
            $trata3 = str_replace("q", "", $trata3);
            $trata3 = str_replace("R", "", $trata3);
            $trata3 = str_replace("r", "", $trata3);
            $trata3 = str_replace("S", "", $trata3);
            $trata3 = str_replace("s", "", $trata3);
            $trata3 = str_replace("T", "", $trata3);
            $trata3 = str_replace("t", "", $trata3);
            $trata3 = str_replace("U", "", $trata3);
            $trata3 = str_replace("u", "", $trata3);
            $trata3 = str_replace("V", "", $trata3);
            $trata3 = str_replace("v", "", $trata3);
            $trata3 = str_replace("X", "", $trata3);
            $trata3 = str_replace("x", "", $trata3);
            $trata3 = str_replace("Y", "", $trata3);
            $trata3 = str_replace("y", "", $trata3);
            $trata3 = str_replace("W", "", $trata3);
            $trata3 = str_replace("w", "", $trata3);
            $trata3 = str_replace("Z", "", $trata3);
            $trata3 = str_replace("z", "", $trata3);

            $novo = implode(',', $trata3);

            $novo = str_replace(",", "", $novo);

            $novo = str_replace("11" , "(11)", $novo);

            if (mb_strpos($novo, "{$request->ddd}9") !== false) {

                $posicao = strpos($novo, "{$request->ddd}9");


              echo "Soma = ".  $somar = $posicao + 4;

              echo "verifica se é 9 =" . $verifica = substr($novo, $somar,1);

              if($verifica == 9){
                $final =  9;
              }else{
                $final =  8; 
              }

               echo "Final = " . $final;

                $telefone = substr($novo, $somar, $final);
              
                echo "<b>Telefone é " . "{$request->ddd}" . $telefone;

                $whatsapp = $request->ddd . $telefone;

              //  echo "<b> WhatsApp é </b> " . $whatsapp;
            }

            $empresa = str_replace("+" , " " , $trata2[0] );

            $cad = new Marketing();
            $cad->name = $empresa;
            $cad->phone = $whatsapp;
            $cad->busca = $request->termo . " " . $request->ddd;

            if($i == 1 || empty($cad->name) || empty($cad->phone)){
                echo "pular isso";
            }else{
                echo "cadastrado";
                $cad->save();
            }
            
            //var_dump( $i , $valor, $empresa , $whatsapp  );
        }
        sleep(5);
        return redirect('/dashboard/marketing')->with('msg' , 'Boa');
        //dd($request );
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
