<?php

namespace App\Http\Controllers;

use App\Models\Sales_rep;
use App\Http\Requests\SalesRepRequest;
use Illuminate\Http\Request;

class SalesRepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            return Datatables()->of(Sales_rep::all())
                ->addIndexColumn()
                ->addColumn('action',  'salesRep.datatable.actions')
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('salesRep.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salesRep.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesRepRequest $request)
    {
        Sales_rep::create($request->validated());

        return view('salesRep.index');
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
        $salesREP = Sales_rep::find($id);
        return view('salesRep.edit', [
            'salesREP'   =>  $salesREP,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalesRepRequest $request, $id)
    {
        $salesREP = Sales_rep::find($id);
        $salesREP->update($request->validated());
        return view('salesRep.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salesREP = Sales_rep::find($id);
        $salesREP->delete();
        return view('salesRep.index');
    }
}
