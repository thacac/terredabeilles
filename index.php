<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>First WP Template</title> ON PEUT SUPPRIMER TITLE WP LE GENERE EN AUTO -->
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div id="headLinks">
            <p>Lorem ipsum dolor sit amet consei recusandae tempore Exercitationem, fugit distinctio?</p>
        </div>
        <div>
            <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                   }
             ?>
            <h1>Partagez le gout de la nature</h1>
            <h2>Miels locaux non chauffés | Pâtisseries au miel | Formation & conseil</h2>
        </div>
        <div id="headerButtons">
            <ul>
                <li><button>Nos miels</button></li>
                <li><button>Pâtisseries</button></li>
                <li><button>Services</button></li>
            </ul>
        </div>
    </header>
    <div class="conteneur">
        <h1>Titre</h1>
        <p>du blalafjjgtjrjg</p>
    </div>
    <?php wp_footer(); ?>
</body>

</html>