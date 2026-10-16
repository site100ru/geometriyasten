<?php
	// Картинка с примером на сложение для защиты форм от роботов.
	// Правильный ответ запоминается в сессии и сверяется в mails/callback-mail.php.
	// Каждый показ картинки — новый пример.

	session_start();

	$a = rand( 1, 9 );
	$b = rand( 1, 9 );

	$_SESSION['captcha'] = $a + $b;

	// Запрещаем браузеру кешировать картинку, иначе после обновления
	// пользователь увидит старый пример, а в сессии будет уже новый ответ
	header( 'Content-Type: image/png' );
	header( 'Cache-Control: no-store, no-cache, must-revalidate' );
	header( 'Pragma: no-cache' );

	$img = imagecreatetruecolor( 120, 40 );
	$bg  = imagecolorallocate( $img, 240, 240, 240 );
	$fg  = imagecolorallocate( $img, 30, 30, 30 );
	imagefill( $img, 0, 0, $bg );

	// Шум из линий, чтобы пример сложнее было распознать программой
	for ( $i = 0; $i < 30; $i++ ) {
		$c = imagecolorallocate( $img, rand( 150, 220 ), rand( 150, 220 ), rand( 150, 220 ) );
		imageline( $img, rand( 0, 120 ), rand( 0, 40 ), rand( 0, 120 ), rand( 0, 40 ), $c );
	}

	imagestring( $img, 5, 22, 12, "$a + $b = ?", $fg );

	imagepng( $img );
	imagedestroy( $img );
