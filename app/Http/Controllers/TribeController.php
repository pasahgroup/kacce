<?php

namespace App\Http\Controllers;

use App\Models\tribe;
use App\Http\Requests\StoretribeRequest;
use App\Http\Requests\UpdatetribeRequest;

use Illuminate\Http\Request;

class TribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tribes = tribe::orderBy('tribe', 'asc')->get();
        //dd($tribes);
        return view('admins.tribes.tribe-list',compact('tribes'));
    }


 public function addtribe(){

//dd('print');
         return view('admins.tribes.addtribe');
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
     * @param  \App\Http\Requests\StoretribeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (request('tribe')) {
        $tribe = tribe::UpdateOrCreate([
        'tribe'=>request('tribe_name')        
           ]);
                  
           return redirect()->back()->with('success','Tribe recorded successfully');
        }

    //       // Assign Inclusive to the Tour Name
    //     if(request('assign')){           
    //     $assign = accommodationInclusive::UpdateOrCreate([
    //     'inclusive_id'=>request('assign'),
    //     'tour_id'=>request('tour_id')
    //      ],
    //     [
    //     'user_id'=>auth::id()            
    //        ]);
    //  return redirect()->back()->with('success','Tribe created successfully');
    // }
    }



     public function editTribe($id){
       
       $tribes = tribe::where('id',$id)
       ->first();
      //dd($tribes);
         return view('admins.tribes.edit-tribe',compact('tribes'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tribe  $tribe
     * @return \Illuminate\Http\Response
     */
    public function show(tribe $tribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tribe  $tribe
     * @return \Illuminate\Http\Response
     */
    public function edit(tribe $tribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetribeRequest  $request
     * @param  \App\Models\tribe  $tribe
     * @return \Illuminate\Http\Response
     */
  public function update(Request $request,$id)
    {
  
      $toupdate = tribe::where('id',$id)
               ->update([
            'tribe'=>request('tribe_name')
        ]);
    return redirect()->route('tribe.index')->with('success','Tribe created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tribe  $tribe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $delete = tribe::where('id',$id)->first();
        if($delete->delete()){
            return redirect()->route('tribe.index')->with('success','Tribe removed successfully');
        }    
        else{
            return redirect()->route('tribe.index')->with('error','Tribe not exists');
        }
    }

}
