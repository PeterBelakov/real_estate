<?php

namespace App;
use DB;
        
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    
    public static function save_deal($data){
        
        print_r($data);
     //   print_r($data);
       DB::insert('insert into property ( property_type, location, price, region,'
               . ' quadrature, floor, floors, panella, brick, epk, pk, beams,'
               . ' date_of_construction, under_construction, with_transition,'
               . ' elevator, central, parking, garage, mortgaged, internet,'
               . ' furnished, cctv, access_control, security, renovated, '
               . 'property_discription, validity_of_the_notice, phone, gsm, e_mail ) '
               . 'values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, '
               . '?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
               [ $data['property_type'], $data['location'],$data['price'],$data['region'],
                $data['quadrature'], $data['floor'], $data['floors'], $data['panella'],
                $data['brick'], $data['epk'], $data['pk'], $data['beams'], 
                $data['date_of_construction'], $data['under_construction'], 
                $data['with_transition'], $data['elevator'], $data['central'], 
                $data['parking'], $data['garage'], $data['mortgaged'],
                $data['internet'], $data['furnished'], $data['cctv'], 
                $data['access_control'], $data['security'], $data['renovated'],
                $data['property_discription'], $data['validity_of_the_notice'], 
                $data['phone'], $data['gsm'], $data['e_mail'] ]);
    }
    
    
}
