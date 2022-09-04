<?php

namespace awonusi;

abstract class AbstractMessage
{
    /**
     * determine sender
     *
     * @var object
     */
    public  object $sender;

    /**
     * determine receiver
     *
     * @var object
     */
    public  object $receiver;

    /**
     * determine text message
     *
     * @var string
     */
    public  string $textMessage;

    /**
     * determine message type
     *
     * @var string
     */
    public  string $messageType;

    /**
     * determine time
     *
     * @var string
     */
    public  string $time;

    public function __construct(object $sender,object $receiver, string $textMessage, string $messageType, string $time  )
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->textMessage = $textMessage;
        $this->messageType = $messageType;
        $this->time = $time;
    }

    /**
     * returns the sender full name
     * @return string
     */
    abstract public function fullNameSender(): string;

    /**
     * returns the receiver full name
     * @return string
     */
    abstract public function fullNameReceiver(): string;

    /**
     * get the text message
     * @return string
     */
    abstract public function getTextMessage(): string;

    /**
     * get the message type
     * @return string
     */
    abstract public function getMessageType(): string;

    /**
     * get the time
     * @return string
     */
    abstract public function getTime(): string;
}