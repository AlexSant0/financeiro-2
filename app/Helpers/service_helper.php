<?php

    function serviceStatusList(){
        return array(
            1 => 'Volume Russo',
            2 => 'Fio a fio',
            3 => 'Sobrancelha',
            4 => 'Brasileiro',
        );
    }

    function serviceStatus($n){

        $list = serviceStatusList();

        if(isset($list[$n])){
            return $list[$n];
        }else{
            return "undefined";
        }
    
    }