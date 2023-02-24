<?php
        function equalation($a, $b){
            $c=$a+$b;
    
            return $c;
        }


        function word_character_count($data){
            $given_text=$data['given_text'];
            $rdata=array();

            $rdata['number_of_word']=str_word_count ($given_text);
            $rdata['number_of_character']=strlen($given_text);

            return $rdata;
        }


        function calculator($data){
            $first_number=$data['first_number'];
            $last_number=$data['last_number'];
            $btn=$data['btn'];
        
            if ($btn=="+") {
                $result=$first_number+$last_number;
            }elseif($btn=="-"){
                $result=$first_number-$last_number;
            }elseif($btn=="*"){
                $result=$first_number*$last_number;
            }elseif($btn=="/"){
                $result=$first_number/$last_number;
            }
            elseif($btn=="%"){
                $result=$first_number%$last_number;
            }
            return $result;
        }



        function string_fount($data){
            $given_text=$data['given_text'];
            $adata=array('php', 'java', 'python', 'javascript', 'c#', 'c++', 'c', 'js', 'html', 'css', 'jquary');
            $search=in_array($given_text, $adata);
    
            if ($search) {
                $result='Fount';
            }else{
                $result='Not Found';
            }
            return $result;
        }



        function make_password($data){
            $given_length=$data['given_length'];
            $pass_char=array('@', '1', 'u', '%', 'a', '7', '#', 'c', '$', '&');
            $password='';
            for ($i=1; $i<=$given_length; $i++) { 
                $randompassword=rand(0, 9);
                $password.=$pass_char[$randompassword];
            }
            return $password;
        }


        
        function sum_of_seris($data){
            $starting_number=$data['starting_number'];
            $ending_number=$data['ending_number'];
            $sum=0;

            for ($i=$starting_number; $i<=$ending_number; $i++) { 
                if ($i%2==0) {
                    $sum+=$i;
                }
            }
            return $sum;
        }


?>