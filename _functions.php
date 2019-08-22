<?php

	//	Afficher le SVG du fond
	function afficherFond() {
		?>

		<svg version="1.1" id="farm" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 612 464.748" enable-background="new 0 0 612 464.748" xml:space="preserve">

		<?php 
			//	Volcans
			include('assets/svg/path_volcan.svg'); 
			//	Maison
			include('assets/svg/path_maison.svg');
		?>

		<g>
			<polygon fill="#FDFAE2" points="366.231,328.159 367.953,326.877 369.677,328.159 369.677,345.987 366.231,345.987 	"/>
			<polygon fill="#FDFAE2" points="358.899,328.159 360.622,326.877 362.346,328.159 362.346,345.987 358.899,345.987 	"/>
			<polygon fill="#FDFAE2" points="351.443,328.159 353.167,326.877 354.89,328.159 354.89,345.987 351.443,345.987 	"/>
			<polygon fill="#FDFAE2" points="343.987,328.159 345.711,326.877 347.434,328.159 347.434,345.987 343.987,345.987 	"/>
			<polygon fill="#FDFAE2" points="336.406,328.159 338.13,326.877 339.853,328.159 339.853,345.987 336.406,345.987 	"/>
			<rect x="337.597" y="331.765" fill="#FDFAE2" width="34.526" height="1.128"/>
			<rect x="337.597" y="339.284" fill="#FDFAE2" width="34.526" height="1.127"/>
		</g>

		<!-- <image x="60%" y="50vh" width="80" height="80" xlink:href="assets/svg/grange.svg" /> -->

		<!-- nuages -->
		<g id="arbres">
			<g id="arbre-8">
				<path fill="#93C148" d="M7.15,300.09c0,20.761,17.922,29.578,36.104,29.578c18.183,0,36.077-8.289,36.077-29.048
					s-17.894-46.125-36.077-46.125C25.072,254.495,7.15,279.334,7.15,300.09z"/>
				<path fill="#A9CA54" d="M26.567,316.108c8.003-1.623,15.07-5.428,21.552-10.306c6.148-4.629,13.343-9.631,17.284-16.413
					c3.367-5.792,3.594-11.964,3.678-18.278c6.2,8.73,10.25,19.638,10.25,29.51c0,20.758-17.894,29.048-36.077,29.048
					c-12.054,0-23.99-3.881-30.668-12.547C17.304,317.277,22.021,317.029,26.567,316.108z"/>
				<polygon fill="#684C46" points="46.317,348.825 46.317,319.685 59.73,310.741 70.491,314.716 70.491,313.724 61.22,309.418
					67.676,304.12 68.486,302.11 59.895,307.596 60.227,297.662 59.544,297.662 58.405,308.919 46.317,315.546 45.884,292.36
					54.763,284.416 68.174,286.567 68.114,285.469 56.751,283.173 67.512,274.976 67.512,274.044 55.448,281.186 54.825,269.015
					54.265,269.015 53.769,282.76 45.884,289.755 44.827,261.399 43.337,259.743 44.166,296.832 32.079,289.876 28.503,276.646
					27.277,276.135 29.595,288.72 17.011,279.281 17.011,280.936 28.602,289.548 16.016,291.7 16.016,292.485 31.085,291.534
					44.001,299.813 43.253,315.045 34.066,310.411 34.231,300.642 33.403,299.314 32.245,309.418 20.984,301.965 19.329,301.965
					30.754,310.243 17.506,316.04 17.853,316.594 32.741,311.9 43.253,318.026 41.35,348.825 		"/>
				<path fill="#442E2A" d="M16.016,292.485V291.7l12.585-2.152l-11.59-8.612v-1.654l12.584,9.438l-2.318-12.584l1.226,0.512
					l3.577,13.229l12.086,6.956l-0.828-37.089l0.443,0.49c-0.004,0.083-0.011,0.162-0.011,0.246
					c0.012,6.154,0.044,12.339,0.352,18.486c0.297,5.976,0.247,12.063,0.904,18.007c0.392,3.55-0.117,51.851-0.117,51.851h-3.558
					l1.903-30.798l-10.512-6.125l-14.889,4.693l-0.346-0.555l13.248-5.797l-11.425-8.277h1.655l11.261,7.453l1.158-10.104l0.829,1.327
					l-0.166,9.771l9.188,4.634l0.748-15.231l-12.916-8.278L16.016,292.485z"/>
			</g>
			<g id="arbre-7">
				<path fill="#86B43A" d="M113.968,314.097c0,15.525-13.406,22.124-27.006,22.124s-26.986-6.202-26.986-21.729
					c0-15.526,13.386-34.502,26.986-34.502C100.562,279.99,113.968,298.567,113.968,314.097z"/>
				<path fill="#93C148" d="M99.445,326.077c-5.989-1.215-11.274-4.061-16.122-7.708c-4.599-3.465-9.98-7.206-12.928-12.278
					c-2.519-4.333-2.688-8.949-2.751-13.673c-4.638,6.529-7.668,14.688-7.668,22.072c0,15.526,13.386,21.729,26.986,21.729
					c9.018,0,17.945-2.906,22.94-9.386C106.375,326.953,102.845,326.766,99.445,326.077z"/>
				<polygon fill="#684C46" points="84.669,350.548 84.669,328.751 74.637,322.063 66.587,325.035 66.587,324.291 73.525,321.07
					68.693,317.109 68.088,315.606 74.514,319.709 74.266,312.279 74.777,312.279 75.629,320.698 84.669,325.655 84.994,308.313
					78.354,302.37 68.321,303.98 68.367,303.159 76.867,301.438 68.817,295.309 68.817,294.611 77.841,299.954 78.307,290.851
					78.727,290.851 79.095,301.131 84.994,306.362 85.784,285.154 86.9,283.915 86.28,311.657 95.32,306.455 97.997,296.558
					98.914,296.177 97.179,305.591 106.592,298.529 106.592,299.768 97.922,306.209 107.336,307.819 107.336,308.405 96.063,307.694
					86.403,313.886 86.962,325.28 93.833,321.816 93.71,314.507 94.33,313.514 95.196,321.07 103.62,315.498 104.858,315.498
					96.313,321.689 106.221,326.026 105.961,326.439 94.825,322.931 86.962,327.513 88.386,350.548 		"/>
			</g>
			<path id="arbre-6" fill="#64842C" d="M480.514,332.397c0-5.519-4.763-12.12-9.596-12.12s-9.588,6.741-9.588,12.261
				c0,5.206,4.237,7.457,8.773,7.695v5.114h1.32l-0.314-5.096C475.875,340.189,480.514,337.84,480.514,332.397z"/>
			<path id="arbre-5" fill="#779D2C" d="M599.646,321.978c0-8.977-7.75-19.719-15.612-19.719c-7.861,0-15.602,10.969-15.602,19.947
				c0,8.416,6.807,12.093,14.135,12.52l-0.52,15.522l3.603-3.106l-1.148-12.384C592.201,334.609,599.646,330.775,599.646,321.978z"/>
			<path id="arbre-4" fill="#64842C" d="M32.19,333.288c0-5.64-4.868-12.386-9.806-12.386c-4.94,0-9.8,6.889-9.8,12.527
				c0,5.319,4.33,7.623,8.967,7.866v5.226H22.9l-0.322-5.208C27.448,341.251,32.19,338.851,32.19,333.288z"/>
			<path id="arbre-3" fill="#779D2C" d="M123.406,330.182c0-5.428-4.687-11.923-9.442-11.923c-4.752,0-9.432,6.634-9.432,12.062
				c0,5.091,4.115,7.313,8.546,7.569l-0.314,9.388l2.178-1.879l-0.695-7.486C118.903,337.82,123.406,335.502,123.406,330.182z"/>
			<g id="arbre-2">
				<path fill="#93C148" d="M606.676,286.087c0,26.848-23.179,38.252-46.693,38.252c-23.516,0-46.658-10.723-46.658-37.571
					c0-26.847,23.143-59.654,46.658-59.654C583.497,227.113,606.676,259.237,606.676,286.087z"/>
				<path fill="#A9CA54" d="M581.565,306.802c-10.354-2.097-19.492-7.021-27.876-13.328c-7.952-5.986-17.258-12.457-22.354-21.229
					c-4.354-7.49-4.646-15.474-4.758-23.641c-8.019,11.293-13.254,25.399-13.254,38.163c0,26.851,23.142,37.571,46.658,37.571
					c15.592,0,31.026-5.021,39.666-16.228C593.545,308.316,587.443,307.991,581.565,306.802z"/>
				<polygon fill="#684C46" points="556.021,349.115 556.021,311.427 538.672,299.861 524.754,305.001 524.754,303.717
					536.747,298.147 528.396,291.296 527.349,288.696 538.459,295.793 538.03,282.945 538.912,282.945 540.387,297.504
					556.021,306.075 556.58,276.089 545.097,265.812 527.752,268.596 527.831,267.175 542.525,264.204 528.607,253.603
					528.607,252.397 544.211,261.633 545.017,245.893 545.741,245.893 546.383,263.668 556.58,272.715 557.946,236.043
					559.874,233.903 558.803,281.87 574.435,272.877 579.059,255.764 580.646,255.104 577.648,271.378 593.924,259.17
					593.924,261.313 578.932,272.45 595.209,275.234 595.209,276.248 575.718,275.02 559.016,285.725 559.983,305.428
					571.864,299.432 571.65,286.797 572.722,285.082 574.221,298.147 588.783,288.51 590.924,288.51 576.148,299.216 593.281,306.713
					592.833,307.43 573.579,301.361 559.983,309.284 562.444,349.115 		"/>
				<path fill="#442E2A" d="M595.209,276.248v-1.016l-16.276-2.784l14.991-11.138v-2.142l-16.274,12.207l2.997-16.275l-1.587,0.66
					l-4.625,17.113l-15.631,8.994l1.071-47.969l-0.572,0.637c0.005,0.105,0.016,0.209,0.016,0.316
					c-0.018,7.959-0.061,15.958-0.456,23.908c-0.386,7.73-0.317,15.602-1.167,23.29c-0.51,4.593,0.147,67.063,0.147,67.063h4.604
					l-2.462-39.833l13.596-7.922l19.255,6.068l0.448-0.716l-17.133-7.497l14.774-10.707h-2.141l-14.563,9.638l-1.497-13.063
					l-1.072,1.714l0.214,12.635l-11.881,5.996l-0.968-19.703l16.702-10.704L595.209,276.248z"/>
			</g>
			<g id="arbre-1">
				<g>
					<path fill="#86B43A" d="M468.523,304.2c0,20.08,17.339,28.612,34.931,28.612c17.589,0,34.899-8.021,34.899-28.103
						c0-20.083-17.312-44.623-34.899-44.623C485.863,260.087,468.523,284.116,468.523,304.2z"/>
					<path fill="#93C148" d="M487.307,319.694c7.746-1.567,14.583-5.25,20.854-9.969c5.948-4.479,12.908-9.319,16.721-15.882
						c3.257-5.604,3.479-11.571,3.559-17.682c5.997,8.446,9.916,18.999,9.916,28.548c0,20.081-17.313,28.103-34.9,28.103
						c-11.663,0-23.21-3.758-29.671-12.139C478.346,320.825,482.911,320.585,487.307,319.694z"/>
					<polygon fill="#684C46" points="506.417,351.343 506.417,323.152 519.394,314.502 529.803,318.348 529.803,317.385
						520.832,313.222 527.08,308.096 527.862,306.15 519.552,311.459 519.872,301.849 519.212,301.849 518.109,312.74
						506.417,319.149 505.997,296.72 514.586,289.034 527.563,291.114 527.502,290.053 516.509,287.83 526.92,279.901 526.92,278.999
						515.25,285.907 514.646,274.135 514.105,274.135 513.625,287.43 505.997,294.198 504.975,266.767 503.533,265.165
						504.335,301.045 492.643,294.316 489.182,281.517 487.997,281.024 490.238,293.197 478.064,284.065 478.064,285.667
						489.279,293.997 477.103,296.082 477.103,296.841 491.681,295.922 504.175,303.929 503.452,318.665 494.565,314.183
						494.725,304.729 493.924,303.447 492.802,313.222 481.907,306.012 480.307,306.012 491.36,314.021 478.544,319.627
						478.879,320.164 493.283,315.624 503.452,321.55 501.61,351.343 			"/>
				</g>
				<g>
					<path fill="#442E2A" d="M477.103,296.841v-0.759l12.178-2.085l-11.216-8.33v-1.603l12.175,9.132l-2.242-12.173l1.186,0.492
						l3.461,12.8l11.691,6.729l-0.801-35.879l0.429,0.476c-0.007,0.078-0.011,0.155-0.011,0.237
						c0.011,5.953,0.044,11.936,0.341,17.882c0.288,5.783,0.237,11.671,0.874,17.423c0.38,3.436-0.112,50.159-0.112,50.159h-3.442
						l1.842-29.793l-10.17-5.925l-14.403,4.539l-0.336-0.537l12.816-5.605l-11.055-8.009h1.602l10.896,7.209l1.122-9.773l0.801,1.282
						l-0.158,9.452l8.887,4.484l0.722-14.736l-12.493-8.008L477.103,296.841z"/>
				</g>
			</g>
		</g>
		<g id="barriere">
			<g>
				<polygon fill="#FDFAE2" points="155.158,328.034 156.882,326.752 158.604,328.034 158.604,345.862 155.158,345.862 		"/>
				<polygon fill="#FDFAE2" points="147.827,328.034 149.55,326.752 151.274,328.034 151.274,345.862 147.827,345.862 		"/>
				<polygon fill="#FDFAE2" points="140.371,328.034 142.095,326.752 143.818,328.034 143.818,345.862 140.371,345.862 		"/>
				<polygon fill="#FDFAE2" points="132.916,328.034 134.638,326.752 136.362,328.034 136.362,345.862 132.916,345.862 		"/>
				<polygon fill="#FDFAE2" points="125.334,328.034 127.057,326.752 128.781,328.034 128.781,345.862 125.334,345.862 		"/>
				<rect x="126.524" y="331.64" fill="#FDFAE2" width="38.657" height="1.128"/>
				<rect x="126.524" y="339.159" fill="#FDFAE2" width="36.509" height="1.128"/>
			</g>
			<g>
				<polygon fill="#FDFAE2" points="201.376,328.034 199.653,326.752 197.93,328.034 197.93,345.862 201.376,345.862 		"/>
				<polygon fill="#FDFAE2" points="208.707,328.034 206.983,326.752 205.261,328.034 205.261,345.862 208.707,345.862 		"/>
				<polygon fill="#FDFAE2" points="216.162,328.034 214.439,326.752 212.716,328.034 212.716,345.862 216.162,345.862 		"/>
				<polygon fill="#FDFAE2" points="223.62,328.034 221.896,326.752 220.173,328.034 220.173,345.862 223.62,345.862 		"/>
				<polygon fill="#FDFAE2" points="231.2,328.034 229.477,326.752 227.753,328.034 227.753,345.862 231.2,345.862 		"/>
				<rect x="191.354" y="331.64" fill="#FDFAE2" width="38.657" height="1.128"/>
				<rect x="193.5" y="339.159" fill="#FDFAE2" width="36.51" height="1.128"/>
			</g>
		</g>

		<!-- la -->
		<!-- herbe top -->
		<!-- <rect y="345.452" fill="#97C151" width="611.923" height="20vh"/> -->
		<!-- bordure herbe top -->
		<path opacity="0.8" fill="#8AAD4A" enable-background="new    " d="M0,345.452v10.596c3.061,0.608,6.083,1.005,9.087,1.25
			c3.459-0.066,6.915-0.204,10.357-0.499c7.293-0.622,14.182-2.347,21.333-3.704c12.294-2.337,25.147-3.14,37.005,1.467
			c10.651,4.141,20.832,7.049,32.036,8.067c7.576-1.491,15.178-2.845,22.933-2.942c0.889-0.011,1.648,0.218,2.281,0.594
			c13.44-0.102,26.708-2.258,40.11-3.087c7.012-0.434,14.129-0.639,21.113,0.271c6.386,0.83,12.435,2.968,18.771,3.85
			c6.354,0.882,12.761,0.213,19.141-0.068c4.404-1.44,9.001-2.214,13.759-2.112c6.745,0.142,13.389,1.396,20.123,1.666
			c8.522,0.341,16-2.458,24.303-3.694c7.198-1.07,13.584,0.851,20.364,2.897c13.042,3.938,24.354-0.708,37.231-2.634
			c13.68-2.045,26.979,2.229,40.521,3.261c13.357,1.016,25.661-4.53,38.917-4.438c13.24,0.094,26.324,1.957,39.504-0.123
			c12.161-1.92,24.094-4.294,36.395-1.815c14.13,2.848,27.509,6.491,42.031,3.36c11.989-2.582,22.713-4.732,34.707-0.646
			c9.99,3.405,19.307,8.314,29.9,9.037v-20.55H0V345.452z"/>

		<?php	include('assets/svg/path_tracteur.svg'); ?>

		</svg> 



		<div id="herbe"></div>

		<div class="soleil">
			<div class="rayon_box">
				<div class="rayon"></div>
				<div class="rayon"></div>
				<div class="rayon"></div>
				<div class="rayon"></div>
				<div class="rayon"></div>
				<div class="rayon"></div>
				<div class="rayon"></div>
				<div class="rayon"></div>
			</div>
		</div>


		<?php
	}




	function afficherFormulaire() {
		?>
		<div id="formulaire">
			<div id="formulaire-container">
				<center><h1>Paramètres de votre éolienne</h1></center>
				<form>

					<!-- type de batterie -->
					<div class="form-group">
					    <label>Type de batterie</label>
					    <select class="form-control select-batterie">
							<option value="lithium">Lithium-ion</option>
							<option value="gel">Gel</option>
							<option value="none">Aucune batterie</option>
						</select>
					    <small class="form-text text-muted">Parceque vous souhaitez stocker l'énergie...</small>
				  	</div>

					<!-- hauteur mat -->
					<div class="form-group">
					    <label>Hauteur du mat</label>
					    <select class="form-control select-hauteur">
							<option value="6">6 mètres</option>
							<option value="12">12 mètres</option>
							<option value="24">24 mètres</option>
						</select>
					    <small class="form-text text-muted">Pour une éolienne >= à 12 mètres, un permis de contruire sera nécéssaire !</small>
				  	</div>

					<!-- nb pales -->
					<div class="form-group">
					    <label>Nombre de pales</label>
					    <select class="form-control select-nbpales">
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					    <small class="form-text text-muted">La production d'énergie sera supérieure avec plus de pales...</small>
				  	</div>
					
					<!-- diametre rotor -->
					<div class="form-group">
					    <label>Diamètre du rotor</label>
					    <select class="form-control select-diametre">
							<option value="0.5">50 cm</option>
							<option value="1">1 m</option>
							<option value="2">2 m</option>
							<option value="3">3 m</option>
						</select>
					    <small class="form-text text-muted">Pour trouver le vent, même quand il est absent !</small>
				  	</div>
				</form>

				<div id="resultats">
					<h2>Résultats</h2>
					<div id="estimation"></div>
					<a class="btn btn-info btn-constructeur">Je trouve l'éolienne de mes rêves !</a>
				</div>
			</div>
		</div>
		<?php
	}


	function afficherEolienne() {
		//return;
		echo '<div id="container-eolienne">
			<canvas id="canvas-eolienne" width="2200" height="2200" style="width: 500px; height: 500px"></canvas>
		</div>';
	}