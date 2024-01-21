<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:contact-list|contact-edit|contact-delete', ['only' => ['index']]);
        $this->middleware('permission:contact-edit', ['only' => ['edit', 'updateStatus', 'update']]);
        $this->middleware('permission:contact-delete', ['only' => ['delete']]);

    }

    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', ['contacts' => $contacts]);

    }

    public function edit(Contact $contact)
    {


        return view('contacts.edit', ['contact' => $contact]);
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        return redirect(route('contact.index'))->with('OK', 'Formular vymazany uspesne');
    }

    public function update(Contact $contact, Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|max:50|min:4',
                'email' => 'required',
                'phone' => 'required',
                'text' => 'required|string|min:4',
            ]);

            $contact->update($data);
            return redirect(route('contact.index'))->with('OK', 'Formular aktualizovany');
        } catch (\Exception $e) {
            return redirect(route('contact.index'))->withErrors(['Error', $e->getMessage()]);
        }
    }


    public function updateStatus(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'status' => 'required|integer',
            ]);

            $contact = Contact::find($id);
            $contact->status = $data['status'];
            $contact->save();

            return response()->json(['success' => $data['status']]);
        } catch (\Exception $e) {
            return response()->json(['error' => "error"], 500);
        }
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
            'phonenumber' => 'required',
            'message' => 'required',
        ]);


        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phonenumber,
            'text' => $request->message,
            'status' => 0,
        ]);
    }
}