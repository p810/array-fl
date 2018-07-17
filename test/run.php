<?php

require_once __DIR__ . '/../src/functions.php';

/**
 * I felt like a unit testing library was overkill for a
 * library of this scale, so this script will do the job.
 * 
 * Each item in this array is a tuple with a callback and
 * the value it should return.
 */

$assertions = [
    'array-first-null' => array_first([]) === null,

    'array-last-null' => array_last([]) === null,

    'array-first-numeric' => array_first([
        0 => 'foo',
        1 => 'bar',
        2 => 'bam'
    ]) === [0, 'foo'],

    'array-last-numeric' => array_last([
        0 => 'foo',
        1 => 'bar',
        2 => 'bam'
    ]) === [2, 'bam'],

    'array-first-associative' => array_first([
        'foo' => 0,
        'bar' => 1,
        'bam' => 2
    ]) === ['foo', 0],

    'array-last-associative' => array_last([
        'foo' => 0,
        'bar' => 1,
        'bam' => 2
    ]) === ['bam', 2],

    'array-key-first-numeric' => array_key_first([
        0 => 'foo',
        1 => 'bar',
        2 => 'bam'
    ]) === 0,

    'array-key-last-numeric' => array_key_last([
        0 => 'foo',
        1 => 'bar',
        2 => 'bam'
    ]) === 2,

    'array-key-first-associative' => array_key_first([
        'foo' => 0,
        'bar' => 1,
        'bam' => 2
    ]) === 'foo',
    
    'array-key-last-associative' => array_key_last([
        'foo' => 0,
        'bar' => 1,
        'bam' => 2
    ]) === 'bam',

    'array-value-first-numeric' => array_value_first([
        0 => 'foo',
        1 => 'bar',
        2 => 'bam'
    ]) === 'foo',

    'array-value-last-numeric' => array_value_last([
        0 => 'foo',
        1 => 'bar',
        2 => 'bam'
    ]) === 'bam',

    'array-value-first-associative' => array_value_first([
        'foo' => 0,
        'bar' => 1,
        'bam' => 2
    ]) === 0,

    'array-value-last-associative' => array_value_last([
        'foo' => 0,
        'bar' => 1,
        'bam' => 2
    ]) === 2
];

foreach ($assertions as $name => $assertion) {
    echo "[ $name ] Running... ";

    if ($assertion !== true) {
        exit( "failed!" . PHP_EOL );
    }

    echo "success!" . PHP_EOL;
}