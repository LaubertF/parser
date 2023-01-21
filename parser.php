<?php
namespace Laube\Parser;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class Dates
{
  public $usedFrom;
  public $usedTo;
  public $usedDuring;



  public function setUsedFromYear($year)
  {
    $this->usedFrom = mktime(0, 0, 0, 1, 1, $year);
  }

  public function setUsedToYear($year)
  {
    $this->usedTo = mktime(0, 0, 0, 1, 1, $year);
  }

  public function setUsedDuringYear($year)
  {
    $this->usedDuring = mktime(0, 0, 0, 1, 1, $year);
  }
}
function parseDate($dateString)
{
  $dates = new Dates;
  if (preg_match('/^[-+]?\d+$/', $dateString) == 1) {
    $dates->setUsedDuringYear($dateString);
  }

  if (preg_match('/from *([-+]?\d+)/i', $dateString, $match) == 1) {
    $dates->setUsedFromYear($match[1]);
  }
  if (preg_match('/to *([-+]?\d+)/i', $dateString, $match) == 1) {
    $dates->setUsedToYear($match[1]);
  }


  return $dates;
}


?>