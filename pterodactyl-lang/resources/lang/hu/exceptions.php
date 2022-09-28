<?php

return [
    'daemon_connection_failed' => 'Kivétel történt a démonnal való kommunikáció során, ami HTTP/:code válaszkódot eredményezett. Ez a kivétel naplózásra került.',
    'node' => [
        'servers_attached' => 'Egy Nodehoz nem kell kiszolgálót kapcsolni ahhoz, hogy törölni lehessen.',
        'daemon_off_config_updated' => 'A démon konfigurációja <strong>frissítésre került</strong>, azonban hiba történt a konfigurációs fájl automatikus frissítése során a démonon. A módosítások alkalmazásához manuálisan kell frissítenie a démon konfigurációs fájlját (config.yml).',
    ],
    'allocations' => [
        'server_using' => 'Jelenleg egy szerver van hozzárendelve ehhez a kiosztáshoz. Egy kiosztás csak akkor törölhető, ha jelenleg nincs hozzárendelve szerver.',
        'too_many_ports' => '1000-nél több port hozzáadása egyetlen tartományban egyszerre nem támogatott.',
        'invalid_mapping' => 'A megadott :port érvénytelen, ezért nem lehetett feldolgozni.',
        'cidr_out_of_range' => 'A CIDR-jelölés csak /25 és /32 közötti maszkokat engedélyez.',
        'port_out_of_range' => 'A kiosztásban lévő portoknak 1024-nél nagyobbaknak és 65535-nél kisebbnek vagy azzal egyenlőnek kell lenniük.',
    ],
    'nest' => [
        'delete_has_servers' => 'Az aktív szerverekkel rendelkező Nest nem törölhető a Panelből.',
        'egg' => [
            'delete_has_servers' => 'Egy aktív szerverrel rendelkező Egg nem törölhető a Panelből.',
            'invalid_copy_id' => 'A szkript másolására kiválasztott Egg nem létezik, vagy magát a szkriptet másolja.',
            'must_be_child' => 'A „Beállítások másolása innen” direktíva ehhez az Egghez a kiválasztott Nest child opciójának kell lennie.',
            'has_children' => 'Ez az Egg egy vagy több másik Egg szülője. Kérjük, törölje ezeket az Eggeket, mielőtt törli ezt az Egg -et.',
        ],
        'variables' => [
            'env_not_unique' => 'A :name környezeti változónak egyedinek kell lennie erre az Eggre.',
            'reserved_name' => 'A :name környezeti változó védett, és nem rendelhető változóhoz.',
            'bad_validation_rule' => 'A ":rule" érvényesítési szabály nem érvényes szabály ehhez az alkalmazáshoz.',
        ],
        'importer' => [
            'json_error' => 'Hiba történt a JSON-fájl elemzése során: :error.',
            'file_error' => 'A megadott JSON-fájl érvénytelen.',
            'invalid_json_provided' => 'A megadott JSON-fájl formátuma nem felismerhető.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Saját alfelhasználói fiókjának szerkesztése nem megengedett.',
        'user_is_owner' => 'Nem adhatja hozzá a kiszolgáló tulajdonosát alfelhasználóként ehhez a szerverhez.',
        'subuser_exists' => 'Az ezzel az e-mail címmel rendelkező felhasználó már hozzá van rendelve alfelhasználóként ehhez a szerverhez.',
    ],
    'databases' => [
        'delete_has_databases' => 'Nem törölhető olyan adatbázisgazda-kiszolgáló, amelyhez aktív adatbázisok kapcsolódnak.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'A láncolt feladat maximális intervalluma 15 perc.',
    ],
    'locations' => [
        'has_nodes' => 'Nem törölhető olyan hely, amelyhez aktív Node-ok vannak csatolva.',
    ],
    'users' => [
        'node_revocation_failed' => 'Nem sikerült visszavonni a bekapcsolt kulcsokat <a href=":link">Node #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Nem található olyan Node, amely megfelelne az automatikus telepítéshez meghatározott követelményeknek.',
        'no_viable_allocations' => 'Nem találtunk olyan kiosztást, amely megfelelne az automatikus telepítés követelményeinek.',
    ],
    'api' => [
        'resource_not_found' => 'A kért erőforrás nem létezik ezen a kiszolgálón.',
    ],
];
