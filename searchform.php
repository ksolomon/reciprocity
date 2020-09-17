				<form onsubmit="return liveSearchSubmit()" id="searchform" name="searchform" method="get" action="<?php bloginfo('url'); ?>/">
					<input id="livesearch" name="s" value=" type and wait for results" onkeypress="liveSearchStart()" onfocus="if (this.value == ' type and wait for results') {this.value = '';}" onblur="if (this.value == '') {this.value = ' type and wait for results';}"  />
					<input type="submit" id="searchsubmit" style="display: none;" value="Search" />
					<div id="LSResult" style="display: none;"><div id="LSShadow"></div></div>
				</form>
 