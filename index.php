<?php
session_start();
ob_start();
// require "fonction.php";
require_once('db-functions.php');
?>
<section class="partie" id="n1">
	<header>
		<span>Kucra</span>
		<div id="hamburger-menu">
			<input id="menu__toggle" type="checkbox" />
			<label class="menu__btn" for="menu__toggle">
				<span></span>
			</label>
			<ul id="ulNav">
				<li><a href="#n1">HOME</a></li>
				<li><a href="#n2">FEATURES</a></li>
				<li><a href="#n5">CLIENT</a></li>
				<li><a href="#n7">PRINCING</a></li>
				<li><a href="#n6">FAQ</a></li>
				<li><a href="#n4">ABOUT</a></li>
				<li><a href="#n8">BLOG</a></li>
				<li><a href="#pieddepage">CONTACT</a></li>
				<li><a href="admin.php">ADMIN</a></li>
			</ul>
		</div>
		<div id="reseau">
			<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
			<a href="#"><i class="fa-brands fa-twitter"></i></a>
			<a href="#"><i class="fa-brands fa-instagram"></i></a>
		</div>
	</header>
	<section id="principal">
		<article id="weare">
			<h1>
				We are StartUp Creative kucra Agency
			</h1>
			<p id="soush1">
				Carefully crafted after analysing the needs of different industries and the design achieves a great
				balance between purpose & presentation
			</p>
			<form action="traitemant.php?action=subscribe" method="post" id="infomail">
				<input type="email" placeholder="Entrez votre email" name="email" id="mail">
				<input type="submit" value="SUBSCRIBE" name="emailSubmit" id="button">
			</form>
		</article>
		<figure id="fimgsect1">
			<img id="imgsect1" src="img/illustration.svg" alt="dessin décorative d'ecran dont un chat se trouve dessus,avec une fenetre ouverte et une souris intéragissant avec.">
		</figure>
	</section>
</section>
<section class="partie" id="n2">
	<div class="top">
		<h2 id="PF">Product Features</h2>
		<p id="sousPF">
			It is a long established fact that a reader will be of a page when established fact looking at its
			layout.
		</p>
	</div>
	<div id="lescartes">
		<div class="card">
			<i class="fa-solid fa-globe"></i>
			<h3 class="titrecard">Digital Design</h3>
			<p class="textcard">
				Some quick example text to build on the card title and make up the bulk of the card the platform.
			</p>
		</div>
		<div class="card">
			<i class="fa-solid fa-brush"></i>
			<h3 class="titrecard">Unlimited Colors</h3>
			<p class="textcard">
				Credibly brand stanaads compliant user exteible services College Anibh ocean eiusmod tincidunt
				laoret.
			</p>
		</div>
		<div class="card">
			<i class="fa-solid fa-chess"></i>
			<h3 class="titrecard">Strategy Solution</h3>
			<p class="textcard">
				Separated they live in Bookmarks grove right at the coast of the Semantics, a large ocean
				regelialia.
			</p>
		</div>
	</div>
</section>
<section class="partie" id="n3">
	<div class="top">
		<h2>How it works ?</h2>
		<p>
			It is a long established fact that a reader will be of a page when established fact looking at its
			layout.
		</p>
	</div>
</section>
<section class="partie" id="n4">
	<div class="top">
		<h2>We'r dynamic team of talented people of Innovative & marketing expert</h2>
		<p>
			To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.If
			several languages of the resulting language.
		</p>
	</div>
	<div>
		<div class="infodyna" id="chiffre">
			<div class="infochiffre">
				<h4>1499+</h4>
				<p>
					Complete Projects
				</p>
			</div>
			<div class="infochiffre">
				<h4>1080K</h4>
				<p>
					Satisfed Clients
				</p>
			</div>
			<div class="infochiffre">
				<h4>608</h4>
				<p>
					Team Members
				</p>
			</div>
			<div class="infochiffre">
				<h4>252</h4>
				<p>
					Employee
				</p>
			</div>
		</div>
		<div class="infodyna" id="perso">
			<div>
				<figure class="figPerso">
					<a href="#"><i class="fa-brands fa-facebook-f icores"></i></a>
					<a href="#"><i class="fa-brands fa-twitter icores"></i></a>
					<a href="#"><i class="fa-brands fa-skype icores"></i></a>
					<img src="img/person1.png" alt="portrait Anna G. Wilhite" class="imgperso">
				</figure>
				<p class="nom_prenom">
					Anna G. Wilhite
				</p>
				<p class="role">
					CEO/Founder
				</p>
			</div>
			<div>
				<figure class="figPerso">
					<a href="#"><i class="fa-brands fa-facebook-f icores"></i></a>
					<a href="#"><i class="fa-brands fa-twitter icores"></i></a>
					<a href="#"><i class="fa-brands fa-skype icores"></i></a>
					<img src="img/person2.png" alt="portrait William S. Blay" class="imgperso">
				</figure>
				<p class="nom_prenom">
					William S. Blay
				</p>
				<p class="role">
					CTO/Co Founder
				</p>
			</div>
			<div>
				<figure class="figPerso">
					<a href="#"><i class="fa-brands fa-facebook-f icores"></i></a>
					<a href="#"><i class="fa-brands fa-twitter icores"></i></a>
					<a href="#"><i class="fa-brands fa-skype icores"></i></a>
					<img src="img/person3.png" alt="portrait Maria B. Morales" class="imgperso">
				</figure>
				<p class="nom_prenom">
					Maria B. Morales
				</p>
				<p class="role">
					Web Designer
				</p>
			</div>
			<div>
				<figure class="figPerso">
					<a href="#"><i class="fa-brands fa-facebook-f icores"></i></a>
					<a href="#"><i class="fa-brands fa-twitter icores"></i></a>
					<a href="#"><i class="fa-brands fa-skype icores"></i></a>
					<img src="img/person4.png" alt="portrait Luke L. Johnston" class="imgperso">
				</figure>
				<p class="nom_prenom">
					Luke L. Johnston
				</p>
				<p class="role">
					Web Developper
				</p>
			</div>
		</div>
	</div>
