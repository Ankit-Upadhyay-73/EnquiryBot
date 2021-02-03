<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Handlingrequest extends Controller
{
    //
    public function returnData($message)
    {
        $content = "";
        $bk = 0;
        $matchpt=0;
        $arr = ["BScIT"=>"bscit is three year course","Hello"=>"Hello Welcome to Our College Automation Program You can find here college details,courses and others.","Hii"=>"Hello Welcome to Our College Automation Program","address"=>"Vasai","courses"=>"Available courses - BScit,BScs,Bcom,Msc,MBA,MCOM","contact"=>"+91 1440834872","thanks"=>"Your Most Welcome","ok"=>"done"];
        $values = explode(" ",$message);
        for($i=0;$i<sizeof($values);$i++)
        {
            foreach($arr as $key =>$value)
            {
                if((strcasecmp($values[$i],$key)==0))
                    {
                        $content.= $value."  ";
                        break;
                    }
                    
                $matchpt = 0;
                $keyChars = str_split($key);
                $valuesChars = str_split($values[$i]);
                foreach($keyChars as $kc)
                {
                    foreach($valuesChars as $vc)
                    {
                        if($kc==$vc)
                            $matchpt+=1;
                        else
                        {
                            $bk=1;
                            break;
                        }    
                    }
                    if($bk==1)
                        break;
                }
                if($matchpt>=3)
                    $content.= $value."  ";
            }
        }

        if($content=="")
            return "Can't Find What you want to ask??";
        return $content;
    }
}
