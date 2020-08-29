<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Storage;

class UserController extends Controller
{
    public function uploadForm() {  
        // return redirect('posts')->with('upload', 'nothing yet');
        //  return redirect('admin.show-post')->back()->with('upload', 'nothing yet');
        // return view('admin.show-post')->with('upload', 'nothing yet');
         return view('admin.upload-avatar')->with('upload', 'nothing yet');

    }

    public function uploadAvatar(Request $request) {

        /* if($request==null) {
            return view('upload-avatar');
        } */

        $imExist = $request->hasFile('image');

        if ($imExist) {
          User::uploadAvatar($request -> image);
          return redirect()->back()->with('message', 'Image Uploaded');//An alternative to session flash
        }
        else {
        return redirect()->back()->with('error', 'Fail to Upload Image');
        }
        
    }

    


}
