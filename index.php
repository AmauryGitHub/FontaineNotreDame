<?PHP
   session_start();

require_once "logbdd.php"
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mairie Fontaine-Notre-Dame</title>
        <link rel="stylesheet" href="souspage/allcss/allphp.css">
        <link rel="stylesheet" href="souspage/allcss/footer.css">
        <link rel="stylesheet" href="souspage/allcss/navbar.css"> 
        <link rel="stylesheet" href="souspage/allcss/theme.css"> 
        <script src="souspage/alljs/javascipt.js"></script>
    </head>
    <body>


<!-- Début du Menu-->


<nav class="nav">

<div> <a href="\www\index.php"> <img class="blason" src="souspage\allimg\nav-bar\Armoiries-FND.png"></a></div>
      <div id="NomMairie"><a href="\www\index.php" style="text-decoration:none; margin-left: 33px;"><h1 style="margin-left: 10%; margin-top: 1%; display: flex; flex-wrap: wrap; width: 50%">FONTAINE NOTRE DAME</h1></a></div>
      <a href="\www\index.php" style="text-decoration: none;"><p id=accueil> Accueil </p></a>

    <ul id="menu-demo2">
	<li><a style="width:200px; top: 0;">Mairie</a>
		<ul>
			<li><a href="souspage\1_Mairie\Conseil_municipal.php">Conseil Municipal</a></li>
			<li><a href="souspage\1_Mairie\Service_municipaux.php">Services municipaux</a></li>
			<li><a href="souspage\1_Mairie\location_de_salle.php">Location salle des fêtes</a></li>
			<li><a href="souspage\1_Mairie\Cimetière.php">Cimetière</a></li>
			<li><a href="souspage\1_Mairie\Equipements_communaux.php">Equipements communaux</a></li>
			<li><a href="souspage\1_Mairie\Infos_pratiques.php">Informations pratiques</a></li>
			<li><a href="souspage\1_Mairie\Les_bulletins_municipaux.php">Bulletins Municipaux</a></li>
			<li><a href="souspage\1_Mairie\Décisions_officielles.php">Décisions officielles</a></li>
		</ul>
	</li>
  <li><a >Urbanisme <br>Démarches administratives</a>
		<ul>
			<li><a href="souspage\7_Urbanisme\Urbanisme.php">Urbanisme</a></li>
			<li><a href="souspage\8_Demarches_Administratives_et_etat_civil\Demarche_Administratives.php">Démarches Administratives</a></li>
		</ul>
	</li>
	<li><a >Environnement <br> Cadre de vie</a>
		<ul>
			<li><a href="souspage\2_Environnement_et_cadre_de_vie\Cadre_de_vie.php">Cadre de vie</a></li>
			<li><a href="souspage\2_Environnement_et_cadre_de_vie\Infos_pratiques.php">Informations pratiques</a></li>
		</ul>
	</li>
	<li><a href="souspage\6_Enfance_jeunesse\Enfance_jeunesse.php">Enfance<br> Jeunesse</a></li>
	<li><a>Vie sociale<br> Offre de soins</a>
		<ul>
			<li><a href="souspage\3_Vie_social_Medico_social\Vie-social.php">Vie sociale</a></li>
			<li><a href="souspage\3_Vie_social_Medico_social\Offre_de_soins.php">Offre de soins</a></li>
		</ul>
	</li>
  <li><a href="souspage\4_Vie_economique\Economie_commerce.php">Vie économique</a>
	</li>
  <li><a href="souspage\4_Vie_economique\Vie_associative.php">Vie associative</a>
	</li>
  <li><a href="souspage\5_Culture\Culture.php">Culture</a>
	</li>
</nav>


  <!-- Banniere Mairie -->
     
<div class="badhaut">
            <div class="header-box">
              <div class="littlescreen"> Fontaine Notre Dame </div>
              <img class="mairiefnd" src="souspage\allimg\nav-bar\mairiefnd.jpg" alt="">
            </div>
    </div> 
