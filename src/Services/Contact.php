<?php

namespace Parasut\Service;

use Parasut\Service;

class Contact extends Service
{
    const REQUEST_NAME = 'contacts';

    public function __construct($client, $request)
    {
        parent::__construct($client, self::REQUEST_NAME);
    }
}


?>