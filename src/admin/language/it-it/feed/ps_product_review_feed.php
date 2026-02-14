<?php
// Heading
$_['heading_title']              = 'Playful Sparkle - Google Product Review Feed';
$_['heading_integrations']       = 'Integrazioni';
$_['heading_authentication']     = 'Autenticazione';
$_['heading_getting_started']    = 'Per Iniziare';
$_['heading_setup']              = 'Configurazione di Google Product Review Feed';
$_['heading_troubleshot']        = 'Risoluzione dei Problemi Comuni';
$_['heading_faq']                = 'FAQ';
$_['heading_contact']            = 'Contatta il Supporto';

// Text
$_['text_extension']             = 'Estensioni';
$_['text_success']               = 'Successo: Hai modificato il feed Google Product Review Feed!';
$_['text_edit']                  = 'Modifica Google Product Review Feed';
$_['text_getting_started']       = '<p><strong>Panoramica:</strong> L\'estensione Google Product Review Feed per OpenCart 4.x consente ai proprietari dei negozi di esportare e inviare le recensioni dei prodotti direttamente al loro Google Merchant Center. Questa integrazione permette a Google di visualizzare le recensioni generate dai tuoi clienti accanto ai tuoi prodotti in Google Shopping e in altri servizi Google. L\'estensione offre anche integrazioni opzionali di Opt-in e Badge, che ti consentono di raccogliere feedback post-acquisto tramite sondaggi Google e di mostrare il badge del tuo punteggio venditore sul tuo negozio online.</p><p><strong>Requisiti:</strong> OpenCart 4.x+, PHP 7.4+ o superiore, e accesso al tuo <a href="https://merchants.google.com?hl=en" target="_blank" rel="external noopener noreferrer">Google Merchant Center</a> con il programma Valutazioni dei prodotti abilitato.</p>';
$_['text_setup']                 = '<p><strong>Installazione e Configurazione:</strong></p><ul><li><strong>Passaggio 1:</strong> Carica l\'estensione utilizzando l\'Installer Estensioni di OpenCart.</li><li><strong>Passaggio 2:</strong> Naviga su <strong>Estensioni</strong> -&gt; <strong>Feed</strong>.</li><li><strong>Passaggio 3:</strong> Individua <strong>Playful Sparkle - Google Product Review Feed</strong> nell\'elenco e clicca su <strong>Modifica</strong>.</li><li><strong>Passaggio 4:</strong> Inserisci il tuo <strong>ID Google Merchant Center</strong>.</li><li><strong>Passaggio 5:</strong> Abilita l\'<strong>Integrazione Opt-in</strong> per consentire a Google di mostrare un sondaggio dopo il checkout.</li><li><strong>Passaggio 6:</strong> Abilita l\'<strong>Integrazione Badge</strong> per mostrare il badge Google Customer Reviews sul tuo sito.</li><li><strong>Passaggio 7:</strong> Opzionalmente, imposta un <strong>nome utente</strong> e una <strong>password</strong> per proteggere l\'accesso all\'URL del feed delle recensioni.</li><li><strong>Passaggio 8:</strong> Salva le impostazioni.</li></ul>';
$_['text_troubleshot']           = '<ul><li><strong>Feed non visualizzato:</strong> Assicurati che l\'estensione sia abilitata e configurata correttamente.</li><li><strong>Nessuna recensione appare nel feed:</strong> Il tuo negozio deve avere recensioni di prodotti approvate in OpenCart.</li><li><strong>Opt-in o Badge non visibile:</strong> Verifica che l\'integrazione pertinente sia abilitata e che il tuo ID Commerciante sia valido.</li><li><strong>Opt-in o Badge mostra errore 404:</strong> Assicurati che l\'estensione sia installata su un dominio pubblicamente accessibile tramite HTTPS. I servizi Google non possono accedere a domini locali, intranet o privati.</li><li><strong>Accesso al feed bloccato:</strong> Se hai abilitato la protezione del feed, assicurati di fornire il nome utente e la password corretti quando accedi all\'URL del feed.</li></ul>';
$_['text_faq']                   = '<details><summary>Perché il mio feed è vuoto?</summary>Assicurati che i tuoi prodotti abbiano recensioni dei clienti approvate in OpenCart. Solo le recensioni contrassegnate come "abilitate" sono incluse nel feed.</details><details><summary>Dove posso trovare il mio ID Commerciante?</summary>Puoi trovare il tuo ID Merchant Center nell\'angolo in alto a destra della dashboard del tuo account Google Merchant Center.</details><details><summary>Come posso testare l\'URL del feed?</summary>Visita l\'URL del feed nel tuo browser. Se la protezione del feed è abilitata, usa il nome utente e la password configurati quando richiesto. Dovresti vedere un file XML con le tue recensioni dei prodotti.</details><details><summary>Ho bisogno sia dell\'Integrazione Opt-in che del Badge?</summary>No, puoi abilitare una o entrambe in base alle tue esigenze. La funzione Opt-in abilita i sondaggi post-acquisto, mentre il Badge mostra il tuo punteggio venditore sul sito.</details>';
$_['text_contact']               = '<p>Per ulteriore assistenza, contatta il nostro team di supporto:</p><ul><li><strong>Contatto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentazione:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentazione Utente</a></li></ul>';

// Tab
$_['tab_general']                = 'Generale';
$_['tab_help_and_support']       = 'Aiuto e Supporto';

// Entry
$_['entry_status']               = 'Stato';
$_['entry_review_feed_url']      = 'URL Feed Recensioni';
$_['entry_login']                = 'Nome Utente';
$_['entry_password']             = 'Password';
$_['entry_active_store']         = 'Negozio Attivo';
$_['opt_in_integration']         = 'Integrazione Opt-in';
$_['badge_integration']          = 'Integrazione Badge';
$_['entry_merchant_id']          = 'ID Commerciante';

// Help
$_['help_copy']                  = 'Copia URL';
$_['help_open']                  = 'Apri URL';
$_['help_merchant_id']           = 'Inserisci il tuo ID Merchant Center a 9 cifre. Puoi trovare questo ID nell\'angolo in alto a destra della dashboard del tuo account Google Merchant Center.';
$_['help_opt_in_integration']    = 'Abilita per consentire a Google di presentare un sondaggio dopo il checkout, permettendo ai clienti di valutare la loro esperienza con il tuo negozio.';
$_['help_badge_integration']     = 'Abilita per mostrare il badge Google Customer Reviews sul tuo sito, visualizzando il tuo punteggio venditore medio e confermando la tua partecipazione al programma.';

// Error
$_['error_permission']           = 'Attenzione: Non hai il permesso di modificare il feed Google Product Review Feed!';
$_['error_store_id']             = 'Attenzione: Il modulo non contiene store_id!';
$_['error_merchant_id']          = 'L\'ID Merchant Center è richiesto.';
$_['error_merchant_id_invalid']  = 'ID Merchant Center non valido. Deve essere un numero da 7 a 10 cifre.';
