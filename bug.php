```php
<?php
function doubleValue(int &$number): int {
  $number *= 2;
  return $number;
}

$value = 5;
doubleValue($value);
echo $value; // Output: 10

function doubleValue2(int $number): int {
  $number *= 2;
  return $number;
}

$value2 = 5;
doubleValue2($value2);
echo $value2; // Output: 5
?>
```