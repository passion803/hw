<style>
    table{
        text-align:center;
        font-size: 20px;
        width=100%;
        height=100%;
        border=5px solid gray;
        color:black;
        font-family: "Lucida Console";
    }
</style>
<table>
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
                    echo '<td bgcolor="#999999">';
                    break;
                } 
            }
            
            if ($m == 1)
            {  
                if ($newi == 1)
                {  
                echo '<td bgcolor="#999999">';
                }else{
                    echo '<td bgcolor="#ffdb4d">';
                }                
            }   
                echo "{$newi}";
                echo '</td>';       
        } echo '</tr>';
    }
?>
