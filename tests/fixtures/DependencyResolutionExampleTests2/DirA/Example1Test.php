<?php

class Example4Test extends \PHPUnit\Framework\TestCase {

    /**
     * @depends testB
     * @group example
     */
    public function testA() {
        $this->markTestSkipped('Just a test ... test');
    }

    /**
     * @depends testA
     * @group example
     */
    public function testB(){
        $this->markTestSkipped('Just a test ... test');
    }
}
