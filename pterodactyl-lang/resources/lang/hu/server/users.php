<?php

return [
    'permissions' => [
        'websocket_*' => 'Lehetővé teszi a szerver websocketjének elérését.',
        'control_console' => 'Lehetővé teszi a felhasználó számára, hogy adatokat küldjön a kiszolgálókonzolra(Console).',
        'control_start' => 'Lehetővé teszi a felhasználó számára a szerver elindítását.',
        'control_stop' => 'Lehetővé teszi a felhasználó számára a szerver leállítását.',
        'control_restart' => 'Lehetővé teszi a felhasználó számára a szerver újraindítását',
        'control_kill' => 'Lehetővé teszi a felhasználó számára a szerver kill parancsot.',
        'user_create' => 'Lehetővé teszi a felhasználó számára, hogy új felhasználói fiókokat hozzon létre a szerverhez.',
        'user_read' => 'Lehetővé teszi a felhasználó számára a szerverhez társított felhasználók megtekintését.',
        'user_update' => 'Lehetővé teszi a felhasználó számára, hogy módosítsa a szerverhez társított más felhasználókat.',
        'user_delete' => 'Lehetővé teszi a felhasználó számára, hogy töröljön más, ehhez a szerverhez társított felhasználókat.',
        'file_create' => 'Lehetővé teszi a felhasználó számára új fájlok és könyvtárak létrehozását.',
        'file_read' => 'Lehetővé teszi a felhasználó számára a kiszolgálópéldányhoz társított fájlok és mappák megtekintését, valamint azok tartalmának megtekintését.',
        'file_update' => 'Lehetővé teszi a felhasználó számára a kiszolgálóhoz társított fájlok és mappák frissítését.',
        'file_delete' => 'Lehetővé teszi a felhasználó számára fájlok és könyvtárak törlését.',
        'file_archive' => 'Lehetővé teszi a felhasználó számára fájlarchívumok létrehozását és a meglévő archívumok kibontását.',
        'file_sftp' => 'Lehetővé teszi a felhasználó számára a fenti fájlműveletek végrehajtását egy SFTP-kliens használatával.',
        'allocation_read' => 'Lehetővé teszi a hozzáférést a szerverkiosztás kezelési oldalaihoz.',
        'allocation_update' => 'Lehetővé teszi a felhasználó számára, hogy módosítsa a kiszolgáló kiosztását.',
        'database_create' => 'Lehetővé teszi a felhasználó számára új adatbázis létrehozását a kiszolgáló számára.',
        'database_read' => 'Engedélyt ad a felhasználónak a kiszolgáló adatbázisainak megtekintéséhez.',
        'database_update' => 'Lehetővé teszi a felhasználó számára az adatbázis módosítását. Ha a felhasználó nem rendelkezik a "Jelszó megtekintése" engedéllyel, akkor nem tudja módosítani a jelszót.',
        'database_delete' => 'Lehetővé teszi a felhasználó számára egy adatbázispéldány törlését.',
        'database_view_password' => 'Lehetővé teszi a felhasználó számára, hogy megtekintse az adatbázis jelszavát a rendszerben.',
        'schedule_create' => 'Lehetővé teszi a felhasználó számára, hogy új ütemezést hozzon létre a kiszolgáló számára.',
        'schedule_read' => 'Lehetővé teszi a felhasználó számára, hogy megtekintse a szerver ütemezését.',
        'schedule_update' => 'Lehetővé teszi a felhasználó számára, hogy módosítsa a meglévő szerverütemezést.',
        'schedule_delete' => 'Lehetővé teszi a felhasználó számára a kiszolgáló ütemezésének törlését.',
    ],
];