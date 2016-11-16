<?php
// prevenir cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");




$operacion= $_POST['opciones'];
$opc = $operacion;


$numn= $_POST['n'];
$numn = intval($numn);

$numk= $_POST['k'];
$numk = intval($numk);




switch ($opc) {
    case 'factorial':
        echo $numn;
        $svar=1;
        for($i=2;$i<=$numn;$i++){
            $svar=$svar * $i;
            
        }
        echo "! = ".$svar;
        break;
        
        
        
    case 'permuSinRep':

        if ($numn > $numk) {
        $nmenosk= $numn - $numk;                   
        $svar2=1;
        $svar1=1;
            
            
        for($i=2;$i<=$numn;$i++){
            $svar1=$svar1 * $i;
        }

        for($j=2;$j<=$nmenosk;$j++){
            $svar2=$svar2 * $j;
        }
        
        
        echo "<br>".$resultado= $svar1 / $svar2;
        
            
        }else {
            echo "'r' tiene que ser mayor que 'n'";
        }
        
        
        break;
        
        
        
        
        
    case 'permuConRep':
        
        
      echo pow($numn, $numk);
       // echo $resultado;
        
        
        break;
        
        
        
    case 'combiConRep':

        $svar1= 1;
        $svar2= 1;
        $svar3= 1;
        $menos1= -1;
        $fact1 =  $numn + $numk + $menos1;
        $fact2 =  $numn + $menos1;
        
        for($i=2;$i<=$fact1;$i++){
            $svar1=$svar1 * $i;
        }

        for($j=2;$j<=$fact2;$j++){
            $svar2=$svar2 * $j;
        }

        for($k=2;$k<=$numk;$k++){
            $svar3=$svar3 * $k;
        }
        
        $resul1 = $svar3 * $svar2;
        echo $svar1 / $resul1;
        break;
    
    
    case 'combiSinRep':
        if($numk  < $numn){
            
                    $svar1= 1;
        $svar2= 1;
        $svar3= 1;
        $fact1 =  $numn - $numk;
        
        for($i=2;$i<=$fact1;$i++){
            $svar1=$svar1 * $i;
        }

        for($j=2;$j<=$numn;$j++){
            $svar2=$svar2 * $j;
        }

        for($k=2;$k<=$numk;$k++){
            $svar3=$svar3 * $k;
        }
        
        $resul1 = $svar3 * $svar1;
        echo $svar2 / $resul1;
        }else{
            
            echo "'n' tiene que ser mayor que 'r'";
        }


        break;
}








?>






