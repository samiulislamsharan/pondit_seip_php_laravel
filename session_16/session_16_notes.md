# Session 16: Composer, Namespace, Autoload

## Namespace

In the PHP world, namespaces are designed to solve two problems that authors of libraries and applications encounter when creating re-usable code elements such as classes or functions:

1. Name collisions between code you create, and internal PHP classes/functions/constants or third-party classes/functions/constants.
2. Ability to alias (or shorten) Extra_Long_Names designed to alleviate the first problem, improving readability of source code.

[[Reference](https://https://www.w3schools.com/php/php_namespaces.asp)]

## Magic Methods

Magic methods are special methods which override PHP's default's action when certain actions are performed on an object.

* [__construct()](https://www.php.net/manual/en/language.oop5.decon.php#object.construct) [*must* be declared as `public`, otherwise an **`E_WARNING`** is emitted.]
* [__destruct()](https://www.php.net/manual/en/language.oop5.decon.php#object.destruct) [*must* be declared as `public`, otherwise an **`E_WARNING`** is emitted.]
* [__call()](https://www.php.net/manual/en/language.oop5.overloading.php#object.call)
* [__callStatic()](https://www.php.net/manual/en/language.oop5.overloading.php#object.callstatic)
* [__get()](https://www.php.net/manual/en/language.oop5.overloading.php#object.get)
* [__set()](https://www.php.net/manual/en/language.oop5.overloading.php#object.set)
* [__isset()](https://www.php.net/manual/en/language.oop5.overloading.php#object.isset)
* [__unset()](https://www.php.net/manual/en/language.oop5.overloading.php#object.unset)
* [__sleep()](https://www.php.net/manual/en/language.oop5.magic.php#object.sleep)
* [__wakeup()](https://www.php.net/manual/en/language.oop5.magic.php#object.wakeup)
* [__serialize()](https://www.php.net/manual/en/language.oop5.magic.php#object.serialize)
* [__unserialize()](https://www.php.net/manual/en/language.oop5.magic.php#object.unserialize)
* [__toString()](https://www.php.net/manual/en/language.oop5.magic.php#object.tostring)
* [__invoke()](https://www.php.net/manual/en/language.oop5.magic.php#object.invoke)
* [__set_state()](https://www.php.net/manual/en/language.oop5.magic.php#object.set-state)
* [__clone()](https://www.php.net/manual/en/language.oop5.cloning.php#object.clone) [*must* be declared as `public`, otherwise an **`E_WARNING`** is emitted.] and
* [__debugInfo()](https://www.php.net/manual/en/language.oop5.magic.php#object.debuginfo).

## Audoload(Mandatory)

## Composer
