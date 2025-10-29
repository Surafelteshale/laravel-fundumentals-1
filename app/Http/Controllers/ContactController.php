<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = 'Contact Us Page';
        return view('contact', ['contact' => $contact]);
    }
}
