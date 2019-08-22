// ISOMER
const Point  = Isomer.Point;
const Path   = Isomer.Path;

//============================================ SCRIPT RENDU 3D TEMPORAIRE, CHANGER PAR LE CODE DE THEO QUAND CE SERA PRET ===============
const Shape  = Isomer.Shape;
const Vector = Isomer.Vector;
const Color  = Isomer.Color;

const offWhiteColor = new Color(206, 203, 203);

let eolienneIso = new Isomer(document.getElementById("canvas-eolienne"));

let propellerAngle = 0;

const windmillPillar = Shape.Cylinder(Point(2, 2, 0), 1, 8, 16);
const windmillNose = Shape.Pyramid(Point(4, -2, 11), 2, 2, 6);
const windmillBlade = Shape.Pyramid(Point(2, -1, 16), 0.5, 0.5, 12);



function animationEolienne() {
  eolienneIso.canvas.clear();

  requestAnimationFrame(animationEolienne);

  eolienneIso.add(windmillPillar, offWhiteColor);
  eolienneIso.add(windmillNose.rotateX(Point(2, 2, 16), 3 * Math.PI / 2), offWhiteColor);
  for (let i = 1; i < 4; i++) {
      eolienneIso.add(windmillBlade.translate(0, 0, 0.2).rotateY(Point(2, 0, 16), propellerAngle + i * 2), offWhiteColor);
  }

  //Faire tourner eoliennes
  propellerAngle += (Math.PI / 225);
}

animationEolienne();






// ============================================= SYSTEME ESTIMATION DU PRIX ET ECONOMIE EOLIENNE ============================================

$( document ).ready(function() {
    /* EVENTS GUI */
    $('.form-group select').change(function() {
		new Estimation();
		new Rendu3D();
	});


    /* Classe estimation prix */
	class Estimation {
		constructor() {
			console.log('> Nouvelle estimation.');

			//===== Propriétés dynamiques
			this.total_euro = 15000; // base minimale en EUR, basé sur les 15 premiers % de la courbe gaussienne de tarification des eoliennes 
			this.total_kw = 0;

			//===== Propriétés statiques
			this.url_constructeur = "https://www.comptoireolien.fr";
			this.cfg_euro = { min: 21250, max: 43750 };


			//===== Appel des méthodes
			//calcul
			this.ajouter_batterie($('.select-batterie'));
			this.ajouter_hauteurmat($('.select-hauteur'));
			this.ajouter_nbpales($('.select-nbpales'));
			this.ajouter_diametre($('.select-diametre'));
			//affichage
			this.afficher_estimation($('#estimation'));
			this.update_btnconstructeur($('.btn-constructeur'));
		}

		//	Données récupérées depuis une veille tarifaire pour batterie à décharge lente avec capacité 100 ampères
		ajouter_batterie(select) {
			var val_eur = 0;
			var val_kw = 0;
			switch(select.val()) {
				case 'lithium':
					val_eur = 550;
					break;
				case 'gel':
					val_eur = 1000;
					break;
				default:
					val_eur = 0;
					break;
			}
			this.total_euro += val_eur;
			this.total_kw += val_kw;
		}

		//	Données récupérées depuis comparaison de modèles d'éoliennes + travaux.com
		ajouter_hauteurmat(select) {
			var val_eur = 0;
			var val_kw = 0;
			switch(select.val()) {
				case '6':
					val_eur = 1200;
					break;
				case '12':
					val_eur = 2400;
					break;
				case '24':
					val_eur = 4800;
					break;
				default:
					val_eur = 99999;
					break;
			}
			this.total_euro += val_eur;
			this.total_kw += val_kw;
		}

		//	Données récupérées depuis comparaison de modèles d'éoliennes + travaux.com
		ajouter_nbpales(select) {
			var val_eur = 0;
			var val_kw = 0;
			switch(select.val()) {
				case '2':
					val_eur = 4000;
					val_kw = 850;
					break;
				case '3':
					val_eur = 6000;
					val_kw = 1275;
					break;
				case '4':
					val_eur = 8000;
					val_kw = 1700;
					break;
				default:
					val_eur = 99999;
					break;
			}
			this.total_euro += val_eur;
			this.total_kw += val_kw;
		}

		//	Données récupérées depuis comparaison de modèles d'éoliennes + travaux.com
		ajouter_diametre(select) {
			var val_eur = 0;
			var val_kw = 0;
			switch(select.val()) {
				case '0.5':
					val_eur = 900;
					val_kw = 0;
					break;
				case '1':
					val_eur = 1200;
					val_kw = 100;
					break;
				case '2':
					val_eur = 1600;
					val_kw = 200;
					break;
				case '3':
					val_eur = 2000;
					val_kw = 300;
					break;
				default:
					val_eur = 99999;
					break;
			}
			this.total_euro += val_eur;
			this.total_kw += val_kw;
		}

		//	Données récupérées depuis comparaison de modèles d'éoliennes + travaux.com
		afficher_estimation(div) {
			if(this.total_euro<=this.cfg_euro.min)
				this.total_euro = this.cfg_euro.min;

			div.html('');
			div.append('Total TTC : <span id="estimation_euro">' + this.total_euro + ' EUR</span><br>');
			div.append('Energie : <span id="estimation_kw">' + this.total_kw + ' kW</span>');

			if(this.total_euro>=this.cfg_euro.max)
				div.html('Nous sommes désolé, aucune estimation valable ne peut être faite avec vos critères.');
		}


		//	Mettre à jour le bien du btn, via les arguments de recherche google
		update_btnconstructeur(btn) {
			var lien = 'https://www.google.com/search?ei=Ssr6XNoGibFTsJGM8AM&q=site%3A'+this.url_constructeur+'+AND+';
			lien += 'batterie '+ $('.select-batterie').val() + '+AND+';
			lien += $('.select-nbpales').val() + ' pales+AND+';
			lien += $('.select-hauteur').val() + ' mètres+AND+';
			btn.attr('href', lien);
		}

	}
	new Estimation;


	/*	A TOI THEO DE FAIRE LE RENDU C'ETAIT LE DEAL */
	class Rendu3D {
		constructor() {

		}
	}
});

