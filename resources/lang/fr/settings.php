<?php

return [
    'account'   => [
        'actions'           => [
            'social'            => 'Changer au login Kanka',
            'update_email'      => 'Modifier l\'email',
            'update_password'   => 'Modifier le mot de passe',
        ],
        'description'       => 'Modification du compte',
        'email'             => 'Modification de l\'email',
        'email_success'     => 'Email modifié.',
        'password'          => 'Modification du mot de passe',
        'password_success'  => 'Mot de passe modifié.',
        'social'            => [
            'error'     => 'Tu utilises déjà le login Kanka pour ce compte.',
            'helper'    => 'Ton compte est géré par :provider. Tu peux changer au login Kanka en fournissant un login et un mot de passe.',
            'success'   => 'Ton compte utilise d\'orénavant le login Kanka.',
            'title'     => 'Social à Kanka',
        ],
        'title'             => 'Compte',
    ],
    'api'       => [
        'description'           => 'Modifier les options d\'API',
        'experimental'          => 'Bienvenus aux API de Kanka! Ces fonctionalités sont encore experimental mais assez stable que tu puisses intéragire avec les APIs. Créé un jeton personnel pour utiliser dans tes requêtes API, ou un jeton client pour permettre à ton app d\'accéder à tes données.',
        'help'                  => 'Kanka va prochainement mettre à disposition une API.',
        'link'                  => 'Lire la documentation',
        'request_permission'    => 'Nous construisons en ce moment des API RESTful pour que des applications tièrces communiquent avec Kanka. Cependant nous limitons actuellement le nombre d\'utilisateurs qui peuvent intéragire avec nos API, du moins jusqu\'à ce que la qualité de nos APIs soit assez bonne. Si tu veux accéder aux API et construire des applications qui communiquent avec Kanka, prends contact avec nous et nous te donneront les infos dont tu as besoin!',
        'title'                 => 'API',
    ],
    'layout'    => [
        'description'   => 'Modifier les options de mise en page',
        'success'       => 'Options de mise en page modifiées.',
        'title'         => 'Mise en page',
    ],
    'menu'      => [
        'account'           => 'Compte',
        'api'               => 'API',
        'layout'            => 'Mise en Page',
        'patreon'           => 'Patreon',
        'personal_settings' => 'Paramètres Personnels',
        'profile'           => 'Profil',
    ],
    'patreon'   => [
        'actions'       => [
            'link'  => 'Lier le compte',
            'view'  => 'Visiter Kanka sur Patreon',
        ],
        'benefits'      => 'Nous supporter sur Patreon te permets d\'uploader des fichiers plus gros, nous aide à couvrir les frais des serveurs, et nous permet de dédié plus de temps à travailler sur Kanka.',
        'description'   => 'Synchronisation avec Patreon',
        'errors'        => [
            'invalid_token' => 'Token invalid! Patreon n\'a pas validé la requête.',
            'missing_code'  => 'Code manquant! Patreon n\'a pas envoyé de code d\'authentification pour ton compte.',
            'no_pledge'     => 'Pas de pledge! Patreon a identifié ton compte, mais ne croit pas que tu nous supportes.',
        ],
        'link'          => 'Si tu supportes Kanka sur Patreon, tu peux utiliser le bouton pour lier ton compte. Cela te donnera accès a des bonus sympas!',
        'linked'        => 'Merci pour ton support sur Patreon! Ton comptes est d\'orénavant lié.',
        'pledge'        => 'Pledge: :name',
        'success'       => 'Merci pour ton support sur Patreon!',
        'title'         => 'Patreon',
        'wrong_pledge'  => 'Ton pledge est inséré manuellement par nous, du coups ça peut prendre quelques jours pour être actualisé. Si ça reste faux longtemps, n\'hésites pas à nous contacter.',
    ],
    'profile'   => [
        'actions'       => [
            'update_profile'    => 'Mettre à jour le profil',
        ],
        'avatar'        => 'Image de profil',
        'description'   => 'Mettre à jour le profil',
        'success'       => 'Mise à jour effectuée.',
        'title'         => 'Profil personnel',
    ],
];
