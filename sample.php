<?php
$var1='hello';
print_r($var1);
echo"<br>";
$age = array("Peter","Ben", "Joe");
var_dump ($age);
echo "<br>";
$var2=1;
$var3=2;
echo $var2%$var3;
$var4='hello';
if('hello'=='hello'|| 'hello'=='aa'){
    echo 'here';
}else{
    echo'there';}
$var5=2;
$var6=2;
if($var5<$var6){
    echo'same';
}elseif ($var5==$var6) {
echo 'equal elseif';
}else{
    echo 'lesser';
}

$e=5;
for ($i=0;$i<5;$i++){
    echo$e;
}

$a=0;
while ($a<=10) {
    echo $a;
    $a++;
}

$b=0;
do{
    echo $b;if($b==5){break;}

$b++;}
while ($b<=10);

$array=array('name'=>'hlaing','age'=>'20','phone'=>'1111');
print_r($array['phone']);
?>



