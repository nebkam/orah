<?php include "tpl/header.php"; ?>

	<style type="text/css">
		div#content p {
		;margin-bottom:30px
		}
	</style>

	<div id="content" class="posta">
		<p class="paraP ru">
			ожалуйста, заполните следующую форму, на основании которой наш отдел продаж свяжется с вами и определит заказ в соответствии с типом и количеством рассады, которую мы продаем.
		</p>
		<form>
			<label>Имя и фамилия
				<input id="ime" name="ime" type="text" tabindex="1" />
			</label>
			<label>Адрес
				<input id="adresa" name="adresa" type="text" tabindex="2" />
			</label>
			<label>Город
				<input id="mesto" name="mesto" type="text" tabindex="3" />
			</label>
			<label>Почтовый ящик
				<input id="pbroj" name="pbroj" type="text" tabindex="4" />
			</label>
			<label>Государство
				<input id="drzava" name="drzava" type="text" tabindex="5" />
			</label>
			<label>Эл. адрес
				<input id="email" name="email" type="text" tabindex="6" />
			</label>
			<label>Телефон
				<input id="tel" name="tel" type="text" tabindex="7" />
			</label>
			<label>Введите тип и количество рассады, которое вас интересует, из каталога. Все ваши предложения и вопросы приветствуются.
				<textarea tabindex="8" rows="5" cols="40"></textarea>
			</label>
			<input type="submit" tabindex="9" value="Послать" />
		</form>
		<a class="toVrh soft" href="#vrh" title="В начало страницы">&nbsp;</a>
	</div><!--#content-->

<?php include "tpl/footer.php";