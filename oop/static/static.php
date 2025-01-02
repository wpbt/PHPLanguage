<?php
class MathUtils {
    public static function square($number) {
        return $number * $number;
    }

    public static function factorial($number) {
        if ($number <= 1) return 1;
        return $number * self::factorial($number - 1);
    }
}

echo MathUtils::square(5); // Outputs: 25
echo "\n";
echo MathUtils::factorial(5); // Outputs: 120
echo "\n";