</section>
<section id="semisection">
	<div id="textpara">
		<h2>Let's get started with Kucra</h2>
		<p>
			They are a good way to get you started if you want yobuild something similar or use from existing apps
			which will reduce the cost, efffort and time of the developers.
		</p>
		<a href="#" id="getstart">Get Started</a>
	</div>
</section>
<section class="partie" id="n5">
	<div class="top">
		<h2>What your clients says</h2>
		<p>
			The Big Oxmax advised her not to do so, because there were thousand of bad Commas, wild Question Marks
			and devious pulvinar metus moléstie sed Semikoli.
		</p>
	</div>
	<div id="clientgroupe">
		<figure>
			<img src="img/coffee.png" alt="">
		</figure>
		<figure>
			<img src="img/fisherman.png" alt="">
		</figure>
		<figure>
			<img src="img/montainbike.png" alt="">
		</figure>
		<figure>
			<img src="img/montain.png" alt="">
		</figure>
		<figure>
			<img src="img/market.png" alt="">
		</figure>
	</div>


</section>
<section class="partie" id="n6">
	<div>
		<div id="left">
			<h2>We are digital creative Landing Page</h2>
			<p>
				The difference between a successful person and others is not a lack of strength,not a lack of
				knowledge,but rather a lack of will.Composed in a pseudo-Latin language which more or less
				pseudo-Latin language corresponds.
			</p>
		</div>
		<div id="infon6">
			<div>
				<p class="chiffren6">
					4957
				</p>
				<p class="infon6">
					Happy User
				</p>
			</div>
			<div>
				<p class="chiffren6">
					1599
				</p>
				<p class="infon6">
					Complete Project
				</p>
			</div>
		</div>
		<a href="#" id="infoPlus">Learn More</a>
	</div>
	<figure>
		<img src="img/creativity.png" alt="dessin autour du mot creativity écris de manière fantaisiste">
	</figure>
</section>


