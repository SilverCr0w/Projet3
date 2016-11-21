<!DOCTYPE html>
<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script> 
<script src="bootstrap/js/bootstrap.js "></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <title>Réservation Billets Louvre</title>

    <style type="text/css">

    @font-face {
    font-family: 'bonvenocflight';
    src: url('web fonts/bonvenocf_light_macroman/BonvenoCF-Light-webfont.eot');
    src: url('web fonts/bonvenocf_light_macroman/BonvenoCF-Light-webfont.eot?#iefix') format('embedded-opentype'),
         url('web fonts/bonvenocf_light_macroman/BonvenoCF-Light-webfont.woff') format('woff'),
         url('web fonts/bonvenocf_light_macroman/BonvenoCF-Light-webfont.ttf') format('truetype'),
         url('web fonts/bonvenocf_light_macroman/BonvenoCF-Light-webfont.svg#bonvenocflight') format('svg');
    font-weight: normal;
    font-style: normal;

}
	@font-face {
    font-family: 'black_jackregular';
    src: url('web fonts/blackjack_regular_macroman/blackjack-webfont.eot');
    src: url('web fonts/blackjack_regular_macroman/blackjack-webfont.eot?#iefix') format('embedded-opentype'),
         url('web fonts/blackjack_regular_macroman/blackjack-webfont.woff2') format('woff2'),
         url('web fonts/blackjack_regular_macroman/blackjack-webfont.woff') format('woff'),
         url('web fonts/blackjack_regular_macroman/blackjack-webfont.ttf') format('truetype'),
         url('web fonts/blackjack_regular_macroman/blackjack-webfont.svg#black_jackregular') format('svg');
    font-weight: normal;
    font-style: normal;



}

/*header*/

    	 .navbar
  {
    background: rgb(38,38,38);
    border-radius: 0px 0px 0px 0PX;
    

  }


  .navbar-header .navbar-brand
  {
  	display: flex;
  	flex-direction: row;

      margin-bottom:10px;
      padding-left: 20px;
      font-size: 1.8em;
      font-family: 'bonvenocflight',sans-serif;
      color: rgb(228, 181, 112);

  }

  #reserv
  {
  	margin-left: 10px;
  	margin-top: -5px;
  }

     #dep
   {
   	margin-top: 5px;
   }

  .navbar-brand img
  {
  	width: 90px;
  	height: 60px;
  	margin-top: -10px;
  }

  .menu
  {
    margin-right: 20px;
    padding-top: 5px;
  }
    
  .menu ul li a
  {

    font-size: 1.2em;
    font-family: verdana;
    color: rgb(81, 81, 80);
  }

    .menu ul li a:hover
  {
    background: rgb(228, 181, 112);
    color: black;
        -webkit-transition-duration: 1s;
    -webkit-transition-timing-function: linear;
  }

  .dropdown-menu
  {
    background: rgb(38,38,38);
  }


  .icon-bar
  {
    margin-top: 10px;
    background: rgb(228, 181, 112);
  }

  /*présentation*/

  .para h2
  {
  	font-size: 2.5em;
  	font-family: 'black_jackregular', sans-serif;
  	margin-top: 50px;
  }

  .para
  {
  	box-shadow: 0px 5px 10px black inset;
  	margin-top: 15px;
  }

  .para
  {
  	color: white;
  	background: rgb(38,38,38); 
  	padding-bottom: 40px;

  }

  .para h2 img
  {
  	padding-bottom: 10px;
  	margin-left: 30px;
  }
  .expli
  {
  	font-size: 1.5em;
  	margin-top: 100px;
  }

  .expli p
  {
  	
  	color: white;
  	font-size: 1em;
  }
 .h-divider
  {
   margin-top:5px;
   margin-bottom:5px;
   margin-left: 50px;
   height:1px;
   width:95%;
   border-top:1px solid white;
  }

  .para2
  {
  	background: rgb(132, 132, 131);
  }
 .para2 h2
 {
 	  	font-size: 2.5em;
  	font-family: 'black_jackregular', sans-serif;
  	margin-top: 50px;
  	color: white;
 }

   .para2 h2 img
  {
  	padding-bottom: 10px;
  	margin-left: 30px;
  }

  .inf
  {
  	height: 300px;
  	margin-top: 50px;
  	margin-bottom: 50px;
  	border: solid black 2px;
  	background-color: white;
  }

  .inf i, .inf p
  {
  	margin-top: 30px;
  }

  .inf2
  {
  	margin-top: 50px;
  	border: 2px solid black;
  	background-color: rgb(228, 181, 112); 

  }

  a
  	{
  		color: #000;
  	}

  a .inf:hover
  {
  	border-color: rgb(228, 181, 112) ;
  	background-color: rgb(38,38,38);
  	color: rgb(228, 181, 112) ;
  	        -webkit-transition-duration: 0.5s;
    -webkit-transition-timing-function: linear;
  }

  a:focus
  {
  	color: #000 ;
  }
    </style>

