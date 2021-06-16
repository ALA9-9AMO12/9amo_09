<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()

    {

        return view('contact.create');

    }

    /*public function store()
    {

        $contact = new Contact();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->bericht = request('bericht');
        $contact->save();

        return redirect('/');

    }*/
}
