
<?php
    if(ISSET($_POST['convert'])){
        $val = $_POST['val'];
        $digit = $_POST['digit'];
        $currency = $_POST['currency'];
 
 
        if($val=="PHP" && $currency=="USD"){
            $output = $digit * 51.52;
            echo"<center><label class='text-success' style='font-size:20px;'>$".$output."</label></center>";
        }else if($val=="PHP" && $currency=="Euro"){
            $output = $digit * 63.62;
            echo"<center><label class='text-success' style='font-size:20px;'>€".$output."</label></center>";
        }else if($val=="PHP" && $currency=="PHP"){
            $output = $digit;
            echo"<center><label class='text-success' style='font-size:20px;'>₱".$output."</label></center>";
        }else if($val=="PHP" && $currency=="Japanese Yen"){
            $output = $digit * 0.47;
            echo"<center><label class='text-success' style='font-size:20px;'>¥".$output."</label></center>";
        }else if($val=="PHP" && $currency=="NAIRA"){
            $output = $digit * 7.52;
            echo"<center><label class='text-success' style='font-size:20px;'>#".$output."</label></center>"; 
        }else if($val=="USD" && $currency=="USD"){
            $output = $digit;
            echo"<center><label class='text-success' style='font-size:20px;'>$".$output."</label></center>";
        }else if($val=="USD" && $currency=="Euro"){
            $output = $digit*0.89;
            echo"<center><label class='text-success' style='font-size:20px;'>€".$output."</label></center>";
        }else if($val=="USD" && $currency=="PHP"){
            $output = $digit/51.52;
            echo"<center><label class='text-success' style='font-size:20px;'>₱".$output."</label></center>";
        }else if($val=="USD" && $currency=="Japanese Yen"){
            $output = $digit*107.72;
            echo"<center><label class='text-success' style='font-size:20px;'>¥".$output."</label></center>";
        }else if($val=="USD" && $currency=="NAIRA"){
            $output = $digit * 417.97;
            echo"<center><label class='text-success' style='font-size:20px;'>#".$output."</label></center>";
        }else if($val=="NAIRA" && $currency=="USD"){
            $output = $digit * 0.0024;
            echo"<center><label class='text-success' style='font-size:20px;'>$".$output."</label></center>";
        }else if($val=="NAIRA" && $currency=="Euro"){
            $output = $digit * 0.00234;
            echo"<center><label class='text-success' style='font-size:20px;'>€".$output."</label></center>";
        }else if($val=="NAIRA" && $currency=="PHP"){
            $output = $digit* 0.13;
            echo"<center><label class='text-success' style='font-size:20px;'>₱".$output."</label></center>";
        }else if($val=="NAIRA" && $currency=="Japanese Yen"){
            $output = $digit* 0.32;
            echo"<center><label class='text-success' style='font-size:20px;'>¥".$output."</label></center>";
        }else if($val=="NNAIRA" && $currency=="NAIRA"){
            $output = $digit;
            echo"<center><label class='text-success' style='font-size:20px;'>#".$output."</label></center>";
         }
    }
?>