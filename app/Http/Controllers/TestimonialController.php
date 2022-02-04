<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Repositories\Repository;
use App\Helpers\StoreImage;
use App\Models\ItemType;

class TestimonialController extends Controller
{
    protected $model;
    protected $storeImage;

    public function __construct(Testimonials $testimonials,StoreImage $storeImage)
    {
        // set the model
        $this->model = new Repository($testimonials);
        $this->storeImage = new StoreImage();

    }
    public function index()
    {

        $testimonials=new Testimonials;
        if(request()->filled('id')){
          $testimonials = $testimonials->where('id',request('id'));
             }
        if(request()->filled('name')){
          $testimonials = $testimonials->where('name',request('name'));
           }
          $testimonials= $testimonials->orderBy('id','ASC')->paginate(10)->appends(request()->query());
          $total=Testimonials::count();

          return view('backend.testimonials.index',compact('testimonials','total'));

    }

    public function create()
    {
        $itemtype =  Itemtype::pluck('name','id');
        return view('backend.testimonials.add', compact('itemtype'));

        // return view('backend.testimonials.add');
    }

    public function edit($id)
    { 
        $testimonial = $this->model->show($id);
        $itemtype =  Itemtype::pluck('name','id');

        return view('backend.testimonials.edit',compact('testimonial','itemtype'));
    }

    public function createOrUpdate(Request $request,$id = null)
    {
        $this->validate($request, [
        'name' => 'required',
        'contact' => 'required',
        // 'address' => 'required',
        'itemtype' => 'required',
        'rating' => 'required',
        // 'latitude' => 'required',
        // 'longitude' => 'required',
        'location' => 'required',
        // 'img_url' => 'image|max:1999',
        'details'=>'required',

        ]);

       $imagePath = $this->storeImage->storeImage($request->file('img_url'));
       $data=$request->only($this->model->getModel()->fillable);

       $data['img_url'] = $imagePath;


        if($id === null){

            $this->model->create($data);
            return redirect()->route('add-listing')->with('status', 'New Service Item Created!');

         }else{
             $this->model->update($data, $id);
             return redirect()->route('add-listing')->with('status', 'Service Item Updated!');
         }

return redirect('add-listing')->with('success', 'Add Listing has been Created Successfully');

    }

    public function inactive($id)
    {
       $this->model->inactive($id);
       return redirect()->route('listing');


    }

    public function active($id)
    {
       $this->model->active($id);
       return redirect()->route('listing');


    }



}
