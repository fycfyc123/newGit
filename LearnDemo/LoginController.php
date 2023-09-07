<?php
class Learn{
    public function demo($array,$tag){
        for($i = 0; $i < count($array); $i++){
            $temp = $tag-$array[$i];
            $arraySearch = array_search($temp,$array);

            if($arraySearch !== false ){
                return [$i,$arraySearch];
            }
        }
    }
}