</head>

	<body>

	<?php include("Projet3header.php"); ?>
	<section>
	<article>

		<div class="container-fluid">
			<div class="row para">
				<div class="row">
					<div class="col-lg-offset-0 col-lg-3 col-md-offset-3 col-md-3 col-sm-offset-4 col-sm-5 col-xs-offset-2 col-xs-8">
						<h2> <img src="logo_pyramide_accueil.png" width="80px">Ce qui vous attend</h2>
					</div>
					<div class="row">
			              <div class="col-xs-3"></div>
			              <div class="col-xs-2"></div>
			              <div class="col-xs-2"></div>
			              <div class="col-xs-3"></div>
			              <div class="col-xs-3"></div>
			        </div>
          			<div class="h-divider">
          			</div>
          			<div class="row">
              			<div class="col-xs-3"></div>
              			<div class="col-xs-3"></div>
              			<div class="col-xs-3"></div>
              			<div class="col-xs-3"></div>
          			</div>
				</div>
				<div class="row expli">
					<div class="col-lg-offset-1 col-lg-6">
							<p>Découvrez l’un des musées les plus visités au monde et profitez d’un billet coupe-file pour éviter une longue attente à l’entrée du musée du Louvre. Retirez votre audio-guide puis flânez à travers les expositions fascinantes du musée et apprenez l’histoire des artistes et de leurs œuvres exposées sous vos yeux.<br/><br/>

							Le Louvre est un immense musée, profitez donc de votre carte pratique indiquant plusieurs itinéraires possibles à suivre selon vos centres d’intérêt. Avec votre audio-guide disponible en dix langues, découvrez une myriade d’informations et d’anecdotes pour mieux comprendre l’histoire et l’importance des plus grandes œuvres du musée.<br/><br/>

							Explorez les expositions les plus populaires et les plus célèbres composées d’œuvres légendaires telles que la Vénus de Milo et le Sacre de Napoléon Ier, sans oublier bien sûr le mystérieux sourire de la Joconde de Léonard de Vinci.<br/><br/>

							Découvrez les plus grandes œuvres du monde avec les commentaires fascinants de votre audio-guide et continuez votre exploration des lieux après la fin de la visite. Une fois votre audio-guide rendu, vous pourrez rester dans le musée pour profiter au maximum de votre visite de cet emblème parisien.</p>
					</div>	
					<div class=" col-lg-offset-1 col-lg-4 roundedImage">
						<img src="image4.jpg" width="400">
					</div>
				</div>
			</div>
			<div class="row para2">
				<div class="row">
					<div class="col-lg-offset-0 col-lg-3 col-md-offset-3 col-md-3 col-sm-offset-4 col-sm-5 col-xs-offset-2 col-xs-8">
						<h2> <img src="logo_pyramide_accueil.png" width="80px">Informations pratiques</h2>
					</div>
					<div class="row">
			              <div class="col-xs-3"></div>
			              <div class="col-xs-2"></div>
			              <div class="col-xs-2"></div>
			              <div class="col-xs-3"></div>
			              <div class="col-xs-3"></div>
			        </div>
          			<div class="h-divider">
          			</div>
          			<div class="row">
              			<div class="col-xs-3"></div>
              			<div class="col-xs-3"></div>
              			<div class="col-xs-3"></div>
              			<div class="col-xs-3"></div>
          			</div>
				</div>
				<div class="row">
					<a  href="#MonCollapse" data-toggle="collapse" aria-expanded="false" aria-controls="MonCollapse">
					<div class="col-lg-offset-2 col-lg-2 inf ">
						<div align="center"><i class="fa fa-clock-o fa-4x"></i></div>
						<h3 align="center">Horaires</h3>
						<p align="center">Vous trouverez sur cette page les horaires d'ouverture et de fermeture de ce musée ainsi que les jours où celui-ci sera fermé</p>
					</div>
					</a>
					<a href="#MonCollapse2" data-toggle="collapse" aria-expanded="false" aria-controls="MonCollapse2">
					<div class="col-lg-offset-1 col-lg-2 inf">
					<div align="center"><i class="fa fa-money fa-4x"></i></div>
						<h3 align="center">Tarifs</h3>
						<p align="center">Vous trouverez sur cette page les différents tarifs que propose le musée</p>
					</div>
					</a>
					<a href="#MonCollapse3" data-toggle="collapse" aria-expanded="false" aria-controls="MonCollapse3">
					<div class="col-lg-offset-1 col-lg-2 inf">
					<div align="center"><i class="fa fa-calendar fa-4x"></i></div>
						<h3 align="center">Ouverture des salles</h3>
						<p align="center">Vous trouverez sur cette page le "calendrier d'ouverture des salles" qui vous indique les salles ouvertes ou fermées en fonction des jours et heure de la semaine</p>
					</div>
					</a>

				</div>
					<section id="MonCollapse" class="collapse">
					<div class="row">
					<div class="col-lg-offset-2 col-lg-8">
						<div class="well"><p> - Le musée est ouvert tous les jours de 9h à 18h excepté le mardi.<br/> (fermeture des salles à partir de 17h30)</p><br/>
										  <p> - Le musée est ouvert en nocturne jusqu'à 21h45 le mercredi et le vendredi.<br/>
												(fermeture des salles à partir de 21h30)</p><br/>
										<strong>Chaque premier dimanche des mois d'octobre à mars, l'entrée au musée du Louvre est gratuite pour tous les visiteurs.</strong>  
										<h3>Accès :</h3>
										<p> - Les accès par la Pyramide et la galerie du Carrousel : ouvert tous les jours sauf le mardi, de 9h à 19h30 et jusqu'à 22h le mercredi et le vendredi.</p><br/>
										<p>- <strong>Passage Richelieu : </strong>ouvert tous les jours, sauf le mardi, de 9h à 17h30 et jusqu’à 18h30 le mercredi et le vendredi.</p><br>
										<p>- <strong>Porte des Lions : </strong> en raison de contraintes techniques, cet accès est fermé.</p>
										<h3>Jours fériés :</h3>
										<p>En 2016, le musée du Louvre vous accueille les jours fériés suivants :</p><br/>
										<table class="table">
											<thead>
												<tr>
													<th>Jours fériés en 2016</th>
													<th>Musée ouvert de 9h à 18h*</th>
													<th>Musée fermé</th>
												</tr>
											</thead>
											<tbody>
											     <tr>
											        <td>Dimanche 27 mars </td>
											        <td align="center">X</td>
											        <td></td>
											     </tr>
											     <tr>
											        <td>Lundi 28 mars</td>
											        <td align="center">X</td>
											        <td></td>
											     </tr>
											     <tr>
											        <td>Dimanche 1er mai</td>
											        <td></td>
											        <td align="center">X</td>
											     </tr>
											     <tr>
											        <td>Jeudi 5 mai</td>
											        <td align="center">X</td>
											        <td></td>
											     </tr>
											     <tr>
											         <td>Dimanche 8 mai</td>
											        <td align="center">X</td>
											        <td></td>
											     </tr>
											     <tr>
											        <td>Dimanche 15 mai</td>
											        <td align="center">X</td>
											        <td></td>
											     </tr>
											     <tr>
											        <td>Lundi 16 mai</td>
											        <td align="center">X</td>
											        <td></td>
											     </tr>
											     <tr>
											        <td>Jeudi 14 juillet</td>
											        <td align="center">X</td>
											        <td></td>
											     </tr>
											     <tr>
											        <td>Lundi 15 août</td>
											        <td align="center">X</td>
											        <td></td>
											     </tr>
											     <tr>
											        <td>Mardi 1er novembre</td>
											        <td></td>
											        <td align="center">X</td>
											     </tr>
											     <tr>
											        <td>Vendredi 11 novembre</td>
											        <td align="center">X</td>
											        <td></td>
											     </tr>
											     <tr>
											        <td>Dimanche 25 décembre</td>
											        <td></td>
											        <td align="center">X</td>
											     </tr>
											</tbody>
										</table>
						</div>
					</div>
					
					</div>
					</section>

					<section id="MonCollapse2" class="collapse">
					<div class="row">
					<div class="col-lg-offset-2 col-lg-8">
					<div class="well"><p>Le musée propose plusieurs types de tarifs :</p><br/>
										<ul>
											<li>Tarif « normal » à partir de 12 ans à <strong>16 €</strong></li>
											<li> Tarif « enfant » à partir de 4 ans et jusqu’à 12 ans, à<strong> 8 € </strong>(l’entrée est gratuite pour les enfants de moins de 4 ans)
											</li>
											<li>Tarif « senior » à partir de 60 ans pour <strong>12  €</strong></li>
											<li>Un tarif « réduit » de <strong>10 € </strong>accordé dans certaines conditions (étudiant, employé du musée, d’un service du Ministère de la Culture, militaire…)</li>
										</ul>
					</div>
					</div>
					</div>
					</section>

					<section id="MonCollapse3" class="collapse">
					<div class="row">
					<div class="col-lg-offset-2 col-lg-8">
					<div class="well"><p><strong>En raison de l’étendue de ses collections et de la rénovation de certains espaces muséographiques, le musée ne peut maintenir en permanence toutes les salles ouvertes. Vous trouverez sur cette page le "calendrier d'ouverture des salles" qui vous indique les salles ouvertes ou fermées en fonction des jours et heure de la semaine, ainsi que la liste des fermetures exceptionnelles, notamment pour travaux.</strong></p><br/>
					<div class="row">
						<div class="col-lg-offset-1 col-lg-5">
							<h4 align="center">Département des Antiquités orientales</h4>
							<br/>
							<div class="row">
								<div class="col-lg-5">
									<img src="antiquites-orientales.jpg" >
								</div>
								<div class="col-lg-7">
									<p>Ouvert.</p>
								</div>
							</div>
						 
						</div>
						<div class="col-lg-5">
							<h4 align="center">Département des Arts de l'Islam</h4>
							<br/>
							<div class="row">
								<div class="col-lg-5">
									<img src="arts-de-l-islam.jpg">
								</div>
								<div class="col-lg-7">
									<p>Les salles D et E, sont fermées le mercredi (diurne et nocturne) et le jeudi<br/>
										La salle B est fermée le jeudi</p>
								</div>
							</div>
						
						</div>
						</div>
						<br/>
						<div class="row">
						<div class="col-lg-offset-1 col-lg-5">
							<h4 align="center">Orient méditerranéen dans l'empire romain</h4>
							<br/>
							<div class="row">
								<div class="col-lg-5">
									<img src="omer.jpg" >
								</div>
								<div class="col-lg-7">
									<p>Les salles D et E, sont fermées le mercredi (diurne et nocturne) et le jeudi<br/>
									La salle B est fermée le jeudi</p>
								</div>
							</div>
						 
						</div>
						<div class="col-lg-5">
							<h4 align="center">Département des Antiquités grecques, étrusques et romaines</h4>
							<br/>
							<div class="row">
								<div class="col-lg-5">
									<img src="galerie.jpg">
								</div>
								<div class="col-lg-7">
									<p>Les salles 5 à 9 sont fermées le mercredi (en journée et en nocturne) et le jeudi<br/>
										Les salles 2 à 3a sont fermées le mercredi (en journée et en nocturne)<br/>
										Les salles 3b à 4 sont fermées le jeudi</p>
								</div>
							</div>
						
						</div>
						</div>
						<br/>
						<div class="row">
						<div class="col-lg-offset-1 col-lg-5">
							<h4 align="center">Département des Antiquités égyptiennes</h4>
							<br/>
							<div class="row">
								<div class="col-lg-5">
									<img src="antiquites.jpg" >
								</div>
								<div class="col-lg-7">
									<p>Les salles 1 et 2 Egypte Copte sont fermées le mercredi (en journée et en nocturne)</p>
								</div>
							</div>
						 
						</div>
						<div class="col-lg-5">
							<h4 align="center">Département des Objets d'art</h4>
							<br/>
							<div class="row">
								<div class="col-lg-5">
									<img src="objets.jpg">
								</div>
								<div class="col-lg-7">
									<p>Les salles 75 à 81 sont fermées le mercredi (en nocturne), le jeudi et le vendredi (en nocturne).</p>
								</div>
							</div>
						
						</div>
						</div>
						<br/>
						<div class="row">
						<div class="col-lg-offset-1 col-lg-5">
							<h4 align="center">Départements des Peintures et des Arts graphiques</h4>
							<br/>
							<div class="row">
								<div class="col-lg-5">
									<img src="galerie-aile.jpg" >
								</div>
								<div class="col-lg-7">
									<p>Les salles 15 à 25 et 27 à 31 sont fermées le mercredi en nocturne, le jeudi et le vendredi (en journée et en nocturne)<br/>
									Les salles 39 à 65 sont fermées le vendredi (en journée et en nocturne)
									</p>
								</div>
							</div>
						 
						</div>
						<div class="col-lg-5">
							<h4 align="center">Département des Sculptures</h4>
							<br/>
							<div class="row">
								<div class="col-lg-5">
									<img src="galerie-michel.jpg">
								</div>
								<div class="col-lg-7">
									<p>Ouvert.</p>
								</div>
							</div>
						
						</div>
						</div>
						<br/>
						<div class="row">
						<div class="col-lg-offset-1 col-lg-5">
							<h4 align="center">Arts d'Afrique, d'Asie, d'Océanie et des Amériques</h4>
							<br/>
							<div class="row">
								<div class="col-lg-5">
									<img src="afrique.jpg" >
								</div>
								<div class="col-lg-7">
									<p>Les salles sont fermées le vendredi (en journée et en nocturne).</p>
								</div>
							</div>
						 
						</div>
						<div class="col-lg-5">
							<h4 align="center">Musée Eugène Delacroix</h4>
							<br/>
							<div class="row">
								<div class="col-lg-5">
									<img src="delacroix.jpg">
								</div>
								<div class="col-lg-7">
									<p>Le musée est ouvert tous les jours sauf les mardis de 9h30 à 17h00</p>
								</div>
							</div>
						
						</div>
						</div>

					</div>
					</div>
					</div>
					</div>
					</section>
			</div>
			<div class="row para3">
			<div class="col-lg-offset-4 col-lg-4 inf2">
				<div align="center"></div>
				<h3 align="center"><i class="fa fa-shopping-cart fa-1x"></i> Billeterie</h3>
			</div>
		</div>

	</article>
		
	</section>
	</body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


</html>