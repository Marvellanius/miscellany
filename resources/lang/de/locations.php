<?php

return [
    'characters'    => [
        'description'   => 'Charakter an diesem Ort.',
        'title'         => 'Ort :name Charaktere',
    ],
    'create'        => [
        'description'   => 'Erstelle einen neuen Ort',
        'success'       => 'Ort \':name\' erstellt.',
        'title'         => 'Erstelle einen neuen Ort',
    ],
    'destroy'       => [
        'success'   => 'Ort \':name\' entfernt.',
    ],
    'edit'          => [
        'success'   => 'Ort \':name\' aktualisiert.',
        'title'     => 'Bearbeite Ort :name',
    ],
    'events'        => [
        'description'   => 'Ereignisse, die an diesem Ort stattgefunden haben.',
        'title'         => 'Ort :name Ereignisse',
    ],
    'fields'        => [
        'characters'    => 'Charaktere',
        'image'         => 'Bild',
        'location'      => 'Ort',
        'locations'     => 'Orte',
        'map'           => 'Karte',
        'name'          => 'Name',
        'relation'      => 'Beziehung',
        'type'          => 'Typ',
    ],
    'helpers'       => [
        'characters'    => 'Sieh alle Charaktere in diesem Ort und den Unterorten an oder nur die direkt im Ort.',
        'descendants'   => 'Diese Liste enthält alle Orte, die direkt in diesem Ort und allen untergeordneten Orten sind.',
        'nested'        => 'Orte können in einer verschachtelten Ansicht angesehen werden. Orte ohne einen übergeordneten Ort werden direkt angezeigt. Orte, die untergeordnete Orte haben, können angeklickt werden um die untergeordneten Orte anzuzeigen. Du kannst so lange klicken, bis es keine untergeordneten Orte mehr gibt.',
    ],
    'index'         => [
        'actions'       => [
            'explore_view'  => 'Erkundungsansicht',
        ],
        'add'           => 'Neuer Ort',
        'description'   => 'Verwalte den Ort von :name',
        'header'        => 'Orte in :name',
        'title'         => 'Orte',
    ],
    'items'         => [
        'description'   => 'Gegenstände an oder von diesem Ort.',
        'title'         => 'Ort :name Gegenstände',
    ],
    'journals'      => [
        'description'   => 'Logbücher, die im Ort geschrieben wurden.',
        'title'         => 'Ort :name Logbücher',
    ],
    'locations'     => [
        'description'   => 'Orte, die sich an diesem Ort befinden.',
        'title'         => 'Ort :name Orte',
    ],
    'map'           => [
        'actions'   => [
            'admin_mode'    => 'Aktiviere Bearbeitungsmodus',
            'big'           => 'Vollansicht',
            'download'      => 'Herunterladen',
            'points'        => 'Punkte bearbeiten',
            'toggle_hide'   => 'Punkte verstecken',
            'toggle_show'   => 'Punkte anzeigen',
            'view_mode'     => 'Zurück zum Ansichtsmodus',
            'zoom_in'       => 'Hereinzoomen',
            'zoom_out'      => 'Herauszoomen',
            'zoom_reset'    => 'Zoom zurücksetzen',
        ],
        'helper'    => 'Klicke auf die Karte um einen Link zu einem Ort hinzu zu fügen oder klicke auf einen existierenden Punkt, um ihn zu entfernen.',
        'helpers'   => [
            'admin' => 'Aktivieren um neue Punkte hinzuzufügen indem man auf die Karte klickt, mit einem Klick die Punkte zu bearbeiten oder um sie zu bewegen.',
            'label' => 'Dieser Punkt ist nur eine Beschriftung. Nicht mehr, nicht weniger.',
            'view'  => 'Klick auf einen Kartenpunkt um dessen details zu sehen. Benutze STR + Mausrad um in die Karte rein oder raus zu zoomen.',
        ],
        'modal'     => [
            'submit'    => 'Hinzufügen',
            'title'     => 'Ziel des neuen Punkts',
        ],
        'no_map'    => 'Bitte erst eine Karte hinzufügen.',
        'points'    => [
            'fields'        => [
                'axis_x'    => 'X-Achse',
                'axis_y'    => 'Y-Achse',
                'colour'    => 'Farbe',
                'icon'      => 'Icon',
                'name'      => 'Markierung',
                'shape'     => 'Form',
                'size'      => 'Größe',
            ],
            'helpers'       => [
                'location_or_name'  => 'Eine Karte kann zu einem bestehenden Ort verlinken oder einfach nur eine Markierung haben.',
            ],
            'icons'         => [
                'anchor'        => 'Anker',
                'anvil'         => 'Amboss',
                'apple'         => 'Apfel',
                'aura'          => 'Aura',
                'axe'           => 'Axt',
                'beer'          => 'Bier',
                'biohazard'     => 'Biogefährdung',
                'book'          => 'Buch',
                'bridge'        => 'Brücke',
                'campfire'      => 'Lagerfeuer',
                'candle'        => 'Kerze',
                'cat'           => 'Katze',
                'cheese'        => 'Käse',
                'cog'           => 'Zahnrad',
                'crown'         => 'Krohne',
                'dead-tree'     => 'Toter Baum',
                'diamond'       => 'Diamant',
                'dragon'        => 'Drache',
                'emerald'       => 'Emeralt',
                'entity'        => 'Objektziel Bild',
                'fire'          => 'Feuer',
                'flask'         => 'Flasche',
                'flower'        => 'Blume',
                'horseshoe'     => 'Hufeisen',
                'hourglass'     => 'Sanduhr',
                'hydra'         => 'Hydra',
                'kaleidoscope'  => 'Kaleidoskop',
                'key'           => 'Schlüssel',
                'lever'         => 'Hebel',
                'meat'          => 'Fleisch',
                'octopus'       => 'Oktopus',
                'palm-tree'     => 'Palme',
                'pin'           => 'Pin',
                'pine-tree'     => 'Tanne',
                'player'        => 'Charakter',
                'potion'        => 'Trank',
                'reactor'       => 'Reaktor',
                'repair'        => 'Reparatur',
                'sheep'         => 'Schaf',
                'shield'        => 'Schild',
                'skull'         => 'Totenkopf',
                'snake'         => 'Schlange',
                'spades-card'   => 'Pik Karte',
                'sprout'        => 'Keim',
                'sun'           => 'Sonne',
                'tentacle'      => 'Tentakel',
                'toast'         => 'Toast',
                'tombstone'     => 'Grabstein',
                'torch'         => 'Fackel',
                'tower'         => 'Turm',
                'water-drop'    => 'Wasser',
                'wooden-sign'   => 'Holzschild',
                'wrench'        => 'Mutternschlüssel',
            ],
            'modal'         => 'Erstelle oder bearbeite einen Kartenpunkt',
            'placeholders'  => [
                'axis_x'    => 'Linke Position',
                'axis_y'    => 'Obere Position',
                'name'      => 'Markierung des Punktes, wenn kein Ort angegeben ist.',
            ],
            'return'        => 'Zurück zu :name',
            'shapes'        => [
                'circle'    => 'Kreis',
                'square'    => 'Quadrat',
            ],
            'sizes'         => [
                'large'     => 'Groß',
                'small'     => 'Klein',
                'standard'  => 'Standard',
            ],
            'success'       => [
                'create'    => 'Kartenpunkt für Ort erstellt.',
                'delete'    => 'Kartenpunkt für Ort entfernt.',
                'update'    => 'Kartenpunkt für Ort aktualisiert.',
            ],
            'title'         => 'Ort :name Kartenpunkte',
        ],
        'success'   => 'Kartenpunkte gespeichert.',
    ],
    'organisations' => [
        'description'   => 'Organisationen in diesem Ort.',
        'title'         => 'Ort :name Organisationen',
    ],
    'placeholders'  => [
        'location'  => 'Wähle einen übergeordneten Ort',
        'name'      => 'Name des Ortes',
        'type'      => 'Stadt, Königreich, Ruine',
    ],
    'quests'        => [
        'description'   => 'Quests des Orts.',
        'title'         => 'Ort :name Quests',
    ],
    'show'          => [
        'description'   => 'Eine detaillierte Ansicht eines Ortes',
        'tabs'          => [
            'characters'    => 'Charaktere',
            'events'        => 'Ereignisse',
            'information'   => 'Informationen',
            'items'         => 'Gegenstände',
            'journals'      => 'Logbücher',
            'locations'     => 'Orte',
            'map'           => 'Karte',
            'menu'          => 'Menü',
            'organisations' => 'Organisationen',
            'quests'        => 'Quests',
        ],
        'title'         => 'Ort :name',
    ],
];
