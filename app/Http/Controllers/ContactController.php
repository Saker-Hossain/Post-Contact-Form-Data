<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-us-form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
           
        ]);
    }
}