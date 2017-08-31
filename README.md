

بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ

# Arabic Numbers
This library helps convert between latin and arabic numerals and vice versa.

## Installation
To install:

```
composer require meezaan/arabic-numbers
```

## Usage
To use the library in your apps, make sure the composer autoload file is already included. Then:

```php
use ArabicNumbers\Numbers;

// Latin to Arabic
$arabic = Numbers::latinToArabic(157); // returns ١٥٧

// Arabic to latin
$latin - Numbers::arabicToLatin(١٥٧); // returns 157

// Arabic to HTML
$html = Numbers::ArabicToHtml(١٥٧); // returns &#1633;&#1637;&#1639;
```

## Unit Tests
These are included in the tests folder. To run them, make sure you've already run composer install. Then:
```
php vendor/bin/phpunit --bootstrap vendor/autoload.php tests/
```

Happy days.
