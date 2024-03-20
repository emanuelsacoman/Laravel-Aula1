<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();

        return view('contact', compact('contacts'));
    }

    public function store(){
        $contact = new Contact();

        $contact->name = 'Emanuel Sacoman';
        $contact->email = 'emanuelsacoman@gmail.com';
        $contact->telefone = '(42) 999999999';
        $contact->data_nascimento = '2003-11-03';
        $contact->save();
    }

    public function update(){
        $contact = Contact::find(3);
        $contact->name="EvS";
        $contact->save();
    }

    public function destroy($id){
        $contact = Contact::find($id);
        $contact->delete();
    }
}
