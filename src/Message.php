<?php

namespace awonusi;

class Message extends AbstractMessage
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

    public function __construct( object $sender, object $receiver, string $textMessage, string $messageType, string $time )
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
     public function fullNameSender(): string
     {
        return $this->sender->fullName();
     }

     /**
     * returns the receiver full name
     * @return string
     */
     public function fullNameReceiver(): string
     {
        return $this->receiver->fullName();
     }

     /**
     * get the text message
     * @return string
     */
     public function getTextMessage(): string
     {
        return $this->textMessage;
     }

     /**
     * get the message type
     * @return string
     */
     public function getMessageType(): string
     {
        return $this->messageType;
     }

    /**
     * get the time
     * @return string
     */
     public function getTime(): string 
     {
        return date ('H:i',strtotime($this->time));
     }
}