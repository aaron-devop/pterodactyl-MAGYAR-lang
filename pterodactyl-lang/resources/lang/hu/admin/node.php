<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'A megadott FQDN vagy IP-cím nem felel meg érvényes IP-címnek.',
        'fqdn_required_for_ssl' => 'Az SSL használatához ehhez a Node-hoz egy teljesen minősített tartománynévre van szükség, amely nyilvános IP-címet hoz létre.',
    ],
    'notices' => [
        'allocations_added' => 'A kiosztások sikeresen hozzáadva ehhez a Node-hoz.',
        'node_deleted' => 'Node sikeresen eltávolítva a Panelből.',
        'location_required' => 'Ahhoz, hogy Node-ot adhasson ehhez a panelhez, legalább egy helyet be kell állítania.',
        'node_created' => 'Az új Node sikeresen létrehozva. Automatikusan beállíthatja a démont ezen a gépen a \'Konfiguráció\' lapon. <strong>Mielőtt bármilyen szervert hozzáadhatna, először ki kell osztania legalább egy IP-címet és portot.</strong>',
        'node_updated' => 'A Node információi frissültek. Ha bármely démonbeállítás megváltozott, újra kell indítania, hogy a változtatások érvénybe lépjenek.',
        'unallocated_deleted' => 'Törölte az összes ki nem osztott portot a következőhöz: <code>:ip</code>.',
    ],
];
