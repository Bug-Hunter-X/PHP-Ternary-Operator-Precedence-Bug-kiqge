The solution is to use parentheses to explicitly control the order of operations in the nested ternary expression:

```php
$a = 10;
$b = 20;
$c = 30;

$result = ($a > $b) ? ($a + $c) : (($b > $c) ? ($b + $a) : ($c - $a));

echo $result; // Outputs 10, correct result when evaluated in intended order.
```

By adding parentheses, we ensure that the inner ternary operation is evaluated before the outer one, leading to a more predictable and accurate outcome. This clarifies the intended logic and prevents unexpected behavior.