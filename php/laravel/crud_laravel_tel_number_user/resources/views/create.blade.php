@extends('parent')

@section('main')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div align="right">
    <a href="{{ route('crud.index') }}" class="btn btn-info">BACK</a>
</div>

    <form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label class="col-md-4 text-right">Enter First Name</label>
            <div class="col-md-8">
                <input type="text" name="first_name" class="form-control input-lg"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 text-right">Enter Last Name</label>
            <div class="col-md-8">
                <input type="text" name="last_name" class="form-control input-lg"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 text-right">Enter Phone</label>
            <div class="col-md-8">
                <input type="text" name="phone" class="form-control input-lg"/>
            </div>
        </div>

        <div class="form-group text-centre">
            <input type="submit" name="add" class="btn btn-success" value="Add">
        </div>
    </form>
@endsection
