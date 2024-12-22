```php
<?php
// Understanding the difference is key to avoiding unexpected behavior.

function doubleValue(int &$number): int {
  $number *= 2;
  return $number;
}

$value = 5;
$newValue = doubleValue($value);
echo "Original value modified: " . $value . "\n"; // Output: 10
echo "Returned value: " . $newValue . "\n"; // Output: 10

function doubleValue2(int $number): int {
  $number *= 2;
  return $number;
}

$value2 = 5;
$newValue2 = doubleValue2($value2);
echo "Original value unchanged: " . $value2 . "\n"; // Output: 5
echo "Returned value: " . $newValue2 . "\n"; // Output: 10
?>
```