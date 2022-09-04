<?php

namespace awonusi;

abstract class AbstractUser
{
    /**
     * determine user id
     *
     * @var string
     */
    public  string $userId;

    /**
     * determine first name
     *
     * @var string
     */
    public  string $firstName;

    /**
     * determine last name
     *
     * @var string
     */
    public  string $lastName;

    /**
     * determine email
     *
     * @var string
     */
    public  string $email;

    /**
     * determine who can receiver message
     *
     * @var array
     */
    public  array $sendMessage = []; 

    public function __construct(string $userId, string $firstName, string $lastName, string $email)
    {
        $this->userId = $userId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    /**
     * returns the full name
     * @return string
     */
    public  function fullName(): string
    {
        return ($this->firstName.' '. $this->lastName);
    }

    /**
     * returns the email
     * @return string
     */
    public function email(): string
    {
        return $this->email;
    }

    /**
     * returns the user id
     * @return int
     */
    public function userId(): int
    {
        return $this->userId;
    }

}