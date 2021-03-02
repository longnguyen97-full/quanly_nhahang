<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiftCode;

class AjaxController extends Controller
{
    public function getDiscount($idGiftcode) {
        $giftcodes = GiftCode::where('id_gcode',$idGiftcode)->get();
        
    	foreach ($giftcodes as $giftcode) {
            echo "<option value=$giftcode->id_gcode>$giftcode->discount</option>";
            
            session()->put('discount',$giftcode->discount);
        }
    }

    public function getInitTotal($init_total) {
        session()->put('init_total',$init_total);
    }

    public function getTotal($total) {
        $total = session()->get('init_total');
        $total -= session()->get('discount');
        echo $total;
        if(session()->has('discount')) { session()->forget('discount'); }
    }
}
