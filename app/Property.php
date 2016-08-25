<?php

namespace App;
use DB;
        
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
   // protected $table = 'property';
   // protected $primarykey = 'property_id';
    //public $timestamps = false;
   // protected $fillable =['proretty_id','property_type', 'location', 'price'];
    
   // protected
    public static function save_deal($data){
        
       if (!$data['panella']==1){
           $data['panella'] = 0;
       }
       if (!$data['brick']==1){
           $data['brick'] = 0;
       }
       if (!$data['epk']==1){
           $data['epk'] = 0;
       }
       if (!$data['pk']==1){
           $data['pk'] = 0;
       }
       if (!$data['beams']==1){
           $data['beams'] = 0;
       }
        if (!$data['under_construction']==1){
           $data['under_construction'] = 0;
       }
       if (!$data['with_transition']==1){
           $data['with_transition'] = 0;
       }
       if (!$data['elevator']==1){
           $data['elevator'] = 0;
       }
       if (!$data['central']==1){
           $data['central'] = 0;
       }
       if (!$data['parking']==1){
           $data['parking'] = 0;
       }
       if (!$data['garage']==1){
           $data['garage'] = 0;
       }
       if (!$data['mortgaged']==1){
           $data['mortgaged'] = 0;
       }
       if (!$data['internet']==1){
           $data['internet'] = 0;
       }
       if (!$data['furnished']==1){
           $data['furnished'] = 0;
       }
       if (!$data['cctv']==1){
           $data['cctv'] = 0;
       }
       if (!$data['access_control']==1){
           $data['access_control'] = 0;
       }
       if (!$data['security']==1){
           $data['security'] = 0;
       }
       if (!$data['renovated']==1){
           $data['renovated'] = 0;
       }
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
