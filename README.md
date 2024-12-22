# PHP Pass-by-Reference Subtlety

This example demonstrates a common source of confusion in PHP: the distinction between pass-by-reference and pass-by-value.  The `doubleValue` function uses pass-by-reference (`int &$number`), resulting in changes to the original variable.  `doubleValue2` uses pass-by-value, demonstrating the expected behavior of no changes outside the function.