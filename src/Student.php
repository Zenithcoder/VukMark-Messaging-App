<?php

namespace awonusi;

class Student extends AbstractUser
{
    use UserSaveTrait;

    /**
     * determine profile picture path
     *
     * @var string
     */
    public string $profilePicturePath = 'path/to/default/picture.png';

    /**
     * determine who can receiver message
     *
     * @var array
     */
    public array $sendMessage = ['Teacher']; 

    public function __construct(string $userId, string $firstName, string $lastName, string $email, string $profilePicturePath)
    {
        parent::__construct($userId,$firstName, $lastName,$email );
        $this->profilePicturePath = $profilePicturePath;
        $this->save($this->email,$this->profilePicturePath);
    }

     /**
     * returns the full name
     * @return string
     */
    public function fullName(): string
    {
        return ($this->firstName .' '. $this->lastName);
    }

   
}