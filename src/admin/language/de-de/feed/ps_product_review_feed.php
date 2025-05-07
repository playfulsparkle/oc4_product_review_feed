<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Product Review Feed';
$_['heading_integrations']         = 'Integrationen';
$_['heading_authentication']       = 'Authentifizierung';
$_['heading_fix']                  = 'Häufige Fehler beheben';
$_['heading_getting_started']      = 'Erste Schritte';
$_['heading_setup']                = 'Einrichtung des Google Product Review Feed';
$_['heading_troubleshot']          = 'Häufige Fehlerbehebung';
$_['heading_faq']                  = 'FAQ';
$_['heading_contact']              = 'Support kontaktieren';

// Text
$_['text_extension']               = 'Erweiterungen';
$_['text_success']                 = 'Erfolg: Sie haben den Google Product Review Feed erfolgreich geändert!';
$_['text_edit']                    = 'Google Product Review Feed bearbeiten';
$_['text_getting_started']         = '<p><strong>Übersicht:</strong> Die Google Product Review Feed Erweiterung für OpenCart 4.x ermöglicht es Shop-Betreibern, Produktbewertungen zu exportieren und direkt an ihr Google Merchant Center zu übermitteln. Diese Integration ermöglicht es Google, Ihre von Kunden erstellten Bewertungen neben Ihren Produkten in Google Shopping und anderen Google-Diensten anzuzeigen. Die Erweiterung bietet auch optionale Opt-in- und Badge-Integrationen, mit denen Sie Feedback nach dem Kauf über Google-Umfragen sammeln und Ihr Händlerbewertungs-Badge auf Ihrer Storefront anzeigen können.</p><p><strong>Anforderungen:</strong> OpenCart 4.x+, PHP 7.4+ oder höher, und Zugriff auf Ihr <a href="https://merchants.google.com?hl=en" target="_blank" rel="external noopener noreferrer">Google Merchant Center</a> mit aktiviertem Product Ratings-Programm.</p>';
$_['text_setup']                   = '<p><strong>Installation und Einrichtung:</strong></p><ul><li><strong>Schritt 1:</strong> Laden Sie die Erweiterung über den OpenCart Erweiterungs-Installer hoch.</li><li><strong>Schritt 2:</strong> Navigieren Sie zu <strong>Erweiterungen</strong> -&gt; <strong>Feeds</strong>.</li><li><strong>Schritt 3:</strong> Suchen Sie <strong>Playful Sparkle - Google Product Review Feed</strong> in der Liste und klicken Sie auf <strong>Bearbeiten</strong>.</li><li><strong>Schritt 4:</strong> Geben Sie Ihre <strong>Google Merchant Center ID</strong> ein.</li><li><strong>Schritt 5:</strong> Aktivieren Sie die <strong>Opt-in Integration</strong>, um Google zu erlauben, nach dem Checkout eine Umfrage anzuzeigen.</li><li><strong>Schritt 6:</strong> Aktivieren Sie die <strong>Badge Integration</strong>, um das Google Customer Reviews-Badge auf Ihrer Website anzuzeigen.</li><li><strong>Schritt 7:</strong> Optional können Sie einen <strong>Benutzernamen</strong> und ein <strong>Passwort</strong> festlegen, um den Zugriff auf die Bewertungsfeed-URL zu schützen.</li><li><strong>Schritt 8:</strong> Speichern Sie Ihre Einstellungen.</li></ul>';
$_['text_troubleshot']             = '<ul><li><strong>Feed wird nicht angezeigt:</strong> Stellen Sie sicher, dass die Erweiterung aktiviert und korrekt konfiguriert ist.</li><li><strong>Keine Bewertungen erscheinen im Feed:</strong> Ihr Shop muss genehmigte Produktbewertungen in OpenCart haben.</li><li><strong>Opt-in oder Badge nicht sichtbar:</strong> Überprüfen Sie, ob die relevante Integration aktiviert ist und Ihre Merchant ID gültig ist.</li><li><strong>Opt-in oder Badge zeigt 404 Fehler:</strong> Stellen Sie sicher, dass die Erweiterung auf einer öffentlich zugänglichen Domain über HTTPS installiert ist. Google-Dienste können nicht auf lokale, Intranet- oder private Domains zugreifen.</li><li><strong>Feed-Zugriff blockiert:</strong> Wenn Sie den Feed-Schutz aktiviert haben, stellen Sie sicher, dass Sie den korrekten Benutzernamen und das Passwort beim Zugriff auf die Feed-URL angeben.</li></ul>';
$_['text_faq']                     = '<details><summary>Warum ist mein Feed leer?</summary>Stellen Sie sicher, dass Ihre Produkte genehmigte Kundenbewertungen in OpenCart haben. Nur Bewertungen, die als "aktiviert" markiert sind, sind im Feed enthalten.</details><details><summary>Wo finde ich meine Merchant ID?</summary>Sie finden Ihre Merchant Center ID in der oberen rechten Ecke Ihres Google Merchant Center Konto-Dashboards.</details><details><summary>Wie teste ich die Feed-URL?</summary>Besuchen Sie die Feed-URL in Ihrem Browser. Wenn der Feed-Schutz aktiviert ist, verwenden Sie den konfigurierten Benutzernamen und das Passwort, wenn Sie dazu aufgefordert werden. Sie sollten eine XML-Datei mit Ihren Produktbewertungen sehen.</details><details><summary>Benötige ich sowohl die Opt-in- als auch die Badge-Integration?</summary>Nein, Sie können je nach Bedarf entweder beide oder eine der beiden aktivieren. Die Opt-in-Funktion ermöglicht Umfragen nach dem Kauf, während das Badge Ihre Händlerbewertung auf der Website anzeigt.</details>';
$_['text_contact']                 = '<p>Für weitere Unterstützung wenden Sie sich bitte an unser Support-Team:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Benutzerdokumentation</a></li></ul>';

