<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportematriculasController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //-----------------------------------------------------------------------------------
        //GRAFICO DE BARRAS VERTICAL
//-----------------------------------------------------------------------------------
$data = \Lava::DataTable();
$data->addDateColumn('Year')
->addNumberColumn('Variable 1')
->addNumberColumn('Variable 2')
->setDateTimeFormat('Y')
->addRow(['2004', 1000, 400])
->addRow(['2005', 1170, 460])
->addRow(['2006', 660, 1120])
->addRow(['2007', 1030, 54]);

\Lava::ColumnChart('Stocks', $data, [
'title' => 'Grafico 1',
'titleTextStyle' => [
'color'    => '#eb6b2c',
'fontSize' => 14
]
]);
\Lava::ColumnChart('Stocks', $data, 'stocks-div');


        return view('admin.reportematriculas.reportematriculas');
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
        //
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
