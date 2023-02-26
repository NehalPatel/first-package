<?php

namespace NehalPatel\FirstPackage\Tests\Feature;

class CanGetTheMessageTest extends \NehalPatel\FirstPackage\Tests\TestCase
{
    /** @test */
    public function can_get_the_message()
    {
        $this->get('hello-route')->assertSuccessful();

        $this->get('hello-route')->assertSee("Hello world from the Hello Class, Nehal");
    }

    /** @test */
    public function can_get_the_message_from_view()
    {
        $this->withoutExceptionHandling();

        $this->get('hello-route')->assertViewIs('first-package::home');
    }

}