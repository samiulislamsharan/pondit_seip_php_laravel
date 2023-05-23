# Session 24

## PHP Conditional Assignment Operators

The PHP conditional assignment operators are used to set a value depending on conditions:

| Operator | Name            | Example                     | Result                                                                                                      |
| -------- | --------------- | --------------------------- | ----------------------------------------------------------------------------------------------------------- |
| ?:       | Ternary         | `x = expr1 ? expr2 : expr3` | Returns the value of x. The value of x is expr2 if expr1 = TRUE. The value of $x is expr3 if expr1 = FALSE. |
| ??       | Null coalescing | `x = expr1 ?? expr2`        | Returns the value of x. The value of x is expr2 . Introduced in PHP 7.                                      |

## Displaying Error Messages

- `ini_set()` — Sets the value of a configuration option
- `error_reporting(E_ALL)` — Sets which PHP errors are reported and shows all PHP errors

The `error_reporting(E_ALL)` is the most widely used among developers to show error messages because it is more readable and understandable

## $\_SESSION

`$_SESSION` — Session variables. An associative array containing session variables available to the current script. See the [Session functions](https://www.php.net/manual/en/ref.session.php) documentation for more information on how this is used.

NOTE: Session must be started first.

```php
# Creating New Session
# ==========================
<?php

session_start();

/*session is started if you don't write this line can't use $_Session  global variable*/

$_SESSION["newsession"]=$value;

?>

# Getting Session
# ==========================
<?php

session_start();

/*session is started if you don't write this line can't use $_Session  global variable*/

$_SESSION["newsession"]=$value;

/*session created*/

echo $_SESSION["newsession"];

/*session was getting*/

?>

# Updating Session
# ==========================
<?php

session_start();

/*session is started if you don't write this line can't use $_Session  global variable*/

$_SESSION["newsession"]=$value;

/*it is my new session*/

$_SESSION["newsession"]=$updatedvalue;

/*session updated*/

?>

# Deleting Session
# ==========================
<?php

session_start();

/*session is started if you don't write this line can't use $_Session  global variable*/

$_SESSION["newsession"]=$value;

unset($_SESSION["newsession"]);

/*session deleted. if you try using this you've got an error*/

?>
```
