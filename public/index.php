<?php

namespace App;

include "../vendor/autoload.php";

use App\Str;

$result = new Str();

echo ($result->compare('a', 'b') * 1) . "<br>";
