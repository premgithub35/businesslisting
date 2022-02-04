<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use App\Models\Reviews;
use DB;

class ReviewsController extends Controller
{

  protected $model;

  public function __construct(Reviews $reviews)
  {
      // set the model
      $this->model = new Repository($reviews);
  }


    public function index()
    {
    	 $reviews=new Reviews;

        $reviews= $reviews->orderBy('id','asc')->paginate(20)->appends(request()->query());
        return view ('backend.reviews.index',compact('reviews'));
    }
    public function view($id)
    {
      Cache::flush();
        $item = Cache::get('review_'.$id, function () use($id) {

        $item= Reviews::findorfail($id);

        Cache::forever('review_'.$id,$item);

        return $item;
        });
     
        return view ('backend.reviews.view',compact('item'));
    }
    
    public function inactive($id)
    {
       $this->model->inactive($id);
       return redirect()->route('reviews');


    }

    public function active($id)
    {
       $this->model->active($id);
       return redirect()->route('reviews');


    }
    
}
