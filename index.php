<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="media.css" />
	<title>Калькулятор</title>
	<script src="jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="jquery.inputmask.js"></script>
	<script>
		var neme = [];
		var parent_id = [];
		var polomka = new Array();
		var cena = new Array();
		var i = 25;
		var j = 1;
		<?php for ($i=25;$i<=108;$i++): ?>
			neme[i]='<?php echo $name[$i];?>';
			parent_id[i]='<?php echo $parent_id[$i];?>';
			polomka[i] = new Array();
			cena[i] = new Array();
			<?php for ($j=1;$j<=count($polomka[$i]);$j++): ?>
				<?php if(isset($polomka[$i][$j])): ?>
					polomka[i][j] = '<?php echo $polomka[$i][$j] ?>';
					cena[i][j] = '<?php echo $cena[$i][$j] ?>';
				<?php endif; ?>
				j++;
			<?php endfor; ?>
			i++;
			j=1;
		<?php endfor; ?>		
	</script>
	<script src="my.js"></script>
</head>
<body>
	<div class="popup_over">
		<div class="popup_bg"></div>
		<div class="popup_thanks">Спасибо за заявку!<br>Мы с Вами свяжемся в ближайшее время.</div>
	</div>
	<div class="calc_container">
		<h1>Узнайте стоимость ремонта за 30 секунд</h1>
		<div class="rem" id="rem">
			<h2>Ремонт iPad</h2>
			<p>Мы ремонтируем iPad<br>от iPad 2 до Pro</p>
			<button>Выбрать модель iPad</button>
			<div class="rem_items">
				<div class="rem_item">
					<div class="rem_it" id="apple1">2</div>
				</div>
				<div class="rem_item">
					<div class="rem_it" id="apple2">3</div>
				</div>
				<div class="rem_item">
					<div class="rem_it" id="apple3">4</div>
				</div>			
				<div class="rem_item">
					<div class="rem_it" id="apple4">Air</div>
				</div>			
				<div class="rem_item">
					<div class="rem_it" id="apple5">Air 2</div>
				</div>			
				<div class="rem_item">
					<div class="rem_it" id="apple6">Mini</div>
				</div>	
				<div class="rem_item">
					<div class="rem_it" id="apple7">Mini Retina</div>
				</div>		
				<div class="rem_item">
					<div class="rem_it" id="apple8">Mini 3</div>
				</div>																
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="rem">
			<h2>Ремонт iPhone</h2>
			<p>Мы ремонтируем iPhone<br>от 4 до 7 Plus</p>
			<button>Выбрать модель iPhone</button>
			<div class="rem_items">
				<div class="rem_item">
					<div class="rem_it" id="apple9">6S</div>
				</div>
				<div class="rem_item">
					<div class="rem_it" id="apple10">6 Plus</div>
				</div>
				<div class="rem_item">
					<div class="rem_it" id="apple11">6</div>
				</div>			
				<div class="rem_item">
					<div class="rem_it" id="apple12">5S</div>
				</div>			
				<div class="rem_item">
					<div class="rem_it" id="apple13">5C</div>
				</div>			
				<div class="rem_item">
					<div class="rem_it" id="apple14">5</div>
				</div>	
				<div class="rem_item">
					<div class="rem_it" id="apple15">4S</div>
				</div>		
				<div class="rem_item">
					<div class="rem_it" id="apple16">4</div>
				</div>	
				<div class="rem_item">
					<div class="rem_it" id="apple17">SE</div>
				</div>															
				<div class="rem_item">
					<div class="rem_it" id="apple18">6S Plus</div>
				</div>
				<div class="rem_item">
					<div class="rem_it" id="apple19">7</div>
				</div>
				<div class="rem_item">
					<div class="rem_it" id="apple20">7 Plus</div>
				</div>
				<div class="clear"></div>
			</div>	
			<div class="clear"></div>		
		</div>
		<div class="rem">
			<h2>Ремонт Mac</h2>
			<p>Мы ремонтируем Mac<br>от MacBook до iMac</p>
			<button>Выбрать модель Mac</button>
			<div class="rem_items">
				<div class="rem_item">
					<div class="rem_it" id="apple21">Macbook<br>Pro</div>
				</div>															
				<div class="rem_item">
					<div class="rem_it rem_it2" id="apple22">Macbook</div>
				</div>
				<div class="rem_item">
					<div class="rem_it" id="apple23">Macbook<br>Air</div>
				</div>
				<div class="rem_item">
					<div class="rem_it rem_it2" id="apple24">iMac</div>
				</div>
				<div class="clear"></div>	
			</div>
			<div class="clear"></div>			
		</div>
		<div class="clear"></div>
		<div class="calc_container2">
			<div class="left">
				<div class="select_color">
					<h2>Выберите цвет:</h2>
					<div class="cont">
						<div class="item">
							<div class="item_item">
								<div class="color"></div><p>black</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<div class="color"></div><p>black</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<div class="color"></div><p>black</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<div class="color"></div><p>black</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<div class="color"></div><p>Rose Gold</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<div class="color"></div><p>Rose Gold</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<div class="color"></div><p>Rose Gold</p>
							</div>
						</div>	
						<div class="item">
							<div class="item_item">
								<div class="color"></div><p>Rose Gold</p>
							</div>
						</div>								
					</div>
				</div>
				<div class="clear"></div>
				<div class="select_remont">
					<h2>Что ремонтируем:</h2>
					<div class="cont">
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="item">
							<div class="item_item">
								<p>Другая <br>неисправность</p>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="right">
				<h2>Будет как новый</h2>
				<div class="right_img"></div>
				<div class="right_price"><p>За 0 рублей</p></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="bottom_form">
		<div class="bottom_form_container">
			<div class="left">Стоимость ремонта составляет 0 рублей<br>Возможна оплата банковской картой</div>
			<div class="right">
				<form id="form_rem">
					<input id="applicationTelephone" type='text' name='tel' placeholder="Ваш номер">
					<input id="polomka" type='hidden' name='polomka'>
					<input id="model" name='model' type='hidden'>
					<input id="color" name='color' type='hidden'>
					<input id="cena" name="cena" type='hidden'>
					<input type='submit' value="Вызвать мастера">
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>