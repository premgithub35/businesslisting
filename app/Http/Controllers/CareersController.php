<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Careers;
use App\Repositories\Repository;

class CareersController extends Controller
{
    protected $model;

    public function __construct(Careers $careers)
    {
        // set the model
        $this->model = new Repository($careers);
    }
    public function index()
    {

        $careers = $this->model->all();
        return view('backend.careers.index',compact('careers'));
    }

    public function create()
    {
        return view('backend.careers.add');
    }

    public function edit($id)
    {
        $careers = $this->model->show($id);

        return view('backend.careers.edit',compact('careers'));
    }

    public function createOrUpdate(Request $request,$id = null)
    {
        $request->validate([
            'title'=>'required',
            'content' => 'required'
          ]);
      
        if($id === null){
           
           $this->model->create($request->only($this->model->getModel()->fillable));
           return redirect()->route('careers')->with('status', 'New careers Created!');
           
        }else{
            $this->model->update($request->only($this->model->getModel()->fillable), $id);
            return redirect()->route('careers')->with('status', 'careers Updated!');
        }
    }

    public function inactive($id)
    {
      $this->model->inactive($id);
       return redirect()->route('careers');
    }
     public function active($id)
    {
       $this->model->active($id);
       return redirect()->route('careers');

    }
}