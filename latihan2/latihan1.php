<?php 
//Control Flow
//Perulangan
//for
//while
//do while
//for each

//for
for ($i=0; $i < 10; $i++) { 
    echo "Hello World <br>";
}
//while
$a = 5;
while ($a <= 10) {
    echo "Stop! <br>";
$a++;
}
//do while
do {
    echo "Run! <br>";
} while ($a <= 10);
$a++;

//Perkondisian
//if
$a = 5;
if ($a > 10) {
    # code...
    echo "Yes";
}else{
    echo "Wrong";
}
//if else
$a = 10;
if ($a <= 50) {
    # code...
    echo "berhasil";
}elseif ($a == 10){
    echo "sama";
}else{
    echo "error";
}
//switch
// ternary
?>