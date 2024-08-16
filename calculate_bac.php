<?php
$Weight=$_POST["weight"];
$WeightUnit=$_POST["unit"];
$Gender=$_POST["gender"];
$NumOfDrinks=$_POST["drinks"];
$AlcoholContent=$_POST["alcohol_content"];
$TimeElapsed=$_POST["time_elapsed"];

 if ($WeightUnit=="kg")
{ 
    $Weight=$Weight*0.2046;
}
 function male(){
    global $Weight,$WeightUnit,$Gender,$NumOfDrinks,$AlcoholContent,$TimeElapsed;
    if ($WeightUnit=="kg")
    {
       return ($AlcoholContent*5.14)/($Weight*0.73)-(0.015*$TimeElapsed);
    }
    else{
        return ($AlcoholContent*5.14)/($Weight*0.73)-(0.015*$TimeElapsed) ;
    }
}

function female(){
    global $Weight,$WeightUnit,$Gender,$NumOfDrinks,$AlcoholContent,$TimeElapsed;
    if ($WeightUnit=="kg")
    {
       $BAC=$BAC=($AlcoholContent*5.14)/($Weight*0.66)-(0.015*$TimeElapsed);;
       return $BAC;
    }
    else {
        return ($AlcoholContent*5.14)/($Weight*0.66)-(0.015*$TimeElapsed);
    }
}   

if($Gender=="male"){
    $Mvalue=male(); 
    if($Mvalue<=0.08)
    {
        echo" your BAC is $Mvalue  Legal to drive";
    }
    else{
        echo"your BAC is $Mvalue  Illegal to drive";
    }
}

if($Gender=="female"){
    $Fvalue=female();
    if($Fvalue<=0.08)
    {
        echo" your BAC is $Fvalue  legal to drive";
    }
    else {
        echo"your BAC is $Fvalue  Illegal to drive";
    }
}
?>