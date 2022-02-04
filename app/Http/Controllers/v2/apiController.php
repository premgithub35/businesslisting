<?php
namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

use App\Models\Itemtype;

use App\Http\Helpers\Common;
use DB;


class ApiController extends Controller
{
	protected $helper;

	public function __construct()
	{
	    $this->helper = new Common;
	}


  public function searchCategories(Request $request)
    {
            $itemtypes=  DB::table('itemtypes')->where('name', 'LIKE', '%'.$request->q.'%')->orWhere('id','LIKE','%'.$request->q.'%')->get(['id','name']);

          $iteminfo=array();

          foreach($itemtypes as $s)
          {
            array_push($iteminfo, $s->id.'/ '.$s->name);
          }

        return $iteminfo;
    }
  
  

  

}

?>
