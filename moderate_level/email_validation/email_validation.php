<?php

    class EmailValidator
    {
        /**
         * @var string
         */
        private $email;

        /**
         * EmailValidator constructor.
         *
         * @param string $email
         */
        public function __construct($email)
        {
            $this->email = $email;
        }

        /**
         * @return bool
         */
        public function isValid()
        {
            return filter_var($this->email, FILTER_VALIDATE_EMAIL) == true ? true : false;
        }
    }
	$fh = fopen( $argv[1], "r" );

	while ( false !== ($line = fgets($fh)) )
	{
		$email = trim($line);
		unset($line);

        $validator = new EmailValidator($email);
        $validationResult = $validator->isValid();
        unset($validator);
        
        echo ($validationResult === true ? 'true' : 'false') . "\n";
	}
