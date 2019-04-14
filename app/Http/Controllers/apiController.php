<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Manufacturer;
use App\Carmodels;
use Illuminate\Support\Facades\Input;
class apiController extends Controller
{
    public function addManufacturer(Request $request){

  $this->validate($request, [
        'manufacturer_name' => 'required|max:500',
       
        ]);
     $Manufacturer = Manufacturer::create($request->all());
     return $Manufacturer;
    }

    public function getManufacturer(){

    	return $getManufacturers = Manufacturer::all();
    }

    public function storeModel(Request $request){

      $this->validate($request, [
        'model_name' => 'required',
        'color' => 'required',
        'manufacturing_year' => 'required',
        'registration_number' => 'required',
        'note' => 'required',
        'manufacturer_id' => 'required',
        //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
    ]);

        $addModel = new Carmodels($request->input()) ;

         $addModel->model_name = $request->model_name;
         $addModel->color = $request->color;
         $addModel->manufacturing_year = $request->manufacturing_year;
         $addModel->registration_number = $request->registration_number;
         $addModel->manufacturer_id = $request->manufacturer_id;
         $addModel->note = $request->note;

	  if($request->hasFile('image'))
	   {    
		   $data = [];
		   foreach($request->file('image') as $image)
		   {
		      $fileName = $image->getClientOriginalName();
		      $destinationPath = public_path().'/files/' ;
		      //$file->move($destinationPath,$fileName);

		      $data[] = $fileName;
		   }
		 $addModel->image =  json_encode($data);
	   }
	  
	    $addModel->save();

       return  $addModel;
   }
   public function view_iventory(){

   	return $iventory = Manufacturer::with('carmodels')->get();
   }
}
