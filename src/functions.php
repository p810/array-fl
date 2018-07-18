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

function array_first($array) {
    if (!is_array($array) || empty($array)) {
        return null;
    }

    reset($array);

    $key = key($array);

    return array($key, $array[$key]);
}

function array_last($array) {
    if (!is_array($array) || empty($array)) {
        return null;
    }

    end($array);

    $key = key($array);

    return array($key, $array[$key]);
}

function array_key_first($array) {
    $key = array_first($array);

    if ($key === null) {
        return null;
    }

    return $key[0];
}

function array_key_last($array) {
    $key = array_last($array);

    if ($key === null) {
        return null;
    }

    return $key[0];
}

function array_value_first($array) {
    $value = array_first($array);

    if ($value === null) {
        return null;
    }

    return $value[1];
}

function array_value_last($array) {
    $value = array_last($array);

    if ($value === null) {
        return null;
    }

    return $value[1];
}
