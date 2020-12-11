<?php
namespace HelloWorld;

use PHP_Timer;
use MCStreetguy\ComposerParser\Factory as ComposerParser;

class Greetings {
  public static function sayHelloWorld() {
    $timer = new PHP_Timer();
    $timer->start();
    $composerJson = ComposerParser::parse('/Users/joseph/Documents/greetings/composer.json');
    $lockfile = ComposerParser::parse('/Users/joseph/Documents/greetings/composer.lock');

    print("Composer JSON \n");
    print_r($composerJson);

    print("Composer lock JSON \n");
    print_r($lockfile);
    return "Hello World\n" . $timer->resourceUsage() . "\n";


  }
}
