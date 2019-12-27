<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\configration;

class configrationsController extends Controller
{
    public $objectName;
    public $folderView;
    public $flash;


    public function __construct(configration $model)
    {
        $this->middleware('auth');
        $this->objectName = $model;
        $this->folderView = 'admin.configrations.';
        $this->flash = 'Feature Data Has Been Done';

    }

    public function viewForm()
    {

       //  $data = $this->objectName::select('id')->where('id',"1")->get();
       //  if( count($data) ==0){
       // $data->id=null;
       // $data->intro_image=null;
       // $data->appointment_intro=null;
       // $data->logo=null;
       // $data->service_image=null;
       // $data->about=null;
       // $data->address=null;
       // $data->working_time=null;
       // $data->phone=null;
       // $data->email=null;
       // $data->facebook=null;
       // $data->twitter=null;
       // $data->google=null;

       //  }else{

       //  }

         $data = $this->objectName::find(1);

        return view($this->folderView.'edit', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'appointment_intro' => 'required|string',
            'about' => 'required|string',
            'address' => 'required|string',
            'working_time' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'facebook' => 'required|string',
            'twitter' => 'required|string',
            'google' => 'required|string',
            // 'intro_image' => 'required',
            // 'service_image' => 'required',
            // 'logo' => 'required',

        ]);

        $input = $request->all();
        // $id = $input['id'];

if($request['intro_image'] != null){
$input['intro_image'] = $this->MoveImage($input['intro_image']);
}else{
      unset($input['intro_image']);
}

if($request['service_image'] != null){
$input['service_image'] = $this->MoveImage($input['service_image']);

}else{
     unset($input['service_image']);
}

if($request['logo'] != null){
$input['logo'] = $this->MoveImage($input['logo']);
}else{
     unset($input['logo']);
}

        $this->objectName::find(1)->update($input);

        return redirect('admin/configrations')->with('success',$this->flash);
        

    }

     public function MoveImage($request_file)
    {
        // This is Image Information ...
        $file    = $request_file;
        $name    = $file->getClientOriginalName();
        $ext     = $file->getClientOriginalExtension();
        $size    = $file->getSize();
        $path    = $file->getRealPath();
        $mime    = $file->getMimeType();
        
        // Move Image To Folder ..
        $fileNewName = 'img_'.$size.'_'.time().'.'.$ext;
        $file->move(public_path('uploads/main_Page'), $fileNewName);
        
        return $fileNewName;
    }


}
