<?
function getRememberablePassword(){
	$password_prefix = Array('Green',
												'Yellow',
												'Orange',
												'Red',
												'Blue',
												'Happy',
												'Bright',
												'Jumpy',
												'Joyful',
												'Crimson',
												'Joyful',
												'Peaceful',
												'Smart',
												'Quick',
												'Speedy',
												'Checkered',
												'Tactful');

	$password_postfix = Array('Fruit',
											'Newt',
											'Leaf',
											'Friend',
											'Picture',
											'Music',
											'Jump',
											'Fun',
											'Happy',
											'Flute',
											'Door',
											'House',
											'Place',
											'Paint',
											'Glass',
											'Smart',
											'Impact',
											'Counsel',
											'Song',
											'Band',
											'Fish',
											'Bird',
											'Room');

	$digits = 3;
	$rand_num =  str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);

	return $password_prefix[array_rand($password_prefix)].$password_postfix[array_rand($password_postfix)].$rand_num;
}
?>
