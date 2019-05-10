
<?php 

function isEven($n) 
{ 
    $l = strlen($n); 
  

    $Num = false; 
    for ($i = $l - 1; $i >= 0; $i--)  
    { 
  
 
        if ($n[$i] == '0' && $Num == false) 
        continue; 
  
 
        if ($n[$i] == '.') 
        { 
            $Num = true; 
            continue; 
        } 
  

        if (($n[$i] - '0') % 2 == 0)  
            return true; 
              
        return false;      
    } 
} 

    $n = "19.9"; 
    if (isEven($n)) 
    Print "Even"; 
    else
    Print "Odd"; 
    
  
?> 
