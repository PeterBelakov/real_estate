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

        $validated_data = $this->Validate_form($request, $data);

        Property::save_deal($validated_data);
    }

//validation
    public function Validate_form(Request $request, $data) {
        $this->validate($request, [
            'price' => 'required|numeric',
            'region' => 'required|min:3',
            'quadrature' => 'required|numeric',
            'phone' => 'required|min:4|numeric',
            'date_of_construction' => 'required|min:4|numeric',
            'gsm' => 'required|min:11|numeric',
            'property_discription' => 'required|min:15',
            'e_mail' => 'required|email'
        ]);

        if (!$data['panella'] == 1) {
            $data['panella'] = 0;
        }
        if (!$data['brick'] == 1) {
            $data['brick'] = 0;
        }
        if (!$data['epk'] == 1) {
            $data['epk'] = 0;
        }
        if (!$data['pk'] == 1) {
            $data['pk'] = 0;
        }
        if (!$data['beams'] == 1) {
            $data['beams'] = 0;
        }
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
        if (!$data['mortgaged'] == 1) {
            $data['mortgaged'] = 0;
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


        return $data;
    }

    public function update(Request $request, $id) {
        
    }

}
