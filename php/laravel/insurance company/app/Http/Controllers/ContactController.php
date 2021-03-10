<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
       $contact = new Contact();
       $contact->name = $req->input('name');
       $contact->email = $req->input('email');
       $contact->subject = $req->input('subject');
       $contact->message = $req->input('message');

       $contact->save();

       return redirect()->route('home')->with('success', 'Message sent');
    }

    public function allData()
    {
        return view('messages', ['data' => Contact::all()]);
    }

    public function showOneMessage($id)
    {
        return view('one-message', ['data' => Contact::find($id)]);
    }

    public function updateMessage($id)
    {
        return view('update-message', ['data' => Contact::find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req)
    {
       $contact = Contact::find($id);
       $contact->name = $req->input('name');
       $contact->email = $req->input('email');
       $contact->subject = $req->input('subject');
       $contact->message = $req->input('message');

       $contact->save();

       return redirect()->route('contact-data-one', $id)->with('success', 'Message has been updated');
    }

    public function deleteMessage($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Message has been deleted');

    }
}
