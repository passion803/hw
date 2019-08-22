<table border="5px solid gray" width="50%" height="50%" style="text-align:center"  >
<?php
    define("ROW", 10);
    define("DPR", 10);   // tds per row
    define("START", 1); 

    for ($k=0; $k<ROW; $k++){
        echo '<tr>';
        for ($i=START; $i<START+DPR; $i++){
            $newi = $i + $k*DPR;
            $m = 1;  
                        
            for ($j = 2; $j < $newi ; $j++)
            { 
                
                if ($newi % $j == 0){
                    $m = 0;
                    echo '<td bgcolor="#999999" style="color:white">';
                    break;
                } 
            }
            
            if ($m == 1)
            {  
                if ($newi == 1)
                {  
                echo '<td bgcolor="#999999" style="color:white">';
                }else{
                    echo '<td bgcolor="#ffdb4d" style="color:black">';
                }                
            }   
                echo "{$newi}";
                echo '</td>';       
        } echo '</tr>';
    }
?>


