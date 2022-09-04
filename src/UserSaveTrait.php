<?php
namespace awonusi;

trait UserSaveTrait
{
	 /**
     * to save
     * @return string
     */
	public function save(string $email, string $profilePicturePath): string
    {
        if(!is_null($email) && preg_match('/\.(jpe?g|bmp|png|JPE?G|BMP|PNG)(?:[\?\#].*)?$/', $profilePicturePath) )
        {
            return 'success';
        }

		return 'failed';

    }
}
