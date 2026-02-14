<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Product Review Feed';
$_['heading_integrations']         = 'Entegrasyonlar';
$_['heading_authentication']       = 'Doğrulama';
$_['heading_getting_started']      = 'Başlarken';
$_['heading_setup']                = 'Google Product Review Feed Kurulumu';
$_['heading_troubleshot']          = 'Yaygın Sorun Giderme';
$_['heading_faq']                  = 'SSS';
$_['heading_contact']              = 'Destek İletişim';

// Text
$_['text_extension']               = 'Eklentiler';
$_['text_success']                 = 'Başarılı: Google Product Review Feed beslemesini değiştirdiniz!';
$_['text_edit']                    = 'Google Product Review Feed Düzenle';
$_['text_getting_started']         = '<p><strong>Genel Bakış:</strong> OpenCart 4.x için Google Product Review Feed eklentisi, mağaza sahiplerinin ürün incelemelerini doğrudan Google Merchant Center hesaplarına aktarmalarını ve göndermelerini sağlar. Bu entegrasyon, Google\'ın müşteri tarafından oluşturulan yorumlarınızı Google Shopping ve diğer Google hizmetlerinde ürünlerinizin yanında göstermesine olanak tanır. Eklenti ayrıca, isteğe bağlı Opt-in ve Badge entegrasyonları sunarak, satış sonrası geri bildirimleri Google anketleri aracılığıyla toplamanıza ve satıcı puanı rozetinizi mağazanızda sergilemenize olanak tanır.</p><p><strong>Gereksinimler:</strong> OpenCart 4.x+, PHP 7.4+ veya üstü ve Ürün Puanları programının etkin olduğu <a href="https://merchants.google.com?hl=en" target="_blank" rel="external noopener noreferrer">Google Merchant Center</a> hesabınıza erişim.</p>';
$_['text_setup']                   = '<p><strong>Kurulum ve Ayarlar:</strong></p><ul><li><strong>Adım 1:</strong> Eklentiyi OpenCart Eklenti Yükleyicisi\'ni kullanarak yükleyin.</li><li><strong>Adım 2:</strong> <strong>Eklentiler</strong> -&gt; <strong>Beslemeler</strong> bölümüne gidin.</li><li><strong>Adım 3:</strong> Listede <strong>Playful Sparkle - Google Product Review Feed</strong>\'i bulun ve <strong>Düzenle</strong>\'ye tıklayın.</li><li><strong>Adım 4:</strong> <strong>Google Merchant Center ID</strong>\'nizi girin.</li><li><strong>Adım 5:</strong> Google\'ın ödeme sonrası anket göstermesine izin vermek için <strong>Opt-in Integration</strong>\'ı etkinleştirin.</li><li><strong>Adım 6:</strong> Sitenizde Google Customer Reviews rozetini göstermek için <strong>Badge Integration</strong>\'ı etkinleştirin.</li><li><strong>Adım 7:</strong> İsteğe bağlı olarak, inceleme beslemesi URL\'sine erişimi korumak için bir <strong>kullanıcı adı</strong> ve <strong>şifre</strong> belirleyin.</li><li><strong>Adım 8:</strong> Ayarlarınızı kaydedin.</li></ul>';
$_['text_troubleshot']             = '<ul><li><strong>Besleme görüntülenmiyor:</strong> Eklentinin etkinleştirildiğinden ve doğru şekilde yapılandırıldığından emin olun.</li><li><strong>Beslemede hiçbir yorum görünmüyor:</strong> Mağazanızda OpenCart\'ta onaylanmış ürün yorumları olmalıdır.</li><li><strong>Opt-in veya Badge görünmüyor:</strong> İlgili entegrasyonun etkinleştirildiğini ve Merchant ID\'nizin geçerli olduğunu doğrulayın.</li><li><strong>Opt-in veya Badge 404 hatası gösteriyor:</strong> Eklentinin, HTTPS üzerinden herkese açık bir alana yüklendiğinden emin olun. Google hizmetleri yerel, intranet veya özel alanlara erişemez.</li><li><strong>Besleme erişimi engellendi:</strong> Besleme korumasını etkinleştirdiyseniz, besleme URL\'sine erişirken doğru kullanıcı adı ve şifreyi sağladığınızdan emin olun.</li></ul>';
$_['text_faq']                     = '<details><summary>Beslemem neden boş?</summary>Ürünlerinizin OpenCart\'ta onaylanmış müşteri yorumları olduğundan emin olun. Yalnızca "etkin" olarak işaretlenmiş yorumlar beslemeye dahil edilir.</details><details><summary>Merchant ID\'mi nerede bulabilirim?</summary>Merchant Center ID\'nizi Google Merchant Center hesabınızın kontrol panelinin sağ üst köşesinde bulabilirsiniz.</details><details><summary>Besleme URL\'sini nasıl test edebilirim?</summary>Tarayıcınızda besleme URL\'sini ziyaret edin. Besleme koruması etkinleştirildiyse, istendiğinde yapılandırılan kullanıcı adını ve şifreyi kullanın. Ürün yorumlarınızı içeren bir XML dosyası görmelisiniz.</details><details><summary>Hem Opt-in hem de Badge Entegrasyonuna ihtiyacım var mı?</summary>Hayır, ihtiyaçlarınıza göre bunlardan birini veya her ikisini birden etkinleştirebilirsiniz. Opt-in özelliği, satış sonrası anketleri etkinleştirirken, Badge sitede satıcı puanınızı gösterir.</details>';
$_['text_contact']                 = '<p>Daha fazla yardım için lütfen destek ekibimize ulaşın:</p><ul><li><strong>İletişim:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokümantasyon:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Kullanıcı Dokümantasyonu</a></li></ul>';

// Tab
$_['tab_general']                  = 'Genel';
$_['tab_help_and_support']         = 'Yardım ve Destek';

// Entry
$_['entry_status']                 = 'Durum';
$_['entry_review_feed_url']        = 'İnceleme Besleme URL\'si';
$_['entry_login']                  = 'Kullanıcı Adı';
$_['entry_password']               = 'Şifre';
$_['entry_active_store']           = 'Aktif Mağaza';
$_['opt_in_integration']           = 'Opt-in Entegrasyonu';
$_['badge_integration']            = 'Badge Entegrasyonu';
$_['entry_merchant_id']            = 'Merchant ID';

// Help
$_['help_copy']                    = 'URL\'yi Kopyala';
$_['help_open']                    = 'URL\'yi Aç';
$_['help_merchant_id']             = '9 haneli Merchant Center ID\'nizi girin. Bu ID\'yi Google Merchant Center hesabınızın kontrol panelinin sağ üst köşesinde bulabilirsiniz.';
$_['help_opt_in_integration']      = 'Google\'ın ödeme sonrası anket sunmasına izin vermek için etkinleştirin, müşterilerin mağazanızla olan deneyimlerini derecelendirmelerine olanak tanır.';
$_['help_badge_integration']       = 'Sitenizde Google Customer Reviews rozetini göstermek için etkinleştirin, ortalama satıcı puanınızı görüntüler ve programa katılımınızı onaylar.';

// Error
$_['error_permission']             = 'Uyarı: Google Product Review Feed beslemesini değiştirme izniniz yok!';
$_['error_store_id']               = 'Uyarı: Form store_id içermiyor!';
$_['error_merchant_id']            = 'Merchant Center ID gereklidir.';
$_['error_merchant_id_invalid']    = 'Geçersiz Merchant Center ID. 7 ila 10 haneli bir sayı olmalıdır.';
