<?php
	if (empty($_GET['page'])) {
		echo '<a href="?page=1">Page 1</a> <a href="?page=3">Page 3</a> <a href="?page=2">Page 2</a>';
	} else
	if ($_GET['page'] == 1 ) {
		echo "Ini page 1";
	} else
	if ($_GET['page'] == 2 ) {
		echo "Ini page 2";
	} else

	if ($_GET['page'] == 3 ) {
		echo "Ini page 3";
	}
?>