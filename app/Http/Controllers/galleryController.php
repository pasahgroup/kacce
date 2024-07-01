<?php

namespace App\Http\Controllers;
use App\Models\slider;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    //
   public function treeGallery()
    {
        $title='Tree Planting';
   

   $sliders = slider::where('status','1')
           ->where('section','tree')
                   ->limit(10)->get();


     return view('website.galleries.gallery',compact('sliders','title'));
    }



  public function beeGallery()
    {
        $title='Bee Keeping';   

   $sliders = slider::where('status','1')
           ->where('section','bee')
                   ->limit(10)->get();

     return view('website.galleries.gallery',compact('sliders','title'));
    }



 public function entrepreneurshipGallery()
    {
        $title='Entrepreneurship';   

   $sliders = slider::where('status','1')
           ->where('section','entrepreneurship')
                   ->limit(10)->get();

     return view('website.galleries.gallery',compact('sliders','title'));
    }




 public function vulnarableGallery()
    {
        $title='Vulnarable Children';   

   $sliders = slider::where('status','1')
           ->where('section','vulnarable')
                   ->limit(10)->get();

     return view('website.galleries.gallery',compact('sliders','title'));
    }


  public function healthGallery()
    {
        $title='Health';   

   $sliders = slider::where('status','1')
           ->where('section','health')
                   ->limit(10)->get();

     return view('website.galleries.gallery',compact('sliders','title'));
    }


    public function historicalGallery()
    {
    $title='Historical Sites';
    $safaris = program::
  join('attachments','programs.id','attachments.destination_id')
  ->select('programs.*','attachments.attachment')
   ->where('attachments.type','Programs')
   ->where('programs.type','Historical Site')
    ->get();
   // dd($safaris);
     return view('website.galleries.gallery',compact('safaris','title'));
    }

}
