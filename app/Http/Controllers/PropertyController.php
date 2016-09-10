<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Property;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;
use Session;

class PropertyController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $product = Property::all();
        return view('property.index')->with('property', $products);
    }

    //store form data into database ....
    public function create(Request $request) {


        $data = array();
        $data['price'] = (int) $request->input('price');
        $data['property_type'] = (int) $request->input('property_type');
        $data['location'] = (int) $request->input('location');
        $data['region'] = (int) $request->input('region');
        $data['quadrature'] = (int) $request->input('quadrature');
        $data['floor'] = (int) $request->input('floor');
        $data['floors'] = (int) $request->input('floors');
        $data['adv-construction'] = (int) $request->input('adv-construction');
        $data['date_of_construction'] = $request->input('date_of_construction');
        $data['under_construction'] = (int) $request->input('under_construction');
        $data['with_transition'] = (int) $request->input('with_transition');
        $data['elevator'] = (int) $request->input('elevator');
        $data['central'] = (int) $request->input('central');
        $data['parking'] = (int) $request->input('parking');
        $data['garage'] = (int) $request->input('garage');
        $data['internet'] = (int) $request->input('internet');
        $data['furnished'] = (int) $request->input('furnished');
        $data['cctv'] = (int) $request->input('cctv');
        $data['access_control'] = (int) $request->input('access_control');
        $data['security'] = (int) $request->input('security');
        $data['renovated'] = (int) $request->input('renovated');
        $data['property_discription'] = $request->input('property_discription');
        $data['adv-type'] = (int) $request->input('adv-type');
        //$data['photo'] = $request->input('photo');
        $data['video'] = $request->input('video');
        $data['operating_business'] = (int) $request->input('operating_business');
//        $file = array('photo' => Input::file('photo'));
//        $file = Input::file('photo');
//        if (Input::hasFile('photo')) {
//            
//        }
//        Input::file('photo')->move($destinationPath = 'public/uploads');
//
//        $path = Input::file('image')->getRealPath('real_estate/public/public/uploads');

        $data['photo'] = $this->multiple_upload_photo();
        //

       // $rules = array('photo' => 'required',);

        $validated_data = $this->Validate_form($request, $data);

        Property::save_deal($validated_data);
    }

//    public function upload_photo() {
//        // getting all of the post data
//        $file = array('photo' => Input::file('photo'));
//        // setting up rules
//        $rules = array('photo' => 'required|mimes:jpeg,bmp,png',); //mimes:jpeg,bmp,png and for max size max:10000
//        // doing the validation, passing post data, rules and the messages
//        $validator = Validator::make($file, $rules);
//        if ($validator->fails()) {
//            // send back to the page with the input data and errors
//            return Redirect::to('adv')->withInput()->withErrors($validator);
//        } else {
//            // checking file is valid.
//            if (Input::file('photo')->isValid()) {
//                $destinationPath = 'uploads'; // upload path
//          
//                $fileName = Input::file('photo')->getClientOriginalName();
//                Input::file('photo')->move($destinationPath, $fileName); // uploading file to given path
//               
//                return $fileName;
//            } else {
//                // sending back with error message.
//                Session::flash('error', 'uploaded file is not valid');
//                return Redirect::to('adv');
//            }
//        }
//    }

    

//validation
    public function Validate_form(Request $request, $data) {
        $this->validate($request, [
            'price' => 'required|numeric',
            'region' => 'required',
            'quadrature' => 'required|numeric',
            'date_of_construction' => 'required|min:4|numeric',
            'property_discription' => 'required|min:15',
        ]);


        if (!$data['under_construction'] == 1) {
            $data['under_construction'] = 0;
        }
        if (!$data['with_transition'] == 1) {
            $data['with_transition'] = 0;
        }
        if (!$data['elevator'] == 1) {
            $data['elevator'] = 0;
        }
        if (!$data['central'] == 1) {
            $data['central'] = 0;
        }
        if (!$data['parking'] == 1) {
            $data['parking'] = 0;
        }
        if (!$data['garage'] == 1) {
            $data['garage'] = 0;
        }
        if (!$data['operating_business'] == 1) {
            $data['operating_business'] = 0;
        }
        if (!$data['internet'] == 1) {
            $data['internet'] = 0;
        }
        if (!$data['furnished'] == 1) {
            $data['furnished'] = 0;
        }
        if (!$data['cctv'] == 1) {
            $data['cctv'] = 0;
        }
        if (!$data['access_control'] == 1) {
            $data['access_control'] = 0;
        }
        if (!$data['security'] == 1) {
            $data['security'] = 0;
        }
        if (!$data['renovated'] == 1) {
            $data['renovated'] = 0;
        }

        if (!empty($data['video'])) {
            //do upload 
        } else {
            $data['video'] = 0;
        }
//        if(!empty($data['photo'])){
//        //do upload 
//    }else{
//        $data['photo']= 0;
//    }


        return $data;
    }

    public function update(Request $request, $id) {
        
    }
    public function multiple_upload_photo() {
        // getting all of the post data
        $files = Input::file('photo');
        // Making counting of uploaded images
        $file_count = count($files);
        // start count how many uploaded
        $uploadcount = 0;
        $photos = array();
        foreach ($files as $file) {
            $rules = array('file' => 'required|mimes:jpeg,bmp,png'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
            $validator = Validator::make(array('file' => $file), $rules);
            if ($validator->passes()) {
                $destinationPath = 'uploads';
                $filename = $file->getClientOriginalName();
                $photos[] = $filename;
                $upload_success = $file->move($destinationPath, $filename);
                $uploadcount ++;   
            }
        }
        if ($uploadcount == $file_count) {
            return json_encode($photos)    ;
        } else {
            return Redirect::to('adv')->withInput()->withErrors($validator);
        }
    }

}
