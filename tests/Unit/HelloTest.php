<?php

namespace NehalPatel\FirstPackage\Tests\Unit;

use FirstPackage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use NehalPatel\FirstPackage\Models\Message;
use NehalPatel\FirstPackage\Tests\TestCase;

class HelloTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_message_with_parameter()
    {
        $this->assertEquals(
            "Hello world from the Hello Class, Yaminee",
            FirstPackage::greet("Yaminee")
        );
    }

    /** @test */
    public function it_returns_message()
    {
        $this->assertEquals(
            "Hello world from the Hello Class, Nehal",
            FirstPackage::greet()
        );
    }

    /** @test */
    public function can_interact_with_models_and_databases()
    {
        $message = new Message;
        $message->content = "Test message";
        $message->save();

        $this->assertEquals("Test message", Message::first()->content);
    }

}