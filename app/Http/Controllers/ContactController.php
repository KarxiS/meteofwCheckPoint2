<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
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


        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phonenumber;
        $contact->text = $request->message;
        $contact->status = 0;
        $contact->save();
    }
}