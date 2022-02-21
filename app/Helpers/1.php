<?php

    function getCabinetDetails($cabinet) {
        $cabinetArray = [];
        if($cabinet == "paris") {
            $name = "Paris";
            $image = "paris.jpg";
            $road = "<p>
                110 rue de la Jonquière <br>
                75017 PARIS
            </p>";
            $phones = "<p>
                Tél :   01 41 77 93 50 <br>
                Fax : 01 49 83 79 86
            </p>";
            $hours = "<p>
                Horaires <br>
                9H - 13H / 14H - 18H <br>
                Vendredi : 9H - 13H / 14H - 17H
            </p>";
            $access = "
                <ul>
                    Accès :
                    <li><i class='fa fa-dot-circle-o'></i>
                        <div class='ttm-list-li-content'>Métro 13 station Porte de Clichy 200m</div>
                    </li>
                    <li><i class='fa fa-dot-circle-o'></i>
                        <div class='ttm-list-li-content'>RER C station Porte de Clichy 200m</div>
                    </li>
                    <li><i class='fa fa-dot-circle-o'></i>
                        <div class='ttm-list-li-content'>Accès routier : boulevard périphérique Porte de Clichy</div>
                    </li>
                </ul>
            ";
            $maps = "
                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.0588668300484!2d2.3149188155563825!3d48.89521527929111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fa9b204de49%3A0x4d05d046a5e9dd55!2s110%20Rue%20de%20La%20Jonqui%C3%A8re%2C%2075017%20Paris%2C%20France!5e0!3m2!1sfr!2sbj!4v1638347144006!5m2!1sfr!2sbj' style='border:0;' allowfullscreen='' loading='lazy'></iframe>
            ";
        } elseif($cabinet == "champigny") {
            $name = "Champigny sur Marne";
            $image = "CHAMPIGNY2.jpg";
            $road = "<p>
                34 RUE JEAN JAURES <br>
                94500 CHAMPIGNY-SUR-MARNE
            </p>";
            $phones = "<p>
                Tél :   01 41 77 93 50 <br>
                Fax : 01 49 83 79 86
            </p>";
            $hours = "<p>
                Horaires <br>
                9H-13H / 14H - 18H <br>
                Vendredi : 9H - 13H / 14H - 17H
            </p>";
            $access = "
                <ul>
                    Accès :
                    <li class='d-flex'><i class='fa fa-dot-circle-o'></i>
                        <div class='ttm-list-li-content'>RER A station Champigny 15mn</div>
                    </li>
                    <li><i class='fa fa-dot-circle-o'></i>
                        <div class='ttm-list-li-content'>Accès routier : Nationale 4</div>
                    </li>
                </ul>
            ";
            $maps = "
                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.262435019635!2d2.503468615553355!3d48.81505397928328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60dacf576fded%3A0xe7a626cccedfa231!2s34%20Rue%20Jean%20Jaur%C3%A8s%2C%2094500%20Champigny-sur-Marne%2C%20France!5e0!3m2!1sfr!2sbj!4v1638347468014!5m2!1sfr!2sbj' style='border:0;' allowfullscreen='' loading='lazy'></iframe>
            ";
        } elseif ($cabinet == "chatillon") {
            $name = "Chatillon";
            $image = "Chatillon2.png";
            $road = "<p>
                SIEGE SOCIAL : 57 RUE PIERRE SEMARD - 92320 CHATILLON <br>
                BUREAUX : 36 PLACE JULES FERRY – 92120 MONTROUGE
            </p>";
            $phones = "<p>
                Tél : 01 46 56 14 02 <br>
                Fax : 01 46 56 17 32
            </p>";
            $hours = "";
            $access = "
                <ul>
                    Accès :
                    <li><i class='fa fa-dot-circle-o'></i>
                        <div class='ttm-list-li-content'>Métro 4 station Mairie de Montrouge 13mn</div>
                    </li>
                    <li><i class='fa fa-dot-circle-o'></i>
                        <div class='ttm-list-li-content'>RER B station Laplace 13mn</div>
                    </li>
                    <li><i class='fa fa-dot-circle-o'></i>
                        <div class='ttm-list-li-content'>Accès routier : D920</div>
                    </li>
                </ul>
            ";
            $maps = "
                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.8237551574884!2d2.292599915552954!3d48.80434227928223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6709328372673%3A0x9c755c2572e39a94!2s57%20Rue%20Pierre%20Semard%2C%2092320%20Ch%C3%A2tillon%2C%20France!5e0!3m2!1sfr!2sbj!4v1638347570104!5m2!1sfr!2sbj' style='border:0;' allowfullscreen='' loading='lazy'></iframe>
            ";
        } else {
            $name = "Afrique";
            $image = "Cotonou-02.jpg";
            $road = "<p>
                TOUR ANANI <br>
                148/149 AVENUE VAN VOLLENHOVEN <br>
                00000 COTONOU BENIN
            </p>";
            $phones = "<p>
                Tél : +(229) 21 31 76 30
            </p>";
            $hours = "";
            $access = "";
            $maps = "
                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2614571966838!2d2.427786914324264!3d6.360196295397555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102355543d2dd3db%3A0x7335aed09a5dfced!2sIMMEUBLE%20ANANI%20TOUR!5e0!3m2!1sfr!2sbj!4v1638349182709!5m2!1sfr!2sbj' style='border:0;' allowfullscreen='' loading='lazy'></iframe>
            ";
        }

        $cabinetArray[0] = $name;
        $cabinetArray[1] = $image;
        $cabinetArray[2] = $road;
        $cabinetArray[3] = $phones;
        $cabinetArray[4] = $hours;
        $cabinetArray[5] = $access;
        $cabinetArray[6] = $maps;

        return $cabinetArray;
    }

	function getServiceDetails($service) {
		$serviceArray = [];
		if($service == "expertise-comptable") {
        	$name = "Expertise Comptable";
            $image = "accounting.png";
            $description = "Nous apportons à chaque Client une expertise adaptée à son Entreprise et à ses particularités sectorielles qui lui permettra de piloter au mieux son activité :";
            $list = "
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Organisation et mise en place d’une comptabilité adaptée à l’entreprise favorisée par une gestion dématérialisée de vos dossiers avec l’Espace Privé</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Tenue complète, partielle ou surveillance de votre comptabilité</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Elaboration des déclarations fiscales : TVA, TVS, CET, IS, Taxes sur salaires…</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Établissement de situation comptable intermédiaire</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Établissement des comptes annuels et des comptes consolidés en normes françaises</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Constitution de tableaux de bord spécifiques à votre activité</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Analyse de votre bilan sous forme imagée avec comparatif de la concurrence sur votre marché</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Formation de votre personnel comptable</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Calcul et simulation de vos projets en fonction des modes d’acquisition et de financement.</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Comptabilité de CE</div>
                </li>
            ";
        } elseif($service == "expertise-sociable") {
        	$name = "Expertise Sociable";
            $image = "sociable.jpeg";
            $description = "Grâce à notre Expertise, nous vous accompagnons au quotidien dans les domaines du droit social et de la Gestion administrative de vos Salariés dans le respect de la législation et de la prise en compte de l’évolution permanente de la réglementation :";
            $list = "
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Établissement des paies et déclarations sociales</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Rédaction des contrats de travail</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Accompagnement lors des procédures de rupture de contrat de travail et établissements des documents de fin de contrat</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Établissement des bordereaux de cotisations sociales</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Audit social</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Affiliation aux organismes sociaux</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Assistance à la gestion des obligations sociales</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Assistance lors de contrôle URSSAF</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Prévoyance sociale du chef d’entreprise et des salariés</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>N4DS.</div>
                </li>
            ";
        } elseif($service == "conseil-en-gestion") {
        	$name = "Conseil En Gestion";
            $image = "conseil.jpeg";
            $description = "Les cabinets du groupe EZIN & STRAUUS mettent à votre service son expertise en matière de conseil en gestion et organisation :";
            $list = "
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Mise en place de tableaux de bord et de budget prévisionnel</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Compte de résultat prévisionnel</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Calcul des prix de revient et marges</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Projets d’investissement et de financement</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Diagnostic et analyse de rentabilité</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Contrôle budgétaire</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Établissement de plans de trésorerie</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Prestations patrimoniales</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Restructuration financière</div>
                </li>
            ";
        } elseif($service == "creation-reprise-entreprise") {
        	$name = "Création et Reprise d'Entreprise";
            $image = "entreprise.jpeg";
            $description = "Nos équipes vous accompagnent lors de la création ou la reprise d’entreprise :";
            $list = "
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Assistance lors de la création d’une entreprise</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Établissement du prévisionnel et du plan de financement</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Etablissement des formalités</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Étude d’implantation dans les zones franches urbaines</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Assistance dans le choix du statut juridique de l’entreprise</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Assistance auprès des tiers, banques, notaires, avocats</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Évaluation d’entreprises et assistance à la reprise d’entreprises.</div>
                </li>
            ";
        } elseif($service == "juridiques-fiscales") {
        	$name = "Juridiques et Fiscales";
            $image = "fiscales.jpeg";
            $description = "L’accompagnement juridique et fiscal de nos Clients est l’accessoire évident de notre mission principale d’Expertise Comptable :";
            $list = "
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Établissement de l’ensemble des déclarations fiscales afférentes à votre activité</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Établissement des déclarations d’impôt sur le revenu et ISF</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Optimisation fiscale</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Assistance lors de contrôle fiscal</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Choix de la structure juridique de l’entreprise</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Assistance et formalités de constitution de l’entreprise (choix de la structure, rédaction des statuts, pacte d’actionnaires…)</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Assemblée générale annuelle</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Formalités au cours de la vie sociale</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Assistance à la transmission d’entreprise.</div>
                </li>
            ";
        } elseif($service == "pilotage-performance") {
            $name = "Pilotage de la Performance";
            $image = "accounting.png";
            $description = "Soumis à une intensification de la réglementation et de la pression des marchés, le secteur de la bancassurance connaît des enjeux croissants de mesure de la performance et de la rentabilité présente et future. EZIN & STRAUUS vous accompagne et vous conseille dans la mise en place d’une organisation efficiente de vos fonctions Contrôle de gestion et Pilotage.";
            $list = "
                <b class='mb-4'>Accompagnement à la production</b>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Production de tableaux de bord et indicateurs</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Optimisation de votre processus de contrôle de gestion</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Sécurisation de vos processus de construction budgétaire</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Elaboration des tableaux de bord prévisionnels</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Élaboration de plans et trajectoires pluriannuelles</div>
                </li>
                <b class='mb-4'>Conseil et AMOA</b>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Diagnostic du pilotage de la performance</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Définition et harmonisation des processus cibles</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Définition de la gouvernance de pilotage</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Définition et mise en œuvre d’outils de pilotage</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Assistance aux choix des outils</div>
                </li>
            ";
        } elseif($service == "due-diligence") {
            $name = "DUE Diligence";
            $image = "due.jpeg";
            $description = "<p class='font-italic'>Anglais: Financial DUE Diligence</p>
                <p class='text-justify'>Analyse des éléments financiers relatifs à une Cible, ayant pour objectif d’identifier les points clés de la transaction.</p>
                <p class='text-justify'>Une due diligence financière permet à un acquéreur d’obtenir des bases financières pour valoriser une cible (EBE/EBITDA, EBIT, BFR normatif) et des éléments de négociation du prix (ajustements de dette nette, garanties d’actifs et de passifs).</p>
                <p class='text-justify'>Finaliser la valorisation, effectuer les due diligences, planifier la séparation ou l’intégration, préparer le closing – autant de tâches à mener lors de la phase d’exécution de la transaction. Il est primordial d’anticiper les risques liés à une transaction, d’en confirmer les leviers de création de valeur et d’identifier les zones de négociation en vue de rester maître du processus de la transaction.</p>";
            $list = "";
        } else {
        	$name = "Audit Légal et Contractuel";
            $image = "audit.jpeg";
            $description = "Nos équipes d’auditeurs pluridisciplinaires réalisent des missions d’audit légal sur toute la France afin d’étudier la sincérité, la régularité et la fidélité des comptes. Nos compétences et nos outils dédiés vous garantissent l’opinion émise à l’issue de nos travaux.";
            $list = "
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Commissariat aux comptes (audit légal)</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Commissariat aux apports</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Commissariat à la fusion/scission</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Commissariat aux avantages particuliers</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Commissariat à la transformation</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Audit d’acquisition</div>
                </li>
                <li><i class='fa fa-dot-circle-o'></i>
                    <div class='ttm-list-li-content'>Audit d’organisation</div>
                </li>
            ";
        }

        $serviceArray[0] = $name;
        $serviceArray[1] = $image;
        $serviceArray[2] = $description;
        $serviceArray[3] = $list;

        return $serviceArray;
    }

 ?>