<?php
/*function getHelloWorld(){
      return "Hello World";
}*/
//function with function
/*function getHelloWorld(){
      function getMyanmarDream(){
            return "The Myanmar Dream";
      }
}*/
 //resursive function
 /*function testArg($value1,$value2,$value3){
       return $value1.$value2.$value3;
 }*/
 function testRecursive($value){
       echo $value;
       echo "<br>";
       if($value < 15){
             testRecursive($value+1);
       }
 }