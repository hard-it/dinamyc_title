<?
$link = $APPLICATION->getCurPage();
$title = $APPLICATION->getPageProperty("title");
$alt_title = $APPLICATION->getPageProperty("alt_title");
if($link == "/" || $link == "/catalog/" || $link == "/order/"):
    ?>
    <script>
		document.addEventListener("visibilitychange", function(){
			if (document.hidden){
				document.title = '<?=$alt_title?>';
			} else {
				document.title = '<?=$title?>';
			}
		});
    </script>
<?
endif;
?>