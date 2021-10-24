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

echo '<br><br>';

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

echo '<br><br>';

//3.5次元配列
$juice = array(
    'りんごジュース' => array(
        'price' => 100,
        'stock' => 20),

    'ぶどうジュース' => array(
        'price' => 120,
        'stock' => 15),

    'バナナジュース' => array(
        'price' => 110,
        'stock' => 25),

    'パインジュース' => array(
        'price' => 150,
        'stock' => 8),

    'オレンジジュース' => array(
        'price' => 115,
        'stock' => 17),

    );

    var_dump($juice);
