<?php

namespace App\Http\Controllers;

use App\About_Us;
use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $about=About_Us::all();
        return view('website.contact_us',compact('about'));
    }

    public function create(ContactRequest $request){
        $data = $request->all();
        $data['contact_id']=auth()->user()->id;
        Contact::create($data);
        session()->flash('success','Your massage send successful');
        return back();
    }














    public function showindex(){
        $contact=Contact::all();
        return view('contact.index',compact('contact'));
    }
    public function destroy($id){
        $contact=Contact::find($id);
        $contact->delete();
        session()->flash('success','massage Deleted successful');
        return back();
    }
}
