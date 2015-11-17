<?php

/**
 * Turkish (Turkey) language pack
 * @package shop
 * @subpackage i18n
 */

i18n::include_locale_file('modules: ecommerce', 'en_US');

global $lang;

if(array_key_exists('tr_TR', $lang) && is_array($lang['tr_TR'])) {
	$lang['tr_TR'] = array_merge($lang['en_US'], $lang['tr_TR']);
} else {
	$lang['tr_TR'] = $lang['en_US'];
}

$lang['tr_TR']['AccountPage']['Message'] = 'Hesap sayfasına ulaşabilmek icin oturum açmalısınız. Henüz kayıt olmadıysanız, ilk siparişinizi verene kadar erişemeyeceksiniz, kayıtlı iseniz, lütfen detaylarınızı aşagıya giriniz.';
$lang['tr_TR']['AccountPage']['NOPAGE'] = 'Bu sitede herhangi bir AccountPage bulunamadı - lütfen oluşturunuz !';
$lang['tr_TR']['AccountPage.ss']['COMPLETED'] = 'Tamamlanan Siparişler';
$lang['tr_TR']['AccountPage.ss']['HISTORY'] = 'Sipariş Geçmişiniz';
$lang['tr_TR']['AccountPage.ss']['INCOMPLETE'] = 'Tamamlanmamış Siparişler';
$lang['tr_TR']['AccountPage.ss']['Message'] = 'Giriş için gerekli bilgilerinizi giriniz.<br />Bu sayfa yalnızca parola atandıktan ve ilk siparişi verdikten sonra erişilebilir olacaktır.';
$lang['tr_TR']['AccountPage.ss']['NOCOMPLETED'] = 'Tamamlanmış sipariş bulunmuyor.';
$lang['tr_TR']['AccountPage.ss']['NOINCOMPLETE'] = 'Tamamlanmamış sipariş bulunmuyor.';
$lang['tr_TR']['AccountPage.ss']['ORDER'] = 'Sipariş #';
$lang['tr_TR']['AccountPage.ss']['READMORE'] = '#%s siparişi detayları';
$lang['tr_TR']['AccountPage_order.ss']['ADDRESS'] = 'Adres';
$lang['tr_TR']['AccountPage_order.ss']['AMOUNT'] = 'Miktar';
$lang['tr_TR']['AccountPage_order.ss']['BACKTOCHECKOUT'] = 'Ödeme sayfasına gitmek için buraya tıklayınız';
$lang['tr_TR']['AccountPage_order.ss']['CITY'] = 'Şehir';
$lang['tr_TR']['AccountPage_order.ss']['COUNTRY'] = 'Ülke';
$lang['tr_TR']['AccountPage_order.ss']['DATE'] = 'Tarih';
$lang['tr_TR']['AccountPage_order.ss']['DETAILS'] = 'Ayrıntılar';
$lang['tr_TR']['AccountPage_order.ss']['EMAILDETAILS'] = 'Bu işlemin bir kopyası siparişin detayları ile birlikte e-posta adresinize gönderildi.';
$lang['tr_TR']['AccountPage_order.ss']['NAME'] = 'Ad';
$lang['tr_TR']['AccountPage_order.ss']['PAYMENTMETHOD'] = 'Ödeme Şekli';
$lang['tr_TR']['AccountPage_order.ss']['PAYMENTSTATUS'] = 'Ödeme Durumu';
$lang['tr_TR']['Cart.ss']['ADDONE'] = 'Sepetinize 1 adet daha %s ekleyin';
$lang['tr_TR']['Cart.ss']['CheckoutClick'] = 'Ödeme için tıklayınız';
$lang['tr_TR']['Cart.ss']['CheckoutGoTo'] = 'Ödeme sayfasına git';
$lang['tr_TR']['Cart.ss']['HEADLINE'] = 'Sepetim';
$lang['tr_TR']['Cart.ss']['NOITEMS'] = 'Sepetinizde ürün bulunmuyor';
$lang['tr_TR']['Cart.ss']['PRICE'] = 'Fiyat';
$lang['tr_TR']['Cart.ss']['READMORE'] = '&quot;%s&quot; detayları için tıklayınız';
$lang['tr_TR']['Cart.ss']['Remove'] = '&quot;%s&quot; ürününü sepetten kaldır';
$lang['tr_TR']['Cart.ss']['REMOVE'] = 'Listeden &quot;%s&quot; öğesini çıkart';
$lang['tr_TR']['Cart.ss']['REMOVEALL'] = 'Sepetinizdeki %s lerin hepsini silin';
$lang['tr_TR']['Cart.ss']['RemoveAlt'] = 'Kaldır';
$lang['tr_TR']['Cart.ss']['REMOVEONE'] = 'Sepetinizdeki %s lerden birini silin';
$lang['tr_TR']['Cart.ss']['SHIPPING'] = 'Nakliye';
$lang['tr_TR']['Cart.ss']['SUBTOTAL'] = 'Ara Toplam';
$lang['tr_TR']['Cart.ss']['TOTAL'] = 'Toplam';
$lang['tr_TR']['CheckoutPage']['NOPAGE'] = 'Bu sitede CheckoutPage sayfası bulunamıyor - lütfen bir adet oluşturun!';
$lang['tr_TR']['CheckoutPage.ss']['CHECKOUT'] = 'Ödeme';
$lang['tr_TR']['CheckoutPage.ss']['ORDERSTATUS'] = 'Sipariş Durumu';
$lang['tr_TR']['CheckoutPage.ss']['PROCESS'] = 'İşlem';
$lang['tr_TR']['CheckoutPage_OrderIncomplete.ss']['BACKTOCHECKOUT'] = 'Ödeme sayfasına geri dönmek için tıklayınız';
$lang['tr_TR']['CheckoutPage_OrderIncomplete.ss']['CHECKOUT'] = 'Ödeme';
$lang['tr_TR']['CheckoutPage_OrderIncomplete.ss']['CHEQUEINSTRUCTIONS'] = 'Eğer çek ile ödeme yaptıysanız, gerekli talimatları içeren bir eposta alacaksınız.';
$lang['tr_TR']['CheckoutPage_OrderIncomplete.ss']['DETAILSSUBMITTED'] = 'Göndermiş olduğunuz detaylar';
$lang['tr_TR']['CheckoutPage_OrderIncomplete.ss']['INCOMPLETE'] = 'Tamamlanmamış Sipariş';
$lang['tr_TR']['CheckoutPage_OrderIncomplete.ss']['ORDERSTATUS'] = 'Sipariş Durumu';
$lang['tr_TR']['CheckoutPage_OrderIncomplete.ss']['PROCESS'] = 'İşlem';
$lang['tr_TR']['CheckoutPage_OrderSuccessful.ss']['BACKTOCHECKOUT'] = 'Ödeme sayfasına geri dönmek için tıklayınız';
$lang['tr_TR']['CheckoutPage_OrderSuccessful.ss']['CHECKOUT'] = 'Ödeme';
$lang['tr_TR']['CheckoutPage_OrderSuccessful.ss']['EMAILDETAILS'] = 'Sipariş detaylarının onayı için bir kopyası eposta adresinize gönderildi.';
$lang['tr_TR']['CheckoutPage_OrderSuccessful.ss']['ORDERSTATUS'] = 'Sipariş Durumu';
$lang['tr_TR']['CheckoutPage_OrderSuccessful.ss']['PROCESS'] = 'İşlem';
$lang['tr_TR']['CheckoutPage_OrderSuccessful.ss']['SUCCESSFULl'] = 'Başarılı Sipariş';
$lang['tr_TR']['ChequePayment']['MESSAGE'] = 'Cheque aracılığı ile yaptığınız ödeme kabul edildi. Lütfen dikkat: ödemeniz hesabınızdan çekilmeden ürünler kargoya verilmeyecektir.';
$lang['tr_TR']['DataReport']['EXPORTCSV'] = 'CSV olarak dışa aktar';
$lang['tr_TR']['FindOrderReport']['DATERANGE'] = 'Tarih Aralığı';
$lang['tr_TR']['MemberForm']['DETAILSSAVED'] = 'Bilgileriniz kaydedildi';
$lang['tr_TR']['MemberForm']['LOGGEDIN'] = 'Oturum açtınız, kullanıcı: ';
$lang['tr_TR']['Order']['INCOMPLETE'] = 'Sipariş tamamlanmamış';
$lang['tr_TR']['Order']['SUCCESSFULL'] = 'Sipariş Başarılı';
$lang['tr_TR']['OrderInformation.ss']['ADDRESS'] = 'Adres';
$lang['tr_TR']['OrderInformation.ss']['AMOUNT'] = 'Tutar';
$lang['tr_TR']['OrderInformation.ss']['BUYERSADDRESS'] = 'Alıcının Adresi';
$lang['tr_TR']['OrderInformation.ss']['CITY'] = 'Şehir';
$lang['tr_TR']['OrderInformation.ss']['COUNTRY'] = 'Ülke';
$lang['tr_TR']['OrderInformation.ss']['CUSTOMERDETAILS'] = 'Müşteri Bilgileri';
$lang['tr_TR']['OrderInformation.ss']['DATE'] = 'Tarih';
$lang['tr_TR']['OrderInformation.ss']['DETAILS'] = 'Detaylar';
$lang['tr_TR']['OrderInformation.ss']['EMAIL'] = 'Eposta';
$lang['tr_TR']['OrderInformation.ss']['MOBILE'] = 'GSM';
$lang['tr_TR']['OrderInformation.ss']['NAME'] = 'Ad';
$lang['tr_TR']['OrderInformation.ss']['ORDERSUMMARY'] = 'Sipariş Özeti';
$lang['tr_TR']['OrderInformation.ss']['PAYMENTID'] = 'Ödeme ID';
$lang['tr_TR']['OrderInformation.ss']['PAYMENTINFORMATION'] = 'Ödeme Bilgisi';
$lang['tr_TR']['OrderInformation.ss']['PAYMENTMETHOD'] = 'Method';
$lang['tr_TR']['OrderInformation.ss']['PAYMENTSTATUS'] = 'Ödeme Durumu';
$lang['tr_TR']['OrderInformation.ss']['PHONE'] = 'Telefon';
$lang['tr_TR']['OrderInformation.ss']['PRICE'] = 'Fiyat';
$lang['tr_TR']['OrderInformation.ss']['PRODUCT'] = 'Ürün';
$lang['tr_TR']['OrderInformation.ss']['QUANTITY'] = 'Miktar';
$lang['tr_TR']['OrderInformation.ss']['READMORE'] = '%s hakkında daha fazla bilgi için buraya tıkyayın';
$lang['tr_TR']['OrderInformation.ss']['SHIPPING'] = 'Nakliye';
$lang['tr_TR']['OrderInformation.ss']['SHIPPINGDETAILS'] = 'Nakliye Detayları';
$lang['tr_TR']['OrderInformation.ss']['SHIPPINGTO'] = '->';
$lang['tr_TR']['OrderInformation.ss']['SUBTOTAL'] = 'Ara Toplam';
$lang['tr_TR']['OrderInformation.ss']['TABLESUMMARY'] = 'Sepet içeriğiniz, ücret ve ödeme seçenekleri ile birlikte bu formda gösterilmektedir.';
$lang['tr_TR']['OrderInformation.ss']['TOTAL'] = 'Toplam';
$lang['tr_TR']['OrderInformation.ss']['TOTALl'] = 'Toplam';
$lang['tr_TR']['OrderInformation.ss']['TOTALOUTSTANDING'] = 'toplam kalan borç';
$lang['tr_TR']['OrderInformation.ss']['TOTALPRICE'] = 'Toplam Ücret';
$lang['tr_TR']['OrderInformation_Editable.ss']['ADDONE'] = '&quot;%s&quot; ürününden bir adet daha sepete ekle';
$lang['tr_TR']['OrderInformation_Editable.ss']['NOITEMS'] = 'Sepetinizde ürün <strong>bulunmuyor</strong>';
$lang['tr_TR']['OrderInformation_Editable.ss']['ORDERINFORMATION'] = 'Sipariş Bilgisi';
$lang['tr_TR']['OrderInformation_Editable.ss']['PRICE'] = 'Fiyat';
$lang['tr_TR']['OrderInformation_Editable.ss']['PRODUCT'] = 'Ürün';
$lang['tr_TR']['OrderInformation_Editable.ss']['QUANTITY'] = 'Miktar';
$lang['tr_TR']['OrderInformation_Editable.ss']['READMORE'] = '&quot;%s&quot; detayları için tıklayınız';
$lang['tr_TR']['OrderInformation_Editable.ss']['REMOVE'] = 'Listeden &quot;%s&quot; öğesini çıkart';
$lang['tr_TR']['OrderInformation_Editable.ss']['REMOVEALL'] = 'Sepetinizdeki %s lerin hepsini silin';
$lang['tr_TR']['OrderInformation_Editable.ss']['REMOVEONE'] = '&quot;%s&quot; ürününün birini sepetten kaldır';
$lang['tr_TR']['OrderInformation_Editable.ss']['SHIPPING'] = 'Nakliye';
$lang['tr_TR']['OrderInformation_Editable.ss']['SHIPPINGTO'] = '->';
$lang['tr_TR']['OrderInformation_Editable.ss']['SUBTOTAL'] = 'Ara Toplam';
$lang['tr_TR']['OrderInformation_Editable.ss']['TABLESUMMARY'] = 'Sepet içeriği, ücretlendirme ve ödeme seçenekleri aşağıdaki formda gösterilmektedir.';
$lang['tr_TR']['OrderInformation_Editable.ss']['TOTAL'] = 'Toplam';
$lang['tr_TR']['OrderInformation_Editable.ss']['TOTALPRICE'] = 'Toplam Fiyat';
$lang['tr_TR']['OrderInformation_NoPricing.ss']['ADDRESS'] = 'Adres';
$lang['tr_TR']['OrderInformation_NoPricing.ss']['BUYERSADDRESS'] = 'Alıcının Adresi';
$lang['tr_TR']['OrderInformation_NoPricing.ss']['CITY'] = 'Şehir';
$lang['tr_TR']['OrderInformation_NoPricing.ss']['COUNTRY'] = 'Ülke';
$lang['tr_TR']['OrderInformation_NoPricing.ss']['CUSTOMERDETAILS'] = 'Müşteri Bilgileri';
$lang['tr_TR']['OrderInformation_NoPricing.ss']['EMAIL'] = 'Eposta';
$lang['tr_TR']['OrderInformation_NoPricing.ss']['MOBILE'] = 'GSM';
$lang['tr_TR']['OrderInformation_NoPricing.ss']['NAME'] = 'Ad';
$lang['tr_TR']['OrderInformation_NoPricing.ss']['ORDERINFO'] = '# sipariş bilgileri';
$lang['tr_TR']['OrderInformation_NoPricing.ss']['PHONE'] = 'Telefon';
$lang['tr_TR']['OrderInformation_NoPricing.ss']['TABLESUMMARY'] = 'Sepet içeriği, ücretlendirme ve ödeme seçenekleri aşağıdaki formda gösterilmektedir.';
$lang['tr_TR']['OrderInformation_PackingSlip.ss']['DESCRIPTION'] = 'Açıklama';
$lang['tr_TR']['OrderInformation_PackingSlip.ss']['ITEM'] = 'Ürün';
$lang['tr_TR']['OrderInformation_PackingSlip.ss']['ORDERDATE'] = 'Sipariş Tarihi';
$lang['tr_TR']['OrderInformation_PackingSlip.ss']['ORDERNUMBER'] = 'Sipariş No';
$lang['tr_TR']['OrderInformation_PackingSlip.ss']['PAGETITLE'] = 'Dükkan Sipariş Yazdırma';
$lang['tr_TR']['OrderInformation_PackingSlip.ss']['QUANTITY'] = 'Miktar';
$lang['tr_TR']['OrderInformation_PackingSlip.ss']['TABLESUMMARY'] = 'Sepet içeriği, ücretlendirme ve ödeme seçenekleri aşağıdaki formda gösterilmektedir.';
$lang['tr_TR']['OrderInformation_Print.ss']['PAGETITLE'] = 'Siparişleri Yazdır';
$lang['tr_TR']['OrderReport']['CHANGESTATUS'] = 'Sipariş durumunu değiştir';
$lang['tr_TR']['OrderReport']['NOTEEMAIL'] = 'Not/Eposta';
$lang['tr_TR']['OrderReport']['PRINTEACHORDER'] = 'Gösterilen tüm siparişleri yazdır';
$lang['tr_TR']['OrderReport']['SENDNOTETO'] = 'Notu %s (%s) gönder';
$lang['tr_TR']['Order_Content.ss']['NOITEMS'] = 'Listenizde <strong>no</strong> öğe bulunmaktadır';
$lang['tr_TR']['Order_Content.ss']['PRICE'] = 'Fiyat';
$lang['tr_TR']['Order_Content.ss']['PRODUCT'] = 'Ürün';
$lang['tr_TR']['Order_Content.ss']['QUANTITY'] = 'Miktar';
$lang['tr_TR']['Order_Content.ss']['READMORE'] = '&quot;%s&quot; hakkında daha fazla bilgi almak için tıklayınız';
$lang['tr_TR']['Order_Content.ss']['SUBTOTAL'] = 'Alt Toplam';
$lang['tr_TR']['Order_Content.ss']['TOTAL'] = 'Toplam';
$lang['tr_TR']['Order_Content.ss']['TOTALOUTSTANDING'] = 'Kalan toplamı';
$lang['tr_TR']['Order_Content.ss']['TOTALPRICE'] = 'Toplam Fiyat';
$lang['tr_TR']['Order_Member.ss']['ADDRESS'] = 'Adres';
$lang['tr_TR']['Order_Member.ss']['CITY'] = 'Şehir';
$lang['tr_TR']['Order_Member.ss']['COUNTRY'] = 'Ülke';
$lang['tr_TR']['Order_Member.ss']['EMAIL'] = 'E-posta';
$lang['tr_TR']['Order_Member.ss']['MOBILE'] = 'Cep Telefonu';
$lang['tr_TR']['Order_Member.ss']['NAME'] = 'İsim';
$lang['tr_TR']['Order_Member.ss']['PHONE'] = 'Telefon';
$lang['tr_TR']['Order_receiptEmail.ss']['HEADLINE'] = 'Dükkan Sipariş Alındısı';
$lang['tr_TR']['Order_ReceiptEmail.ss']['HEADLINE'] = 'Sipariş Makbuzu';
$lang['tr_TR']['Order_receiptEmail.ss']['TITLE'] = 'Dükkan Alındısı';
$lang['tr_TR']['Order_ReceiptEmail.ss']['TITLE'] = 'Alışveriş Makbuzu';
$lang['tr_TR']['Order_statusEmail.ss']['HEADLINE'] = 'Dükkan Durum Değişikliği';
$lang['tr_TR']['Order_StatusEmail.ss']['HEADLINE'] = 'Alışveriş Durumu Değişti';
$lang['tr_TR']['Order_statusEmail.ss']['STATUSCHANGE'] = '# nolu siparişin durumu "%s" şeklinde değiştirildi';
$lang['tr_TR']['Order_StatusEmail.ss']['STATUSCHANGE'] = '# numarali sipariş için durum "%s" olarak değişti';
$lang['tr_TR']['Order_statusEmail.ss']['TITLE'] = 'Dükkan Durum Değişikliği';
$lang['tr_TR']['Order_StatusEmail.ss']['TITLE'] = 'Alışveriş Durumu Değişti';
$lang['tr_TR']['PaymentInformation.ss']['AMOUNT'] = 'Tutar';
$lang['tr_TR']['PaymentInformation.ss']['DATE'] = 'Tarih';
$lang['tr_TR']['PaymentInformation.ss']['DETAILS'] = 'Detaylar';
$lang['tr_TR']['PaymentInformation.ss']['PAYMENTID'] = 'Ödeme ID';
$lang['tr_TR']['PaymentInformation.ss']['PAYMENTINFORMATION'] = 'Ödeme Bilgileri';
$lang['tr_TR']['PaymentInformation.ss']['PAYMENTMETHOD'] = 'Method';
$lang['tr_TR']['PaymentInformation.ss']['PAYMENTSTATUS'] = 'Ödeme Durumu';
$lang['tr_TR']['PaymentInformation.ss']['TABLESUMMARY'] = 'Sepet içeriği, ücretlendirme ve ödeme seçenekleri aşağıdaki formda gösterilmektedir.';
$lang['tr_TR']['Product.ss']['ADD'] = '&quot;%s&quot; ürününü sepete ekle';
$lang['tr_TR']['Product.ss']['ADDLINK'] = 'Ürünü sepete ekle';
$lang['tr_TR']['Product.ss']['ADDONE'] = '&quot;%s&quot; ürününden bir adet daha sepete ekle';
$lang['tr_TR']['Product.ss']['AUTHOR'] = 'Yazan';
$lang['tr_TR']['Product.ss']['FEATURED'] = 'Güncel üründür.';
$lang['tr_TR']['Product.ss']['GOTOCHECKOUT'] = 'Ödeme sayfasına git';
$lang['tr_TR']['Product.ss']['GOTOCHECKOUTLINK'] = '&raquo; Ödeme sayfasına git';
$lang['tr_TR']['Product.ss']['IMAGE'] = '%s resim';
$lang['tr_TR']['Product.ss']['ItemID'] = 'Ürün #';
$lang['tr_TR']['Product.ss']['NOIMAGE'] = '&quot;%s&quot; ürünü için resim bulunamadı';
$lang['tr_TR']['Product.ss']['QUANTITYCART'] = 'Sepetteki miktar';
$lang['tr_TR']['Product.ss']['REMOVE'] = '&quot;%s&quot; ürününü sepetten kaldır';
$lang['tr_TR']['Product.ss']['REMOVEALL'] = '&quot;%s&quot; ürününü birini sepetten kaldır';
$lang['tr_TR']['Product.ss']['REMOVELINK'] = '&raquo; Sepetten kaldır';
$lang['tr_TR']['Product.ss']['SIZE'] = 'Boyut';
$lang['tr_TR']['ProductCategory.ss']['FEATURED'] = 'Güncel Ürünler';
$lang['tr_TR']['ProductCategory.ss']['OTHER'] = 'Diğer Ürünler';
$lang['tr_TR']['ProductCategory.ss']['VIEWGROUP'] = '&quot;%s&quot; grup ürünlerini göster';
$lang['tr_TR']['ProductCategoryItem.ss']['ADD'] = '&quot;%s&quot; ürününü sepete ekle';
$lang['tr_TR']['ProductCategoryItem.ss']['ADDLINK'] = 'Sepete ekle';
$lang['tr_TR']['ProductCategoryItem.ss']['ADDONE'] = '&quot;%s&quot; ürününden bir adet daha sepete ekle';
$lang['tr_TR']['ProductCategoryItem.ss']['AUTHOR'] = 'Yazan';
$lang['tr_TR']['ProductCategoryItem.ss']['GOTOCHECKOUT'] = 'Ödeme sayfasina git';
$lang['tr_TR']['ProductCategoryItem.ss']['GOTOCHECKOUTLINK'] = '&raquo; Ödeme sayfasina git';
$lang['tr_TR']['ProductCategoryItem.ss']['IMAGE'] = '%s resim';
$lang['tr_TR']['ProductCategoryItem.ss']['NOIMAGE'] = '&quot;%s&quot; için ürün bulunamadı, üzgünüz';
$lang['tr_TR']['ProductCategoryItem.ss']['QUANTITY'] = 'Miktar';
$lang['tr_TR']['ProductCategoryItem.ss']['QUANTITYCART'] = 'Sepetteki adet';
$lang['tr_TR']['ProductCategoryItem.ss']['READMORE'] = '&quot;%s&quot; detayları için tıklayınız';
$lang['tr_TR']['ProductCategoryItem.ss']['READMORECONTENT'] = 'Detaylar &raquo;';
$lang['tr_TR']['ProductCategoryItem.ss']['REMOVE'] = '&quot;%s&quot; ürününü sepetten kaldır';
$lang['tr_TR']['ProductCategoryItem.ss']['REMOVEALL'] = 'Sepetinizdeki %s lerden birini silin';
$lang['tr_TR']['ProductCategoryItem.ss']['REMOVELINK'] = '&raquo; Sepetten kaldır';
$lang['tr_TR']['ProductCategoryItem.ss']['REMOVEONE'] = '&quot;%s&quot; ürününden birini sepetten kaldır';
$lang['tr_TR']['ProductMenu.ss']['GOTOPAGE'] = '%s sayfasına git';
$lang['tr_TR']['SSReport']['ALLCLICKHERE'] = 'Tüm ürünleri görmek için tıklayınız';
$lang['tr_TR']['SSReport']['INVOICE'] = 'Fatura';
$lang['tr_TR']['SSReport']['PRINT'] = 'Yazdır';
$lang['tr_TR']['SSReport']['VIEW'] = 'Görüntüle';
$lang['tr_TR']['ViewAllProducts.ss']['AUTHOR'] = 'Yazan';
$lang['tr_TR']['ViewAllProducts.ss']['CATEGORIES'] = 'Kategoriler';
$lang['tr_TR']['ViewAllProducts.ss']['IMAGE'] = '%s resim';
$lang['tr_TR']['ViewAllProducts.ss']['LASTEDIT'] = 'Son düzenleme';
$lang['tr_TR']['ViewAllProducts.ss']['LINK'] = 'Link';
$lang['tr_TR']['ViewAllProducts.ss']['NOCONTENT'] = 'İçerik eklenmedi.';
$lang['tr_TR']['ViewAllProducts.ss']['NOIMAGE'] = 'Üzgünüz, &quot;%s&quot; ürün resmi bulunmuyor';
$lang['tr_TR']['ViewAllProducts.ss']['NOSUBJECTS'] = 'Konu eklenmedi.';
$lang['tr_TR']['ViewAllProducts.ss']['PRICE'] = 'Fiyat';
$lang['tr_TR']['ViewAllProducts.ss']['PRODUCTID'] = 'Ürün ID';
$lang['tr_TR']['ViewAllProducts.ss']['WEIGHT'] = 'Ağırlık';
