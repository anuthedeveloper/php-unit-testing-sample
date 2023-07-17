<?php
// 
use Anuddev\TestAppSample\User;

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{

    public function testClassContructor() : void
    {
        $user = new User("Emmanuel", 24);

        $this->assertSame("Emmanuel", $user->name);
        $this->assertSame(24, $user->age);
        $this->assertEmpty($user->favouriteColor);
    }

    public function testSayName() : void
    {
        $user = new User("Emmanuel", 32);

        $this->assertIsString($user->sayName());
        $this->assertStringContainsStringIgnoringCase("Emmanuel", $user->sayName());
    }

    public function testSayAge() : void
    {
        $user = new User("Emmanuel", 32);

        $this->assertIsString($user->sayAge());
        $this->assertStringContainsStringIgnoringCase('32', $user->sayAge());
    }

    public function testAddFavouriteColor() : void
    {
        $user = new User("Mark", 32);

        $this->assertTrue($user->addFavouriteColor("red"));
        $this->assertContains('red', $user->favouriteColor);
        $this->assertCount(1, $user->favouriteColor);
    }

    public function testRemoveFavouriteColor() : void
    {
        $user = new User("Mark", 32);

        $this->assertTrue($user->addFavouriteColor("red"));
        $this->assertTrue($user->addFavouriteColor("darkgrey"));

        $this->assertTrue($user->removeFavouriteColor("red"));
        $this->assertNotContains('red', $user->favouriteColor);
        $this->assertCount(1, $user->favouriteColor);

    }
}
