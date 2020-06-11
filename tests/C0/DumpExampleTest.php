<?php

namespace Tests\C0;

use App\DumpExample;
use PHPUnit\Framework\TestCase;

class DumpExampleTest extends TestCase
{
    /**
     * One test to coverage 100% code
     */
    public function test_IT_pass_WHEN_examine_dump_test()
    {
        $sut = new DumpExample;

        $actualResult = $sut->examine(true);

        $expectedResult = 1;
        $this->assertEquals($expectedResult, $actualResult);
    }
}
