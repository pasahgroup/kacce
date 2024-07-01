<?php

namespace App\Http\Controllers;

use App\Models\asset;
use App\Models\tribe;
use App\Models\lodge;
use App\Models\relation;

use App\Models\category;
use App\Models\subcategory;
use App\Models\student;

use App\Models\designation;
use App\Models\classg;
use App\Models\session;

// use App\Models\category;

use Illuminate\Http\Request;
use App\Http\Requests\StoreassetRequest;
use App\Http\Requests\UpdateassetRequest;
use DB;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       

         $search="iflag";
         $assets = asset::join('categories','assets.category','categories.id')
        ->select('assets.*','categories.category')
        ->where('assets.status','!=','deleted')
        ->orderBy('assets.id','desc')->get();       

//dd($assets);

          $categories = category::get();
      
  //$classes = classg::where('class',request('classg'))
          //->get();
         $sessions = session::where('class_name',request('classg'))
               ->get();
          //dd($assets);
             return view('admins.assets.asset',compact('assets','categories','sessions','search'));
    

//  // Fetch departments
//          $departments['data'] = category::orderby("category","asc")
//               ->select('id','category')
//               ->get();

// //dd( $departments['data']);
//          // Load index view
//         //  return view('index')->with("departments",$departments);

//              return view('admins.index',compact('departments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd($id);
// Fetch departments
         $departments['data'] = category::orderby("category","asc")
              ->select('id','category')
              ->get();

//dd( $departments['data']);
         // Load index view
        //  return view('index')->with("departments",$departments);

             return view('admins.index',compact('departments'));
    }



 public function getSubcategory($departmentid=0){

//dd($departmentid);
         // Fetch Employees by Departmentid
         $empData['data'] = subcategory::orderby("subcategory","asc")
              ->select('category_id','subcategory')
              ->where('category_id',$departmentid)
              ->get();


//dd( $empData['data']);
         return response()->json($empData);

    }

 public function research(request $request)
    {
     //dd('search');
     
     $search="sflag";

         $datas = student::where('class',request('classg'))
         ->where('session',request('session'))
         ->get();

          $sessions = session::where('class_name',request('classg'))
                   ->where('session','!=',request('session'))
                 ->get();

         //dd($sessions);
 $designations = designation::orderBy('designation', 'asc')->get();
            $categories = category::orderBy('category', 'asc')->get();
 $selected_session=request('session');
 $selected_class=request('classg');

          $classes = classg::get();
             // return view('admins.students.index',compact('datas','search','sessions','classes','selected_session','selected_class'));
              return view('admins.asset.add-asset',compact('lodges','designations','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreassetRequest  $request
     * @return \Illuminate\Http\Response
     */


      public function getB($p){
       // Fetch Employees by Departmentid
       // $aData['dataC'] = student::getAsset($p);
        $aData['dataC'] = asset::getAsset($p);
       echo json_encode($aData);
       exit;
     }


       public function getC($p){
       // Fetch Employees by Departmentid
       // $aData['dataC'] = student::getAsset($p);
        $aData['dataN'] = asset::getAsset($p);
       echo json_encode($aData);
       exit;
     }




    public function store(Request $request)
    {

       // dd(request('subcategory'));
              
          $asset =  asset::UpdateOrCreate(
            [  
                  'asset_name'=>request('asset_name'),
                  'category'=>request('category'),
                   'subcategory'=>request('subcategory'),
                  'serial_no'=>request('serial_no'),

        ],
            [
                 'model'=>request('model'),
                 'tag_no'=>request('tag_no'),
                 'barcode'=>request('barcode'),
                   'mac_address'=>request('mac_address'),
                 'assign_date'=>request('assign_date'),
                 'location'=>request('location'),
                 'owned_by'=>request('owned_by'),
              
                 'assigned_to'=>request('assigned_to'),

                  'supply'=>request('supply'),
                 'bprice'=>request('bprice'),
                 'warranty'=>request('warranty'),

                 'status'=>request('status'),
                'user_id'=>auth()->id()
            ]);




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

             $toupdate = asset::where('id',$asset->id)
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
       
   return redirect()->route('addAsset.index')->with('success','Assed recorded successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(asset $asset,$id)
    {
        dd('Show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $lodges = lodge::where('status','Active')
         ->orderBy('lodge_name', 'asc')->get();       
         $designations = designation::orderBy('designation', 'asc')->get();

        // $asset = asset::where('id',$id)->first();
          $asset = asset::join('categories','assets.category','categories.id')
        ->select('assets.*','categories.category')
        ->where('assets.id',$id)
        ->orderBy('assets.id','desc')->first();
 //dd($asset);

    $categories = category::get();

  // Fetch departments
          $departments['data'] = category::orderby("category","asc")
              ->select('id','category')
               ->get();
             return view('admins.assets.asset-edit',compact('departments','categories','asset'));
    }


public function editasset($id)
    {    

        $lodges = lodge::where('status','Active')
         ->orderBy('lodge_name', 'asc')->get();       
         $designations = designation::orderBy('designation', 'asc')->get();

         $asset = asset::where('id',$id)->first();

             return view('admins.employee.edit-employee',compact('lodges','designations','employee'));
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateassetRequest  $request
     * @param  \App\Models\asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

       $asset = asset::where('id',$id)->first();


          $assetUpdate =  student::UpdateOrCreate(
            [   'id'=>$id],
            [
              
                'asset_name'=>request('asset_name'),
                  'category'=>request('category'),
                   'subcategory'=>request('subcategory'),
                  'serial_no'=>request('serial_no'),

                 'model'=>request('model'),
                 'tag_no'=>request('tag_no'),
                 'barcode'=>request('barcode'),
                   'mac_address'=>request('mac_address'),
                 'assign_date'=>request('assign_date'),
                 'location'=>request('location'),
                 'owned_by'=>request('owned_by'),
              
                 'assigned_to'=>request('assigned_to'),

                  'supply'=>request('supply'),
                 'bprice'=>request('bprice'),
                 'warranty'=>request('warranty'),

                 'status'=>request('status'),
                'user_id'=>auth()->id()
           
            ]);


//dd(request('attachment'));


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


    // dd($asset->photo);  
$imgfile=$asset->photo;
  // dd($imgfile);
  if (file_exists($imgfile)) {
    dd($imgfile);
        unlink($imgfile);
        echo 'File ' . $imgfile . ' has been deleted';
    } else {
        // dd('popo m');
        // echo 'Could not delete ' . $imgfile . ', file does not exist';
        unlink("public/photos/".$imgfile);
    }

    //  dd('printintcxx');   

             $toupdate = asset::where('id',$assetUpdate->id)
            // ->where('type', $type)
             ->update([
            'photo'=>$imageToStore
           ]);
           }
        }
      }
       
   return redirect()->route('asset.index')->with('success','Created successfuly');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        $delete = asset::where('id',$id)->first();
      //dd($delete);
        if($delete->delete()){
             DB::statement("delete from assets where id=$id");
            return redirect()->route('asset.index')->with('info','Asset deleted successfully');
        }    
        else{
            return redirect()->route('asset.index')->with('error','Employee not exists');
        }

    }
}
