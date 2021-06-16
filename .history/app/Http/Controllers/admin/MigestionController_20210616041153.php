<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MigestionController extends Controller
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
        //GRAFICO DE LINEAS
//-----------------------------------------------------------------------------------
        
        $data = \Lava::DataTable();
        $data->addDateColumn('Fecha')
             ->addNumberColumn('proyeccion 1')
             ->addNumberColumn('proyeccion 2'); 

        // Random Data For Example
        for ($a = 1; $a < 30; $a++) {
            $rowData = [
              "2017-4-$a", rand(800,1000), rand(800,1000)
            ];
            $data->addRow($rowData);
        }
        \Lava::LineChart('Stocks', $data, [
            'title' => 'Grafico 1',
            'animation' => [
                'startup' => true,
                'easing' => 'inAndOut'
            ],
            'colors' => ['blue', '#F4C1D8']
        ]);
        \Lava::LineChart('Stocks', $data, 'stocks-div');
//-----------------------------------------------------------------------------------
        //GRAFICO DE PASTEL
//-----------------------------------------------------------------------------------
        $data2 = \Lava::DataTable();
        $data2->addStringColumn('variables')
        ->addNumberColumn('Percent')
        ->addRow(['variable 1', 8])
        ->addRow(['variable 2', 42])
        ->addRow(['variable 3', 21])
        ->addRow(['variable 4', 29]);

        \Lava::DonutChart('Stocks2', $data2, [
            'title' => 'Grafico 3'
        ]);
        \Lava::DonutChart('Stocks2', $data2, 'stocks2-div');

//-----------------------------------------------------------------------------------
        //GRAFICO DE BARRAS VERTICAL
//-----------------------------------------------------------------------------------
        $data3 = \Lava::DataTable();
        $data3->->addDateColumn('Year')
        ->addNumberColumn('Sales')
        ->addNumberColumn('Expenses')
        ->setDateTimeFormat('Y')
        ->addRow(['2004', 1000, 400])
        ->addRow(['2005', 1170, 460])
        ->addRow(['2006', 660, 1120])
        ->addRow(['2007', 1030, 54]);

    $lava->ColumnChart('Stocks3', $data3, [
   'title' => 'Company Performance',
   'titleTextStyle' => [
       'color'    => '#eb6b2c',
       'fontSize' => 14
    ]
    ]);
    \Lava::DonutChart('Stocks2', $data2, 'stocks2-div');

        return view('admin.vermigestion.vermigestion');
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
