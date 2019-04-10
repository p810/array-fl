<?php

/**
 * array_first() and array_last() will return a tuple containing the
 * key and value of either the first or last items in an array respectively.
 * 
 * This is a polyfill for array_value_first() and array_value_last() which
 * were not accepted alongside array_key_first() and array_key_last() in
 * the RFC vote for them. These functions combine the two sets into one and
 * will work with PHP <= 7.2.1.
 */

if (! function_exists('array_first')) {
    /**
     * Returns a tuple containing the first key and value from an array.
     * 
     * @param array $array
     * @return null|array<int|string,mixed>
     */
    function array_first($array) {
        if (! is_array($array) || empty($array)) {
            return null;
        }
    
        reset($array);
    
        $key = key($array);
    
        return array($key, $array[$key]);
    }
}

if (! function_exists('array_last')) {
    /**
     * Returns a tuple containing the last key and value from an array.
     * 
     * @param array $array
     * @return null|array<int|string,mixed>
     */
    function array_last($array) {
        if (! is_array($array) || empty($array)) {
            return null;
        }
    
        end($array);
    
        $key = key($array);
    
        return array($key, $array[$key]);
    }
}

if (! function_exists('array_key_first')) {
    /**
     * Returns the first key from an array.
     * 
     * @param array $array
     * @return null|int|string
     */
    function array_key_first($array) {
        $key = array_first($array);

        if (! $key) {
            return null;
        }

        return $key[0];
    }
}

if (! function_exists('array_key_last')) {
    /**
     * Returns the last key from an array.
     * 
     * @param array $array
     * @return null|int|string
     */
    function array_key_last($array) {
        $key = array_last($array);

        if (! $key) {
            return null;
        }

        return $key[0];
    }
}

if (! function_exists('array_value_first')) {
    /**
     * Returns the first value from an array.
     * 
     * @return null|mixed
     */
    function array_value_first($array) {
        $value = array_first($array);

        if (! $value) {
            return null;
        }

        return $value[1];
    }
}

if (! function_exists('array_value_last')) {
    /**
     * Returns the last value from an array.
     * 
     * @return null|mixed
     */
    function array_value_last($array) {
        $value = array_last($array);

        if (! $value) {
            return null;
        }

        return $value[1];
    }
}
