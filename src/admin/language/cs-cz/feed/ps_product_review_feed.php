<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Product Review Feed';
$_['heading_integrations']         = 'Integrace';
$_['heading_authentication']       = 'Autentizace';
$_['heading_getting_started']      = 'Začínáme';
$_['heading_setup']                = 'Nastavení Google Product Review Feed';
$_['heading_troubleshot']          = 'Časté řešení problémů';
$_['heading_faq']                  = 'Často kladené dotazy';
$_['heading_contact']              = 'Kontaktujte podporu';

// Text
$_['text_extension']               = 'Rozšíření';
$_['text_success']                 = 'Úspěch: Upravili jste Google Product Review Feed!';
$_['text_edit']                    = 'Upravit Google Product Review Feed';
$_['text_getting_started']         = '<p><strong>Přehled:</strong> Rozšíření Google Product Review Feed pro OpenCart 4.x umožňuje majitelům obchodů exportovat a odesílat recenze produktů přímo do jejich Google Merchant Center. Tato integrace umožňuje Google zobrazovat recenze generované vašimi zákazníky vedle vašich produktů v Google Shopping a dalších službách Google. Rozšíření také nabízí volitelné integrace Opt-in a Badge, které vám umožňují sbírat zpětnou vazbu po nákupu prostřednictvím průzkumů Google a zobrazovat odznak hodnocení prodejce ve vašem obchodě.</p><p><strong>Požadavky:</strong> OpenCart 4.x+, PHP 7.4+ nebo vyšší a přístup k vašemu <a href="https://merchants.google.com?hl=en" target="_blank" rel="external noopener noreferrer">Google Merchant Center</a> s povoleným programem hodnocení produktů.</p>';
$_['text_setup']                   = '<p><strong>Instalace a nastavení:</strong></p><ul><li><strong>Krok 1:</strong> Nahrajte rozšíření pomocí OpenCart Extension Installer.</li><li><strong>Krok 2:</strong> Přejděte na <strong>Rozšíření</strong> -&gt; <strong>Feedy</strong>.</li><li><strong>Krok 3:</strong> V seznamu najděte <strong>Playful Sparkle - Google Product Review Feed</strong> a klikněte na <strong>Upravit</strong>.</li><li><strong>Krok 4:</strong> Zadejte své <strong>ID obchodníka Google Merchant Center</strong>.</li><li><strong>Krok 5:</strong> Povolte <strong>Integraci Opt-in</strong>, abyste umožnili Google zobrazit průzkum po dokončení objednávky.</li><li><strong>Krok 6:</strong> Povolte <strong>Integraci Badge</strong> pro zobrazení odznaku Google Customer Reviews na vašem webu.</li><li><strong>Krok 7:</strong> Volitelně nastavte <strong>uživatelské jméno</strong> a <strong>heslo</strong> pro ochranu přístupu k URL feedu recenzí.</li><li><strong>Krok 8:</strong> Uložte nastavení.</li></ul>';
$_['text_troubleshot']             = '<ul><li><strong>Feed se nezobrazuje:</strong> Ujistěte se, že rozšíření je povoleno a správně nakonfigurováno.</li><li><strong>Ve feedu se nezobrazují žádné recenze:</strong> Váš obchod musí mít v OpenCart schválené recenze produktů.</li><li><strong>Opt-in nebo Badge nejsou viditelné:</strong> Ověřte, zda je příslušná integrace povolena a vaše ID obchodníka je platné.</li><li><strong>Opt-in nebo Badge zobrazuje chybu 404:</strong> Ujistěte se, že rozšíření je nainstalováno na veřejně přístupné doméně s použitím HTTPS. Služby Google nemají přístup k lokálním, intranetovým nebo privátním doménám.</li><li><strong>Přístup k feedu je blokován:</strong> Pokud jste povolili ochranu feedu, ujistěte se, že při přístupu k URL feedu zadáváte správné uživatelské jméno a heslo.</li></ul>';
$_['text_faq']                     = '<details><summary>Proč je můj feed prázdný?</summary>Ujistěte se, že vaše produkty mají v OpenCart schválené zákaznické recenze. Ve feedu jsou zahrnuty pouze recenze označené jako "povoleno".</details><details><summary>Kde najdu své ID obchodníka?</summary>ID vašeho obchodního centra najdete v pravém horním rohu řídicího panelu vašeho účtu Google Merchant Center.</details><details><summary>Jak otestovat URL feedu?</summary>Navštivte URL feedu ve vašem prohlížeči. Pokud je povolena ochrana feedu, na výzvu použijte nakonfigurované uživatelské jméno a heslo. Měli byste vidět soubor XML s vašimi recenzemi produktů.</details><details><summary>Potřebuji obě integrace Opt-in a Badge?</summary>Ne, můžete povolit buď jednu, nebo obě, v závislosti na vašich potřebách. Funkce Opt-in umožňuje průzkumy po nákupu, zatímco Badge zobrazuje hodnocení vašeho prodejce na webu.</details>';
$_['text_contact']                 = '<p>Pro další pomoc se prosím obraťte na náš tým podpory:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentace:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Uživatelská dokumentace</a></li></ul>';

// Tab
$_['tab_general']                  = 'Obecné';
$_['tab_help_and_support']         = 'Nápověda a podpora';

// Entry
$_['entry_status']                 = 'Stav';
$_['entry_review_feed_url']        = 'URL feedu recenzí';
$_['entry_login']                  = 'Uživatelské jméno';
$_['entry_password']               = 'Heslo';
$_['entry_active_store']           = 'Aktivní obchod';
$_['opt_in_integration']           = 'Integrace Opt-in';
$_['badge_integration']            = 'Integrace Badge';
$_['entry_merchant_id']            = 'ID obchodníka';

// Help
$_['help_copy']                    = 'Kopírovat URL';
$_['help_open']                    = 'Otevřít URL';
$_['help_merchant_id']             = 'Zadejte své 9místné ID obchodního centra. Toto ID najdete v pravém horním rohu řídicího panelu vašeho účtu Google Merchant Center.';
$_['help_opt_in_integration']      = 'Povolte, aby Google mohl po dokončení objednávky zobrazit průzkum, který zákazníkům umožní ohodnotit jejich zkušenost s vaším obchodem.';
$_['help_badge_integration']       = 'Povolte pro zobrazení odznaku Google Customer Reviews na vašem webu, který zobrazuje vaše průměrné hodnocení prodejce a potvrzuje vaši účast v programu.';

// Error
$_['error_permission']             = 'Varování: Nemáte oprávnění upravovat Google Product Review Feed!';
$_['error_store_id']               = 'Varování: Formulář neobsahuje store_id!';
$_['error_merchant_id']            = 'Je vyžadováno ID obchodníka.';
$_['error_merchant_id_invalid']    = 'Neplatné ID obchodníka. Musí to být číslo o délce 7 až 10 číslic.';
