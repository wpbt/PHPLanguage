<?php
/**
 * Q. Find the first non-repeated character in a string.
 * Explanation: 
 * $string = 'a green apple';
 * Answer is: 'g'
 * Note: 'r', 'l' are also not repeated but 'g' happens to be the first.
 */

function return_first_non_repeated_text( $text ) {
    $char_array     = [];
    $repeating_char = '';

    for( $i = 0; $i < strlen( $text ); $i++ ) {
        $count = substr_count( $text, $text[$i] );

        // we can uncomment the if block to optimize.
        /*
        if( $count == 1 ) {
            $repeating_char = $key;
            break;
        } */

        /**
         * This step is optional and is used for testing purpose only
         * concept is:
         *  - we construct associative array with 'char' as key and it's occurrence as value
         *  - if the order of the elements is preserved, we can just iterate the array and output the first key whose value is 1 (non-repeating)
         *  - [ 'A' => 2, ' ' => 2, 'G' => 1, 'r' => 1, 'e' => 3, 'n' => 1, 'p' => 2, 'l' => 2 ]
         */
        $char_array[$text[$i]]  = $count;
    }

    if( !empty( $char_array ) ) {
        foreach( $char_array as $key => $count ) {
            if( $count == 1 ) {
                $repeating_char = $key;
                break;
            }
        }
    }

    return $repeating_char ? $repeating_char : 'all are repeating';
}

print( return_first_non_repeated_text( 'A Green Apple' ) );
echo PHP_EOL;
print ( return_first_non_repeated_text( 'aall' ) );