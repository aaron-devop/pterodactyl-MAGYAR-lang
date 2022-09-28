<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Megpróbálja törölni a kiszolgáló alapértelmezett kiosztását, de nincs használható tartalék kiosztás.',
        'marked_as_failed' => 'Ezt a szervert úgy jelölték meg, mint egy "korábbi telepítés meghiúsult". Az aktuális állapot ebben az állapotban nem váltható át.',
        'bad_variable' => 'Érvényesítési hiba történt a :name változóval.',
        'daemon_exception' => 'Kivétel történt a démonnal való kommunikáció során, ami HTTP/:code válaszkódot eredményezett. Ez a kivétel naplózásra került. (kérelem azonosítója: :request_id)',
        'default_allocation_not_found' => 'A kért alapértelmezett kiosztás nem található ennek a szervernek a kiosztásában.',
    ],
    'alerts' => [
        'startup_changed' => 'A szerver indítási konfigurációja frissítve lett. Ha a szerver Nest vagy Egg -jét megváltoztatták, akkor most újratelepítés történik.',
        'server_deleted' => 'A szerver sikeresen törölve a rendszerből.',
        'server_created' => 'A szerver sikeresen létrejött a Panelben. Kérjük, adjon a démonnak néhány percet a szerver teljes telepítéséhez.',
        'build_updated' => 'Frissültek a szerver build részletei. Előfordulhat, hogy egyes változtatások újraindítást igényelnek, hogy életbe lépjenek.',
        'suspension_toggled' => 'A szerver felfüggesztési állapota :status értékre módosult.',
        'rebuild_on_boot' => 'Ezt a szervert Docker-tároló újraépítést igénylőként jelölték meg. Ez a szerver következő indításakor fog megtörténni.',
        'install_toggled' => 'A szerver telepítési állapota át van kapcsolva.',
        'server_reinstalled' => 'Ez a szerver sorba került a most kezdődő újratelepítéshez.',
        'details_updated' => 'A szerver adatai sikeresen frissítve.',
        'docker_image_updated' => 'Sikeresen módosította a kiszolgálóhoz használandó alapértelmezett Docker-képet. A módosítás alkalmazásához újraindítás szükséges.',
        'node_required' => 'Legalább egy Node-nak konfigurálva kell lennie, mielőtt kiszolgálót adhat hozzá ehhez a panelhez.',
        'transfer_nodes_required' => 'A kiszolgálók átviteléhez legalább két Node-ot be kell állítani.',
        'transfer_started' => 'A szerver átvitel elindult.',
        'transfer_not_viable' => 'A kiválasztott Node nem rendelkezik a szükséges lemezterülettel vagy memóriával a kiszolgáló fogadásához.',
    ],
];
