<?php include 'templates/header.php'; ?>
<h2>Taitle</h2>
<div class="container">
<div class="row-fluid">
<div class="span6">
<img class="img-polaroid" src="../resources/images/bicycles/taitle/taitle.jpg" alt="Electric Bicycle Taitle" />
</div>
<div class="span6">
<h4 align="center">Gallery</h4>
	<div id="links">
	<ul class="thumbnails pagination-centered">
		<a href="../resources/images/bicycles/taitle/taitle.jpg" title="Electric Bicycle Benelli Taitle">
		<img src="../resources/images/bicycles/taitle/taitle.jpg" class="img-polaroid" alt="Benelli Taitle image1" style="width: 110px; height: 80px;">
		</a>
	</ul>
	</div>
	</div>
</div>	
	<div class="row-fluid">
	<div class="span6">
	<h4 class="text-green">Sporty Looks and Character</h4>
		<p>
			It’s the first traditional two-wheeleds pedal powered, signed by Benelli Q.J. A compact MTB with tough and tenacious
			character,	unmistakably sporty. Taitle is devoted to off-road performance, without limits.  
		</p>
		<p>
			The 29” wheels of this bicycle offer maximum safety on the road. Benelli Taitle is equipped with a Rock Shox XC32
			adjustable fork, Turn Key, Poploc and air/oil system, with a generous stroke of 100mm.  
		</p>
		<p>
			It should be underlined Shimano® DEORE 3x10 speed derailleur and the braking system with Shimano® DEORE hydraulic 
			disc brake. As Achle, also Taitle has an ergonomic Fizik saddle, able to ensure the appropriate support also 
			in paths more uneven.  
		</p>
		<div class="fb-like" data-href="http://www.benelli.bg/taitle.php" data-width="450" data-layout="button_count" data-show-faces="false" data-send="true"></div>
		<div class="g-plusone" data-size="medium" data-href="http://www.benelli.bg/taitle.php"></div>
		</div>
		<div class="span6">
		<h4>Technical Data</h4>
		<div class="accordion" id="accordion2">
		  <div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
				BICYCLE SPECIFICATIONS
			  </a>
			</div>
			<div id="collapseThree" class="accordion-body collapse in">
			  <div class="accordion-inner">
				<table width="100%" cellspacing="2" cellpadding="3" class="table-condensed">
					<tbody>
						<tr class="scheda_tnt">
							<td width="30%" valign="top" height="18" class="text_bold">GEARS</td>
							<td width="70%" valign="top" class="text">Shimano DEORE XT 3x10 speed</td>
						</tr>
						<tr class="scheda_tnt">
							<td width="30%" valign="top" height="18" class="text_bold">WHEELS</td>
							<td width="70%" valign="top" class="text">Aluminium alloy 29" 24H</td>
						</tr>
						<tr class="scheda_tnt">
							<td width="30%" valign="top" height="18" class="text_bold">FRAME</td>
							<td width="70%" valign="top" class="text">Aluminium alloy 6061 - 48 cm</td>
						</tr>
						<tr class="scheda_tnt">
							<td width="30%" valign="top" height="18" class="text_bold">FORK</td>
							<td width="70%" valign="top" class="text">Rock Shox XC32, Turn Key, PopLoc,  air,  oil, stroke 100mm</td>
						</tr>
						<tr class="scheda_tnt">
							<td width="30%" valign="top" height="18" class="text_bold">BRAKES</td>
							<td width="70%" valign="top" class="text">Shimano DEORE M596 hydraulic disc brake system</td>
						</tr>
						<tr class="scheda_tnt">
							<td width="30%" valign="top" height="18" class="text_bold">SADDLE</td>
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

<?php include 'templates/footer.php'; ?>
