<?php
// Tableau contenant les citations
$quotes = [
    ["text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
    modi nulla, ipsam omnis eum odio ipsa ea fugit officiis aliquam
    eaque rerum est laboriosam, error molestias ipsum pariatur.
    Repudiandae, perspiciatis"],
    ["text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
    modi nulla, ipsam omnis eum odio ipsa."],
    ["text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
    modi nulla, ipsam omnis eum odio ipsa ea fugit officiis aliquam
    eaque rerum est laboriosam, error molestias ipsum pariatur.
    Repudiandae, perspiciatis. Hâte-toi de bien vivre et songe que chaque jour est à lui seul une vie."],
];

// Récupérer l'index actuel de la citation (par défaut 0)
$index = isset($_GET['index']) ? intval($_GET['index']) : 0;

// Calculer les index précédent et suivant
$prevIndex = ($index - 1 + count($quotes)) % count($quotes);
$nextIndex = ($index + 1) % count($quotes);
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dé Si Dofé - Restaurant créole gastronomique</title>
    <link rel="stylesheet" href="./index-style.css" />
  </head>
  <body>
    <header>
      <ul class="barre-de-navigation">
        <li><a href="#"> </a></li>
        <li><a href="#"> Le Restaurant </a></li>
        <li><a href="#"> Notre cheffe </a></li>
        <li><a href="#"> Menu </a></li>

        <li>
          <a href="#">
            <img
              class="Logo-nav"
              src="../Visu/DeSiDofe_Blanc.webp"
              alt="logo-blanc"
            />
          </a>
        </li>

        <li><a href="#"> Galerie </a></li>
        <li><a href="#"> Réservation </a></li>
        <li><a href="#"> Contact </a></li>
        <li>
          <a href="#"> <i></i> </a>
        </li>
      </ul>
    </header>

    <main>
      <section id="Page-aceuil">
        <img
          class="fond-hero"
          src="../Visu/fond-noir-resto.jpg"
          alt="image de fond de présentation"
        />
        <div class="conteneur-texte-hero">
          <h1>Lorem ipsum dolor sit amet consectes eum odio ipsa
          <button>Button sample</button>
        </div>
      </section>

      <section id="Le-Restaurant">
        <div class="boite-gch">
          <h2 class="titre-h2">Le Restaurant</h2>
          <h3>Lullam officia perspiciatis amet veritatir</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
            modi nulla, ipsam omnis eum odio ipsa ea fugit officiis aliquam
            eaque rerum est laboriosam, error molestias ipsum pariatur.
            Repudiandae, perspiciatis. Lorem ipsum, dolor sit amet consectetur
             adipisicing elit. Quam omnis ad temporibus explicabo. Minima ipsum 
             ipsa ipsam fuga, alias sequi, placeat ullam fugiat repellendus 
             cupiditate officiis, aut ratione quisquam vero.
          </p>
          <button class="button">
            Button sample
          </button>
        </div>
        <div class="boite-drte">
          <img src="../Visu/charbon.jpg"  alt="charbon" />
          <img src="../Visu/tables.jpg" alt="tables" />
        </div>
      </section>

      <section id="La-Cheffe">
        <div>
          <img src="../Visu/la-cheffe.jpg"  alt="la cheffe" />
        </div>
        <div class="boite-gch">
          <h2 class="titre-h2">La Cheffe</h2>
          <h3>Lullam officia perspiciatis amet veritatir</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
            modi nulla, ipsam omnis eum odio ipsa ea fugit officiis aliquam
            eaque rerum est laboriosam, error molestias ipsum pariatur.
            Repudiandae, perspiciatis. Lorem ipsum, dolor sit amet consectetur
             adipisicing elit. Quam omnis ad temporibus explicabo. Minima ipsum 
             ipsa ipsam fuga, alias sequi, placeat ullam fugiat repellendus 
             cupiditate officiis, aut ratione quisquam vero.
          </p>
          <button class="button">
            Button sample
          </button>
        </div>

      </section id="Spécialités">
        <div class="boite-spe">
          <h2 class="titre-h2">Spécialités</h2>
          <h3>Lullam officia perspiciatis amet veritatir</h3>
          <p>
            Lorem ipsum dolor. Quam omnis ad temporibus explicabo. Minima ipsum 
            ipsa ipsam fuga, alias sequi, placeat ullam fugiat repellendus 
            cupiditate officiis, aut rationeipsam fuga, alias sequi, placeat ull quisquam vero.
          </p>
          <div id="grid-3">
            <img src="../Visu/rhum.jpg" alt="boisson">
            <img src="../Visu/resto.jpg" alt="vue sur le restaurant">
            <img src="../Visu/plats.jpg" alt="Plats">
            <p>Lorem ipsum</p>
            <p>Lorem ipsum</p>
            <p>Lorem ipsum</p>
          </div>
          <button class="button">
            Button sample
          </button>
        </div>
      </section>

      <section id="Citations">
        <button class="nav-btn prev" onclick="changeQuote(<?php echo $prevIndex; ?>)">&#10094;</button>
        
        <p class="quote">"<?php echo $quotes[$index]['text']; ?>"</p>
        <p class="author">- <?php echo $quotes[$index]['author']; ?></p>
        
        <button class="nav-btn next" onclick="changeQuote(<?php echo $nextIndex; ?>)">&#10095;</button>
      </section>
    </main>
    <footer></footer>
  </body>
</html>
