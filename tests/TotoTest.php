<?php 
class TotoTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testTitiError()
    {
        $toto = new \TravisTest\Toto();

        $this->assertFalse($toto->titi());
    }

    // tests
    public function testTitiSuccess()
    {
        $toto = new \TravisTest\Toto();

        $this->assertTrue($toto->titi());
    }
}