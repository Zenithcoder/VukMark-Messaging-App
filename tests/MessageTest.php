<?php

use awonusi\Message;
use awonusi\Student;
use awonusi\Teacher;
use PHPUnit\Framework\TestCase;


class MessageTest extends TestCase
{
    protected $Message;
    protected $Student;
    protected $Teacher;

    public function setUp()
    {
        //object $sender, object $receiver, string $textMessage, string $messageType, string $time 
        $this->Student = new Student('1', 'John','doe','johndoe@mail.com','sdfdfs/sdfsfsd/sdfs.jpg');
        $this->Teacher = new Teacher('2', 'Mike','Leo','mikeleo@mail.com','sdfdfs/sdfsfsd/sdfs.jpg','Dear');
        $this->Message = new Message($this->Student, $this->Teacher,'Good morning my great teacher','manual', date("h:i:sa"));
    }

    public function testGetMessageType()
    {
        $this->assertSame('manual', $this->Message->getMessageType());
    }

    public function testGetSenderFullName()
    {
        $this->assertSame('John doe', $this->Message->fullNameSender());
    }

    public function testGetReceiverFullName()
    {
        $this->assertSame('Dear Mike Leo', $this->Message->fullNameReceiver());
    }
}
