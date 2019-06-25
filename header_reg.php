	<header>
		<div class="logo">
			<a href="/index.php">
			<h2>Golden Edition RP</h2>
			</a>
		</div>
		<div class="user_name_hello">
			<h2>Добрый день, <?= $_SESSION['User_name'] ?>.</h2>
		</div>
		<div class="nav">
			<a href="/index.php">Главная</a>
			<a href="/Donat.php">Донат</a>	
			<a href="/Contact.php">Контакты</a>	
		</div>
			<div class="exit">
				
			<form action="exit.php" method="POST" class="form_logout">
				<input type="submit" name="logout" value="Выйти">
			</form>			
		</div>
		<div class="icon_bar_mobile">
				<a id="sb_menu" ><img src="img/icon_bar/menu.png" alt="menu"></a>
			</div>	
	</header>
	<div id="submenu_phone" class="hideitems">
			<h2>Добрый день, <?= $_SESSION['User_name'] ?>.</h2>
				<a href="/index.php"><li>Главная</li></a>
				<a href="/Donat.php"><li>Донат</li></a>
				<a href="/Contact.php"><li>Контакты</li></a>
				<div class="exit_submenu">
				
			<form action="exit.php" method="POST" class="form_logout">
				<input type="submit" name="logout" value="Выйти">
			</form>			
		</div>	
			</div>
