#!/usr/bin/env php
<?php

require_once('uptoken.php');

$QBOX_ACCESS_KEY = '<Please apply your access key>';
$QBOX_SECRET_KEY = '<Dont send your secret key to anyone>';

$opts = array(
    "scope"			=> "test_bucket",
    "expiresIn"		=> 3600,
    "callbackUrl"	=> "http://example.com/callback?a=b&d=c",
);

$upToken = \QBox\NewUptoken($opts);

var_dump($upToken);

