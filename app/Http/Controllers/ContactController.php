<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-us-form');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
           'name' => 'required',
           'email' => 'required|unique:employees|max:255',
           'message' => 'required'
        ]);
        $data = new Contact();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;

        $data->save();

        return redirect('/')->with('status','Form data has been submitted.');
    }
}