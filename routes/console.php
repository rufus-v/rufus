<?php

use Rufus\Console\Color;
use Rufus\Console\ArgOption as Argument;

$console->addCommand('hello', function (Argument $argument) {
    echo Color::green("hello, bow task runner.");
});