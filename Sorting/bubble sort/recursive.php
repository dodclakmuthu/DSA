<?php
class BubbleSort
{
  function sort($arr, $n)
  {
    if (empty($arr))
      throw new Exception("invalid array");

    if (count($arr) == 1)
      return $arr;

    $count = 0;
    // One pass of bubble sort. After 
    // this pass, the largest element 
    // is moved (or bubbled) to end. 
    for ($i = 0; $i < $n - 1; $i++)
      if ($arr[$i] > $arr[$i + 1]) {
        list($arr[$i], $arr[$i + 1]) = array($arr[$i + 1], $arr[$i]);
        $count++;
      }

    // Check if any recursion happens or not 
    // If any recursion is not happen then return 
    if ($count == 0)
      return $arr;

    // Largest element is fixed, 
    // recur for remaining array 
    return $this->sort($arr, $n - 1);
  }
}

try {
  $sort = new BubbleSort();
  $array = [-500000, 20, 1, 65, -1, -100, 1050, -70000, 850000];
  $n = count($array);
  $sorted = $sort->sort($array, $n);
  print_r($sorted);
} catch (Exception $e) {
  echo $e->getMessage();
}
