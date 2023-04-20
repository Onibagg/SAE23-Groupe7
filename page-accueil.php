<?php
include("fonctions.php");
setup();
page_header();
?>

<script>
                    window.addEventListener('load', function() {
    // Sélectionner toutes les images en lazy loading
    const lazyImages = document.querySelectorAll('.lazy');

    // Fonction pour charger les images en lazy loading
    const lazyLoad = function() {
        lazyImages.forEach(img => {
            // Vérifier si l'image est visible à l'écran
            if (img.getBoundingClientRect().top < window.innerHeight*0.5 && img.classList.contains("lazy")) {
                console.log("In")
                // Charger l'image
                img.src = img.name;
                
                // Réaliser l'effet de fondu
                img.style.opacity = 0; // Commencer avec une opacité de 0
                img.style.transition = "opacity 2s"; // Ajouter une transition pour l'effet de fondu
                setTimeout(function() {
                    img.style.opacity = 1; // Augmenter progressivement l'opacité jusqu'à 1
                }, 100);
                
                // Supprimer la classe "lazy" pour ne pas recharger l'image à chaque scroll
                console.log(img.classList)
                img.classList.remove('lazy');
                console.log(img.classList)
            }
        });
    }

    // Charger les images en lazy loading au chargement de la page
    lazyLoad();

    // Charger les images en lazy loading lors du scroll
    window.addEventListener('scroll', lazyLoad);
});

            </script>

</br>
</br>

<div class="container-fluid mt-3">
  
  <div class="row align-items-center">

    <div class="col-sm-1 p-3  text-white"></div>
    <div class="col-sm-7 p-3  text-dark">
    <h1 style="font-family:verdana;">Notre entreprise</h1> 
    <p >PrivateVPN est une entreprise offrant une solution VPN abordable pour les internautes soucieux de leur sécurité en ligne et de leur vie privée. Avec PrivateVPN, vous pouvez accéder à Internet en toute sécurité, anonymement et rapidement. Leur service VPN permet de se connecter à des serveurs dans différents pays, ce qui vous permet de profiter de contenus étrangers sans restriction. De plus, leur solution VPN offre une connexion rapide et fiable, ce qui signifie que vous pouvez profiter d'une expérience de navigation en ligne sans interruption.

PrivateVPN propose une interface facile à utiliser, des applications pour tous les appareils courants et un service clientèle amical et réactif. Avec une politique stricte de non-conservation des logs, vous pouvez être sûr que vos activités en ligne resteront privées et sécurisées.</p>
    </div>
    <div class="col-sm-3 p-3  text-white">
        
        <div id="demo" class="carousel slide custom-carousel" data-bs-ride="carousel" data-bs-interval="2000">



            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/Images/Accueil/Antivirus_image.png" alt="Antivirus_image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="/Images/Accueil/Secure_image.png" alt="Secure_image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="/Images/Accueil/VPN_image.png" alt="VPN_image" class="d-block" style="width:100%">
                </div>
            </div>



        </div>
    </div>
    <div class="col-sm-1 p-3  text-white"></div>
  </div>
</div>
<style>
.custom-carousel {
  max-width: 120%; /* ou toute autre valeur de votre choix */
}
/*.col-sm-7 {
  border: 1px solid blue;
  border-radius: 10px;
}*/
</style>

<style>
.container-fluid.custom {
  background-color: #DCF3FF; /* couleur de fond */
  border-radius: 20px; /* bordures arrondies */

}

img {
    outline: none;
}
</style>
</br>
</br>

<div class="row">

