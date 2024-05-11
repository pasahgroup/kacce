<?php

namespace App\Http\Controllers;

use App\Models\session;
use App\Http\Requests\StoresessionRequest;
use App\Http\Requests\UpdatesessionRequest;

use Illuminate\Http\Request;
class SessionController extends Controller
{
    
    public function index()
    {
         $sessions = session::orderBy('session', 'asc')->get();
        return view('admins.sessions.session-list',compact('sessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addsession(){
         return view('admins.sessions.addsession');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreclassgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if (request('session')) {
        $class = session::UpdateOrCreate([
        'session'=>request('session_name')        
           ]);
                  
           return redirect()->back()->with('success','Session recorded successfully');
        }

    }




     public function editSession ($id){
       
       $sessions = session::where('id',$id)
       ->first();
      //dd($tribes);
         return view('admins.sessions.edit-session',compact('sessions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\classg  $classg
     * @return \Illuminate\Http\Response
     */
    public function show(session $classg)
        {
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\classg  $classg
     * @return \Illuminate\Http\Response
     */
    public function edit(classg $classg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateclassgRequest  $request
     * @param  \App\Models\classg  $classg
     * @return \Illuminate\Http\Response
     */

  public function update(Request $request,$id)
    {
  
      $toupdate = session::where('id',$id)
               ->update([
            'session'=>request('session_name')
        ]);
    return redirect()->route('session.index')->with('success','Session created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\classg  $classg
     * @return \Illuminate\Http\Response
     */
      public function destroy($id)
    {
     $delete = session::where('id',$id)->first();
        if($delete->delete()){
            return redirect()->route('session.index')->with('success','Session removed successfully');
        }    
        else{
            return redirect()->route('session.index')->with('error','Session not exists');
        }
    }
}
