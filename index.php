<?php
$sections = [
    [
        "id" => "education",
        "titre" => "L'education",
        "image" => "images/images 1.jpg",
        "texte" => "Au Cameroun beaucoup d'enfants vont a l'ecole, mais ce n'est pas toujours facile. Dans certaines ecoles il y a plus de 80 eleves dans une seule classe et il n'y a pas assez de tables. Les parents doivent aussi payer les fournitures, l'uniforme et parfois les cours de renforcement.",
        "suite" => "Dans les villages c'est encore plus dur parce que l'ecole est parfois loin et il manque des enseignants. Certains eleves marchent plus d'une heure pour y aller."
    ],
    [
        "id" => "pauvrete",
        "titre" => "La pauvrete",
        "image" => "images/images 2.jpg",
        "texte" => "Beaucoup de familles vivent avec tres peu d'argent. Quand le papa ou la maman n'a pas de travail stable, c'est difficile de payer la nourriture, le loyer et l'ecole des enfants. Il y a des jeunes qui ont un diplome mais qui n'arrivent pas a trouver du travail, alors ils font des petits boulots.",
        "suite" => "Le cout de la vie augmente aussi. Le prix du riz, de l'huile et du transport monte souvent, mais les salaires ne changent presque pas."
    ],
    [
        "id" => "pollution",
        "titre" => "La pollution",
        "image" => "images/images 3.jpg",
        "texte" => "Dans les grandes villes comme Douala, on voit beaucoup de dechets dans les rues et dans les caniveaux. Quand il pleut, l'eau ne passe pas et ca fait des inondations. Il y a aussi la fumee des vieilles voitures et des motos qui rend l'air pas tres bon a respirer.",
        "suite" => "Les sachets plastiques sont partout. Si chacun jetait ses ordures a la poubelle et si on triait un peu, la ville serait plus propre."
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Le Cameroun</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <h1>Le Cameroun</h1>
        <p>Quelques problemes de mon pays</p>
    </header>

    <div class="menu">
        <a href="#education">Education</a>
        <a href="#pauvrete">Pauvrete</a>
        <a href="#pollution">Pollution</a>
    </div>

        <?php foreach ($sections as $i => $s) { ?>
    <section id="<?php echo $s['id']; ?>">
        <div class="texte">
            <h2><?php echo $s['titre']; ?></h2>
            <p><?php echo $s['texte']; ?></p>
            <p id="plus<?php echo $i; ?>" class="cache"><?php echo $s['suite']; ?></p>
            <span class="lire" onclick="afficher('plus<?php echo $i; ?>', this)">Lire la suite...</span>
        </div>
        <img src="<?php echo $s['image']; ?>" alt="<?php echo $s['id']; ?>">
    </section>
    <?php } ?>
    <footer>
        <p>Date : <?php echo date("d/m/Y"); ?></p>
        <p>© Lindsay 2026</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>