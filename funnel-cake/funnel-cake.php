<?php

function registerClassMethodsWithNewRelic($object) : void{ }

function registerTransactionNameWithNewRelic(string $name) : void{ }

function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') : string { }

function str_has_suffix(string $whole, string $end) : bool { }

function describe($anything) : string { }

function generateDateGroupsBetween(MMDateTime $dt, MMDateTime $endDate) : array { }

function assertReturnType(Closure $lambda, string $type) : void { }

function assertParameterCount(Closure $lambda, int $count) : void { }

function assertParameterType(Closure $lambda, int $index, string $type) : void { }

function parseFragment(string $fragment) : ?object { }

function fragmentForTypeAndId(string $type, int $id) : string { }

function enumerateDirectory(string $directory, Closure $lamda) : void { }

function enumerateDirectories(array $directories, Closure $lamda) : void { }

function enumerateInDirectory(string $directory, string $extension, Closure $lambda) : void { }

function includeInDirectory(string $directory, string $extension) : void { }