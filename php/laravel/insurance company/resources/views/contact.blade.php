@extends('layouts.app')
 
@section('title-blog') Contact form @endsection

@section('content')
    <h1>Contact form</h1>

    <form action="{{ route('contact-form') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Enter name</label>
            <input type="text" name="name" placeholder="Enter name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Enter email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="Subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Sent</button>
    </form>
@endsection
