<?php
class FileLogger {
  private DateTime $currnt;
  private SplFileObject $file;

  public function __construct(string $logname) {
    $this->currnt = new DateTime();
    $this->file = new SplFileObject("{$logname}-{$this->currnt->format('Ymd')}.log", 'a');
  }
  public function fwrite(string $str) {
    $this->file->fwrite(" [{$this->currnt->format('Y/m/d')}] {$str}\n");
  }
}

$logger = new FileLogger('log');
$logger->fwrite('HogeHoge Text');