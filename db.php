<?php


	if ($_GET['n'] == "123456")
	{
		$user = array(
				"firstname" => "Dupont",
				"lastname" => "Francois",
				"address" => "12 Rue de la fleure jaune",
				"date_birth" => "17/06/1995",
				"gest" => "Paul Michou",
				"rdv" => array(
						array(
							'date' => "17/06/2016",
							'content' => "Nous avons discute de son pret immobilier.",
							),
						array(
							'date' => "08/01/2016",
							'content' => "Premier rdv.",
							)
					),
				"sutuation" => "Marié",
				"risque" => "low",
				"competence" => array(
						"Obligations",
						"Produit structuré",
						"Actions"
					),
				"match" => array(
						"Obligation1",
						"Obligation2",
						"Obligation3"
					),
				"prestation" => array(
						array("Compte courant", 8723459679, 86473),
						array("Assurance vie", 45634563476, 2750000),
						array("Avance patrimoniale", "", -500000)
					),
				"flag" => "Aucun Flag",
				"doc" => array(
					array(
						"http://www.cil.cnrs.fr/CIL/local/cache-vignettes/L350xH254/carte-identite-e7915.jpg",
						"21/06/2018"
						),
					array(
						"https://www.toutsurmesfinances.com/impots/images/stories/480x360/avis-impot-revenu.jpg",
						"21/06/2018"
						)
					),
				"notification" => array(
						"Reclamation sur frais.",
						"Presentation de produit.",
						"Le client a parlé d'un projet immobilier."
					),
				"produif_fiscaux" => array(
						array("Immobilier", "Competences manquante")
					)
			);
	}
	else
	{
		$user = array(
				"firstname" => "Jean",
				"lastname" => "Boneau",
				"address" => "12 Rue de la fleure jaune",
				"date_birth" => "21/02/1948",
				"gest" => "",
				"rdv" => array(
						array(
							'date' => "03/08/2016",
							'content' => "Du a son changement de situation le client avait besoin de diffetrents conseils.",
							)
					),
				"sutuation" => "Célibataire",
				"risque" => "high",
				"competence" => array(
						"Produit derivé"
					),
				"match" => array(
						"Obligation2",
						"Obligation3"
					),
				"prestation" => array(
						array("Livret A", 456745674257, 2356),
						array("Assurance vie", 6814684684, 750000),
						array("Compte couravvnt", 23904727293509, 94834)
					),
				"flag" => "Politique",
				"doc" => array(
					array(
						"http://www.ariadnext.com/wp-content/uploads/2013/02/pi1.png",
						"30/06/2018"
						)
					),

				"notification" => array(
						"Reclamation sur frais.",
						"Presentation de produit.",
						"69 ème anniversaire"
					),
				"produif_fiscaux" => array(
						array("Immobilier", "Competences manquante")
					)
			);
	}

	$notif = array(
			array(
					"content" => "Pot de depart de Jean Michou",
					"date" => "12/05/2017",
					"nupers" => ""
				),
			array(
					"content" => "Presentation de produit, prevoir le rendez-vous.",
					"date" => "12/05/2017",
					"nupers" => "123456"
				),
			array(
					"content" => "69 ème anniversaire de  Jean Boneau.",
					"date" => "21/02/2017",
					"nupers" => "654321"
				)
		);