<div class="col-sm-1  text-dark"></div>
<div class="col-sm-10  text-dark">
    <div class="container-fluid custom mt-3">
    </br>
    </br>
    
        <div class="row align-items-center">
            <div class="col-sm-1  text-black"></div>
            <div class="col-sm-4 text-black">
                <img name="/Images/Accueil/Key_image.png" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" style="opacity: 0"
 width="250" height="250" class="d-block lazy">
                
            </div>
            <div class="col-sm-6 text-black">

                <p>Un VPN vous permet d'accéder à Internet via un tunnel sécurisé et crypté, vous assurant ainsi une confidentialité totale de vos données en ligne. Avec PrivateVPN, vous pouvez profiter de cette sécurité renforcée, notamment lorsque vous utilisez un réseau Wi-Fi public. Cette solution vous permet d'accéder à vos fichiers personnels ou professionnels en toute sécurité, tout en gardant votre historique de navigation privé. En optant pour un VPN, vous obtiendrez une protection en ligne accrue ainsi qu'une tranquillité d'esprit.</p>
            </div>
            <div class="col-sm-1 bg-primary text-black"></div>
        </div>
        </br>
        </br>
        </br>
        <div class="row align-items-center">
            <div class="col-sm-1 bg-dark text-black"></div>
            <div class="col-sm-6 text-black">
                <p>Lorsque vous utilisez un VPN, vous avez la possibilité de vous connecter à des serveurs étrangers, ce qui vous permet de profiter d'un large éventail d'avantages. Par exemple, vous pouvez accéder à des services de streaming qui ne sont pas disponibles dans votre pays, ou bénéficier de billets d'avion à des tarifs avantageux en utilisant des sites web de réservation étrangers. De plus, avec des fournisseurs tels que PrivateVPN, vous pouvez facilement naviguer sur des sites web étrangers en évitant les restrictions géographiques, ce qui vous permet de découvrir de nouveaux contenus et de profiter pleinement de votre expérience en ligne.</p>
            </div>
            <div class="col-sm-1 text-black"></div>
            <div class="col-sm-3 text-black">
                <img name="/Images/Accueil/WWW_image.png" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" style="opacity: 0"
 width="250" height="250" class="d-block lazy">

            </div>
            <div class="col-sm-1 bg-primary text-black"></div>
        </div>
        </br>
        </br>
        </br>
        <div class="row align-items-center">
            <div class="col-sm-1 bg-dark text-black"></div>
            <div class="col-sm-4 text-black">
                <img  name="/Images/Accueil/PC_image.png"  src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" style="opacity: 0" width="250" height="250" class="d-block lazy">
            </div>
            <div class="col-sm-6 text-black">

                <p>Utiliser un VPN est la solution idéale pour naviguer sur Internet de manière rapide et facile tout en garantissant la sécurité de vos données. Grâce à des services tels que PrivateVPN, vous pouvez facilement protéger votre connexion Internet en quelques clics seulement. En plus d'une sécurité renforcée, vous bénéficierez également d'une vitesse de connexion optimale, ce qui vous permettra de naviguer sur Internet sans interruption ni ralentissement. Avec PrivateVPN, la configuration et l'utilisation de votre VPN sont un jeu d'enfant, ce qui vous permettra de vous concentrer sur ce qui compte vraiment: profiter pleinement de votre expérience en ligne en toute sérénité.</p>
            </div>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            
            <div class="col-sm-1  text-black"></div>
        </div>
    </div>
    
</div>
<div class="col-sm-1 text-dark"></div>

<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-1 p-3  text-white">.col</div>
    <div class="col-sm-4 p-3  text-white">
    </br>
    </br>
    <img src="/Images/Accueil/carte_image.png" width="400" height="230" >
    </div>
    <div class="col-sm-6 p-3  text-dark">
    </br>
    </br>
    <p>Utiliser un VPN est la solution idéale pour naviguer sur Internet de manière rapide et facile tout en garantissant la sécurité de vos données. Grâce à des services tels que PrivateVPN, vous pouvez facilement protéger votre connexion Internet en quelques clics seulement. En plus d'une sécurité renforcée, vous bénéficierez également d'une vitesse de connexion optimale, ce qui vous permettra de naviguer sur Internet sans interruption ni ralentissement. Avec PrivateVPN, la configuration et l'utilisation de votre VPN sont un jeu d'enfant, ce qui vous permettra de vous concentrer sur ce qui compte vraiment: profiter pleinement de votre expérience en ligne en toute sérénité.</p>
    </div>
    <div class="col-sm-1 p-3 text-white">.col</div>
  </div>
</div>

<?php
page_foot();
?>
</html>