<?php
$date1="2004-04-31";
$date2="2022-08-28";
$d1 = "2004-04-31";
$d2 = "2022-08-28";
$dae1=date_create($d1);
$dae2=date_create($d2);
$diff=date_diff($dae1,$dae2);
echo $diff->format("%R%a days");

$year1=substr($date1, 0, 4);
$year2=substr($date2, 0, 4);


$month1=substr($date1, 5, 2);
$month2=substr($date2, 5, 2);


$day1=substr($date1, 8, 2);
$day2=substr($date2, 8, 2);

$leap1=0;
$leap2=0;
$yeardays1=0;
$monthdays1=0;
$days1=0;
$yeardays2=0;
$monthdays2=0;
$days2=0;

if((int)$year1 % 4 == 0)
{
  if((int)$year1 % 100 == 0)
  {
  if((int)$year1 % 400 == 0)
  {
     $leap1=1;
  }
  }
  else
  {
  $leap1=1;
  }
}
if((int)$year2 % 4 == 0)
{
  if((int)$year2 % 100 == 0)
  {
  if((int)$year2 % 400 == 0)
  {
     $leap2=1;
  }
  }
  else
  {
  $leap2=1;
  }
}
if(((int)$year1==(int)$year2) && ((int)$month1!=(int)$month2) )
{
for ($x=(int)$month1 ; $x <= (int)$month2; $x++) {
  switch ($x) {
  case "1":
    if((int)$month1==1)
  {
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else
    if((int)$month2==1)
  {
    $monthdays1=$monthdays1+(int)$day2;
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
    break;
  case "2":
    if((int)$month1==2)
  {
  if($leap1==1)
  {
    $monthdays1=$monthdays1+(29-(int)$day1);
   }
   else
   {
   $monthdays1=$monthdays1+(28-(int)$day1);
   }
  } 
  else if((int)$month2==2)
  {
 
    $monthdays1=$monthdays1+(int)$day2;
   
  }
  else
  {
  if($leap1==1)
  {
    $monthdays1=$monthdays1+29;
   }
   else
   {
   $monthdays1=$monthdays1+28;
   }
  }
   break;
  case "3":
  if((int)$month1==3)
  {
  
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else if((int)$month2==3)
  {
  
    $monthdays1=$monthdays1+(int)$day2;
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
    
    break;
  case "4":
  if((int)$month1==4)
  {
  
    $monthdays1=$monthdays1+(30-(int)$day1);
   }
   else if((int)$month2==4)
  {
  
    $monthdays1=$monthdays1+(int)$day2;
   }
   else
   {
  
   $monthdays1=$monthdays1+30;
   }
    break;
  case "5":
  if((int)$month1==5)
  {
  
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else if((int)$month2==5)
  {
  
    $monthdays1=$monthdays1+(int)$day2;
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
   
    break;
  case "6":
  if((int)$month1==6)
  {
  
    $monthdays1=$monthdays1+(30-(int)$day1);
   }
   else if((int)$month2==6)
  {
  
    $monthdays1=$monthdays1+(int)$day2;
   }
   else
   {
  
   $monthdays1=$monthdays1+30;
   }
   
    break;
  case "7":
   if((int)$month1==7)
  {
  
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else if((int)$month2==7)
  {
  
    $monthdays1=$monthdays1+(int)$day2;
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
   
    break;
  case "8":
  if((int)$month1==8)
  {
  
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else if((int)$month2==8)
  {
  
    $monthdays1=$monthdays1+(int)$day2;
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
    
    break;
  case "9":
   if((int)$month1==9)
  {
  
    $monthdays1=$monthdays1+(30-(int)$day1);
   }
   else if((int)$month2==9)
  {
  
    $monthdays1=$monthdays1+(int)$day2;
   }
   else
   {
  
   $monthdays1=$monthdays1+30;
   }
    
    break;
  case "10":
     if((int)$month1==10)
  {
  
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else if((int)$month2==10)  {
  
    $monthdays1=$monthdays1+(int)$day2;
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
    
    break;
  case "11":
     if((int)$month1==11)
  {
  
    $monthdays1=$monthdays1+(30-(int)$day1);
   }
   else  if((int)$month2==11)
  {
  
    $monthdays1=$monthdays1+(int)$day2;
   }
   else
   {
  
   $monthdays1=$monthdays1+30;
   }
    
    break;
  case "12":
     if((int)$month1==12)
  {
  
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else if((int)$month2==12)
  {
  
    $monthdays1=$monthdays1+(int)$day2;
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
    
    break;
}
}
}
else
{
for ($x=(int)$month1 ; $x <= 12; $x++) {
   
  switch ($x) {
  case "1":
    if((int)$month1==1)
  {
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
    break;
  case "2":
    if((int)$month1==2)
  {
  if($leap1==1)
  {
    $monthdays1=$monthdays1+(29-(int)$day1);
   }
   else
   {
   $monthdays1=$monthdays1+(28-(int)$day1);
   }
  } 
  else
  {
  if($leap1==1)
  {
    $monthdays1=$monthdays1+29;
   }
   else
   {
   $monthdays1=$monthdays1+28;
   }
  }
   break;
  case "3":
  if((int)$month1==3)
  {
  
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
    
    break;
  case "4":
  if((int)$month1==4)
  {
  
    $monthdays1=$monthdays1+(30-(int)$day1);
   }
   else
   {
  
   $monthdays1=$monthdays1+30;
   }
    break;
  case "5":
  if((int)$month1==5)
  {
  
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
   
    break;
  case "6":
  if((int)$month1==6)
  {
  
    $monthdays1=$monthdays1+(30-(int)$day1);
   }
   else
   {
  
   $monthdays1=$monthdays1+30;
   }
   
    break;
  case "7":
   if((int)$month1==7)
  {
  
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
   
    break;
  case "8":
  if((int)$month1==8)
  {
  
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
    
    break;
  case "9":
   if((int)$month1==9)
  {
  
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
    
    break;
  case "10":
     if((int)$month1==10)
  {
  
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
    
    break;
  case "11":
     if((int)$month1==11)
  {
  
    $monthdays1=$monthdays1+(30-(int)$day1);
   }
   else
   {
  
   $monthdays1=$monthdays1+30;
   }
    
    break;
  case "12":
     if((int)$month1==12)
  {
  
    $monthdays1=$monthdays1+(31-(int)$day1);
   }
   else
   {
  
   $monthdays1=$monthdays1+31;
   }
    
    break;
}
 
}

for ($x=1 ; $x <= (int)$month2; $x++) {
    
  switch ($x) {
  case "1":
    if((int)$month2==1)
  {
    $monthdays2=$monthdays2+((int)$day2-1);
   }
   else
   {
  
   $monthdays2=$monthdays2+31;
   }
    break;
  case "2":
    if((int)$month2==2)
  {
 
   $monthdays2=$monthdays2+((int)$day2-1);
   
  } 
  else
  {
  if($leap1==1)
  {
    $monthdays2=$monthdays2+29;
   }
   else
   {
   $monthdays2=$monthdays2+28;
   }
  }
   break;
  case "3":
  if((int)$month2==3)
  {
  
    $monthdays2=$monthdays2+((int)$day2-1);
   }
   else
   {
  
   $monthdays2=$monthdays2+31;
   }
    
    break;
  case "4":
  if((int)$month2==4)
  {
  
    $monthdays2=$monthdays2+((int)$day2-1);
   }
   else
   {
  
   $monthdays2=$monthdays2+30;
   }
    break;
  case "5":
  if((int)$month2==5)
  {
  
    $monthdays2=$monthdays2+((int)$day2-1);
   }
   else
   {
  
   $monthdays2=$monthdays2+31;
   }
   
    break;
  case "6":
  if((int)$month2==6)
  {
  
    $monthdays2=$monthdays2+((int)$day2-1);
   }
   else
   {
  
   $monthdays2=$monthdays2+30;
   }
   
    break;
  case "7":
   if((int)$month2==7)
  {
  
    $monthdays2=$monthdays2+((int)$day2-1);
   }
   else
   {
  
   $monthdays2=$monthdays2+31;
   }
   
    break;
  case "8":
  if((int)$month2==8)
  {
  
    $monthdays2=$monthdays2+((int)$day2-1);
   }
   else
   {
  
   $monthdays2=$monthdays2+31;
   }
    
    break;
  case "9":
   if((int)$month2==9)
  {
  
    $monthdays2=$monthdays2+((int)$day2-1);
   }
   else
   {
  
   $monthdays2=$monthdays2+31;
   }
    
    break;
  case "10":
     if((int)$month2==10)
  {
  
    $monthdays2=$monthdays2+((int)$day2-1);
   }
   else
   {
  
   $monthdays2=$monthdays2+31;
   }
    
    break;
  case "11":
     if((int)$month2==11)
  {
  
    $monthdays2=$monthdays2+((int)$day2-1);
   }
   else
   {
  
   $monthdays2=$monthdays2+30;
   }
    
    break;
  case "12":
     if((int)$month2==12)
  {
  
    $monthdays2=$monthdays2+((int)$day2-1);
   }
   else
   {
  
   $monthdays2=$monthdays2+31;
   }
    
    break;
}
 
}
}




if((int)$year1==(int)$year2 && (int)$month1==(int)$month2)
{
 echo ((int)$day2-(int)$day1);
}
else if(((int)$year1==(int)$year2) && ((int)$month1!=(int)$month2))
{
echo $monthdays1;
}
else if((int)$year2-(int)$year1==1)
{
echo ($monthdays1+$monthdays2);
}
else
{
$leapyear=0;
for ($x=(int)$year1+1 ; $x < (int)$year2; $x++) {
if((int)$x % 4 == 0)
{
  if((int)$x % 100 == 0)
  {
  if((int)$x % 400 == 0)
  {
     $leapyear=$leapyear+366;
  }
  else
  {
  $leapyear=$leapyear+365;
  }
  }
  else
  {
  $leapyear=$leapyear+366;
  }
}
else
{
$leapyear=$leapyear+365;
}
}
echo ($leapyear+$monthdays1+$monthdays2);
}





?>