<section class="partie" id="n7">
	<div class="top">
		<h2>Our Pricing</h2>
		<p>
			It is a long established fact that a reader will be of a page when established fact looking at its
			layout.
		</p>
	</div>
	<div id="grpcartesprix">
		<?php
		$allPricing = selectAllPricing();
		$pricings = findAll($allPricing);
		foreach ($pricings as $pricing) {
			$sup_circle = ($pricing['support_pricing']) ? 'xmark' : 'check';
			$h_f_circle = ($pricing['hidden_fees_pricing']) ? 'xmark' : 'check';
		?>
			<div class="carteprix" id="pack<?= $pricing['id_pricing'] ?>">
				<?php
				if ($pricing['pourcentage_reduction_pricing'] != 0) {
					echo '<p class="reduc">' . $pricing['pourcentage_reduction_pricing'] . '%<br> Sale</p>';
				}
				?>
				<div class="interieureCarte">
					<h3><?= $pricing['nom_pricing'] ?></h3>
					<div class="prixmois">
						<span class="currency">$</span>
						<span class="prix"><?= round($pricing['prix_pricing']) ?></span>
						<span class="parmois">/mouth</span>
					</div>
					<div class="infolignes">
						<div class="typeinfo">
							<span><i class="fa-regular fa-circle-check"></i>Bandwidth</span>
							<span><i class="fa-regular fa-circle-check"></i>Onlinespace</span>
							<span><i class="fa-regular fa-circle-<?= $sup_circle ?>"></i>Support</span>
							<span><i class="fa-regular fa-circle-check"></i>Domain</span>
							<span><i class="fa-regular fa-circle-<?= $h_f_circle ?>"></i>Hidden Fees</span>
						</div>
						<div class="valueinfo">
							<span><?= $pricing['bandwidth_pricing'] ?>GB</span>
							<?php
							echo ($pricing['onlinespace_pricing'] > 999) ? '<span>' . ($pricing['onlinespace_pricing'] / 1000) . 'GB</span>' : '<span>' . $pricing['onlinespace_pricing'] . 'MB</span>';

							echo ($pricing['support_pricing']) ?
								'<span>No</span>' :
								'<span>Yes</span>';

							echo ($pricing['domain_pricing'] < 0) ?
								'<span>Unlimited</span>' :
								'<span>' . $pricing['domain_pricing'] . '</span>';

							echo ($pricing['hidden_fees_pricing']) ?
								'<span>No</span>' :
								'<span>Yes</span>';
							?>
						</div>
					</div>
					<a href="traitemant.php?action=add&id=<?= $pricing['id_pricing'] ?>">Join Now</a>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</section>


<section class="partie" id="n8">
	<div class="top">
		<h2>Our Blog</h2>
		<p>
			It is a long established fact that a reader will be of a page when established fact looking as it's
			layout.
		</p>
	</div>
	<div id="grpBlog">
		<article class="partBlog" id="blog1st">
			<div class="imgPost">
				<figure class="figBlog">
					<img src="img/blog1.png" alt="open space idéaliser style photo de shutterstock">
				</figure>
				<div class="infoPost">
					<p class="nomGras">
						<i class="fa-regular fa-user"></i>
						Calvin Carlo
					</p>
					<p class="datefine">
						<i class="fa-regular fa-clock"></i>
						20th March 2021
					</p>
				</div>
			</div>
			<div class="sousPost">
				<h3>Doing a cross country road trip</h3>
				<p class="paraBlog">
					We credit digital, graphic and dimensional thinking, to create category leading brand.
				</p>
				<a href="#">Read More</a>
			</div>
		</article>
		<article class="partBlog" id="blog2nd">
			<div class="imgPost">
				<figure class="figBlog">
					<img src="img/blog2.png" alt="dame en tailleur sur son lit travaillat sur sn pc ,livre a la main">
				</figure>
				<div class="infoPost">
					<p class="nomGras">
						<i class="fa-regular fa-user"></i>
						Ruben Reed
					</p>
					<p class="datefine">
						<i class="fa-regular fa-clock"></i>
						1st July 2021
					</p>
				</div>
			</div>
			<div class="sousPost">
				<h3>New exhibition at our Museum</h3>
				<p class="paraBlog">
					Even the all-powerful Pointing has no control about the blind almost unorthographic.
				</p>
				<a href="#">Read More</a>
			</div>
		</article>
		<article class="partBlog" id="blog3rd">
			<div class="imgPost">
				<figure class="figBlog">
					<img src="img/blog3.png" alt="bureau open space dans le style des photo shutterstock">
				</figure>
				<div class="infoPost">
					<p class="nomGras">
						<i class="fa-regular fa-user"></i>
						Theresa Sinclair
					</p>
					<p class="datefine">
						<i class="fa-regular fa-clock"></i>
						25th July 2021
					</p>
				</div>
			</div>
			<div class="sousPost">
				<h3>Design your apps in your own way</h3>
				<p class="paraBlog">
					Pityful a rethoric question ran over her cheek, then she continued her way.
				</p>
				<a href="#">Read More</a>
			</div>
		</article>
	</div>
</section>
<footer>
	<div id="iconeContactFooter">
		<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
		<a href="#"><i class="fa-brands fa-twitter"></i></a>
		<a href="#"><i class="fa-brands fa-linkedin"></i></a>
		<a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
	</div>
	<ul>
		<li><a href="#"></a>Terms & Condition</li>
		<li><a href="#"></a>Privacy Policy</li>
		<li><a href="#"></a>Contact Us</li>
	</ul>
	<p>
		2022 © Kucra - Landing Page Template by Pichforest
	</p>
</footer>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>

<!-- marche aussi avec un <a href="#n1"><i class="fa-solid fa-arrow-up"></i></a> -->

<button onclick="colorSettings()" id="colorswap"><i class="fa-solid fa-gear"></i></button>
<button onclick="colorChange()" id="colorChange" data-theme="dark"><i class="fa-solid fa-gear"></i></button>

<div id="themeBox" class="cacher">
	<div id="claire" class="btnColor" data-theme="base">Thème Claire</div>
	<div id="sombre" class="btnColor" data-theme="dark">Thème Sombre</div>
</div>


<?= getMessages() ?>
<script src="script.js"></script>

<?php
$content = ob_get_clean();
$titre = "Kucra";
require "template.php";
?>

<!--
    facebook <i class="fa-brands fa-facebook-f"></i>
    twitter <i class="fa-brands fa-twitter"></i>
    instagram <i class="fa-brands fa-instagram"></i>
    skype <i class="fa-brands fa-skype"></i>
    linkedin <i class="fa-brands fa-linkedin"></i>
    google+ <i class="fa-brands fa-google-plus-g"></i>
    globe <i class="fa-solid fa-globe"></i>
    pinceau <i class="fa-solid fa-brush"></i>
    échec <i class="fa-solid fa-chess"></i>
    oui <i class="fa-regular fa-circle-check"></i>
    non <i class="fa-regular fa-circle-xmark"></i>
    personne <i class="fa-regular fa-user"></i>
    horloge <i class="fa-regular fa-clock"></i>
    flèche cers le haut <i class="fa-solid fa-arrow-up"></i>
	rouage <i class="fa-solid fa-gear"></i></i>
	poubelle <i class="fa-solid fa-trash"></i>
 -->