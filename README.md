# Proje Edanışman


Danışmanlar için yapılan, Öğrencilerin profiline, doldurdukları öğrenci bilgi formuna erişme ve değiştirme işlemi yapabilen ve kategorilere göre filtreleme yapabilen web sitesidir.


     Öğrenci bilgi formu 35-40 sorudan oluşur. Bilgilerin hepsi veri tabanına kaydedilir. Kaydedilen bilgi formu doğru doldurulduysa, Öğrenci otomatik olarak rastgele bir danışmana atanır. Atanan danışman değiştirilebilir.

     Web sitesine erişim üyelik sistemi ile yapılmaktadır. En alt üye öğrenci, en üst üye Admin olmak üzere dört üyeli yetki sistemi vardır. Üyelerin kendilerine ait profilleri vardır ve bilgilerini değiştirebilirler.

     Danışmanlar öğrenci kayıt, filtreleme ve listeleme kısımlarına erişirken öğrenci üyeleri ise sadece kayıt ve profillerine erişebilir. Bir kez bilgi formunu doldurduktan sonra bir daha dolduramazlar. Sadece değiştirebilirler.

     Admin üyesinin her bölüme erişimi vardır ve ek olarak ana bilim dalındakilerin listesine ve profillerine erişebilmektedir.

     Öğrenci Bilgi kısmı asıl formuna bağlı kalarak yapılmıştır ve bütün bilgiler veritabanına kaydedilmektedir. Öğrenciler önceden veri tabanına aktarılan Öğrenci No’ları ve şifreleri ile giriş yapabilirler ve formu doldurduktan sonra tüm öğrenciler kendi bilgilerini, şifrelerini veya fotoğraflarını değiştirebilirler.

     Öğrenci Listesi son kaydedilen öğrencileri gösterir. Öğrenci Filtrele kısmı ise belli kategorilere göre sıralama yapar ve sonucu öğrenci listesine geçerek gösterir.

     Sitedeki herhangi bir listeden düzenle ’ye basıldığında yetkinize göre listedeki kişinin profilini düzenleyebilirsiniz. Admin olarak giriş yapıldıysa sitedeki bütün profilleri değiştirebilirsiniz. Şifreler ileride yapılacak olan şifremi unuttum ile değiştirilebilir.
	 
Dört üyelik tablosu vardır. ABD, Admin ve Danışman tabloları nerdeyse aynıdır. 

	Öğrenci tablosunda sadece siteye girmek için gereken bilgiler vardır. Öğrenci ad ve öğrenci numaralarının fakülte veri tabanından alındığı varsayılmaktadır. Şifre ise varsayılan olarak 1 ( bir ) idir.
	
	Öğrenci_bilgi tablosu 40 tane sütundan oluşmaktadır. Girilecek bilgiler siteden gelmektedir ve bazı bilgiler birleştirilmiştir.( Örn. aile_malvarlik da ailenin arabası ve evi yoksa 0 , varsa 1 veya daha fazla girlir )
	
	Öğrenci_bilgi tablosu 2 – 3 ayrı tablolara ayrılabilir veya referans anahtarlar kullanılabilir. Ama bilginin ulaşılmama sorunundan dolayı yapılmamıştır.
	
	Bölüm tablosu ise diğer tablolara bölüm_id ile birden çok ilişkili kurulmuştur.
	
	Bölüm tablosu’nun danışmanlara olan ilişkisi sitede kurulmuştur. ABD sadece kendi bölümündeki danışmanlara cevap verebilir
	
	Öğrenci tablosu doğru doldurulduysa, danışman id ye rastgele danışman atanır. Bu danışman ABD tarafından değiştirilebilir.

