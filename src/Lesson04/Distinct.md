## Triangle

### The Problem

Write a function
```php
function solution($A);
```
that, given a zero-indexed array A consisting of N integers, returns the number of distinct values in array A.

##### Assume that:
* N is an integer within the range [0..100,000];
* each element of array A is an integer within the range [−1,000,000..1,000,000].

For example, given array A consisting of six elements such that:
```php
A[0] = 2    A[1] = 1    A[2] = 1
A[3] = 2    A[4] = 3    A[5] = 1
```
the function should return 3, because there are 3 distinct values appearing in array A, namely 1, 2 and 3.

##### Complexity:
* expected worst-case time complexity is O(N*log(N));
* expected worst-case space complexity is O(N), beyond input storage (not counting the storage required for input arguments).

Elements of input arrays can be modified.

### Solution Analysis on Codility
* Correctness: 100%
* Performance: 100%
* Task score: 100%
* Detected time complexity: **O(N*log(N)) or O(N)**

https://codility.com/demo/results/demoERHB2H-7VM/
