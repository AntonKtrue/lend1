<?php
	$phone_format = 'three'; // перед стартом проекта убрать лишнее, должно остаться one - одно поле для телефона, three - поле разбито на 3
	$desc = true; // если есть дескрипт перед полем (Введите ваше имя и т.д.) поставить true
	$sitename = 'dostavka-club';
	$emailsArr = 'mokselleweb@yandex.ru|mokselleweb@yandex.ru';
	$prefix = '/d/'; // если папка /b/ - ставим ../
	if($phone_format == 'one') {
		$phone_field = '<label class="phone required"><input type="text" name="phone" placeholder="Ваш телефон"></label><br>';
	} else {
		$phone_field = '<label class="phone required"><input type="text" name="phone1" maxlength="5" placeholder="+7" value="+7"></label><label class="phone required"><input type="text" name="phone2" maxlength="6" placeholder="123"></label><label class="phone required"><input type="text" name="phone3" maxlength="10" placeholder="4567890"></label><br>';
	}
	if($desc != false) { // здесь менять дескрипт, если нужно
		$desc_name = '<div class="desc">Имя</div>';
		$desc_phone = '<div class="desc">Телефон</div>';
		$desc_email = '<div class="desc">E-mail</div>';
		$desc_ques = '<div class="desc">Ваш вопрос</div>';
	} else {
		$desc_name = '';
		$desc_phone = '';
		$desc_email = '';
		$desc_ques = '';
	}

	/*
	 *
	 * <?php echo $desc_email ?>
        <label class="email required">
            <input type="text" name="email" placeholder="Ваш E-mail">
        </label><br>
	 */
?>