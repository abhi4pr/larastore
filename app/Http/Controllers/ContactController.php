<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->validate([
        'customerEmail' => 'required|email',
        'customerMessage' => 'required',
        ]);

        $user = Contact::create([
            'customerName' => $request->input('customerName'),
            'customerEmail' => $request->input('customerEmail'),
            'customerNumber' => $request->input('customerNumber'),
            'customerMessage' => $request->input('customerMessage'),
        ]);

        return redirect('/contact-us')->with('success','Form submitted successfully');
    }

}
