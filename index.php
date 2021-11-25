<?php
/* testing purpose 
function sum($a,$b)//function with the use of parameters
{
	 echo $a+$b;
}
sum(10,20);//function name with argument
echo "<br>";

$one=5.5;
$two=6;
sum($one,$two);

echo "<br>";
function test($name,$lastname=Null)
{
	echo "hello".$name.$lastname;
}
test("harsh");

echo "<h1>recursive function</h1>";
function recur($number)
{
	if ($number<=5) {
	  echo $number."<br>";
	  recur($number + 1);
	}
}
recur(2);

echo "<h1>factorial no</h1>";
function fact($num)
{
	if ($num==0) {
	 return 1;
	}
	else{
		return ($num* fact($num-1));
	}
}
echo fact(3);
echo "<h1></h1>";	
// echo "<pre>";
// print_r($_SERVER);
// echo $_SERVER['PHP_SELF'];
function practice(&$n)
{      
    $n.="welcome";
	 echo "the value of function is ".$n;

}
$num="hello"." ";
 echo practice($num);
 */
//  echo "<h1>foreach loop</h1>";
//  $a=['name'=>"harsh","email"=>"h@gmail.com","course"=>"btech"];	
//  echo "<pre>";
//  print_r($a);

//  //  $j=json_encode($a);
//  //  echo $j;
//  //  var_dump($j);
//  // echo "<br>";
//  //  $b= implode(" ", $a);
//  //  echo $b;
//  //  var_dump($b);
//  foreach ($a as $key => $value) {
//  	 echo $key."=>".$value."<br>";
//  }
//  echo "<br>";
//  $multi=array(
//             array(2,4,5,6),
//             array(5,9,2,4),
//             array(6,8,1,7)
//         );
//  // echo $multi[0][0]."<br>";
//  echo "<pre>";
//  print_r($multi);

// for ($i=0; $i < count($multi); $i++) { 
// 	for ($j=0; $j < count($multi[$i]); $j++) { 
// 		echo  $multi[$i][$j];
// 	}
// 	echo "<br>";
// }

 // $a="1";
 // $b=&$a;
 // $b="2$b";

 // $a = "ram";
 // $$a = "shyam";
 // $$$a = "hello";
 // $$$$a = "abc";
 // echo $hello

$A=11;
$B=++$A;
$B="
1$A";
echo "$B";

  echo "<br>";
 function dosome(&$arg)
 {
 	$return=$arg;
 	$arg=$arg-1;
 	return $return;;
 }
 $a=7;
 $b=dosome($a);
 echo "$a"."<br>"."$b";

echo "<br>";
 function fun(&$a)
 {
 	$a.="hello";
 	echo "$a";
 }

  
 echo "<br>";
 $b="welcome for testing purpose attempt successfull";
 fun($b);
 echo "$b";
 echo "able to resolve issue related to task revision";
 echo "<br>";
echo "attempt two second attempt third attempt forth attempt fisth attempt";
?>
