<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

use App\Models\Serviceitem;

use App\Repositories\FrontendRepository;

class ServicesController extends Controller
{
      public function development(){
      $serviceitem =  Serviceitem::pluck('name','id');

      return view('frontend.services.development', compact('serviceitem'));
  }

  public function dev(Request $request){
      if(!empty($request->id))
      {
         $item = Contact::find($request->id);  
      }
      else
      {
          $item=new Contact;
      }
      $item->name = $request->name;
      $item->email = $request->email;
      $item->address = $request->address;
      $item->mobile = $request->mobile;     
      $item->description = $request->description;

      $item->save();
      // $this->helper->one_time_message('success', 'Updated Successfully');
      return redirect()->route('website-design-development');

  }

  public function googleads(){
    $serviceitem =  Serviceitem::pluck('name','id');

    return view('frontend.services.googleads', compact('serviceitem'));
}

public function googlead(Request $request){
    if(!empty($request->id))
    {
       $item = Contact::find($request->id);  
    }
    else
    {
        $item=new Contact;
    }
    $item->name = $request->name;
    $item->email = $request->email;
    $item->address = $request->address;
    $item->mobile = $request->mobile;     
    $item->description = $request->description;

    $item->save();
    // $this->helper->one_time_message('success', 'Updated Successfully');
    return redirect()->route('google-ads');

} 

public function socialmediamarketing(){
    $serviceitem =  Serviceitem::pluck('name','id');

    return view('frontend.services.socialmedia', compact('serviceitem'));
}

public function socialmedia(Request $request){
    if(!empty($request->id))
    {
       $item = Contact::find($request->id);  
    }
    else
    {
        $item=new Contact;
    }
    $item->name = $request->name;
    $item->email = $request->email;
    $item->address = $request->address;
    $item->mobile = $request->mobile;     
    $item->description = $request->description;

    $item->save();
    // $this->helper->one_time_message('success', 'Updated Successfully');
    return redirect()->route('social-media-marketing');

}

public function seocontentwriting(){
    $serviceitem =  Serviceitem::pluck('name','id');

    return view('frontend.services.seo', compact('serviceitem'));
}

public function contentwriting(Request $request){
    if(!empty($request->id))
    {
       $item = Contact::find($request->id);  
    }
    else
    {
        $item=new Contact;
    }
    $item->name = $request->name;
    $item->email = $request->email;
    $item->address = $request->address;
    $item->mobile = $request->mobile;     
    $item->description = $request->description;

    $item->save();
    // $this->helper->one_time_message('success', 'Updated Successfully');
    return redirect()->route('seo-content-writing');

}


public function searchengineoptimization(){
    $serviceitem =  Serviceitem::pluck('name','id');

    return view('frontend.services.serach-engine-optimization', compact('serviceitem'));
}

public function searchengine(Request $request){
    if(!empty($request->id))
    {
       $item = Contact::find($request->id);  
    }
    else
    {
        $item=new Contact;
    }
    $item->name = $request->name;
    $item->email = $request->email;
    $item->address = $request->address;
    $item->mobile = $request->mobile;     
    $item->description = $request->description;

    $item->save();
    // $this->helper->one_time_message('success', 'Updated Successfully');
    return redirect()->route('search-engine-optimization');

}



    
}
