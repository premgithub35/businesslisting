<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

use App\Repositories\Repository;

class EnquiryController extends Controller
{

   
    public function index()
    {

        $enquirys=new Contact;
        if(request()->filled('id')){
          $enquirys = $enquirys->where('id',request('id'));
             }
        if(request()->filled('name')){
          $enquirys = $enquirys->where('name',request('name'));
           }
          $enquirys= $enquirys->orderBy('id','desc')->paginate(20)->appends(request()->query());
          $total=Contact::count();

        return view('backend.messages.index',compact('enquirys','total'));
    }


    public function inactive($id)
    {
      $this->model->inactive($id);
       return redirect()->route('message');


    }
     public function active($id)
    {
       $this->model->active($id);
       return redirect()->route('message');

    }
}