@extends('layouts.app')
 
@section('title-blog') Update record @endsection

@section('content')
    <h1>Update record</h1>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Enter name</label>
        <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
        <input type="text" name="email" value="{{ $data->email }}" placeholder="Enter email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
        <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
        <textarea name="message" id="message" placeholder="Enter message" class="form-control">{{ $data->message }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
