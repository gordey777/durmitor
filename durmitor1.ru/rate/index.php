<?php  

require_once 'get_rate.php' ;

$currency = array(
'euro' => 'R01239'
);

$rate = get_rate($currency);

foreach ($rate as $key => $value) { ?>

<script type="text/javascript" src="http://durmitor1.ru/sites/all/themes/goog/js/jquery-1.9.0.min.js"></script>

<script type="text/javascript">

var curs_euro = "<?php echo $value['today']; ?>";

	$(document).ready(function() {

		$("span.rub_euro").each(function (i) {
			var rub_curs = $(this).text();

			var curs_total = Math.round(curs_euro * rub_curs).toFixed(0);

			$(this).text(curs_total + " руб" + " (" + rub_curs + " евро)");
		});

	});

</script>

<?php } ?>