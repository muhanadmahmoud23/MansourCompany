<?php

namespace App\Http\Controllers;

use App\Models\Sales_TR;
use App\Http\Requests\SalesTrRequest;
use App\Models\Terminal;
use Illuminate\Http\Request;

class SalesTerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        if ($request->ajax()) {

            return Datatables()->of(Sales_TR::all())
                ->addIndexColumn()
                ->addColumn('action',  'salesTr.datatable.actions')
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('salesTr.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $terminal = Terminal::all()->pluck('name','id');
        return view('salesTr.add', [
            'terminal' => $terminal,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesTrRequest $request)
    {
        Sales_TR::create($request->validated());

        return view('salesTr.index');
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
        $terminal = Terminal::all()->pluck('name','id');
        $salesTER = Sales_TR::find($id);
        return view('salesTr.edit', [
            'salesTER'   =>  $salesTER,
            'terminal' => $terminal,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalesTrRequest $request, $id)
    {
        $salesTER = Sales_TR::find($id);
        $salesTER->update($request->validated());
        return view('salesTr.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salesTer = Sales_TR::find($id);
        $salesTer->delete();
        return view('salesTr.index');
    }
}
