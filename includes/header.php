<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="https://stri.si.edu/sites/default/files/favicon_1.ico" type="image/vnd.microsoft.icon">
	<link href="<?php echo $CLIENT_ROOT; ?>/css/base.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo $CLIENT_ROOT; ?>/css/main.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo $CLIENT_ROOT; ?>/css/quicksearch.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo $CLIENT_ROOT; ?>/js/jquery-ui-1.12.1/jquery-ui.css" type="text/css" rel="stylesheet" />
	<script src="<?php echo $CLIENT_ROOT; ?>/js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="https://stri.si.edu/sites/all/themes/stri/assets/fonts/STRI.css?pwa8c5" media="all">
</head>
<header>
	<div>
		<div class="container">
			<img style="margin-top:2%;width:300px;" src="<?php echo $CLIENT_ROOT; ?>/images/layout/logo_stri.svg">
			<div id="quicksearchdiv" style="float:right">
				<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
				<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
					<div id="quicksearchtext">Search Taxon</div>
					<input id="taxa" type="text" name="taxon" style="width: 225px">
					<button name="formsubmit" id="quicksearchbutton" type="submit" value="Search Terms" style="margin-top: 2px">Search taxon</button>
				</form>
			</div>
		</div>
	</div>

	<div id="top_navbar_container" style="clear:both">
		<div id="top_navbar" class="container">
			<div id="right_navbarlinks" class="four columns">
				<?php
				if($USER_DISPLAY_NAME){
					?>
					<span style="">
						Welcome <?php echo $USER_DISPLAY_NAME; ?>!
					</span>
					<span style="margin-left:5px;">
						<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php">My Profile</a>
					</span>
					<span style="margin-left:5px;">
						<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout">Logout</a>
					</span>
					<?php
				}
				else{
					?>
					<span style="">
						<a href="<?php echo $CLIENT_ROOT."/profile/index.php?refurl=".$_SERVER['SCRIPT_NAME'].'?'.htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
							Log In
						</a>
					</span>
					<span style="margin-left:5px;">
						<a href="<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php">
							New Account
						</a>
					</span>
					<?php
				}
				?>
				<span style="margin-left:5px;margin-right:5px;">
					<a href='<?php echo $CLIENT_ROOT; ?>/sitemap.php'>Sitemap</a>
				</span>

			</div>
			<ul id="hor_dropdown" class="eight columns">
				<li>
					<a href="<?php echo $CLIENT_ROOT; ?>/index.php" >Home</a>
				</li>
				<li>
					<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" >Search</a>
					<ul>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" >Search Collections</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank">Map Search</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" >Images</a>
					<ul>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php" >Image Browser</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" >Custom Search</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?" style="padding:2px 12px">Taxonomic<br/>Inventories</a>
					<ul>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=18" >Algae</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=1" >Amphibians</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=3" >Birds</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=4" >Fish</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=12">Insects &amp; Arachnids</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=11" >Mammals</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=17" >Marine Invertebrates</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=10" >Plants</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=2" >Reptiles</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?" style="padding:2px 12px">Geographic<br/>Inventories</a>
					<ul>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=20" >Barro Colorado Island</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=21" >Bocas del Toro</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=19" >Isla Coiba</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Keys</a>
					<ul>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/ident/key.php?cl=64&proj=10&dynclid=0&taxon=All+Species">Barro Colorado Plants</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/ident/key.php?cl=65&proj=10&dynclid=0&taxon=All+Species">Campana National Park Plants</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/ident/key.php?cl=59&proj=10&dynclid=0&taxon=All+Species">&quot;Dicot&quot; of Panama</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/ident/key.php?cl=60&proj=10&dynclid=0&taxon=All+Species">Ferns and Allies of Panama</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/ident/key.php?cl=61&proj=10&dynclid=0&taxon=All+Species">Monocots of Panama</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/ident/key.php?cl=66&proj=10&dynclid=0&taxon=All+Species">Myrtaceae of Panama</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/ident/key.php?cl=72&proj=10&dynclid=0&taxon=All+Species">Panama Liana Atlas</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/ident/key.php?cl=71&proj=10&dynclid=0&taxon=All+Species">Panama Tree Atlas</a></li>
					</ul>
				</li>
				<li>
					<a href="#" >Interactive Tools</a>
					<ul>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&tid=10349&taxa=Amphibia" >Dynamic Amphibian Checklist</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&tid=56&taxa=Aves" >Dynamic Bird Checklist</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&tid=4773&taxa=Actinopterygii" >Dynamic Fish Checklist</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&tid=13726&taxa=Plantae" >Dynamic Plant Checklist</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key&tid=13726&taxa=Plantae" >Dynamic Plant Key</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&tid=10350&taxa=Reptilia" >Dynamic Reptile Checklist</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo $CLIENT_ROOT; ?>/glossary/index.php" >Glossary</a>
					<ul>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/misc/glossarycover.php" >Background</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/glossary/sources.php" >Contributors</a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/glossary/index.php" >Search Glossary</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</header>