// Tab
$_['tab_general']                  = 'Allgemein';
$_['tab_help_and_support']         = 'Hilfe &amp; Support';

// Entry
$_['entry_status']                 = 'Status';
$_['entry_review_feed_url']        = 'Bewertungsfeed-URL';
$_['entry_login']                  = 'Benutzername';
$_['entry_password']               = 'Passwort';
$_['entry_active_store']           = 'Aktiver Shop';
$_['opt_in_integration']           = 'Opt-in Integration';
$_['badge_integration']            = 'Badge Integration';
$_['entry_merchant_id']            = 'Merchant ID';

// Button
$_['button_fix_event_handler']     = 'Event-Handler beheben';

// Help
$_['help_copy']                    = 'URL kopieren';
$_['help_open']                    = 'URL öffnen';
$_['help_merchant_id']             = 'Geben Sie Ihre 9-stellige Merchant Center ID ein. Sie finden diese ID in der oberen rechten Ecke Ihres Google Merchant Center Konto-Dashboards.';
$_['help_opt_in_integration']      = 'Aktivieren, um Google zu erlauben, nach dem Checkout eine Umfrage anzuzeigen, die es Kunden ermöglicht, ihre Erfahrung mit Ihrem Shop zu bewerten.';
$_['help_badge_integration']       = 'Aktivieren, um das Google Customer Reviews-Badge auf Ihrer Website anzuzeigen, Anzeige Ihrer durchschnittlichen Händlerbewertung und Bestätigung Ihrer Teilnahme am Programm.';

// Error
$_['error_permission']             = 'Warnung: Sie haben keine Berechtigung, den Google Product Review Feed zu ändern!';
$_['error_store_id']               = 'Warnung: Das Formular enthält keine store_id!';
$_['error_merchant_id']            = 'Merchant Center ID ist erforderlich.';
$_['error_merchant_id_invalid']    = 'Ungültige Merchant Center ID. Es muss eine 7- bis 10-stellige Nummer sein.';
