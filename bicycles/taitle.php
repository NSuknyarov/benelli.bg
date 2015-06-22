<!DOCTYPE html>
<html lang="bg">
  <head>
    <title>Taitle велосипед | benelli.bg</title>
	<meta charset='utf-8'>
	<meta name="Keywords" content="Benelli, Бенели, България, велосипед, Италия">
	<meta name="description" content="Велосипед Taitle">
	<meta name="HandheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  	<meta name="theme-color" content="#138F35">
	<link href="../resources/css/bootstrap.min.css" rel="stylesheet">
	<link href="../resources/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../resources/css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="../resources/css/blueimp-gallery.min.css">
	<link rel="shortcut icon" href="../resources/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../resources/images/favicon.ico" type="image/x-icon">
  </head>
  
<?php include '../templates/header-bicycles.php'; ?>
<h2>Taitle</h2>
<div class="container">
<div class="row-fluid">
<div class="span6">
<img class="img-polaroid" src="../resources/images/bicycles/taitle/taitle.jpg" alt="Електрически велосипед Taitle" />
</div>
<div class="span6">
<h4 align="center">Галерия</h4>
	<div id="links">
	<ul class="thumbnails pagination-centered">
		<a href="../resources/images/bicycles/taitle/taitle.jpg" title="Електрически велосипед Benelli Taitle">
		<img src="../resources/images/bicycles/taitle/taitle.jpg" class="img-polaroid" alt="Benelli Taitle image1" style="width: 110px; height: 80px;">
		</a>
	</ul>
	</div>
	</div>
</div>	
	<div class="row-fluid">
	<div class="span6">
	<h4 class="text-green">Спортен вид и характер</h4>
		<p>
			Това е първият традиционен велосипед излизащ от инженерите на Benelli Q.J. Компактно MTB със силен и здрав характер, и
			неоспоримо спортен вид. Taitle е отдаден на безкомпромисно представяне по пресечен терен, без ограничения.
		</p>
		<p>
			29" гуми на този велосипед предоставят максимална безопасност на пътя. Benelli Taitle е оборудван с Rock Shox XC32 преден
			регулируем амортисьор, който предлага и екстри като заключване от кормилото, въздушно/маслена система и щедър ход от 100мм.
		</p>
		<p>
			Трябва да се отбележат и дерайльорът Shimano DEORE с 30 скорости, както и хидравличните дискови спирачки Shimano DEORE. Също както
			моделът Achle и тук седалката е ергономична на марката Fizik и предлага подходяща упора и при по-неравни терени. 
		</p>
		<div class="fb-like" data-href="http://www.benelli.bg/taitle.php" data-width="450" data-layout="button_count" data-show-faces="false" data-send="true"></div>
		<div class="g-plusone" data-size="medium" data-href="http://www.benelli.bg/taitle.php"></div>
		</div>
		<div class="span6">
		<h4>Технически данни</h4>
		<div class="accordion" id="accordion2">
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
				ДОПЪЛНИТЕЛНИ ХАРАКТЕРИСТИКИ
			  </a>
			</div>
			<div id="collapseThree" class="accordion-body collapse in">
			  <div class="accordion-inner">
				<table width="100%" cellspacing="2" cellpadding="3" class="table-condensed">
					<tbody>
						<tr class="scheda_tnt">
							<td width="30%" valign="top" height="18" class="text_bold">СКОРОСТИ</td>
							<td width="70%" valign="top" class="text">Shimano DEORE XT с 30 скорости</td>
						</tr>
						<tr class="scheda_tnt">
							<td width="30%" valign="top" height="18" class="text_bold">КАПЛИ</td>
							<td width="70%" valign="top" class="text">Изработени от алуминиева сплав; 29"-24H</td>
						</tr>
						<tr class="scheda_tnt">
							<td width="30%" valign="top" height="18" class="text_bold">РАМКА</td>
							<td width="70%" valign="top" class="text">Алуминиева рамка 6061-48см</td>
						</tr>
						<tr class="scheda_tnt">
							<td width="30%" valign="top" height="18" class="text_bold">ПРЕДНА ВИЛКА</td>
							<td width="70%" valign="top" class="text">Амортисьорна Rock Shox XC32 с 100м ход, заключване от кормилото и въздушно/маслена система</td>
						</tr>
						<tr class="scheda_tnt">
							<td width="30%" valign="top" height="18" class="text_bold">СПИРАЧКИ</td>
							<td width="70%" valign="top" class="text">Хидравлични дискови Shimano M596</td>
						</tr>
						<tr class="scheda_tnt">
							<td width="30%" valign="top" height="18" class="text_bold">СЕДАЛКА</td>
							<td width="70%" valign="top" class="text">Fizik Gobi XM Kium</td>
						</tr>
					</tbody>
				</table>
			  </div>
			</div>
		  </div>
		</div>
    
	<script>
	document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link},
        links = this.getElementsByTagName('a');
    if (blueimp.Gallery(links, options)) {
        return false;
    }
	};
	</script>
	</div> 
</div>
</div>

<?php include '../templates/footer-subfolder.php'; ?>
