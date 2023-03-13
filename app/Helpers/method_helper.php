<?php

    function methodStatusList(){
        return array(
            1 => 'Dinheiro',
            2 => 'Pix',
            3 => 'Cartão',
        );
    }

    function methodStatus($n){

        $list = methodStatusList();

        if(isset($list[$n])){
            return $list[$n];
        }else{
            return "undefined";
        }
    
    }