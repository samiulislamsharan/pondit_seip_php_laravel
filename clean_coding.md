# Clean Code

কোড তো একভাবে লিখলেই হয়... আসলেই কি তাই?

Software Development এর কাজে শুধুমাত্র logic part কেই আমরা গুরুত্ব দিয়ে থাকি। কিন্তু একটা code কত সহজে বা সংক্ষিপ্তভাবে করা জায় সেটা coder এর দক্ষতার পরিমাপক নয়। বরং একজন নতুন developer এর কাছে code টিকে কত cleanly উপস্থাপন করতে পারেন, নতুন developer কত সহজে code-টি আয়ত্ত করতে পারে, সেখানেই coder এর কৃতিত্ব।

নিজেকে একজন সাধারণ প্রোগ্রামারের মান থেকে আর ভালো প্রোগ্রামারে উন্নীত করার জন্য কিছু practice মেনে চলা উচিত। এসব নিয়েই আজকের আলচনা - Clean Code.

# Table of Contents

- [Clean Code](#clean-code)
- [Table of Contents](#table-of-contents)
  - [প্রাথমিক ধারনা](#প্রাথমিক-ধারনা)
    - [Meaningful Naming of Variable](#meaningful-naming-of-variable)
    - [Intention Revealing (উদ্দেশ্য প্রকাশক) নামের ব্যবহার](#intention-revealing-উদ্দেশ্য-প্রকাশক-নামের-ব্যবহার)
    - [Use Pronounceable Name](#use-pronounceable-name)
    - [Use Searchable Names](#use-searchable-names)
    - [Avoid Mental Mapping](#avoid-mental-mapping)
    - [Don&#39;t Pun](#dont-pun)
    - [Use Solution Domain Name](#use-solution-domain-name)
    - [Use Problem Domain Name](#use-problem-domain-name)
    - [Class Names](#class-names)
    - [Method Names](#method-names)
    - [Don&#39;t be Cute](#dont-be-cute)
  - [Functions](#functions)
    - [Error Handling Function](#error-handling-function)
  - [Comments](#comments)
    - [1. Legal Comments](#1-legal-comments)
    - [2. Informative Comments](#2-informative-comments)
    - [3. Explanation of Intent](#3-explanation-of-intent)
    - [4. Clarification](#4-clarification)
    - [5. Todo Comments](#5-todo-comments)
    - [Bad Comments](#bad-comments)
      - [1. Mumbling](#1-mumbling)
      - [2. Redundant Comments](#2-redundant-comments)
      - [3. Noise Comments](#3-noise-comments)
      - [4. Too Much Information](#4-too-much-information)
  - [Unit Tests](#unit-tests)
    - [F.I.R.S.T](#first)

## প্রাথমিক ধারনা

কোড এর মাধ্যমে সব কিছু বর্ণনা করা থাকে। তাই একজন প্রোগ্রামার তার কোড দিয়ে বেশিরভাগ সময় বলে দেয় আসলে সে কি করতে চাচ্ছে। আর যে যত পরিচ্ছন্নভাবে তা বর্ণনা করতে পারে তার কোড ততো সুন্দর এবং ব্যাবহারযোগ্য হয়।

### Meaningful Naming of Variable

আমরা আমাদের কোডে Variable, Function, Argument, Class এই সবকিছুর নাম দেই। নামই সুন্দরভাবে ওই জিনিসটির সঠিক বর্ণনা দেয়। নিচের উদাহরণটি লক্ষ্য করিঃ

```php
<?php
function res($x, $y) {
	$z = $x + $y;
	echo "$z";
}
?>
```

শুধুমাত্র প্রথম লাইনটি পড়ে ফাংশনটির কাজ সম্পর্কে কোন ধারণা করতে পেরেছেন কি?
কিন্তু করতে যদি ভাবে লেখা হতো-

```php
<?php
function addition($x, $y) {
	$z = $x + $y;
	echo "$z";
}

addition(5, 20);
>?
```

এবারে ভাবুন কোন ভার্সনটি আপনার কাছে সহজে বোধগম্য হয়েছে? অর্থবহ নাম ব্যবহারের গুরুত্ব বোঝা যাচ্ছে কি?

### Intention Revealing (উদ্দেশ্য প্রকাশক) নামের ব্যবহার

নাম এমন হওয়া উচিত, যাতে এটি কি কাজের জন্য তার নামটি দেখেই বোঝা যায়। যদিও ভালো নাম নির্ধারণ করতে সময় লাগে কিন্তু পরে এটি অনেক বেশি সময় বাঁচিয়ে দেয়।

Variable, Function অথবা Class এ সবগুলোর ব্যাপারে যত বড় প্রশ্ন আছে সব এদের নাম থেকে জানা যায়। এ থেকে বোঝা যাবে এটির তৈরীর কারণ, এটি কি করে, এবং এটি কিভাবে ব্যবহার করা হয়। যদি নামগুলো দেয়ার পর বলে দিতে হয় যে ওই নামের বস্তুটি কি কাজ করে তাহলে নাম প্রদানের কোন সুবিধা পাওয়া যাবে না।

`$d` এখানে d নামের একটি variable দিয়ে ব্যায়িত সময় বোঝানো হয়েছে। উপরের উদাহরণে d এর জন্য আবার কমেন্টের মধ্যে ব্যাখ্যা করতে হলো যে এটি একটি variable যাতে ব্যতীত সময় বুঝায়। কিন্তু যদি আমরা নিজের মতো করে নাম দিই তাহলে আর বোঝাতে হবে নাঃ

```php
<? $elapsedTimeInDays; ?>
```

এক্ষেত্রে variable টি self descriptive অর্থাৎ নিজেই নিজেকে ব্যাখ্যা করছে। আলাদা করে কমেন্ট করার প্রয়োজন পড়ছে না।

আরো ভালোভাবে লিখলেঃ
This is bad:

```php
<? protected $d; // elapsed time in days ?>
```

This is good:

```php
<?php
protected $elapsedTimeInDays;
protected $daysSinceCreation;
protected $daysSinceModification;
protected $fileAgeInDays;
?>
```

উদ্দেশ্যপ্রকাশের স্বার্থে প্রয়োজনের নাম অনেক বড় হলেও সমস্যা নেই, কিন্তু নামকে অর্থবহ করতে হবে।

Avoid Disinformation

একই অর্থ প্রকাশের জন্য একাধিক pattern/style follow করা উচিত নয়। ধরা যাক database-এ রাখা student-দের নাম এবং কে কোন কোর্সে enrolled সেই তথ্যগুলো জানতে হবে। তার জন্য দুটো variable declare করা হলো।

```php
<?php
private getstudent;
private getcourseinfo;
?>
```

এবারে এই code-টির সাথে নিচের দুইটি code-এর কি কোন পার্থক্য পাওয়া যায় কিনা লক্ষ্য করি-

```php
<?php
private getstudentinfo;
private getcourseinfo;
?>
```

অথবা,

```php
<?php
private getstudent;
private getcourse;
?>
```

লক্ষণীয় বিষয়টি হল একই কাজ অর্থাৎ তথ্য জানবার জন্নে প্রথম code-টিতে variable-এর নাম ২ ধরনের style-এ লেখা হয়েছে। আপাতভাবে দেখলে যা আলাদা কাজ করে বলে মনে হতে পারে। তাই এই সন্দেহ এড়ানোর জন্য একই style follow করা উচিত। হয় ২ ক্ষেত্রেই `studentinfo/courseinfo` বা ২ ক্ষেত্রেই `student/course`.

### Use Pronounceable Name

```php
<?php
private Date genymdhms;
private Date modymdhms;
?>
```

```php
<?php
private generationTimeStamp;
private modificationTimeStamp;
?>
```

পড়ার সময় কোন code টি ভালো বা সহজ লেগেছে? নিশ্চয়ই দ্বিতীয়টি। নাম হওয়া উচিৎ এমন যেন সহজে উচ্চারণ করা যায়। যদি উচ্চারণ না করা যায়, তাহলে এই ব্যাপারে আলোচনা করার সময় uncomfortable লাগবে।

### Use Searchable Names

কোন variable-এর scope বা lifetime অর্থাৎ এর পরিব্যাপ্তি যত বড় হবে, তার নামটিও তত বেশি অর্থবহ হওয়া আবশ্যক। যেমনঃ for loop-এর একটি `counter` varibale-এর পরিসীমা loop পর্যন্তই। তাই এর নাম `i/j/k` হলেও সমস্যা নেই কারণ এতি আর পরবর্তীতে ব্যাবহার করার প্রয়োজন পড়ছে না।

কিন্তু `d` বলে একটি variable declare করা হলো যেটি একটি লম্বা function-এর পুরোটা জুড়েই তৈরির পর থেকে অতিবাহিত সময় হিসাব করবে, তার জন্য `daysSinceCreation` নাম দেয়াই ভাল। এই নামতি বড় হলেও সহজেই variable-টি খুঁজে বের করা যাবে।

### Avoid Mental Mapping

একজন প্রোগ্রামার একটি নাম ছোট করে নিজের মত করে ভেবে নিলে পরে অন্য একজন এই নামটিকে অন্য আরেকটি নাম হিসাবে ভেবে নিতে পারে।

Clarity is king - এই বিষয়টি স্মার্ট প্রোগ্রামার আর প্রফেশনাল প্রোগ্রামারের মধ্যে পার্থক্য করে দেয়। একজন professional programmer তার নিজের বোঝার/চিন্তা করার pattern পরিহার করে পরিষ্কার ভাবে পরিচ্ছন্ন code লেখার practice করে থাকেন যাতে অন্যরা সহজেই বুঝতে পারে।

### Don't Pun

### Use Solution Domain Name

### Use Problem Domain Name

### Class Names

### Method Names

### Don't be Cute

## Functions

### Error Handling Function

## Comments

### 1. Legal Comments

### 2. Informative Comments

### 3. Explanation of Intent

### 4. Clarification

### 5. Todo Comments

### Bad Comments

#### 1. Mumbling

#### 2. Redundant Comments

#### 3. Noise Comments

#### 4. Too Much Information

## Unit Tests

### F.I.R.S.T
