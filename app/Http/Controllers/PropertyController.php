<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Property;
use App\Http\Controllers\Controller;

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
        $data['price'] = $request->input('price');
        $data['property_type'] = $request->input('property_type');
        $data['location'] = $request->input('location');
        $data['region'] = $request->input('region');
        $data['quadrature'] = $request->input('quadrature');
        $data['floor'] = $request->input('floor');
        $data['floors'] = $request->input('floors');
        $data['panella'] = $request->input('panella');
        $data['brick'] = $request->input('brick');
        $data['epk'] = $request->input('epk');
        $data['pk'] = $request->input('pk');
        $data['beams'] = $request->input('beams');
        $data['date_of_construction'] = $request->input('date_of_construction');
        $data['under_construction'] = $request->input('under_construction');
        $data['with_transition'] = $request->input('with_transition');
        $data['elevator'] = $request->input('elevator');
        $data['central'] = $request->input('central');
        $data['parking'] = $request->input('parking');
        $data['garage'] = $request->input('garage');
        $data['mortgaged'] = $request->input('mortgaged');
        $data['internet'] = $request->input('internet');
        $data['furnished'] = $request->input('furnished');
        $data['cctv'] = $request->input('cctv');
        $data['access_control'] = $request->input('access_control');
        $data['security'] = $request->input('security');
        $data['renovated'] = $request->input('renovated');
        $data['property_discription'] = $request->input('property_discription');
        $data['validity_of_the_notice'] = $request->input('validity_of_the_notice');
        $data['phone'] = $request->input('phone');
        $data['gsm'] = $request->input('gsm');
        $data['e_mail'] = $request->input('e_mail');


        Property::save_deal($data);
    }

    public function store(Request $request) {
          $this->validate($request, [
        'price' => 'required|unique:posts|max:2',
       
    ]);
        
    }

    public function update(Request $request, $id) {
        
    }

}
