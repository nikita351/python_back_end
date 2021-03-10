@extends('layouts.app')

@section('title-blog') All message @endsection

@section('content')
    <h1>All message</h1>
    @foreach ($data as $el)
        <div class="alert alert-info">
        <h3>{{ $el->subject }}</h3>
        <p>{{ $el->email }}</p>
        <p><small>{{ $el->created_at }}</small></p>
        <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning">Show</button></a>
        </div>
    @endforeach
@endsection
