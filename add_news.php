<?php session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My style -->
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" href="css/add_news.css">
    <link rel="shortcut icon" href="img/shortcut icons/Blip_article.jpg" type="image/x-icon" />
    <!-- Content -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Ivan4ick">
	<title>Добавление статьи</title>
</head>
<body>
<?php require('func/func_add_news.php'); ?>


	<div class="add_n">
		<h2>Добавление статьи</h2>
	</div>
	<form action="add_news.php" method="post" enctype="multipart/form-data">	
	<input type="text" placeholder="Название" name="header"  value="<?= $_POST['header']?>" required>	
	<input type="text" placeholder="Ваше имя" name="author"  value="<?= $_POST['author']?>" required>
	<input name="upload" type="file" required>
	<textarea name="content"  cols="26" rows="5" value="<?= $_POST['content']?>" required></textarea>
	<input type="submit" name="send_news">
	</form>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">
		$(window).ready(function(){
        /* немного другой эффект появления, и задержка в 2 секунды */
	setTimeout ("$('#block').show('drop');",2000);
});
		$(function() {
    $('#sb_menu').click(function(){
        
            if ($('#submenu_phone')[0] == $('.hideitems')[0]) {
                $('#submenu_phone').removeClass('hideitems');
                $('#submenu_phone').addClass('showitems');
        }else{
            $('#submenu_phone').addClass('hideitems');
                $('#submenu_phone').removeClass('showitems');
        }
            
          

    });
});
$(window).on('resize', function() {
    if ($(window).width() > 880) {
     $('#submenu_phone').removeClass('showitems');
     $('#submenu_phone').addClass('hideitems');
 }
               
});
 

	</script>

</body>
</html>