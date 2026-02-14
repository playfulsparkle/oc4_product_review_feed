<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Product Review Feed';
$_['heading_integrations']         = 'Integrácie';
$_['heading_authentication']       = 'Autentifikácia';
$_['heading_getting_started']      = 'Začíname';
$_['heading_setup']                = 'Nastavenie Google Product Review Feed';
$_['heading_troubleshot']          = 'Bežné riešenie problémov';
$_['heading_faq']                  = 'Časté otázky';
$_['heading_contact']              = 'Kontaktovať podporu';

// Text
$_['text_extension']               = 'Rozšírenia';
$_['text_success']                 = 'Úspech: Úspešne ste upravili feed Google Product Review Feed!';
$_['text_edit']                    = 'Upraviť Google Product Review Feed';
$_['text_getting_started']         = '<p><strong>Prehľad:</strong> Rozšírenie Google Product Review Feed pre OpenCart 4.x umožňuje majiteľom obchodov exportovať a odosielať recenzie produktov priamo do ich Google Merchant Center. Táto integrácia umožňuje spoločnosti Google zobrazovať recenzie generované vašimi zákazníkmi spolu s vašimi produktmi v Google Shopping a ďalších Google services. Rozšírenie tiež ponúka voliteľné Opt-in a Badge integrácie, ktoré vám umožňujú zbierať spätnú väzbu po nákupe prostredníctvom Google surveys a zobrazovať odznak s hodnotením predajcu na vašom obchode.</p><p><strong>Požiadavky:</strong> OpenCart 4.x+, PHP 7.4+ alebo vyšší a prístup k vášmu <a href="https://merchants.google.com?hl=en" target="_blank" rel="external noopener noreferrer">Google Merchant Center</a> so zapnutým Product Ratings program.</p>';
$_['text_setup']                   = '<p><strong>Inštalácia a nastavenie:</strong></p><ul><li><strong>Krok 1:</strong> Nahrajte rozšírenie pomocou inštalátora rozšírení OpenCart.</li><li><strong>Krok 2:</strong> Prejdite do sekcie <strong>Extensions</strong> -&gt; <strong>Feeds</strong>.</li><li><strong>Krok 3:</strong> V zozname nájdite <strong>Playful Sparkle - Google Product Review Feed</strong> a kliknite na <strong>Edit</strong>.</li><li><strong>Krok 4:</strong> Zadajte svoje <strong>Google Merchant Center ID</strong>.</li><li><strong>Krok 5:</strong> Povoľte <strong>Opt-in Integration</strong>, aby spoločnosť Google mohla po dokončení objednávky zobraziť dotazník.</li><li><strong>Krok 6:</strong> Povoľte <strong>Badge Integration</strong> na zobrazenie odznaku Google Customer Reviews na vašej stránke.</li><li><strong>Krok 7:</strong> Voliteľne nastavte <strong>username</strong> a <strong>password</strong> na ochranu prístupu k URL adrese feedu recenzií.</li><li><strong>Krok 8:</strong> Uložte svoje nastavenia.</li></ul>';
$_['text_troubleshot']             = '<ul><li><strong>Feed sa nezobrazuje:</strong> Uistite sa, že je rozšírenie povolené a správne nakonfigurované.</li><li><strong>Vo feede sa nezobrazujú žiadne recenzie:</strong> Váš obchod musí mať schválené recenzie produktov v OpenCart.</li><li><strong>Opt-in alebo Badge nie je viditeľný:</strong> Overte, či je príslušná integrácia povolená a vaše Merchant ID je platné.</li><li><strong>Opt-in alebo Badge zobrazuje chybu 404:</strong> Uistite sa, že rozšírenie je nainštalované na verejne prístupnej doméne cez HTTPS. Google services nemôžu pristupovať k lokálnym, intranetovým alebo súkromným doménam.</li><li><strong>Prístup k feedu je zablokovaný:</strong> Ak ste povolili ochranu feedu, uistite sa, že pri prístupe k URL adrese feedu zadávate správne užívateľské meno a heslo.</li></ul>';
$_['text_faq']                     = '<details><summary>Prečo je môj feed prázdny?</summary>Uistite sa, že vaše produkty majú v OpenCart schválené zákaznícke recenzie. Do feedu sú zahrnuté iba recenzie označené ako "enabled".</details><details><summary>Kde nájdem svoje Merchant ID?</summary>Vaše Merchant Center ID nájdete v pravom hornom rohu ovládacieho panela vášho Google Merchant Center účtu.</details><details><summary>Ako môžem otestovať URL adresu feedu?</summary>Navštívte URL adresu feedu vo vašom prehliadači. Ak je povolená ochrana feedu, po výzve použite nakonfigurované užívateľské meno a heslo. Mali by ste vidieť XML súbor s vašimi recenziami produktov.</details><details><summary>Potrebujem obe Opt-in a Badge Integration?</summary>Nie, môžete povoliť buď jednu alebo obe v závislosti od vašich potrieb. Funkcia Opt-in umožňuje dotazníky po nákupe, zatiaľ čo Badge zobrazuje vaše priemerné hodnotenie predajcu na stránke.</details>';
$_['text_contact']                 = '<p>Pre ďalšiu pomoc sa obráťte na náš tím podpory:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentácia:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Používateľská dokumentácia</a></li></ul>';

// Tab
$_['tab_general']                  = 'Všeobecné';
$_['tab_help_and_support']         = 'Pomoc a podpora';

// Entry
$_['entry_status']                 = 'Stav';
$_['entry_review_feed_url']        = 'URL adresa feedu recenzií';
$_['entry_login']                  = 'Užívateľské meno';
$_['entry_password']               = 'Heslo';
$_['entry_active_store']           = 'Aktívny obchod';
$_['opt_in_integration']           = 'Opt-in Integration';
$_['badge_integration']            = 'Badge Integration';
$_['entry_merchant_id']            = 'Merchant ID';

// Help
$_['help_copy']                    = 'Kopírovať URL';
$_['help_open']                    = 'Otvoriť URL';
$_['help_merchant_id']             = 'Zadajte svoje 9-miestne Merchant Center ID. Toto ID nájdete v pravom hornom rohu ovládacieho panela vášho Google Merchant Center účtu.';
$_['help_opt_in_integration']      = 'Povoliť, aby spoločnosť Google zobrazila po dokončení objednávky dotazník, ktorý zákazníkom umožní ohodnotiť ich skúsenosť s vaším obchodom.';
$_['help_badge_integration']       = 'Povoliť zobrazenie odznaku Google Customer Reviews na vašej stránke, zobrazujúceho vaše priemerné hodnotenie predajcu a potvrdzujúceho vašu účasť v programe.';

// Error
$_['error_permission']             = 'Varovanie: Nemáte povolenie na úpravu feedu Google Product Review Feed!';
$_['error_store_id']               = 'Varovanie: Formulár neobsahuje store_id!';
$_['error_merchant_id']            = 'Merchant Center ID je povinné.';
$_['error_merchant_id_invalid']    = 'Neplatné Merchant Center ID. Musí to byť 7 až 10-miestne číslo.';
