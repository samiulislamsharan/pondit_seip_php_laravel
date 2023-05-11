# Session 16: Composer, Namespace, Autoload

## Namespace

In the PHP world, namespaces are designed to solve two problems that authors of libraries and applications encounter when creating re-usable code elements such as classes or functions:

1. Name collisions between code you create, and internal PHP classes/functions/constants or third-party classes/functions/constants.
2. Ability to alias (or shorten) Extra_Long_Names designed to alleviate the first problem, improving readability of source code.

[[Reference](https://https://www.w3schools.com/php/php_namespaces.asp)]

## Magic Methods

Magic methods are special methods which override PHP's default's action when certain actions are performed on an object.

- [\_\_construct()](https://www.php.net/manual/en/language.oop5.decon.php#object.construct) [*must* be declared as `public`, otherwise an **`E_WARNING`** is emitted.]
- [\_\_destruct()](https://www.php.net/manual/en/language.oop5.decon.php#object.destruct) [*must* be declared as `public`, otherwise an **`E_WARNING`** is emitted.]
- [\_\_call()](https://www.php.net/manual/en/language.oop5.overloading.php#object.call)
- [\_\_callStatic()](https://www.php.net/manual/en/language.oop5.overloading.php#object.callstatic)
- [\_\_get()](https://www.php.net/manual/en/language.oop5.overloading.php#object.get)
- [\_\_set()](https://www.php.net/manual/en/language.oop5.overloading.php#object.set)
- [\_\_isset()](https://www.php.net/manual/en/language.oop5.overloading.php#object.isset)
- [\_\_unset()](https://www.php.net/manual/en/language.oop5.overloading.php#object.unset)
- [\_\_sleep()](https://www.php.net/manual/en/language.oop5.magic.php#object.sleep)
- [\_\_wakeup()](https://www.php.net/manual/en/language.oop5.magic.php#object.wakeup)
- [\_\_serialize()](https://www.php.net/manual/en/language.oop5.magic.php#object.serialize)
- [\_\_unserialize()](https://www.php.net/manual/en/language.oop5.magic.php#object.unserialize)
- [\_\_toString()](https://www.php.net/manual/en/language.oop5.magic.php#object.tostring)
- [\_\_invoke()](https://www.php.net/manual/en/language.oop5.magic.php#object.invoke)
- [\_\_set_state()](https://www.php.net/manual/en/language.oop5.magic.php#object.set-state)
- [\_\_clone()](https://www.php.net/manual/en/language.oop5.cloning.php#object.clone) [*must* be declared as `public`, otherwise an **`E_WARNING`** is emitted.] and
- [\_\_debugInfo()](https://www.php.net/manual/en/language.oop5.magic.php#object.debuginfo).

## Autoload(Mandatory)

In PHP, autoloading refers to the process of automatically loading PHP classes and files as they are needed, without explicitly including or requiring them in your code. Autoloading eliminates the need for manually including every class or file and helps manage dependencies more efficiently.

**PSR-4 Autoloading:** PSR-4 is a widely adopted autoloading standard defined by the PHP-FIG (PHP Framework Interop Group). PSR-4 autoloading uses `namespaces` to determine the file path for a class. By following a specific directory structure and namespace convention, PHP can autoload classes based on their namespaces without the need for explicit mappings.

## Composer

Composer Autoload is a feature provided by Composer, a dependency management tool for PHP. It simplifies the process of including and managing external libraries or packages within your PHP project. Composer Autoload generates and maintains an autoloading mechanism for your project's dependencies, allowing you to use classes and functions from those dependencies without the need for manual inclusion or require statements.
