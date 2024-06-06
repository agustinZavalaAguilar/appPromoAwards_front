<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- la fonction language_attributes() qui permet de définir automatiquement la langue du document. Cette valeur est basée sur le réglage WordPress dans Réglages > Général > Langue du site. -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- bloginfo('charset') qui permet de définir l’encodage du site. Par défaut c’est UTF-8 et c’est très bien comme ça : votre site prendra en charge les caractères spéciaux, accents, caractères non-latins… -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/awardLogo.png"/>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!-- jQuery Migrate (si nécessaire pour la compatibilité avec des versions plus anciennes) -->
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php wp_head(); ?>
    <!--  Permet de récuperer les styles et les scripts -->
</head>

<body>