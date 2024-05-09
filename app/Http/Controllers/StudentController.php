<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\tribe;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use Illuminate\Http\Request;
use DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datas = student::get();
        //dd($datas);
        return view('admins.students.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // dd('dddd');
      $tribes = tribe::orderBy('tribe', 'asc')->get();
          return view('admins.students.add',compact('tribes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorestudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // No of days before update on itenary table
       //dd (request('main'));

        //dd('print');

        // if(request('main')=='Program')
        // {
        //  $type='Programs';
        // }
        // else
        // {
        // $type='Addon';
        // }

//dd(request('gurdian_name'));

           $pin=rand(10000,99999);
           // $storeType=request('edit');
           //  $itDaysBefore=itinerary::where('program_id',request('id'))
           //   ->where('tour_addon',$type)
           //   ->get()->first();  

          $student =  student::UpdateOrCreate(
            [   'pin'=>$pin],
            [
                 'addmission_no'=>request('addmission_no'),
                  'class'=>request('class'),
                 'session'=>request('session'),
                 'first_name'=>request('fname'),
                 'middle_name'=>request('mname'),
                 'last_name'=>request('lname'),
              
                 'gender'=>request('gender'),
                 'birth_date'=>request('birth_date'),
                  'mobile_no'=>request('mobile_no'),
                 'email'=>request('email'),

                 'education_level'=>request('education'),
                 'graduate'=>request('graduate'),
                 'religion'=>request('religion'),

                'tribe'=>request('tribe'),

    'marital_status'=>request('marital_status'),
    'place_origin'=>request('place_origin'),
      'current_residence'=>request('current_residence'),
        'no_children'=>request('no_children'),


                 'designation'=>request('designation'),

'gurdian_name'=>request('gurdian_name'),
'parental_status'=>request('parental_status'),
'relationship'=>request('relationship'),



'guardian_mobile'=>request('guardian_mobile'),
                 'status'=>'Active',
                'user_id'=>auth()->id()
            ]);


//dd($student->id);


   if(request('attachment')){
                $attach = request('attachment');
                foreach($attach as $attached){

                     // Get filename with extension
                     $fileNameWithExt = $attached->getClientOriginalName();
                     // Just Filename
                     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                     // Get just Extension
                     $extension = $attached->getClientOriginalExtension();
                     //Filename to store
                     $imageToStore = $filename.'_'.time().'.'.$extension;
                     //upload the image
                     $path = $attached->storeAs('public/photos/', $imageToStore);

       
           // $id = attachment::where('destination_id', '=', $program->id)
           //  ->where('type', $type)
           //  ->get()->first();
     
     //dd($imageToStore);      
//dd(request('attachment'));

          if(request('attachment') !=null)
            {
      //dd('printintcxx');   

             $toupdate = student::where('id',$student->id)
            // ->where('type', $type)
             ->update([
            'photo'=>$imageToStore
           ]);

//dd('printin bnmn');   

           }else
           {
              // attachment::Create(
              //   [
              //   'destination_id'=>$program->id,
              //   'attachment'=>$imageToStore,
              //   'type'=> $type
              //   ]
              //   );   

              dd('no photo');       
         }
        }
      }
       



return redirect()->route('students.index')->with('success','Created successfuly');



         dd('saved');
        //Update Price offer,Get Discount value first
         $discount=specialOffer::where('tour_id',$program->id)
         ->get()->first();
         
         if($discount !=null)
         {
         $newPrice=request('price')-$discount->discount;
              $offerUpdate = specialOffer::where('tour_id',$program->id)             
             ->update([
            'new_price'=> $newPrice
        ]);
        }
       //End of Price offer

       //Update Itenary day
              $itenaryUpdate = itinerary::where('program_id',$program->id)
             ->where('tour_addon', $type)
             ->update([
            'days'=>request('days')
        ]);
        
         //Get ItenaryID
          $it=itinerary::where('program_id',$program->id)
             ->where('tour_addon', $type)
             ->get()->first();
       //End of Update Itenary day
          
         //End of delete
            if(request('attachment')){
                $attach = request('attachment');
                foreach($attach as $attached){

                     // Get filename with extension
                     $fileNameWithExt = $attached->getClientOriginalName();
                     // Just Filename
                     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                     // Get just Extension
                     $extension = $attached->getClientOriginalExtension();
                     //Filename to store
                     $imageToStore = $filename.'_'.time().'.'.$extension;
                     //upload the image
                     $path = $attached->storeAs('public/uploads/', $imageToStore);

       
           $id = attachment::where('destination_id', '=', $program->id)
            ->where('type', $type)
            ->get()->first();
           
        
        }
      }


        if($storeType=='Edit')
        {
        return redirect()->route('programs.index')->with('success','Created successfuly');
        }else{
        return redirect()->route('inclusive.show',$program->id)->with('success','Created successfuly');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {

        // return view('admins.students.user-details',compact('datas'));
         return view('admins.students.user-details');
      // return redirect()->route('programs.index')->with('success','Created successfuly');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestudentRequest  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestudentRequest $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //
    }
}
