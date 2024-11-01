def kadane_algorithm(arr):
    maxSum = arr[0]
    currentSum = arr[0]
    for currentNumber in arr[1:]:
        currentSum = max(currentNumber, currentNumber + currentSum)
        if (currentSum > maxSum):
            maxSum = currentSum
    return maxSum

arr = [1, -2, 3, 4, -1, 2, 1, -5, 4]
print(kadane_algorithm(arr))



# explaination for my self
# currentSum = max(currentNumber, currentNumber + currentSum) i think this line so the magic, if current number and previous sub array's summention is lowe than the currentNumber there's no need to care about previous sub array because it is always lower than current subarray,(subarray even can have single element) for the current possitoin
