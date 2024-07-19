# Control Structures in PHP

To control the flow of the program, control structures are required. They are like decision maker in the execution of the script.

## PHP control structures

- `if...else`
- `elseif / else if`
- `while(condition){ // loop breaker is needed inside this block to avoid infinite loop }`
- `do..while(condition)`
- `for`
- `foreach`
- `break` (break out of the current loop)
- `continue` (stop this iteration and start next iteration)
- `switch`
- `if: endif;`
- `if: ... elseif: ... else: ... endif;`
- `return` (can only return a single value. to return multiple values, use an array)

## PHP 8:

- `match`

## require[_once] vs include[_once]

- require will throw a fetal error in case a file is not found while include won't.
- require_once or include_once will use memory to track the number of files included to avoid multiple inclusion of a file. This means they are less efficient.
