<?php

return [
    'auth' => [
        'fail' => 'Sikertelen bejelentkezés',
        'success' => 'Bejelentkezve',
        'password-reset' => 'Jelszó visszaállítása',
        'reset-password' => 'Jelszó visszaállítást kért',
        'checkpoint' => 'Kéttényezős hitelesítés kért',
        'recovery-token' => 'Kéttényezős helyreállítási tokent használt',
        'token' => 'Kétfaktoros kihívás megoldva',
        'ip-blocked' => 'Letiltott kérés a listán nem szereplő IP-címről a következőhöz: :identifier',
        'sftp' => [
            'fail' => 'Sikertelen SFTP bejelentkezés',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Az e-mail cím :old -ról :new címre módosult',
            'password-changed' => 'A jelszó megváltozott',
        ],
        'api-key' => [
            'create' => 'Új API-kulcs létrehozva :identifier',
            'delete' => 'API-kulcs törölve :identifier',
        ],
        'ssh-key' => [
            'create' => 'SSH kulcs hozzáadva :fingerprint to account',
            'delete' => 'SSH kulcs eltávolítva :fingerprint from account',
        ],
        'two-factor' => [
            'create' => 'Kéttényezős hitelesítés engedélyezve',
            'delete' => 'Kéttényezős hitelesítés letiltva',
        ],
    ],
    'server' => [
        'reinstall' => 'Újratelepített szerver',
        'console' => [
            'command' => 'A ":command" végrehajtása a szerveren',
        ],
        'power' => [
            'start' => 'Szerver elindítva',
            'stop' => 'Szerver leállítva',
            'restart' => 'Szerver újraindítva',
            'kill' => 'Leállította a szerver folyamatot(Kill process)',
        ],
        'backup' => [
            'download' => 'Letöltötte a :name biztonsági másolatot',
            'delete' => 'Törölte a :name biztonsági másolatot',
            'restore' => 'Visszaállította a :name biztonsági másolatot (törölt fájlok: :truncate)',
            'restore-complete' => 'A :name biztonsági másolat visszaállítása befejeződött',
            'restore-failed' => 'Nem sikerült befejezni a :name biztonsági másolat visszaállítását',
            'start' => 'Új biztonsági mentés indítása :name',
            'complete' => 'A :name biztonsági mentést késznek jelölte',
            'fail' => 'A :name biztonsági mentést sikertelenként jelölte meg',
            'lock' => 'Zárolta a :name biztonsági másolatot',
            'unlock' => 'Feloldotta a :name biztonsági mentést',
        ],
        'database' => [
            'create' => 'Új adatbázis létrehozva :name',
            'rotate-password' => 'Jelszó elforgatva az adatbázishoz :name',
            'delete' => 'Adatbázis törölve :name',
        ],
        'file' => [
            'compress_one' => 'Tömörítve :directory:file',
            'compress_other' => 'Tömörítve :count fájl(ok) a :directory mappába',
            'read' => 'Megtekintette a tartalmát :file',
            'copy' => 'Létrehozta a :file másolatát',
            'create-directory' => 'Létrehozva a könyvtár :directory:name',
            'decompress' => 'Kitömörített :files a :directory könyvtárban',
            'delete_one' => 'Törölve :directory:files.0',
            'delete_other' => 'Törölve :count fájl a :directory könyvtárból',
            'download' => 'Letöltve :file',
            'pull' => 'Letöltött egy távoli fájlt az :url címről a :directory',
            'rename_one' => 'Átnevezte a :directory:files.0. -ról :directory:files.0. -ra',
            'rename_other' => 'Átnevezett :count fájlok a :directory -ban',
            'write' => 'Új tartalmat írt a :file fájlba',
            'upload' => 'Elkezdődött a fájlfeltöltés',
            'uploaded' => 'Feltöltve :directory:file',
        ],
        'sftp' => [
            'denied' => 'Az SFTP hozzáférés engedélyek miatt blokkolva',
            'create_one' => 'Létrehozva :files.0',
            'create_other' => 'Létrehozva :count új fájl',
            'write_one' => 'Módosította a tartalmat :files.0',
            'write_other' => 'Módosította a tartalmat :count fájlnak',
            'delete_one' => 'Törölve :files.0',
            'delete_other' => 'Törölve :count fájl',
            'create-directory_one' => 'Létrehozta a :files.0 könyvtárat',
            'create-directory_other' => 'Létrehozva :count könyvtárak',
            'rename_one' => 'A :files.0. -ról átnevezve :files.0. -ra',
            'rename_other' => 'Átnevezett vagy áthelyezett :count fájlok',
        ],
        'allocation' => [
            'create' => 'Hozzáadva :allocation a szerverhez',
            'notes' => 'Frissítette a :allocation megjegyzéseit ":old"-ról ":new"-ra',
            'primary' => 'Állítsa be az :allocationt elsődleges szerverkiosztásként',
            'delete' => 'Törölte az :allocation allokációt',
        ],
        'schedule' => [
            'create' => 'Létrehozta a :name ütemezést',
            'update' => 'Frissítettük a :name ütemezését',
            'execute' => 'Manuálisan végrehajtotta a :name ütemezést',
            'delete' => 'Törölte a :name ütemezést',
        ],
        'task' => [
            'create' => 'Létrehozott egy új ":action" feladatot a :name ütemezéshez',
            'update' => 'Frissítette az ":action" feladatot a :name ütemezéshez',
            'delete' => 'Törölt egy feladatot a :name ütemezéshez',
        ],
        'settings' => [
            'rename' => 'Átnevezte a szervert :old -ról :new -ra',
        ],
        'startup' => [
            'edit' => 'A :variable változó ":old"-ról ":new"-ra változott',
            'image' => 'Frissítettük a kiszolgáló Docker Image-jét :old -ról :new -ra',
        ],
        'subuser' => [
            'create' => 'Hozzáadva :email alfelhasználóként',
            'update' => 'Frissítettük a :email alfelhasználói engedélyeit',
            'delete' => 'Eltávolítva az :email alfelhasználóként',
        ],
    ],
];
