<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Models\Contact;
use App\Models\Pages;
use App\Models\Faq;
use App\Models\Imenus;
use App\Models\ItemType;
use App\Models\Serviceitem;
use App\Models\Stations;
use App\Models\Store;
use App\Models\Reviews;

use App\Models\Careers;
use App\Repositories\FrontendRepository;

class HomeController extends Controller
{
    protected $testimonialModel;
    protected $faqModel;
    protected $careerModel;
    //  protected $aboutModel;
    
    

    public function __construct(Testimonials $testimonials,Faq $faq,Careers $career,Imenus $imenus)
    {
        // set the model
        $this->testimonialModel = new FrontendRepository($testimonials);
        $this->faqModel = new FrontendRepository($faq);
        $this->careerModel = new FrontendRepository($career);
        $this->imenuModel = new FrontendRepository($imenus);

    }

    public function index()
    {
       $testimonials = $this->testimonialModel->all();
      //  $this->faqModel = new FrontendRepository($faq);
    //    $services = $this->serviceModel->all();
      //  $page = Pages::where('slug','about')->first();
       

       return view('frontend.pages.index',compact('testimonials'));
    }


    public function categories()
    {
       $location = ItemType::where('name', "!=" ,"")->orderBy('name', 'ASC')->get();

        return view('frontend.categories.listing',compact('location'));
    }


    public function categoriesdetails()
    {
   
     
      $itemtypes =  Itemtype::where('name', $_GET['categories'])->first(['id','name']);
    
      $testimonials = Testimonials::orderBy('id', 'ASC')->where('itemtype',  $itemtypes->id)->get();
      // print_r($testimonials);
      // exit;
      return view('frontend.cat.categoriesdetails', compact('testimonials'));
    }


    public function categoriesdtl($id)
    {     
      $itemtypes =  Itemtype::where('id', $id)->get();
     
      $testimonials = Testimonials::orderBy('id', 'ASC')->where('itemtype', $id)->get();
      return view('frontend.categories.categories-dtl', compact('testimonials','itemtypes'));
    }
    public function listingsingle($id)
    {
      $reviews=new Reviews;
      $reviews= $reviews->orderBy('id','asc')->paginate(20)->appends(request()->query());
      $testimonials = Testimonials::where('id', $id)->get();
        return view('frontend.categories.listing-single', compact('testimonials','reviews'));
    }

    public function add(){
      $itemtype =  Itemtype::pluck('name','id');

      return view('frontend.pages.addbusiness', compact('itemtype'));
  }

  public function store(Request $request){
      if(!empty($request->id))
      {
         $item = Imenus::find($request->id);  
      }
      else
      {
          $item=new Imenus;
      }
      $item->name = $request->name;
      $item->code = $request->code;
      $item->vn_type = $request->vn_type;
      $item->address = $request->address;
      $item->contact = $request->contact;
      $item->img_url = $request->img_url;
      $item->status = $request->status;
      $item->is_active = $request->is_active;
      $item->details = $request->details;
      $item->itemtype = $request->itemtype;

      $item->save();
      return redirect()->route('aad-business-signup');

  }

    public function getfaq()
    {
        $faq = $this->faqModel->all();
        return view('frontend.pages.faq',compact('faq'));
    }

    public function career()
    {
     $career = $this->careerModel->all();
      return view('frontend.pages.career',compact('career'));
    }
    public function about()
    {    
       return view('frontend.pages.about');
    }

    public function privacy()
    {    
       return view('frontend.pages.pravicy');
    }
    public function contact()
    {    
       return view('frontend.pages.contact');
    }
    public function autocomplete(Request $request)
    {
        $data = ItemType::select("name")
                ->where("name","LIKE","%{$request->input('query')}%")
                ->get();
   
        return response()->json($data);
    }



    public function terms()
    {    
       return view('frontend.pages.term');
    }
    public function review()
    {   
      $reviews=new Reviews;

      $reviews= $reviews->orderBy('id','asc')->paginate(20)->appends(request()->query());
      $total=Reviews::count();
      $faq = $this->faqModel->all();
      return view ('frontend.pages.review',compact('reviews','total','faq')); 
    }
        
    public function comment(Request $request){
            if(!empty($request->id))
            {
               $item = Reviews::find($request->id);  
            }
            else
            {
                $item=new Reviews;
            }
            $item->name = $request->name;
            $item->email = $request->email;  
            $item->comment = $request->comment;
            $item->rating = $request->rating;
            $item->is_active = $request->is_active;
            $item->save();
            // $this->helper->one_time_message('success', 'Updated Successfully');
            return redirect()->route('review');
      
        }

    public function getContact() { 
      $serviceitem =  Serviceitem::pluck('name','id');

      return view('frontend.services.development', compact('serviceitem'));
   } 



  public function formSubmit( Request $request )
  {
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

      return redirect()->route('contact');
  }

    public function blog()
    {   
       return view('frontend.pages.blog');
    } 
     public function blogdetails()
    {   
       return view('frontend.pages.blog-details');
    }
    
}
