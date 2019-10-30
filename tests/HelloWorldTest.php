<?php

namespace Tests;


use Mockery;
use Src\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function testSayHello(): void
    {
        $helloWorld = new HelloWorld();
        $this->assertEquals('Hello World', $helloWorld->sayHello());
    }

    /**
     *  測試Mocky是否有在運作(無其他作用)
     */
    public function testSayHelloMocky(): void
    {
        $legacyMock = Mockery::mock(HelloWorld::class);
        $legacyMock->shouldReceive('sayHello')
            ->once()
            ->andReturn('Hello World');

        $this->assertEquals('Hello World', $legacyMock->sayHello());
    }
}
