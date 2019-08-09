# Palindrome

A palindrome is a word, number, phrase, or other sequence of characters which reads the same backward as forward, such as `madam` or `racecar` or the number `10801`.

More details you can see in https://en.wikipedia.org/wiki/Palindrome

The palindrome PHP class in this repository can check if it is possible to make a palindrome with given number of letters. The source string can be ordered or not.

For example:
```MOM => TRUE
MOOOM => TRUE
OMOOM => TRUE
RACECAR => TRUE
CARRACE => TRUE
XYZ => FALSE
CARRACEX => FALSE
```


# Sample of usage

Please see sample of usage in Tests/PalindromeTest.php
There you can see positive and negative cases.

# Algorithm

The algorithm based on even pairing charaters in a string. 
1. All the charaters that has pair (OR pair multiplied `X`) can asseble a palindrome. 
For this purpose `Palindrome::check` has iteration to calculate pairs. 
2. After the pairs are calculated they are combined into a list.
3. Combined list is cleaning from items that found even number times. Those items don't considering in the next steps as they can asseble a palindrome by default. 
3. The only question in the last step is detect symmetrical `middle` of the list. In case we have several the same items in the middle the result will be `FALSE`. in case we have one symmetrical item in the middle or middle is missing at all the result is `TRUE` and this is a palindrome.

