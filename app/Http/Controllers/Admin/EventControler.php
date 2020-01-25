<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Event;

class EventControler extends Controller
{
	    public $objectName;
    public $folderView;
    public $flash;

    public function __construct(Event $model)
    {
        $this->middleware('auth');
        $this->objectName = $model;
        $this->folderView = 'admin.events.';
        $this->flash = 'Event Data Has Been ';

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->objectName::orderBy('created_at', 'desc')->get();

        // dd($data);
        return view($this->folderView.'index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view($this->folderView.'create');
    }

 
    public function store(Request $request)
    {
        $request->validate([
            // 'type' => 'required|string',
            'event_title' => 'required|string',
            'event_img' => 'required',
            'event_link' => 'required|string',
            'event_desc' => 'required|string'
        ]);

        $input = $request->all();

        if($request['event_img'] != null)
        {
	        // This is Image Information ...
			$file	 = $request->file('event_img');
            $name    = $file->getClientOriginalName();
			$ext 	 = $file->getClientOriginalExtension();
			$size 	 = $file->getSize();
			$path 	 = $file->getRealPath();
			$mime 	 = $file->getMimeType();

			// Move Image To Folder ..
			$fileNewName = 'img_'.time().'.'.$ext;
			$file->move(public_path('uploads/Event_Images'), $fileNewName);

	        $input = $request->all();
	        $input['event_img'] = $fileNewName;
	    }
	    else
        {
            $input = $request->all();
            $input['event_img'] = 'empty.jpg';
        }

        $input['created_by'] = auth()->user()->id;

        $this->objectName::create($input);


        return redirect()->route('events.index')->with('success',$this->flash.' Created');

    }

    public function edit($id)
    {
        $data = $this->objectName::find($id);

        return view($this->folderView.'edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
       $request->validate([
       	// 'type' => 'required|string',
             'event_title' => 'required|string',
            'event_link' => 'required|string',
            'event_desc' => 'required|string'
        ]);

        $input = $request->all();
      if($request['event_img'] != null)
        {
            // This is Image Information ...
            $file    = $request->file('event_img');
            $name    = $file->getClientOriginalName();
            $ext     = $file->getClientOriginalExtension();
            $size    = $file->getSize();
            $path    = $file->getRealPath();
            $mime    = $file->getMimeType();

            // Move Image To Folder ..
            $fileNewName = 'img_'.time().'.'.$ext;
            $file->move(public_path('uploads/Event_Images'), $fileNewName);

            $input = $request->all();
            $input['event_img'] = $fileNewName;

        }else
        {
            unset($input['event_img']);
        }



        $this->objectName::find($id)->update($input);


       return redirect()->route('events.index')->with('success',$this->flash.' updated');


    }

    public function destroy($id)
    {
        $chcek = $this->objectName::findOrFail($id);
        if ($chcek)
        {
            $this->objectName::find($id)->delete();

            return redirect()->back()->with('success', $this->flash.'Deleted');
        }
        else
        {
            return redirect()->back()->with('danger', 'Not Found ID !!');
        }
    }
}
