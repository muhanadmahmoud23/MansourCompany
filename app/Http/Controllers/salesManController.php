<?php

namespace App\Http\Controllers;

use App\Models\Salesman;
use App\Http\Requests\SalesmanRequest;
use Illuminate\Http\Request;

class salesManController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            return Datatables()->of(Salesman::all())
                ->addIndexColumn()
                ->addColumn('action',  'salesMan.datatable.actions')
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('salesman.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salesman.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesmanRequest $request)
    {
        Salesman::create($request->validated());

        return view('salesman.index');
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
        $salesMan = Salesman::find($id);
        return view('salesman.edit', [
            'salesMan'   =>  $salesMan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalesmanRequest $request, $id)
    {
        $salesMan = Salesman::find($id);
        $salesMan->update($request->validated());
        return view('salesman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salesMan = Salesman::find($id);
        $salesMan->delete();
        return view('salesman.index');
    }
}
