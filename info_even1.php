<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> 
        <link rel="stylesheet" href="info_event1.css" /> 
        <title>Even Out </title>
    </head>

    <body>
	<?php include("menu.php") ?>
        
        <?php include("en_tete.php") ?>
	
	   <!-- <nav>
            <ul id="menu"> 
                <span class="evt"><li> <a href="Evènement.html"> <h2>Evènements </h2> </a> </li></span>
                <li> <a href="agenda.html"> <h2> Agenda </h2> </a> </li> 
                <li> <a href="creer.html"> <h2>Créer</h2> </a></li>
                <li> <a href="forum.html"> <h2>Forum</h2> </a> </li>
                <li> <a href="en_tête_de_page.html"> <h2> Mon compte</h2> </a> </li>
                <img id="even" src="C:\Users\anis\Desktop\info_even\even.png" width="110" height="110">
            </ul>
        </nav> -->
        
		<div id="searchbar">  
               
        <form action="search"  method="get" class="formulaire">                    
                   
            <input id="search" type="text" placeholder="Rechercher un évènement"/>                  
            <input id="search-btn" type="submit" value="rechercher"/>         
            
        </form>
    </div>
        
        
        <div class="recherche">
            <a href="recherche.html"> recherche avancée</a>
        </div>
        <header class ="fond">
             
        
                <img id="paris" src="C:\Users\anis\Desktop\info_even\paris.jpg" width="1333" height="407">
				
			                     
            
        </header>
	 <!-- fin du haut page -->
	 
	 
	 
	 
	 
               
	<h1> 007 Spectre, le dernier James Bond </h1> 

	         <div class="les-images" >
      
                    <img src="C:\Users\anis\Desktop\spectre007.jpg"  alt="affiche James Bond spectre" title="007 spectre" class="photo1" />
                    <img src="C:\Users\anis\Desktop\affiche1.jpg"  alt="affiche Bond spectre" title="007 spectre" class="photo2" />
					<img src="C:\Users\anis\Desktop\red007.jpg"  alt="tapis rouge spectre" title="007 spectre" class="photo3" />
            </div>    

			
			<!-- les boutons --> 
    <a href="http://www.creation-du-web.com/honolulu/cours-html-javascript-page7.html" class="button" ><span class="participer"> Y participer?</span></a>
    
	 
	<a href="http://www.creation-du-web.com/honolulu/cours-html-javascript-page7.html"> </a>
	
	<p class="prix"> Gratuit / Prix </p>
    <p class="inviteramis">+ Inviter des amis</p>	

	
	<p class="para1"> Je suis un grand fan de la saga James Bond, ayant lu la plus part des livres et surtout visionné 
	toutes les adaptations cinématographique de ce personnage mythique. A l'occasion de la sortie du dernier film au cinéma 
	j'en profite pour inviter à me rejoindre pour cette séance cinéma qui s'annonce déjè intense et réussie.<br/> 
	<em>Synopsis et détails</em> <br/>
    Un message cryptique venu tout droit de son passé pousse Bond à enquêter sur une sinistre organisation. Alors que M affronte une 
	tempête politique pour que les services 
    secrets puissent continuer à opérer, Bond s'échine à révéler la terrible vérité derrière... le Spectre.</p>

	<!-- Où et quand -->
	<div class="où-quand">
	<h3><em>Où et Quand ?</em></h3> <br/>
    <?php
	if (isset($_GET['d']) AND isset($_GET['m']) AND isset($_GET['Y']) AND isset($_GET['H']) AND isset($_GET['i']) AND isset($_GET['Lieu_spectr007']) 
		AND isset($_GET['ville_spectr007']) AND isset($_GET['arrondissement_spectr007']) AND isset($_GET['agepublic']) AND isset($_GET['nb_maxparticip'])  )	
	{	
	       echo 'Sorti le' . $_GET['d'] .' '.$_GET['m'] .' '.$_GET['Y'] <br/> 
	'Séance de' . $_GET['H'] . 'H' . $_GET['i'] <br/> 
	'A' . $_GET['Lieu_spectr007'] <br/>  
	<br/>
	'Adresse :' .$_GET['adresse_spectr007'] .' '.$_GET['ville_spectr007'].' '.$_GET['arrondissement_spectr007'] <br/>  7, place de la Rotonde 75001 Paris 1er arrondissement <br/> 
	'Public :' .$_GET['agepublic'] <br/>  Public : 10 ans et +<br/>  
	'Nombre maximum de participants :' .$_GET['nb_maxparticip'] ;  Nombre maximum de participants :150 personnes<br/> 

    }
	
	else // Le visiteur à modifier des paramètres, on avertit le visiteur
    {
	echo 'Il semblerait qu une erreur se soit produite :-(  , veillez revenir à la page précédente !';
    }
	
    ?>
	
	</div>
	
	
	<!-- commentaires -->
	<div class="les-commentaires" >
      <form method="post" action="traitement.php">
   <p>
	 <label for="commentaires">Commentaires</label> : <textarea name="commentaires" id="commentaires"" rows="3" cols="40" />
       Donne ton avis :)! </textarea>
   </p>   
	  </form>
	</div>
	
	
	
	
	
<!-- onglet descriptif et commentaires-->
 <div id="comm">
  <ul id="onglets">
    <li><a "Descriptif.html">Descriptif</a></li>
    <li class="active"><a href="C:\Users\anis\Desktop\le site\info_event2.html">Commentaire</a></li>   
  </ul>
</div>





<div class="reserve" >
         <p>Si vous souhaitez réserve votre place voici le lien: <br/>   
           <a href="https://www.ugc.fr/reservationAccueil.html?id=330171124930&part=all" target="_blank">
           https://www.ugc.fr/reservationAccueil.html?id=330171124930&part=all 
		 </p>   
	  
	</div>

	
<div class="sponsors" >
 <p> Les sponsors de l'événement : </p>

</div>
	
	
	
	 <?php include("PiedPage.php") ?>
	 
            <!--<footer>
			
                <ul id="fin"> 
				<link rel="stylesheet" href="V1.css" />
                <span class="fi"><li> <a href="#"> <h2>Nous connaitre </h2> </a> </li></span>
                <li> <a href="#"> <h2> Nous suivre</h2> </a> </li> 
                <li> <a href="#"> <h2>Contact</h2> </a</li>
                <li> <a href="#"> <h2>Aide en ligne </h2> </a> </li>
              
                </ul>
            
            </footer>--> 
	    </body>
</html>
  
     
