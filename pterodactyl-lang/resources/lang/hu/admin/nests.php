<?php
return [
    'notices' => [
        'created' => 'Egy új fészek, :name, sikeresen létrehozva.',
        'deleted' => 'A kért fészket sikeresen töröltük a Panelből.',
        'updated' => 'A fészek konfigurációs beállításai sikeresen frissítve.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Sikeresen importálta az Egg-et és a kapcsolódó változókat.',
            'updated_via_import' => 'Ez az Egg a mellékelt fájl segítségével lett frissítve.',
            'deleted' => 'A kért Egg sikeresen törölve a Panelből.',
            'updated' => 'Az Egg konfiguráció frissítése sikeresen megtörtént.',
            'script_updated' => 'Az Egg telepítési szkript frissítve lett, és a szerverek telepítésekor futni fog.',
            'egg_created' => 'Sikeresen lerakták az új Egg-et. Az új Egg alkalmazásához minden futó démont újra kell indítania.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'A ":variable" változót törölték, és az újraépítés után a továbbiakban nem lesz elérhető a szerverek számára.',
            'variable_updated' => 'A ":variable" változó frissítve lett. A változtatások alkalmazásához minden kiszolgálót újra kell építenie ezzel a változóval.',
            'variable_created' => 'Új változó sikeresen létrehozva és hozzárendelve ehhez az Egg-hez.',
        ],
    ],
];
