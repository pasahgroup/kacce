<?php

namespace App\Http\Controllers;

use App\Models\slider;
use App\Models\program;
use Illuminate\Http\Request;

class themeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$sliders = slider::get();
         $sliders = slider::where('status',1)
          ->get();

dd($sliders);
       /// $tours = program::get();
        return view('admins.themes.slider',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
//dd('print slider');

        if(request('attachment')){
            //dd('d1');
            // Get filename with extension
            $fileNameWithExt = request('attachment')->getClientOriginalName();
            // Just Filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
              //$filename = strtok($filename, " ");
            // Get just Extension
            $extension = request('attachment')->getClientOriginalExtension();
            //Filename to store
            $filename = strtok($filename, " ");
            $imageToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = request('attachment')->storeAs('public/uploads/', $imageToStore);
//dd(request('section'));

            $slider = slider::UpdateOrCreate(
                [ 'section'=>request('section')],
                ['title'=>request('title'),
                'status'=>request('status'),
                    'description'=>request('description'),                   
                    'attachment'=>$imageToStore
                ]);                
                return redirect()->back()->with('success','Slider created succesfully');
       }   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     //dd($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       $slides=slider::where('id',$id)->get()->first();

        $tours = program::get();
        $sliders = slider::join('programs','programs.id','sliders.tour_id')
          ->where('sliders.tour_id',$slides->tour_id)
          ->get()->first();
        
        return view('admins.themes.edit',compact('sliders','tours'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = slider::where('id',$id)->first();
        if($delete->delete()){
            return redirect()->back()->with('success','Widget removed successfully');
        }    
        else{
            return redirect()->back()->with('error','Widget not exists');
        }
    }
}
