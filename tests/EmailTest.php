<?php
declare(strict_types=1);

// found inside vendor
use PHPUnit\Framework\TestCase;
require __DIR__ . '/../src/Email.php';

// the TestCase is the parent. Gets all the information form TestCase
final class EmailTest extends TestCase
{
   public function testCanBeCreatedFromValidEmailAddress(): void
   {
       // means 'this instance'. This function is inside TestCase
       $this->assertInstanceOf(
           Email::class,
           Email::fromString('user@example.com')
       );
   }

   public function testCannotBeCreatedFromInvalidEmailAddress(): void
   {
       $this->expectException(InvalidArgumentException::class);
       Email::fromString('invalid');
   }

   public function testCanBeUsedAsString(): void
   {
       $this->assertEquals(
           'user@example.com',
           Email::fromString('user@example.com')
       );
   }
}
