@extends('layout/index')

@section('pageName','Contact')

@section('Main')
 
<div class='container'>
    {{-- <form method="POST" action="{{ route('company.store') }}" enctype='multipart/form-data' > --}}
        @csrf
        <div class="form-group ">
            <label class="col-sm-2 control-label"> Username</label>
            <div class='col-sm-10'>
                <input type="text" name="username" class="form-control" required="required"> </input>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label"> Password</label>
            <div class='col-sm-10'>
                <input type="text" name="password" class="form-control" required="required"> </input>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label"> E-Mail </label>
            <div class='col-sm-10'>
                <input type="email" name="email" class="form-control" required="required"></input>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">FullName</label>
            <div class='col-sm-10'>
                <input type="text" name="fullname" class="form-control" required="required"></input>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10 mt-2">
                <input type="submit" value="create" class="btn btn-primary"></input>
            </div>
        </div>

    </form>
</div>

@endsection
