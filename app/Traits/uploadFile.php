<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait uploadFile
{
//    public function uploadFile(Request $request)
//    {
//       $file= $request->file('files');
//       $file1=time().'_'.$file->getClientOriginalExtension();
//       return $file1;
//    }
    public function uploadFile(Request $request)
    {
        $file=$request->file('file');
        $fileName= time().'/'.$file->getClientOriginalName();
       return Storage::disk('public')->move(public_path($fileName),'public/upload');

    }

}
