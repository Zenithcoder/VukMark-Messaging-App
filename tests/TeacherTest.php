<?php

use awonusi\Teacher;
use PHPUnit\Framework\TestCase;


class TeacherTest extends TestCase
{
    protected $Teacher;

    public function setUp()
    {
        $this->Teacher = new Teacher('1', 'John','doe','johndoe@mail.com','sdfdfs/sdfsfsd/sdfs.jpg','Dear');
    }

    public function testClassConstructor()
    {
        $this->assertSame('John', $this->Teacher->firstName);
        $this->assertSame('1', $this->Teacher->userId);
        $this->assertNotEmpty($this->Teacher->profilePicturePath);
    }

    public function testFullName()
    {
        $this->assertSame('Dear John doe', $this->Teacher->fullName());
    }
}
