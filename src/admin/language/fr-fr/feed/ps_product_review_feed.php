<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Product Review Feed';
$_['heading_integrations']         = 'Intégrations';
$_['heading_authentication']       = 'Authentification';
$_['heading_fix']                  = 'Corriger les bugs courants';
$_['heading_getting_started']      = 'Démarrer';
$_['heading_setup']                = 'Configuration de Google Product Review Feed';
$_['heading_troubleshot']          = 'Dépannage Courant';
$_['heading_faq']                  = 'FAQ';
$_['heading_contact']              = 'Contacter le Support';

// Text
$_['text_extension']               = 'Extensions';
$_['text_success']                 = 'Succès: Vous avez modifié le flux Google Product Review Feed !';
$_['text_edit']                    = 'Modifier Google Product Review Feed';
$_['text_getting_started']         = '<p><strong>Aperçu:</strong> L\'extension Google Product Review Feed pour OpenCart 4.x permet aux propriétaires de magasins d\'exporter et de soumettre les avis sur les produits directement à leur Google Merchant Center. Cette intégration permet à Google d\'afficher les avis générés par vos clients à côté de vos produits dans Google Shopping et d\'autres services Google. L\'extension propose également des intégrations optionnelles d\'Opt-in et de Badge, qui vous permettent de recueillir les commentaires après l\'achat via des Google surveys et d\'afficher le badge de votre note vendeur sur votre boutique en ligne.</p><p><strong>Prérequis:</strong> OpenCart 4.x+, PHP 7.4+ ou supérieur, et accès à votre <a href="https://merchants.google.com?hl=en" target="_blank" rel="external noopener noreferrer">Google Merchant Center</a> avec le programme Product Ratings activé.</p>';
$_['text_setup']                   = '<p><strong>Installation et Configuration:</strong></p><ul><li><strong>Étape 1:</strong> Téléchargez l\'extension en utilisant l\'installateur d\'extensions d\'OpenCart.</li><li><strong>Étape 2:</strong> Naviguez vers <strong>Extensions</strong> -> <strong>Flux</strong>.</li><li><strong>Étape 3:</strong> Localisez <strong>Playful Sparkle - Google Product Review Feed</strong> dans la liste et cliquez sur <strong>Modifier</strong>.</li><li><strong>Étape 4:</strong> Saisissez votre <strong>ID Google Merchant Center</strong>.</li><li><strong>Étape 5:</strong> Activez l\'<strong>Intégration Opt-in</strong> pour permettre à Google d\'afficher une enquête après le paiement.</li><li><strong>Étape 6:</strong> Activez l\'<strong>Intégration Badge</strong> pour afficher le badge Google Customer Reviews sur votre site.</li><li><strong>Étape 7:</strong> Optionnellement, définissez un <strong>nom d\'utilisateur</strong> et un <strong>mot de passe</strong> pour protéger l\'accès à l\'URL du flux d\'avis.</li><li><strong>Étape 8:</strong> Enregistrez vos paramètres.</li></ul>';
$_['text_troubleshot']             = '<ul><li><strong>Flux non affiché:</strong> Assurez-vous que l\'extension est activée et correctement configurée.</li><li><strong>Aucun avis n\'apparaît dans le flux:</strong> Votre magasin doit avoir des avis produits approuvés dans OpenCart.</li><li><strong>Opt-in ou Badge non visible:</strong> Vérifiez que l\'intégration concernée est activée et que votre ID Merchant est valide.</li><li><strong>Opt-in ou Badge affiche une erreur 404:</strong> Assurez-vous que l\'extension est installée sur un domaine accessible publiquement en HTTPS. Les services Google ne peuvent pas accéder aux domaines locaux, intranet ou privés.</li><li><strong>Accès au flux bloqué:</strong> Si vous avez activé la protection du flux, assurez-vous de fournir le nom d\'utilisateur et le mot de passe corrects lors de l\'accès à l\'URL du flux.</li></ul>';
$_['text_faq']                     = '<details><summary>Pourquoi mon flux est-il vide ?</summary>Assurez-vous que vos produits ont des avis clients approuvés dans OpenCart. Seuls les avis marqués comme "enabled" sont inclus dans le flux.</details><details><summary>Où puis-je trouver mon ID Merchant ?</summary>Vous pouvez trouver votre ID Google Merchant Center dans le coin supérieur droit du tableau de bord de votre compte Google Merchant Center.</details><details><summary>Comment tester l\'URL du flux ?</summary>Visitez l\'URL du flux dans votre navigateur. Si la protection du flux est activée, utilisez le nom d\'utilisateur et le mot de passe configurés lorsque vous y êtes invité. Vous devriez voir un fichier XML contenant vos avis produits.</details><details><summary>Ai-je besoin à la fois de l\'intégration Opt-in et de l\'intégration Badge ?</summary>Non, vous pouvez activer l\'une ou l\'autre, ou les deux, selon vos besoins. La fonctionnalité Opt-in permet les enquêtes après achat, tandis que le Badge affiche votre note vendeur sur le site.</details>';
$_['text_contact']                 = '<p>Pour toute assistance supplémentaire, veuillez contacter notre équipe support:</p><ul><li><strong>Contact:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentation Utilisateur</a></li></ul>';

// Tab
$_['tab_general']                  = 'Général';
$_['tab_help_and_support']         = 'Aide &amp; Support';

// Entry
$_['entry_status']                 = 'Statut';
$_['entry_review_feed_url']        = 'URL du Flux d\'Avis';
$_['entry_login']                  = 'Nom d\'utilisateur';
$_['entry_password']               = 'Mot de passe';
$_['entry_active_store']           = 'Magasin Actif';
$_['opt_in_integration']           = 'Intégration Opt-in';
$_['badge_integration']            = 'Intégration Badge';
$_['entry_merchant_id']            = 'ID Merchant';

// Button
$_['button_fix_event_handler']     = 'Corriger le Gestionnaire d\'Événements';

// Help
$_['help_copy']                    = 'Copier l\'URL';
$_['help_open']                    = 'Ouvrir l\'URL';
$_['help_merchant_id']             = 'Saisissez votre ID Google Merchant Center à 9 chiffres. Vous pouvez trouver cet ID dans le coin supérieur droit du tableau de bord de votre compte Google Merchant Center.';
$_['help_opt_in_integration']      = 'Activez pour permettre à Google de présenter une enquête après le paiement, permettant aux clients d\'évaluer leur expérience avec votre magasin.';
$_['help_badge_integration']       = 'Activez pour afficher le badge Google Customer Reviews sur votre site, affichant votre note vendeur moyenne et confirmant votre participation au programme.';

// Error
$_['error_permission']             = 'Attention: Vous n\'avez pas la permission de modifier le flux Google Product Review Feed !';
$_['error_store_id']               = 'Attention: Le formulaire ne contient pas de store_id !';
$_['error_merchant_id']            = 'L\'ID Merchant Center est requis.';
$_['error_merchant_id_invalid']    = 'ID Merchant Center invalide. Il doit s\'agir d\'un nombre de 7 à 10 chiffres.';
