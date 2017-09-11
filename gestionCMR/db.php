<?php

$db = new PDO("pgsql:host=localhost;port=5433;dbname=richard9","richard9", "Ws417a");

function db(){ global $db; return $db;}