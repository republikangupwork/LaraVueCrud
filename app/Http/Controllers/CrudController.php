<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;
use PDF;
use App;


class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
      

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'                      => 'required|string',
            'email'                     => 'required|email',
            'pay_draw'                  => 'required',
            'three_years_in_business'   => 'required',
            'years'                     => 'required|integer',
            'fulltime'                  => 'required',
            'staff_count'               => 'required|integer',
            'on_tool'                   => 'required',
            'share_dir_on_tool'         => 'required',
            'take_out_money'            => 'required|integer',
            'pay_freq'                  => 'required',
            'acc_cover'                 => 'required',
            'cover_plus_extra_amt'      => 'required|integer',
        ]);
        
        $crud = new Crud;
        $crud->name = $request['name'];
        $crud->email = $request['email'];
        $crud->pay_draw = $request['pay_draw'];
        $crud->three_years_in_business = $request['three_years_in_business'];
        $crud->years = $request['years'];
        $crud->fulltime = $request['fulltime'];
        $crud->staff_count = $request['staff_count'];
        $crud->on_tool = $request['on_tool'];
        $crud->share_dir_on_tool = $request['share_dir_on_tool'];
        $crud->take_out_money = $request['take_out_money'];
        $crud->pay_freq = $request['pay_freq'];
        $crud->acc_cover = $request['acc_cover'];
        $crud->cover_plus_extra_amt = $request['name'];

        $crud->save();

        return response()->json(null, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show($id, Crud $crud)
    {   
        $crud = Crud::find($id);
        
        return view('crud.show', compact('crud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Crud $crud)
    {
        $crud = Crud::find($id);

        return view('crud.show', compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crud $crud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crud $crud)
    {
        //
    }
<<<<<<< HEAD
    public function toexport(){
        $data = array('q1'=>'Combination of Drawings/Shareholder salary(i.e none paye income and PAYE)', 'q2'=>'YES');
        $pdf = PDF::loadView('pdfView', compact('data'));

        return $pdf->download('invoice.pdf');
    }

=======

    public function get_data_for_display()
    {   
        $data = Crud::all();
        return $data;
    }

    public function delete($id)
    {
        $crud = Crud::find($id);
        $crud->delete();
    }
>>>>>>> ea52812c3ff1fffa3d10dc4b0dfb7acdd1bfa8da
}
