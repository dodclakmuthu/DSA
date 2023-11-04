<?php
class BubbleSort
{
  function sort($arr)
  {
    if (empty($arr))
      throw new Exception("invalid array");
    $iterations = count($arr) -1;

    for ($i = 0; $i < $iterations; $i++) {
      for ($j = 0; $j < $iterations - $i; $j++) {
        $temp = 0;
        if ($arr[$j] > $arr[$j+1]) {
          $temp = $arr[$j];
          $arr[$j] = $arr[$j+1];
          $arr[$j+1] = $temp;
        }
      }
    }
    return $arr;
  }
}

try {
  $sort = new BubbleSort();
  $array = [-500000, 20, 1, 65, -1, -100, 1050, -70000, 850000];
  $sorted = $sort->sort($array);
  print_r($sorted);
} catch (Exception $e) {
  echo $e->getMessage();
}



