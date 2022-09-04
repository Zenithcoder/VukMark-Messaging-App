<?php

namespace awonusi;

class Teacher extends AbstractUser
{
    use UserSaveTrait;
   /**
     * determine salutation
     *
     * @var string
     */
    public string $salutation;

    /**
     * determine who can receiver message
     *
     * @var array
     */
    public array $sendMessage = ['Student','Parent','Teacher']; 

    /**
     * determine profile picture path
     *
     * @var string
     */
    public string $profilePicturePath = 'path/to/default/picture.png';

    public function __construct(string $userId, string $firstName, string $lastName, string $email,  string $profilePicturePath, string $salutation)
    {
        parent::__construct($userId,$firstName, $lastName,$email );
        $this->profilePicturePath = $profilePicturePath;
        $this->salutation = $salutation;
        $this->save($this->email,$this->profilePicturePath);
    }

     /**
     * returns the full name
     * @return string
     */
    public function fullName(): string
    {
        return ($this->salutation.' '. $this->firstName.' '. $this->lastName);
    }

    
}