<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Product Review Feed';
$_['heading_integrations']         = 'Integrációk';
$_['heading_authentication']       = 'Hitelesítés';
$_['heading_getting_started']      = 'Első lépések';
$_['heading_setup']                = 'Google Product Review Feed beállítása';
$_['heading_troubleshot']          = 'Gyakori hibaelhárítás';
$_['heading_faq']                  = 'GYIK';
$_['heading_contact']              = 'Kapcsolatfelvétel a támogatással';

// Text
$_['text_extension']               = 'Bővítmények';
$_['text_success']                 = 'Siker: Módosította a Google Product Review Feed adatfolyamot!';
$_['text_edit']                    = 'Google Product Review Feed szerkesztése';
$_['text_getting_started']         = '<p><strong>Áttekintés:</strong> A Google Product Review Feed bővítmény OpenCart 4.x rendszerekhez lehetővé teszi a bolt tulajdonosok számára, hogy termék véleményeket exportáljanak és közvetlenül elküldjenek Google Merchant Center fiókjukba. Ez az integráció lehetővé teszi a Google számára, hogy megjelenítse az ügyfelek által írt véleményeket a termékei mellett a Google Shopping-ban és más Google szolgáltatásokban. A bővítmény opcionális Opt-in és Badge integrációkat is kínál, amelyek lehetővé teszik a vásárlás utáni visszajelzések gyűjtését Google felméréseken keresztül, és a kereskedői értékelés jelvényének megjelenítését a webáruházban.</p><p><strong>Követelmények:</strong> OpenCart 4.x+ rendszer, PHP 7.4+ vagy újabb verzió, és hozzáférés a <a href="https://merchants.google.com?hl=en" target="_blank" rel="external noopener noreferrer">Google Merchant Center</a> fiókjához bekapcsolt Termékértékelés programmal.</p>';
$_['text_setup']                   = '<p><strong>Telepítés és beállítás:</strong></p><ul><li><strong>1. lépés:</strong> Töltse fel a bővítményt az OpenCart Bővítmény Telepítő segítségével.</li><li><strong>2. lépés:</strong> Lépjen a <strong>Bővítmények</strong> -&gt; <strong>Adatfolyamok</strong> menüpontra.</li><li><strong>3. lépés:</strong> Keresse meg a <strong>Playful Sparkle - Google Product Review Feed</strong> tételt a listában, és kattintson a <strong>Szerkesztés</strong> gombra.</li><li><strong>4. lépés:</strong> Adja meg a <strong>Google Merchant Center ID</strong>-t.</li><li><strong>5. lépés:</strong> Engedélyezze az <strong>Opt-in Integration</strong>-t, hogy a Google felmérést jeleníthessen meg a fizetés után.</li><li><strong>6. lépés:</strong> Engedélyezze a <strong>Badge Integration</strong>-t a Google Customer Reviews jelvény megjelenítéséhez az oldalán.</li><li><strong>7. lépés:</strong> Opcionálisan adjon meg egy <strong>felhasználónevet</strong> és <strong>jelszót</strong> a vélemény adatfolyam URL hozzáférésének védelméhez.</li><li><strong>8. lépés:</strong> Mentse a beállításokat.</li></ul>';
$_['text_troubleshot']             = '<ul><li><strong>Az adatfolyam nem jelenik meg:</strong> Győződjön meg róla, hogy a bővítmény engedélyezve van és megfelelően konfigurálva van.</li><li><strong>Nincsenek vélemények az adatfolyamban:</strong> Az áruházának rendelkeznie kell jóváhagyott termék véleményekkel az OpenCart rendszerben.</li><li><strong>Opt-in vagy Badge nem látható:</strong> Ellenőrizze, hogy a releváns integráció engedélyezve van, és az Ön Merchant ID érvényes.</li><li><strong>Az Opt-in vagy Badge 404 error-t mutat:</strong> Győződjön meg róla, hogy a bővítmény nyilvánosan hozzáférhető domain-en van telepítve HTTPS felett. A Google szolgáltatások nem férnek hozzá helyi, intranet vagy privát domain-ekhez.</li><li><strong>Adatfolyam hozzáférés blokkolva:</strong> Ha engedélyezte az adatfolyam védelmet, győződjön meg róla, hogy a helyes felhasználónevet és jelszót adja meg az adatfolyam URL elérésekor.</li></ul>';
$_['text_faq']                     = '<details><summary>Miért üres az adatfolyamom?</summary>Győződjön meg róla, hogy termékeihez vannak jóváhagyott ügyfél vélemények az OpenCart rendszerben. Csak az "engedélyezettként" megjelölt vélemények szerepelnek az adatfolyamban.</details><details><summary>Hol találom a Merchant ID-met?</summary>A Merchant Center ID-t a Google Merchant Center fiók irányítópultjának jobb felső sarkában találja meg.</details><details><summary>Hogyan tesztelhetem a feed URL-t?</summary>Látogassa meg a feed URL-t a böngészőjében. Ha az adatfolyam védelem engedélyezve van, használja a konfigurált felhasználónevet és jelszót, amikor a rendszer kéri. Egy XML fájlt kell látnia a termék véleményekkel.</details><details><summary>Szükségem van mindkét Opt-in és Badge Integration-re?</summary>Nem, az igényei alapján engedélyezheti az egyiket vagy mindkettőt. Az Opt-in funkció lehetővé teszi a vásárlás utáni felméréseket, míg a Badge megjeleníti a kereskedői értékelését az oldalon.</details>';
$_['text_contact']                 = '<p>További segítségért forduljon támogatási csapatunkhoz:</p><ul><li><strong>Kapcsolat:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentáció:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Felhasználói dokumentáció</a></li></ul>';

// Tab
$_['tab_general']                  = 'Általános';
$_['tab_help_and_support']         = 'Súgó &amp; Támogatás';

// Entry
$_['entry_status']                 = 'Állapot';
$_['entry_review_feed_url']        = 'Vélemény adatfolyam URL';
$_['entry_login']                  = 'Felhasználónév';
$_['entry_password']               = 'Jelszó';
$_['entry_active_store']           = 'Aktív áruház';
$_['opt_in_integration']           = 'Opt-in Integration';
$_['badge_integration']            = 'Badge Integration';
$_['entry_merchant_id']            = 'Merchant ID';

// Help
$_['help_copy']                    = 'URL másolása';
$_['help_open']                    = 'URL megnyitása';
$_['help_merchant_id']             = 'Adja meg 9-jegyű Merchant Center ID-jét. Ezt az azonosítót a Google Merchant Center fiók irányítópultjának jobb felső sarkában találja meg.';
$_['help_opt_in_integration']      = 'Engedélyezze, hogy a Google felmérést jeleníthessen meg a fizetés után, lehetővé téve az ügyfeleknek, hogy értékeljék a boltjával kapcsolatos tapasztalataikat.';
$_['help_badge_integration']       = 'Engedélyezze a Google Customer Reviews jelvény megjelenítését az oldalán, megjelenítve az átlagos kereskedői értékelését és megerősítve részvételét a programban.';

// Error
$_['error_permission']             = 'Figyelmeztetés: Nincs jogosultsága a Google Product Review Feed adatfolyam módosításához!';
$_['error_store_id']               = 'Figyelmeztetés: Az űrlap nem tartalmazza a store_id mezőt!';
$_['error_merchant_id']            = 'A Merchant Center ID megadása kötelező.';
$_['error_merchant_id_invalid']    = 'Érvénytelen Merchant Center ID. Egy 7-10 számjegyű számnak kell lennie.';
