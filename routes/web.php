<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\ShapeController;
use App\Models\Invoice;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [EventController::class, 'home']);

Route::post('/produtos/auto-center/cad' , [CustomerController::class , 'store']);

Route::get('/produtos/auto-center', [EventController::class, 'autocenter']);

Route::get('/produtos', [EventController::class, 'produtos']);

Route::get('/videos', [EventController::class, 'videos']);

Route::get('/contato', [EventController::class, 'contato']);

Route::post('/formulario' , [ FormController::class , 'store'] );

Route::get('/sair' , [EventController::class , 'sair']);



Route::get('/dashboard/contatos' , [ShapeController::class , 'index']);

Route::get('dashboard/contratos' , [ContractController::class , 'index']);

Route::get('dashboard/contratos/create' , [ContractController::class , 'create']);

Route::post('dashboard/contratos/store' , [ContractController::class , 'store']);

Route::put('dashboard/contratos/update' , [ContractController::class , 'update']);

Route::get('dashboard/contratos/update/{id}' , [ContractController::class , 'edit']);

Route::get('dashboard/contratos/destroy/{id}' , [ContractController::class , 'destroy']);



Route::put('dashboard/orcamentos/update' , [BudgetController::class , 'update']);

Route::get('dashboard/orcamentos/update/{id}' , [BudgetController::class , 'edit']);

Route::get('dashboard/orcamentos/destroy/{id}' , [BudgetController::class , 'destroy']);

Route::get('dashboard/orcamentos/create' , [BudgetController::class , 'create']);

Route::post('dashboard/orcamentos/store' , [BudgetController::class , 'store']);

Route::get('dashboard/orcamentos' , [BudgetController::class , 'index']);


Route::get('dashboard/clientes' , [CustomerController::class , 'index']);

Route::get('dashboard/clientes/create' , [CustomerController::class , 'create']);

Route::post('dashboard/clientes/store' , [CustomerController::class , 'storeAdmin']);

Route::put('/dashboard/clientes/update' , [CustomerController::class , 'update']);

Route::get('/dashboard/clientes/update/{id}' , [CustomerController::class , 'edit']);



Route::get('dashboard/clientes/cobranca/{id}' , [CustomerController::class , 'show']);

Route::post('dashboard/clientes/cobranca/store' , [InvoiceController::class , 'store']);

Route::put('dashboard/clientes/cobranca/update/' , [InvoiceController::class , 'update']);

Route::get('dashboard/clientes/cobranca/update/{id}' , [InvoiceController::class , 'edit']);

Route::get('dashboard/clientes/cobranca/destroy/{id}' , [InvoiceController::class , 'destroy']);


Route::get('dashboard/entradas' , [InvoiceController::class , 'entradas']);

Route::get('dashboard/entradas/create' , [InvoiceController::class , 'entradasCreate']);

Route::post('dashboard/entradas/store' , [InvoiceController::class , 'storeEntradas']);

Route::get('dashboard/entradas/update/{id}' , [InvoiceController::class , 'editEntradas']);

Route::get('dashboard/entradas/destroy/{id}' , [InvoiceController::class , 'destroyEntradas']);

Route::put('dashboard/entradas/update' , [InvoiceController::class , 'updateEntradas']);




Route::get('dashboard/saidas' , [InvoiceController::class , 'saidas']);

Route::get('dashboard/saidas/create' , [InvoiceController::class , 'saidasCreate']);

Route::post('dashboard/saidas/store' , [InvoiceController::class , 'storeSaidas']);

Route::get('dashboard/saidas/update/{id}' , [InvoiceController::class , 'editSaidas']);

Route::get('dashboard/saidas/destroy/{id}' , [InvoiceController::class , 'destroySaidas']);

Route::put('dashboard/saidas/update' , [InvoiceController::class , 'updateSaidas']);








Route::post('dashboard/marketing/store' , [MarketingController::class , 'store']);

Route::get('dashboard/marketing' , [MarketingController::class , 'index']);

Route::get('dashboard/excel' , [MarketingController::class , 'export'])->name('excel');

Route::get('dashboard/truncate' , [MarketingController::class , 'truncate'])->name('truncate');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('panel');
    })->name('dashboard');
});
