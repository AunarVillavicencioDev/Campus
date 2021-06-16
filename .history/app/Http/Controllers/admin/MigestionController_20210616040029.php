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
//-----------------------------------------------------------------------------------
        $data2 = \Lava::DataTable();
        $data2->addStringColumn('Reasons')
        ->addNumberColumn('Percent')
        ->addRow(['Check Reviews', 5])
        ->addRow(['Watch Trailers', 2])
        ->addRow(['See Actors Other Work', 4])
        ->addRow(['Settle Argument', 89]);

        \Lava::DonutChart('IMDB', $reasons, [
            'title' => 'Reasons I visit IMDB'
        ]);
        \Lava::DonutChart('Stocks', $data2, 'stocks-div');

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
