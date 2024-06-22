<?php

namespace App\Http\Controllers;

use App\Models\assetcondition;
use App\Models\category;

use Illuminate\Http\Request;

use App\Http\Requests\StoreassetcondtionRequest;
use App\Http\Requests\UpdateassetcondtionRequest;

class AssetconditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              $conditions = assetcondition::orderBy('condition', 'asc')->get();
        //dd($tribes);
        return view('admins.condition.condition-list',compact('conditions'));

    }


    public function addCondition(){
        //dd('print');
         return view('admins.condition.addcondition');
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
     * @param  \App\Http\Requests\StoreassetcondtionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if (request('condition')) {
        $condition = assetcondition::UpdateOrCreate([
        'condition'=>request('condition_name')        
           ]);
                  
           return redirect()->back()->with('success','Asset condition recorded successfully');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\assetcondtion  $assetcondtion
     * @return \Illuminate\Http\Response
     */

     public function editCondition($id){
       
       $conditions = assetcondition::where('id',$id)
       ->first();
      //dd($tribes);
         return view('admins.condition.edit-condition',compact('conditions'));
    }


    public function show(assetcondtion $assetcondtion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\assetcondtion  $assetcondtion
     * @return \Illuminate\Http\Response
     */
    public function edit(assetcondtion $assetcondtion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateassetcondtionRequest  $request
     * @param  \App\Models\assetcondtion  $assetcondtion
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request,$id)
    {
  
      $toupdate = assetcondition::where('id',$id)
               ->update([
            'condition'=>request('condition_name')
        ]);
    return redirect()->route('condition.index')->with('success','Condition created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\assetcondtion  $assetcondtion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
        {
        
         $delete = assetcondition::where('id',$id)->first();
        if($delete->delete()){
            return redirect()->route('condition.index')->with('success','Condition removed successfully');
        }    
        else{
            return redirect()->route('condition.index')->with('error','Condition not exists');
        }
    }
}
