# array-fl

> Provides a consolidated polyfill for `array_key_first()`, `array_key_last()`, and the unapproved functions `array_value_first()` and `array_value_last()`.

## Installation

This package is available via Packagist:

```
composer require p810/array-fl
```

You can also download it directly from GitHub.
Latest stable tag: [1.2.0](https://github.com/p810/array-fl/archive/1.2.0.zip)

## API

#### `array_first(array $array): null|array`
Returns a tuple containing the key and value of the first item in `$array`.
If `$array` is not an array or is empty, `null` is returned.

#### `array_last(array $array): null|array`
Returns a tuple containing the key and value of the last item in `$array`.
If `$array` is not an array or is empty, `null` is returned.

#### `array_key_first(array $array): null|int|string`
Returns the key of the first item in `$array`.
If `$array` is not an array or is empty, `null` is returned.

#### `array_key_last(array $array): null|int|string`
Returns the key of the last item in `$array`.
If `$array` is not an array or is empty, `null` is returned.

#### `array_value_first(array $array): null|mixed`
Returns the value of the first item in `$array`.
If `$array` is not an array or is empty, `null` is returned.

#### `array_value_last(array $array): null|mixed`
Returns the value of the last item in `$array`.
If `$array` is not an array or is empty, `null` is returned.

## Tests

Run `composer run test` to run a set of unit tests for these functions.
No external dependency (e.g. PHPUnit) is required.