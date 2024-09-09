<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{

        public function admin()
    {
        $contacts = Contact::all();
        return view('admin', ['contacts' => $admins]);
    }

    public function add(){
       return view('add');
    }

    public function create(Request $request){
        $form = $request->all();
        Admin::create($form);
        return redirect('/');
    }

    public function index()
    {
        $admins = simplePaginate(5);
        return view('index', ['admins' => $admins]);
    }
}