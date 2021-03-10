@extends('parent')

@section('main')
    <div align="right">
        <a href="{{ route('crud.index') }}" class="btn btn-info">Back</a>
    </div>

    <form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">

        @csrf

        @method('PATCH')

        <div class="form-group">
            <label class="col-md-4 text-right">Enter First Name</label>
            <div class="col-md-8">
                <input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 text-right">Enter Last Name</label>
            <div class="col-md-8">
                <input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 text-right">Enter Phone</label>
            <div class="col-md-8">
                <input type="text" name="phone" value="{{ $data->phone }}" class="form-control input-lg"/>
            </div>
        </div>

        <div class="form-group text-centre">
            <input type="submit" name="add" class="btn btn-success" value="Edit">
        </div>
    </form>

@endsection
