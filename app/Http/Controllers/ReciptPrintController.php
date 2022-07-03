<?php

namespace App\Http\Controllers;

use App\Models\ReciptPrint;
use App\Http\Requests\StoreReciptPrintRequest;
use App\Http\Requests\UpdateReciptPrintRequest;


require __DIR__ . '.\vendor\autoload.php';
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;

class ReciptPrintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //

$connector = new FilePrintConnector("php://stdout");
$printer = new Printer($connector);
$printer -> text("Hello World!\n");
$printer -> cut();
$printer -> close();

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
     * @param  \App\Http\Requests\StoreReciptPrintRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReciptPrintRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReciptPrint  $reciptPrint
     * @return \Illuminate\Http\Response
     */
    public function show(ReciptPrint $reciptPrint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReciptPrint  $reciptPrint
     * @return \Illuminate\Http\Response
     */
    public function edit(ReciptPrint $reciptPrint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReciptPrintRequest  $request
     * @param  \App\Models\ReciptPrint  $reciptPrint
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReciptPrintRequest $request, ReciptPrint $reciptPrint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReciptPrint  $reciptPrint
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReciptPrint $reciptPrint)
    {
        //
    }
}
