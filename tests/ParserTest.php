<?php
namespace Laube\Parser;

require "parser.php";
use Laube\Parser\Parser;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;



final class ParserTest extends TestCase
{
    public function testClassConstructor()
    {
        
        $dates = new Dates;
        $dates->usedDuring = mktime(0,0,0,0,0,1644);
        $this->assertSame(parseDate("1644")->usedDuring, $dates->usedDuring);

    }
}
?>