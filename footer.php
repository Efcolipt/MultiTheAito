<footer>
	<div class="user_count">
		<span><?php echo "Cейчас онлайн: " . getOnlineUsers();// выводим данные ?></span>
		<span><?php echo " Гостей: ".$log_session;// выводим данные ?></span>
	</div>
	<div class="transitional"></div>
	<div class="copy"><?= date("Y") ?> &copy; GoldenEdition RP</div>
</footer>