<?php

return [
    'attribute-templates'   => [
        'answer'    => <<<'TEXT'
La meilleure façon d'expliquer les modèles d'attributs est d'utiliser un exemple. Imaginons que ton monde a beaucoup de lieux, et que pour chacun, tu veux les attributs personnalité pour "Population", Climat" et "Niveau de criminalité".

Il est très facile de faire cela manuellement sur chaque lieux, mais cela peut devenir fastidieux, sans compter les oublis dès que la liste d'attributs devient longue. Là est la force des modèles d'attributs.

Tu peux créer un modèle d'attributs avec les attributs de ton choix (dans notre cas, Population, Climat et Niveau de criminalité), et ensuite appliquer ce modèle à tes lieux. Cela créera les attributs sur le lieu, et tout ce que tu as à faire est de remplir les valeurs. Ainsi tu n'as plus besoin de te souvenir de tous les attributs.
TEXT
,
        'question'  => 'Que sont les Modèles d\'Attributs?',
    ],
    'fields'                => [
        'answer'    => 'Réponse',
        'category'  => 'Question',
        'locale'    => 'Langue',
        'order'     => 'Ordre',
        'question'  => 'Question',
    ],
    'free'                  => [
        'answer'    => <<<'TEXT'
Oui ! Nous pensons que votre situation financière ne doit pas avoir d'impacte sur votre plaisir de jouer à des jeux de rôles ou à créer votre propres univers, et donc l'application sera toujours gratuite. Merci à nos généreux Patrons sur Patreon, nous sommes capable de couvrir nos frais de serveurs mensuels et de vous offrir une application sans publicité!

Cependant, nous supporter sur Patreon te permet d'augmenter la taille maximal des images à uploader, d'apparaitre dans le "Hall of Fame Patreon", d'avoir des icons plus sympas, de voter sur les tickets a prioritiser, et bien plus!
TEXT
,
        'question'  => 'Est-ce que l\'application restera gratuite ?',
    ],
    'help'                  => [
        'answer'    => 'Premièrement, merci de vouloir donner un coups de main! Nous sommes toujours ravis d\'accueilir des personnes motivées pour aider avec les traductions, tester les nouvelles fonctionalités, ou qui veulent aider les nouveaux utilisateurs. Rejoins-nous simplement sur le Discord. Nous apprécions aussi chacun de nos Patrons sur Patreon si tu veux nous soutenir et avoir accès à quelques avantages.',
        'question'  => 'Je veux aider! Que puis-je faire?',
    ],
    'multiworld'            => [
        'answer'    => 'Non! Tu peux créer autant de campagne que tu souhaites dans l\'application. Une campagne peut être un univers, un monde, un thème, ou ce que tu veux. Dès que tu as plusieurs campagnes, tu peux facilement passer d\'une campagne à l\'autre.',
        'question'  => 'J\'ai plusieurs campagnes dans des univers différents. Ai-je besoin d\'un compte différent pour chaque campagne?',
    ],
    'permissions'           => [
        'answer'    => 'Absolument, c\'est ce pourquoi nous avons fait Kanka! Vous pouvez inviter tous les joueurs à votre campagne, et leurs donner des rôles et des permissions. Nous avons réalisé un système extrêmement flexible (vous pouvez à la fois utiliser des options de configuration de permission et de restriction) pour couvrir toutes les situations possibles dont vous pourriez avoir besoin.',
        'question'  => 'Je veux utiliser Kanka pour concevoir mon propre univers JDR, mais je souhaiterais que mes joueurs puissent avoir accès à certains éléments et modifier leurs personnages. Est-ce possible ?',
    ],
    'show'                  => [
        'return'    => 'Retour à la FAQ',
        'timestamp' => 'Dernière mise à jour :date',
        'title'     => 'FAQ :name',
    ],
    'visibility'            => [
        'answer'    => 'Seules les personnes que tu invites à ta campagne peuvent voir et interagir avec celle-ci. Tes données sont privées et toujours sous ton contrôle.',
        'question'  => 'Tout le monde peut-il voir ma campagne?',
    ],
];
