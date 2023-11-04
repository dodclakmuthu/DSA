### waht happen in bubble sort   
in each itaraion postion the largest element at the rightmost postion
once postion it then move to the second largest element and position at the before the largest element

### Time complexity
O(N^2)

Bubble sort has a time complexity of O(N2) which makes it very slow for large data sets.


## Recursive bubble sort
Recursion Idea.  

Base Case: If array size is 1, return.
Do One Pass of normal Bubble Sort. This pass fixes last element of current subarray.
Recur for all elements except last of current subarray.

### Questions
1. Difference between iterative and recursive bubble sort?
Ans. Recursive bubble sort runs on O(n) auxiliary space complexity whereas iterative bubble sort runs on O(1) auxiliary space complexity.

2. Which is faster iterative or recursive bubble sort?
Ans. Based on the number of comparisons in each method, the recursive bubble sort is better than the iterative bubble sort, but the time complexity for both the methods is same.


### Best Case: 
 The best case occurs when the array is already sorted. So the number of comparisons required is N-1 and the number of swaps required = 0. Hence the best case complexity is O(N).
### Worst Case:  
The worst-case condition for bubble sort occurs when elements of the array are arranged in decreasing order.
In the worst case, the total number of iterations or passes required to sort a given array is (N-1). where ‘N’ is the number of elements present in the array.