<?php

use awonusi\UserParent;
use PHPUnit\Framework\TestCase;


class UserParentTest extends TestCase
{
    protected $Parent;

    public function setUp()
    {
        $this->Parent = new UserParent('1', 'John','doe','johndoe@mail.com','sdfdfs/sdfsfsd/sdfs.jpg','Dear');
    }

    public function testClassConstructor()
    {
        $this->assertSame('John', $this->Parent->firstName);
        $this->assertSame('1', $this->Parent->userId);
        $this->assertNotEmpty($this->Parent->profilePicturePath);
    }

    public function testFullName()
    {
        $this->assertSame('Dear John doe', $this->Parent->fullName());
    }
}
