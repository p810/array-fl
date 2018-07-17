# array-fl

> Provides a consolidated polyfill for `array_key_first()`, `array_key_last()`, and the unapproved functions `array_value_first()` and `array_value_last()`.

## API

#### `array_first(array $array): ?array`
Returns a tuple containing the key and value of the first item in `$array`.
If `$array` is not an array or is empty, `null` is returned.

#### `array_last(array $array): ?array`
Returns a tuple containing the key and value of the last item in `$array`.
If `$array` is not an array or is empty, `null` is returned.

#### `array_key_first(array $array): mixed`
Returns the key of the first item in `$array`.
If `$array` is not an array or is empty, `null` is returned.

#### `array_key_last(array $array): mixed`
Returns the key of the last item in `$array`.
If `$array` is not an array or is empty, `null` is returned.
