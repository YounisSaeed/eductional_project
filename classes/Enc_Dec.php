<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Enc_Dec
 *
 * @author walid
 */
class Enc_Dec {


	function encryption($data){
		//echo "<b>Enctryption</b>"."<br>";
		//echo "<br>"."Original message: ". $data . "<br>";
		$output = '';

		$iv = '1@34%aA*90!J#45^'; //a simple size 16 key for initialization vector required by CBC
		$value = time(); //generating integer 
		srand($value); //creating a constant seed for the key
		$key = str_pad((string) rand() % 1000, 16, '0', STR_PAD_LEFT); //padding the random int from the left to make sure it generate a size 16 key
		$cyphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, $iv); //encrypting an ciphertext
		$output = $data == null? '': base64_encode($cyphertext); //remove some undefined variables
		//echo "decrypted CipherText: ". $output. "<br><br>"; //convert it to base64
                return $output;
	}

        function decryption ($text){
		$iv = '1@34%aA*90!J#45^';
		$base64 = $text;
		$data = base64_decode($base64);

		for ($i=0; $i<1000; $i++){
			$key = (string) $i;
			$key = str_pad($key, 16, '0', STR_PAD_LEFT);
			$plain = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, $iv);

			if (stristr($plain, 'key')) {
                                return $plain;
			}
		}

	}
}
