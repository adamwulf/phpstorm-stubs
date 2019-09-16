<?php


function exception_error_handler(int $errno, string $errstr, string $errfile, int $errline ) : void { }


function registerClassMethodsWithNewRelic($object) : void{ }


function registerTransactionNameWithNewRelic(string $name) : void{ }

function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') : string { }

function str_has_suffix(string $whole, string $end) : bool { }

function describe($anything) : string { }

function generateDateGroupsBetween(MMDateTime $dt, MMDateTime $endDate) : array { }