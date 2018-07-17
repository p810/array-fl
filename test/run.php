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
    'array-first-is-null' => [
        function () {
            return array_first([]);
        }, false
    ],

    'array-last-is-null' => [
        function () {
            return array_last([]);
        }, null
    ]
];

foreach ($assertions as $name => $assertion) {
    [$callback, $expectation] = $assertion;

    echo "Running $name" . PHP_EOL;

    if ($callback() !== $expectation) {
        exit( "$name failed!" . PHP_EOL );
    }
}