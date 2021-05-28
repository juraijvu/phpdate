<?php
$d1 = "2020-03-29";
$d2 = "2020-12-11";
$date1=date_create($d1);
$date2=date_create($d2);
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
function expld($date)
{
     $date = str_replace("/", "-", $date);
     $date = explode("-",$date);
      return $date;
     } 
   $newdate = expld($d1);
   
$t=$newdate[0];
   function expldd($date1)
{
     $date1 = str_replace("/", "-", $date1);
     $date1 = explode("-",$date1);
      return $date1;
     } 
   $newdate1 = expld($d2);
   
      
 
       $d3=$newdate1[0]-$newdate[0];
       $d4=$newdate1[1]-$newdate[1];
       $d5=$newdate1[2]-$newdate[2];
       for($i=0;$i++;$i<=$d3)
   {
       $d9=$newdate[0]+i;
       $d11=$d9%4;
       if($d11=0);
       {
           $d10=366;
           $d6=(($d3-1)*365)+$d10; 
       }
     
    
        
   }
       $d6=$d3*365;
        
    function thirty($d30)
    {
       for($j=0;$j++;$j<=$d4)
       {
           $d22=$d30+$j;
           $f2=$d22%2;
           if($f2=0 AND $d22[0]!=8 AND $d22[0]!=2)
           {
              $d20=30;
           }
           $d33=$d33+$d20;
       }
       return $d33;
    }
    
    $q1=thirty($t);
    function thirtyone($d50)
    {
       for($h=0;$h++;$h<=$d4)
       {
           $d32=$d50+$h;
           $f3=$d32%2;
           if($f3!=0 AND $d22[0]!=8 AND $d22[0]!=0)
           {
              $d40=31;
           }
           $d55=$d55+$d40;
       }
       return $d55;
    }
    $q2=thirtyone($t);
    function feb($d70)
    {
       for($u=0;$u++;$u<=$d4)
       {
           $d52=$d70+$u;
           if($d52[0]==2)
           {
              $d60=29;
           }
           $d77=$d77+$d60;
       }
       return $d77;
    }
    $q3=feb($t);
    function august($d90)
    {
       for($k=0;$k++;$k<=$d4)
       {
           $d62=$d90+$k;
           if($d62[0]==8)
           {
              $d80=31;
           }
           $d99=$d99+$d80;
           
       }
    return $d99;
    }
    $q4=august($t);
    
    $d7=$q1+$q2+$q3+$q4;
       
       $days=$d6+$d7+$d5;
       echo $days;  
  

      


?>

