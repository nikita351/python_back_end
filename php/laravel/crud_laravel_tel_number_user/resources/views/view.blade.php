@extends('parent')

@section('main')
    <div class="jumbotron text-center">
        <div align="right">
            <a href="{{ route('crud.index') }}" class="btn btn-info">Back</a>
        </div>
        <h3>First Name - {{ $data->first_name }}</h3>
        <h3>Last Name - {{ $data->last_name }}</h3>
        <h3>Phone - {{ $data->phone }}</h3>
    </div>
@endsection
