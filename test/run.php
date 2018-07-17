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
    'array-first-null' => function () {
        return array_first([]) === null;
    },

    'array-last-null' => function () {
        return array_last([]) === null;
    },

    'array-first-numeric' => function () {
        return array_first([
            0 => 'foo',
            1 => 'bar',
            2 => 'bam'
        ]) === [0, 'foo'];
    },

    'array-last-numeric' => function () {
        return array_last([
            0 => 'foo',
            1 => 'bar',
            2 => 'bam'
        ]) === [2, 'bam'];
    },

    'array-first-associative' => function () {
        return array_first([
            'foo' => 0,
            'bar' => 1,
            'bam' => 2
        ]) === ['foo', 0];
    },

    'array-last-associative' => function () {
        return array_last([
            'foo' => 0,
            'bar' => 1,
            'bam' => 2
        ]) === ['bam', 2];
    }
];

foreach ($assertions as $name => $callback) {
    echo "[ $name ] Running... ";

    if ($callback() !== true) {
        exit( "failed!" . PHP_EOL );
    }

    echo "success!" . PHP_EOL;
}