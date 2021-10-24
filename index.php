<?php
//1.FizzBuzz
for($i = 1; $i <= 100; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo 'FizzBuzz';
    }elseif($i % 5 === 0){
        echo 'Buzz';
    }elseif($i % 3 === 0){
        echo 'Fizz';
    }else{
        echo $i;
    }
        echo '<br>';
}

//2.素数算出
for($i=1; $i<1000; $i++){
    $yakusuu=0;
      for($j=1; $j<=$i; $j++){
          if($i%$j==0){
              $yakusuu++;
          }
      }
    if($yakusuu==2){
        print $i."\n";
        echo '<br>';
    }
}
