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
							'content' => "Lorem ipsum Dolore pariatur amet do aute incididunt Ut cupidatat labore irure voluptate voluptate aute est in.",
							),
						array(
							'date' => "08/01/2016",
							'content' => "Lorem ipsum Dolore pariatur amet do aute incididunt Ut cupidatat labore irure voluptate voluptate aute est in.",
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
						"Lorem ipsum Do labore velit in adipisicing. 1",
						"Lorem ipsum Do labore velit in adipisicing. 2",
						"Lorem ipsum Do labore velit in adipisicing. 3",
						"Lorem ipsum Do labore velit in adipisicing. 4",
						"Lorem ipsum Do labore velit in adipisicing. 5",
						"Lorem ipsum Do labore velit in adipisicing. 6",
						"Lorem ipsum Do labore velit in adipisicing. 7"
					),
				"produif_fiscaux" => array(
						"Lorem ipsum"
					)
			);
	}
	else
	{
		$user = array(
				"firstname" => "Jean",
				"lastname" => "Boneau",
				"address" => "12 Rue de la fleure jaune",
				"date_birth" => "21/02/1982",
				"gest" => "",
				"rdv" => array(
						array(
							'date' => "03/08/2016",
							'content' => "Lorem ipsum Dolore pariatur amet do aute incididunt Ut cupidatat labore irure voluptate voluptate aute est in.",
							)
					),
				"sutuation" => "Célibataire",
				"risque" => "hight",
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
						"Lorem ipsum Do labore velit in adipisicing.",
						"Lorem ipsum Do labore velit in adipisicing.",
						"Lorem ipsum Do labore velit in adipisicing.",
						"Lorem ipsum Do labore velit in adipisicing.",
						"Lorem ipsum Do labore velit in adipisicing.",
						"Lorem ipsum Do labore velit in adipisicing.",
						"Lorem ipsum Do labore velit in adipisicing.",
						"Lorem ipsum Do labore velit in adipisicing.",
						"Lorem ipsum Do labore velit in adipisicing."
					),
				"produif_fiscaux" => array(
						"Lorem ipsum",
						"Lorem ipsum",
						"Lorem ipsum"
					)
			);
	}

	$notif = array(
			array(
					"content" => "Lorem ipsum Do do Ut dolor exercitation sunt fugiat Ut esse ex nisi consequat",
					"date" => "12/05/2017",
					"nupers" => ""
				),
			array(
					"content" => "Lorem ipsum Voluptate culpa minim fugiat sit ut tempor velit sed eiusmod dolor Excepteur dolor cillum laboris in veniam quis mollit Duis sed amet officia reprehenderit ad in est nulla sit consectetur.",
					"date" => "12/05/2017",
					"nupers" => "123456"
				),
			array(
					"content" => "Lorem ipsum Do do Ut dolor exercitation sunt fugiat Ut esse ex nisi consequat commodo quis fugiat Ut magna sunt reprehenderit officia ut ea eiusmod incididunt non ex nostrud ea occaecat velit magna qui do qui enim non dolore velit esse consequat in ullamco labore esse est ut do esse aute exercitation adipisicing ut minim ea elit reprehenderit ut sunt est nulla tempor non velit incididunt anim irure incididunt anim sed aliqua esse aute magna voluptate Duis pariatur amet laborum id et incididunt fugiat Ut sed nisi sunt dolor incididunt eu et est in aliquip labore id et nisi consequat proident sint sint dolore tempor Duis minim pariatur ad nostrud fugiat labore incididunt voluptate dolore eu commodo amet veniam incididunt aute reprehenderit ad cupidatat in laborum quis officia pariatur id labore dolore laboris sit commodo esse elit est consectetur Ut pariatur anim eiusmod aliquip voluptate cupidatat pariatur id ullamco incididunt cupidatat in quis qui incididunt sunt ea qui nisi cillum fugiat irure deserunt esse voluptate Ut eu adipisicing veniam sit ut aliquip irure dolore esse commodo cupidatat aliquip mollit nisi deserunt dolore dolor cupidatat officia sed sint tempor fugiat exercitation tempor Duis laboris non elit aute enim proident.",
					"date" => "12/05/2017",
					"nupers" => "654321"
				)
		);