<?php
	
	session_start();
	
	// Если существует переменная POST, то обрабатываем форму
	if ( $_POST ) {
		
		// Токен и ID чата для Telegram бота
		$token = "8048170459:AAFZU-QEwi-56er82KW7011wIJppT4NN66A";
		$chat_id = "-4839175389";
		
		// Получаем данные из формы
		$name = $_POST['name'] ? $_POST['name'] : 'Не указано';
		$tel = $_POST['tel'];
		
		// Формируем сообщение для Telegram
		$message = "Заявка на вызов специалиста с сайта geometriyasten62.ru\n";
		$message .= "Имя: " . $name . "\n";
		$message .= "Телефон: " . $tel . "\n";
		
		// Формируем сообщение для email
		$email_message = "Заявка на вызов специалиста с сайта geometriyasten62.ru\n\n";
		$email_message .= "Имя: " . $name . "\n";
		$email_message .= "Телефон: " . $tel . "\n";
		
		// Отправляем на email
		$email_sent = mail("sidorov-vv3@mail.ru", "Заявка на вызов специалиста с сайта geometriyasten62.ru", $email_message);
		$email_sent = mail("vasilyev-r@mail.ru", "Заявка на вызов специалиста с сайта geometriyasten62.ru", $email_message);
		
		// Отправляем в Telegram
		$telegram_url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text=" . urlencode($message);
		$telegram_sent = file_get_contents($telegram_url);
		
		// Проверяем успешность отправки
		if ($email_sent || $telegram_sent) {
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за заявку! Мы свяжемся с Вами в ближайшее время.</p>';
		} else {
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Ошибка!</strong><br>Не удалось отправить заявку. Попробуйте еще раз.</p>';
		}
		
		// Перенаправляем пользователя обратно на страницу
		header("Location: ".$_SERVER['HTTP_REFERER']);
		exit;
	}
?>