</div>
</ul>

<!-- Fin du Menu--> 


<!-- Début Histoire -->
            
        <div class="transition">
                <p class="trans">Une brève histoire de la commune de Fontaine Notre Dame</p>
        </div>
            
        <div class="histoire">
                <div class="textehistoire">
                    
                    Les traces les plus anciennes d’un peuplement sur le site de l’actuelle commune de Fontaine Notre Dame remonte 
                    à l’époque gallo-romaine. 
                    
                    Des fouilles archéologiques, réalisées à l’occasion de la construction du château d’eau en 1928, 
                    lors du chantier de création de l’autoroute A2 et en 2005 lors de l’aménagement du quartier résidentiel du Bois, ont mis à jour 
                    des fragments de poteries, des pièces de monnaie romaine, des objets en fer et en bronze 
                    et même les traces d’anciennes sépultures.<br><br>
                    
                    Le nom de Fontaine est attesté vers l’an 700, à la fois pour désigner des 
                    possessions foncières et des fermes mais aussi une paroisse. 
                    
                    La seigneurie de Fontaine Notre Dame est attestée en 991
                    par une charte impériale ratifiée par Othon III, empereur germanique. 
                    
                    La chaussée romaine de Bapaume devient l’axe 
                    sur lequel vont s’inscrire les habitations. 

                    Au XIIème siècle, 
                    le sceau de l’abbaye de Prémy (démolie en 1581, située près du Bois de la Folie) donnera ses armoiries à la commune : 
                    une vierge assise tenant dans ses bras l’enfant Jésus.<br><br>

                    Le village va surtout se développer lors du XIXème siècle en lien avec l’essor de Cambrai et du Cambrésis. 
                    Plus de 2000 habitants sont dénombrés alors, malgré les épidémies de choléra de 1832 et 1849. Les activités agricoles, 
                    mais aussi de commerce assurent la prospérité communale.<br><br>
                
                </div>

                <img class="imagehistoire" src="souspage\allimg\index\252px-Bundesarchiv_Bild_146-1981-134-25A,_Frankreich,_bei_Cambrai,_zerst├Ârte_Kirche.jpg">
                <img class="logo" src="souspage\allimg\index\logofnd.jpg">
                <img class="imagehistoire" src="souspage\allimg\index\191px-Fontaine-Notre-Dame_-_├ëglise_Saint-Martin_(01).jpg">
    
                <div class="textehistoire">

                    La Grande Guerre va porter un coup très dur à la commune. 
                    Le village va s’inscrire sur la ligne de défense allemande dite Ligne Hindenburg, édifiée à partir de 1916. 
                    La commune va connaître une destruction presque intégrale lors des combats de la Bataille de Cambrai en novembre 1917. 
                    Première grande opération militaire employant massivement des chars, ou tanks comme les désignent les Britanniques, 
                    les rues du village vont être le théâtre d’affrontements violents entre Britanniques et Allemands. Les principaux édifices, 
                    dont l’église Saint Martin, sont détruits lors de cette bataille. Fontaine Notre Dame a été le point le plus avancé 
                    de l’offensive anglaise.<br><br>
                    
                    Les années 1920 et 1930 sont des années de reconstruction : nouvelle mairie, 
                    nouvelle école (reconstruite par souscription auprès de la commune « Marraine de Guerre » de 
                    Chemillé dans le Maine et Loire), nouvelle église et nouvelles habitations. Dans sa physionomie actuelle, 
                    Fontaine Notre Dame est le témoin de cette période.<br><br>
                    
                    Depuis les années 1950, le village de Fontaine Notre Dame et son prolongement vers Cambrai, à Petit Fontaine, 
                    s’est transformé en commune résidentielle. Les services y occupent une place importante. 
                    Elle continue d’accueillir la confiserie des renommées Bêtises de Cambrai. Entreprises de services, restaurants, 
                    hôtels sont associés au dynamisme des aménagements de la Communauté d’Agglomération de Cambrai : 
                    les axes structurants autoroutiers, la plateforme logistique e-Valley et les aménagements du futur port intérieur de 
                    Cambrai-Marquion et du Canal Seine-Nord-Europe.
                    
                </div>
                </div>    
                </div>
        </div>



        <!--Début du bandaux-bas-->

        
        <div class="bandeau">
        <div class="footer-contact" id="footer-content-1">
            <a href="https://www.google.com/maps/place/Sdis+Nord/@50.1665004,3.1591123,3a,75y,0.73h,97.92t/data=!3m6!1e1!3m4!1sMlPgxBMsb7q_6rgIkjgT6A!2e0!7i16384!8i8192!4m5!3m4!1s0x47c2ba913078fd03:0x2a5929f0cd56168b!8m2!3d50.1667644!4d3.1592242"><img src="souspage/allimg/footer/Pictogramme%20accueil%20mairie.png" class="img-footer" id="img-footer-1" style="height: 3vw"> </a>
            <h3 class="footer-title" >Mairie</h3>
            <p class="footer-text">Place Jean Jaurès<br> 59400 FONTAINE NOTRE DAME</p>
        </div>

        <div class="footer-contact" id="footer-content-2">
            <a href="souspage/contact.php"><img src="souspage/allimg/footer/Pictogramme%20courrier.png" class="img-footer" id="img-footer-2" style="height: 3vw"></a>
            <p class="footer-text">Par mail<br>Contactez nous.</p>
        </div>

        <div class="footer-contact" id="footer-content-3">
            <a href="https://www.facebook.com/MairiedeFontaineNotreDame/">
                <img src="souspage/allimg/footer/Facebook.png" class="img-footer" id="img-footer-3" style="height: 3vw">
            </a>

            <div type="button" class="footer-button" id="footer-button-1" onclick="window.open('https://www.facebook.com/MairiedeFontaineNotreDame/','_blank');">Notre Facebook</div><br>
            <a href="https://www.instagram.com/mairiedefontainenotredame//">
                <img src="souspage/allimg/footer/Instagram.png" class="img-footer" id="img-footer-3" style="height: 3vw">
            </a>

            <div type="button" class="footer-button" id="footer-button-1" onclick="window.open('https://www.instagram.com/mairiedefontainenotredame/','_blank');">Notre Instagram</div></div>

         <div class="footer-contact" id="footer-content-4">
             <img src="souspage/allimg/footer/Pictogramme%20t%C3%A9l%C3%A9phone.png" class="img-footer" id="img-footer-4" style="height: 3vw">
             <p class="footer-text">Téléphone : 03 27 37 67 00<br>Fax : 03 27 37 67 09<br>Mail :<br> accueil@ville-de-fontainenotredame-59.fr</p>
         </div>

         <div class="footer-contact" id="footer-content-5">
            <img src="souspage/allimg/footer/Horloge(1).png" class="img-footer" id="img-footer-5" style="height: 3vw">
             <p class="footer-text" style="height: 3vw">Horaires d'ouverture<br>Du lundi au jeudi:<br>10h30 à 12h30 et de 14h00 à 18h00<br>Le vendredi<br>10h30 à 12h30 et de 14h à 17h30</p>
         </div>

        <div class="mention" style="display: flex; padding-top: 25px;">
            <p>© Copyright Fontaine Notre Dame | Tous droits réservés</p>
            <a href="souspage\Mentions l├®gales obligatoires.pdf" onclick="window.open(this.href); return false;" style="padding-left: 15px;">Mentions legales</a>
            </div>

    </div>

 <!-- <div class="presentation">
         <video class="min-vh-100 min-vw-100" autoplay="true" muted="" loop="" width="1450" height="500" style="">
           <source src="souspage/allimg/index/DJI_0022.mp4" type="video/mp4">
            </video> -->

    
    </body>
</html>										