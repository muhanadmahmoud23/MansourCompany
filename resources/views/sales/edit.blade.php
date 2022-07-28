@extends('layout/index')

@section('pageName', 'Sales')

@section('Main')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container">
            <div class="card">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Edit Sales</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    {!! Form::model($sales, ['route' => ['sales.update', $sales->id], 'method' => 'put']) !!}
                        @csrf
                        <div class="row mb-10 align-items-center">

                            <div class="col-md-2">
                                <label class="form-label required"> SalesMan </label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('SalesCall_id', $salesman, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('SalesCall_id ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required"> Region </label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('REGION', $region, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('REGION ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror


                            <div class="col-md-2">
                                <label class="form-label required"> Branch Code</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('BRANCH_CODE', $branch, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('BRANCH_CODE ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror


                            <div class="col-md-2">
                                <label class="form-label required"> Company</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('COMPANY_ID', $company, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('COMPANY_ID ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required"> Category</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('CATEGORY_ID', $category, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('CATEGORY_ID ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required"> Terminal</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('TER_ID', $terminal, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('TER_ID ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required"> Position</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('POS_ID', $position, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('POS_ID ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required"> Sales REP</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('SALESREP_ID', $sales_rep, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('SALESREP_ID ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required"> Sales TER</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('SALES_TER_ID', $sales_ter, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('SALES_TER_ID ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required"> Route Type</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('ROUTE_TYPE_ID', $route, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('ROUTE_TYPE_ID ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required">DAY</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::date('DAY', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('DAY ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required">VISIT START TIME</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::time('VISIT_START_TIME', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('VISIT_START_TIME ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required">VISIT_END_TIME</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::time('VISIT_END_TIME', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('VISIT_END_TIME ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required">Family SEQ</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('FAMILY_ID', $family, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('FAMILY_ID ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required">Product</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('PROD_ID', $product, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('PROD_ID ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required">Sales Car *int</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::text('SALES_CAR', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('SALES_CAR ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="col-md-2">
                                <label class="form-label required">STOCK *float</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::text('STOCK', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @error('STOCK ')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="row mb-10">
                                <div class="col text-center mt-1">
                                    <button class="btn btn-primary px-20 mt-1">Save </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
