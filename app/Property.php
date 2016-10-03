<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Property extends Model {

    public static function save_deal($data) {


        DB::insert('INSERT INTO `property` '
                . '   (`property_type`, `location`, `price`,
                `region`, `quadrature`, `floor`, `floors`,
                `adv-construction`, `date_of_construction`,
                `under_construction`, `with_transition`, `elevator`,
                `central`, `parking`, `garage`, `internet`,
                `furnished`, `cctv`, `access_control`,
                `security`, `renovated`, `property_discription`,
                 `adv-type`, `operating_business`, `photo`
                )'
                . ' VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, '
                . '?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$data['property_type'], $data['location'], $data['price'],
            $data['region'], $data['quadrature'], $data['floor'], $data['floors'],
            $data['adv-construction'], $data['date_of_construction'],
            $data['under_construction'], $data['with_transition'], $data['elevator'],
            $data['central'], $data['parking'], $data['garage'], $data['internet'],
            $data['furnished'], $data['cctv'], $data['access_control'],
            $data['security'], $data['renovated'], $data['property_discription'],
            $data['adv-type'], $data['operating_business'], $data['photo']]);
    }

}
