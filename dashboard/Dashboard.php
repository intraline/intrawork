<?php


class Dashboard{



    public function getData(){
        $arr = array();
            $arr[0] = [  
                "nev" => "Simon",
                "szul" => "1985.12.02"
                ];
                $arr[1] = [  
                "nev" => "Pintér",
                "szul" => "1975.12.02"
                ];
                return $arr;
        }
    

}



?>