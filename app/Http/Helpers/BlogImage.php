<?php

namespace  App\Http\Helpers;
use Image;

class BlogImage
{
    public function blogImage($image)
    {
        // $filenameWithExt = $image->getClientOriginalName();
        // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // $extension = $image->getClientOriginalExtension();
        // $filenameToStore = $filename . '_' . time() . '.' . $extension;
        // $path = $image->storeAs('public/img', $filenameToStore);
        // return $filenameToStore;

        $filenameWithExt = $image->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $imageName = $filename.'_'.time().'.'.$image->getClientOriginalExtension();


        $destinationPath = public_path('/images/blogs');
        $img = Image::make($image->getRealPath());
        $img->resize(135, 135, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$imageName);


        return $imageName;

    }
}
