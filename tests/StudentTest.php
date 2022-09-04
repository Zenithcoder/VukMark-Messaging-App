<?php

use awonusi\Student;
use PHPUnit\Framework\TestCase;


class StudentTest extends TestCase
{
    protected $Student;

    public function setUp()
    {
        $this->Student = new Student('1', 'John','doe','johndoe@mail.com','sdfdfs/sdfsfsd/sdfs.jpg');
    }

    public function testClassConstructor()
    {
        $this->assertSame('John', $this->Student->firstName);
        $this->assertSame('1', $this->Student->userId);
        $this->assertNotEmpty($this->Student->profilePicturePath);
    }

    public function testFullName()
    {
        $this->assertSame('John doe', $this->Student->fullName());
    }
}
