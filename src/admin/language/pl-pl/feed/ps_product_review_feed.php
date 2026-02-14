<?php
// Heading
$_['heading_title']              = 'Playful Sparkle - Google Product Review Feed';
$_['heading_integrations']       = 'Integracje';
$_['heading_authentication']     = 'Uwierzytelnianie';
$_['heading_getting_started']    = 'Pierwsze kroki';
$_['heading_setup']              = 'Konfiguracja Google Product Review Feed';
$_['heading_troubleshot']        = 'Częste problemy i rozwiązania';
$_['heading_faq']                = 'FAQ';
$_['heading_contact']            = 'Kontakt z pomocą techniczną';

// Text
$_['text_extension']             = 'Rozszerzenia';
$_['text_success']               = 'Sukces: Zmodyfikowano kanał Google Product Review Feed!';
$_['text_edit']                  = 'Edytuj Google Product Review Feed';
$_['text_getting_started']       = '<p><strong>Przegląd:</strong> Rozszerzenie Google Product Review Feed dla OpenCart 4.x umożliwia właścicielom sklepów eksportowanie i przesyłanie opinii o produktach bezpośrednio do Google Merchant Center. Ta integracja pozwala Google wyświetlać opinie generowane przez klientów obok Twoich produktów w Google Shopping i innych usługach Google. Rozszerzenie oferuje również opcjonalne integracje Opt-in i Odznaki, które pozwalają zbierać opinie po zakupie za pomocą ankiet Google i wyświetlać odznakę oceny sprzedawcy w witrynie sklepu.</p><p><strong>Wymagania:</strong> OpenCart 4.x+, PHP 7.4+ lub nowszy, oraz dostęp do Twojego <a href="https://merchants.google.com?hl=en" target="_blank" rel="external noopener noreferrer">Google Merchant Center</a> z włączonym programem Ocen produktów.</p>';
$_['text_setup']                 = '<p><strong>Instalacja i konfiguracja:</strong></p><ul><li><strong>Krok 1:</strong> Prześlij rozszerzenie za pomocą Instalatora Rozszerzeń OpenCart.</li><li><strong>Krok 2:</strong> Przejdź do <strong>Rozszerzenia</strong> -&gt; <strong>Kanały danych</strong>.</li><li><strong>Krok 3:</strong> Znajdź <strong>Playful Sparkle - Google Product Review Feed</strong> na liście i kliknij <strong>Edytuj</strong>.</li><li><strong>Krok 4:</strong> Wprowadź swój <strong>identyfikator Google Merchant Center</strong>.</li><li><strong>Krok 5:</strong> Włącz <strong>Integrację Opt-in</strong>, aby umożliwić Google wyświetlanie ankiety po zakończeniu realizacji zamówienia.</li><li><strong>Krok 6:</strong> Włącz <strong>Integrację Odznaki</strong>, aby wyświetlać odznakę Ocen klientów Google w swojej witrynie.</li><li><strong>Krok 7:</strong> Opcjonalnie ustaw <strong>nazwę użytkownika</strong> i <strong>hasło</strong>, aby chronić dostęp do adresu URL kanału opinii.</li><li><strong>Krok 8:</strong> Zapisz ustawienia.</li></ul>';
$_['text_troubleshot']           = '<ul><li><strong>Kanał nie wyświetla się:</strong> Upewnij się, że rozszerzenie jest włączone i poprawnie skonfigurowane.</li><li><strong>W kanale nie pojawiają się opinie:</strong> Twój sklep musi mieć zatwierdzone opinie o produktach w OpenCart.</li><li><strong>Opt-in lub Odznaka nie są widoczne:</strong> Sprawdź, czy odpowiednia integracja jest włączona i Twój identyfikator Merchant ID jest prawidłowy.</li><li><strong>Opt-in lub Odznaka pokazuje błąd 404:</strong> Upewnij się, że rozszerzenie jest zainstalowane na publicznie dostępnej domenie z protokołem HTTPS. Usługi Google nie mają dostępu do domen lokalnych, w intranecie lub prywatnych.</li><li><strong>Dostęp do kanału zablokowany:</strong> Jeśli włączono ochronę kanału, upewnij się, że podczas uzyskiwania dostępu do adresu URL kanału podano prawidłową nazwę użytkownika i hasło.</li></ul>';
$_['text_faq']                   = '<details><summary>Dlaczego mój kanał jest pusty?</summary>Upewnij się, że Twoje produkty mają zatwierdzone opinie klientów w OpenCart. W kanale uwzględniane są tylko opinie oznaczone jako "włączone".</details><details><summary>Gdzie mogę znaleźć mój identyfikator Merchant ID?</summary>Swój identyfikator Merchant Center znajdziesz w prawym górnym rogu panelu konta Google Merchant Center.</details><details><summary>Jak przetestować adres URL kanału?</summary>Odwiedź adres URL kanału w przeglądarce. Jeśli włączona jest ochrona kanału, użyj skonfigurowanej nazwy użytkownika i hasła, gdy zostaniesz o nie poproszony. Powinieneś zobaczyć plik XML z opiniami o Twoich produktach.</details><details><summary>Czy potrzebuję obu integracji: Opt-in i Odznaki?</summary>Nie, możesz włączyć jedną lub obie, w zależności od potrzeb. Funkcja Opt-in umożliwia ankiety po zakupie, podczas gdy Odznaka wyświetla Twoją średnią ocenę sprzedawcy w witrynie.</details>';
$_['text_contact']               = '<p>Aby uzyskać dalszą pomoc, skontaktuj się z naszym zespołem wsparcia:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentacja:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentacja użytkownika</a></li></ul>';

// Tab
$_['tab_general']                = 'Ogólne';
$_['tab_help_and_support']       = 'Pomoc i wsparcie';

// Entry
$_['entry_status']               = 'Status';
$_['entry_review_feed_url']      = 'Adres URL kanału opinii';
$_['entry_login']                = 'Nazwa użytkownika';
$_['entry_password']             = 'Hasło';
$_['entry_active_store']         = 'Aktywny sklep';
$_['opt_in_integration']         = 'Integracja Opt-in';
$_['badge_integration']          = 'Integracja Odznaki';
$_['entry_merchant_id']          = 'Identyfikator Merchant ID';

// Help
$_['help_copy']                  = 'Kopiuj URL';
$_['help_open']                  = 'Otwórz URL';
$_['help_merchant_id']           = 'Wprowadź swój 9-cyfrowy identyfikator Merchant Center. Ten identyfikator znajdziesz w prawym górnym rogu panelu konta Google Merchant Center.';
$_['help_opt_in_integration']    = 'Włącz, aby umożliwić Google wyświetlenie ankiety po zakończeniu realizacji zamówienia, pozwalając klientom ocenić ich doświadczenia z Twoim sklepem.';
$_['help_badge_integration']     = 'Włącz, aby wyświetlić odznakę Ocen klientów Google w Twojej witrynie, pokazując średnią ocenę sprzedawcy i potwierdzając Twój udział w programie.';

// Error
$_['error_permission']           = 'Ostrzeżenie: Nie masz uprawnień do modyfikowania kanału Google Product Review Feed!';
$_['error_store_id']             = 'Ostrzeżenie: Formularz nie zawiera identyfikatora sklepu!';
$_['error_merchant_id']          = 'Identyfikator Merchant Center jest wymagany.';
$_['error_merchant_id_invalid']  = 'Nieprawidłowy identyfikator Merchant Center. Musi to być liczba od 7 do 10 cyfr.';
