<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\tribe;
use App\Models\lodge;
use App\Models\relation;
use App\Models\classg;
use App\Models\session;

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
          $classes = classg::get();
          //dd($classes);
             return view('admins.students.index',compact('datas','classes'));
    }

    public function research(request $request)
    {
     
         $datas = student::where('class',request('classg'))
         ->where('session',request('session'))
         ->get();

          $sessions = session::where('class_name',request('classg'))
                 ->get();

         //dd($sessions);
 
 $selected_session=request('session');
 $selected_class=request('classg');

          $classes = classg::get();
             return view('admins.students.index',compact('datas','sessions','classes','selected_session','selected_class'));
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
       $lodges = lodge::orderBy('lodge_name', 'asc')->get();
        $relations = relation::orderBy('relation', 'asc')->get();

        //dd($relations);
          return view('admins.students.add',compact('tribes','lodges','relations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorestudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

           $pin=rand(10000,99999);
           // $storeType=request('edit');
           //  $itDaysBefore=itinerary::where('program_id',request('id'))
           //   ->where('tour_addon',$type)
           //   ->get()->first();  

//   $pinFound=student::where('pin',$pin)
//         ->first();
// dd($pinFound);


// if($pinFound !=null)
// {
// $pin=$pin
// }
         
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */





    public function editStudent($id)
    {
     //dd($id);

       $datas = student::where('id', $id)->first();  
        $tribes = tribe::orderBy('tribe', 'asc')->get(); 
       $lodges = lodge::orderBy('lodge_name', 'asc')->get();

        $relations = relation::orderBy('relation', 'asc')->get();
    
//dd($datas);
             return view('admins.students.edit-student',compact('datas','tribes','lodges','relations'));
     }





    public function show($id)
    {

        // return view('admins.students.user-details',compact('datas'));
//dd($id);
           $student=student::where('status','Active')
           ->where('id',$id)
           ->first();

                      //dd($students);
         return view('admins.students.user-details',compact('student'));
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
    public function update($id)
    {
        
//dd('print');

         
          $studentUpdate =  student::UpdateOrCreate(
            [   'id'=>$id],
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


          if(request('attachment') !=null)
            {
      //dd('printintcxx');   

             $toupdate = student::where('id',$student->id)
            // ->where('type', $type)
             ->update([
            'photo'=>$imageToStore
           ]);
           }
        }
      }
       
   return redirect()->route('students.index')->with('success','Created successfuly');
    }


   public function getA($p){
       // Fetch Employees by Departmentid
       $aData['dataA'] = student::getAsset($p);
       echo json_encode($aData);
       exit;
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
