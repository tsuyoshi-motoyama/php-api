<?php
require 'Person.php';

class BussinessPerson extends Person {
  public function work() : void {
    print "<p>{$this->lastName}{$this->firstName}は働いています。</p>";
  }
}