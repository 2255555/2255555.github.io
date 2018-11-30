<?php
$phone = $_POST['phone'];
if(empty($phone)) {
?>
<!DOCTYPE html>
<html>
	 
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Извините, заявка не отправлена, Вы не ввели необходимые данные!</title>
		<style type="text/css">
			body
				{
					background: #F3F3F3;
					font-family: Arial;
				}
			.main
				{
					text-align: center; font-size: 30px; font-weight: bold; color: #000; margin-top: 150px;
				}
				.main p {
					font-size:30px;line-height:1.7;
				}
				.btn {
					display:block;width:280px;color:white;font-size:18px;text-align:center;background:#C4252A;border-radius:20px;
					text-decoration:none;padding:12px 0;margin:20px auto;text-transform:uppercase;
				}
				.btn:hover {
					background:red;
				}
				b {
					color:red;
				}
		</style>
	 
		
	</head>
	<body>
		<div class="main">
			<p>Извините, <b>заявка не отправлена</b>, Вы не ввели необходимые данные!<br>
			Вернитесь на сайт и повторно заполните контакнутю форму.</p>
			
			<a href='./' class='btn'>Вернуться на сайт</a>
			
		</div>
	 
	</body>
 
</html>
<?
}else {
	
	//$email2= "test@gmail.com" . ", " ;  
	//$email2 .= "test1@gmail.com";
	
$email2="firs_oleg@ukr.net"; // --------------------------------------------- почта, куда придёт заявка с сайта
$headers  =  'MIME-Version: 1.0' . "\r\n";
	$headers .=  'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .=  'To: <'.$email2.'>, '."\r\n";
	$headers .=  'From: <no-reply@example.com>' . "\r\n"; // ------------- адрес отправителя
$subject2    = "Новый заказ"; // ----------------------------------------- заголовок, тут можно указать название товара
$message2    = "
<br>Имя: ".$_POST['name']."
<br>Телефон: ".$_POST['phone']."
<br>Ссылка: ".@$_SERVER['HTTP_REFERER']."
<br>Время заказа: ".date('d-m-Y / H:i:s')."
<br>IP-адрес посетителя: ".@$_SERVER['REMOTE_ADDR']."
";
$mail=mail($email2, $subject2, $message2, $headers);
if($mail==true){
?>

<html>
	 
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Спасибо!</title>
		 
		<style type="text/css">
			body
				{
				 
					font-family: Arial;
				}
			.main
				{
					text-align: center; font-size: 30px; font-weight: bold; color: #000; margin-top: 150px;
				}
				.main p {
					font-size:30px;line-height:1.7;
				}
				.btn {
					display:block;width:280px;color:white;font-size:18px;text-align:center;background:#C4252A;border-radius:20px;
					text-decoration:none;padding:12px 0;margin:20px auto;text-transform:uppercase;
				}
		</style>
	 
		 
	</head>
	<body>
		<div class="main">
			<p>БЛАГОДАРИМ ЗА ЗАЯВКУ!<br>
			Ваша заявка принята и поставлена в обработку.</p>
			
			<a href='./' class='btn'>Вернуться на сайт</a>
			
		</div>
	 
	<!-- код метрики (для отслеживания конверсии) -->
	
	
	
	<!-- код метрики (для отслеживания конверсии) -->
	 
	</body>
 
</html>

<?
}else{
    echo "no";
}
}
?>