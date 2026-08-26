//if-else switch statement
<? php 
$name = "Tawsif";
switch ($name) { 
    case "Tawsif": 
        echo "My name is Tawsif"; 
        break;
        default:
        echo" Yourname is not Ronie, it is $name";

}
?>


<? php
$age = 26; 
if ($age <10) 
    {
    echo "You're a child"; 
    }
    else if ($age >10 && $age <20) 
    { echo "you're a teenager"; }
    
    else 
    { echo "you're an adult"; }
    ?> 

    //for and each loop 
    <? php 

for ($x = 0; $x <= 10; $x++) { 
    echo "The number is: $x <br>"; 
}
?> 

<? php
$age= array("Tawsif"=>20, "Shahdat"=>22, "Anon"=> 26);
foreach($age as $x=> $val) {
    echo "$x= $val <br>";
}
?>
