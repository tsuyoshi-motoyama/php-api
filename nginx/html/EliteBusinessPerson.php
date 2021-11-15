<?php
require 'BussinessPerson.php';

class EliteBusinessPerson extends BussinessPerson {
  public function work():void {
    parent::work();
    print "<p>{$this->lastName}{$this->firstName}はめちゃくちゃ働いています。</p>";
  }
}