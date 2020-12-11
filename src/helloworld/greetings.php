<?php
namespace HelloWorld;

use PHP_Timer;
use MCStreetguy\ComposerParser\Factory as ComposerParser;

class Greetings {
  public static function sayHelloWorld() {
    $timer = new PHP_Timer();
    $timer->start();
    $composerJson = ComposerParser::parse('/Users/joseph/Documents/ComposerParser/composer.json');
    $lockfile = ComposerParser::parse('/Users/joseph/Documents/ComposerParser/composer.lock');

    print_r($composerJson);

    print_r($lockfile);
    return "Hello World\n" . $timer->resourceUsage() . "\n";


  }
}
