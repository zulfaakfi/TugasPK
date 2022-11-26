<!DOCTYPE html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="jember";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);

}
?>
<html>
<head>
	<title>UTS pemrograman Komputer II</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<h1 class="judul">WONDERFUL OF JEMBER!</h1>
		<p class="deskripsi">Jember adalah sebuah kabupaten di provinsi Jawa Timur, Indonesia. Ibukota Kabupaten Jember adalah Kota Jember yang terletak di tengah-tengah wilayah Tapal Kuda, Provinsi Jawa Timur.</p>
	</header>

    <main>
        <div class="wrap">
                <nav class="menu">
                    <ul>
                        <li>
                            <a href="#beranda">Beranda</a>
                        </li>
                        <li>
                            <a href="#blog">Wisata</a>
                        </li>
                        <li>
                            <a href="#saran">Kritik Saran</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                </nav>
            
                <aside class="unik">
                    <div class="widget">
                        <h2>Suwar-Suwir</h2>
                        <img src="sw.jpg">
                        <p>Suwar-suwir merupakan makanan ringan yang berasal dari Kabupaten Jember, Jawa Timur. Suwar-suwir sendiri terbuat dari tape yang diolah sedemikian rupa hingga menjadi makanan ringan.</p>
                    </div>
                    <div class="widget">
                        <h2>Jember Fashion Carnival</h2>
                        <img src="jfc.jpeg">
                        <p>Banyak orang yang tidak menyangka kalau Kota Jember memiliki festival budaya berkelas dunia. Jember Fashion Carnival atau JFC merupakan sebuah pertunjukan kostum yang diadakan setahun sekali. Masyarakat dunia juga telah mengakuinya sebagai salah satu festival budaya terkeren di Indonesia.</p>
                    </div>
                    <div class="widget">
                        <h2>salah satu produsen tembakau terbesar di Indonesia </h2>
                        <img src="tembakau.jpg">
                        <p>Tidak banyak yang tahu bahwa Jember merupakan salah satu produsen tembakau terbesar di Indonesia. Dilansir dari website resmi indonesia.go.id, Jember dapat dikategorikan sebagai daerah penghasil cerutu terbaik di dunia dan banyak dari produksinya telah di ekspor ke luar negeri.Hal tersebut membuat Jember memiliki julukan sebagai 'Kota Tembakau'.</p>
                    </div>
                    <div class="widget">
                        <h2>Penghasil kedelai edamame terbesar di Indonesia</h2>
                        <img src="edm.jpg">
                        <p>Edamame merupakan kedelai yang berasal dari negara-negara di Asia Timur. Di Indonesia sendiri, produsen terbesar dari edamame ini terletak di Kota Jember. Situs resmi GNFI menyebutkan bahwa Kota Jember berhasil memproduksi sebanyak 9000 ton setiap tahun.</p>
                    </div>
                    <div class="widget">
                        <h2>Jember memiliki minuman khas dengan nama dan rasa yang cukup unik yaitu Wedang Cor</h2>
                        <img src="cor.jpg">
                        <p>Berbicara tentang kuliner, Jember memiliki salah satu minuman yang memiliki rasa dan nama yang cukup unik. Apa yang terlintas di pikiranmu ketika mendengar istilah 'wedang cor'? Intinya bukan minuman yang terbuat dari cor beton ya!.Minuman ini terbuat dari campuran susu, jahe, dan ketan hitam yang dijamin nikmat. Wedang cor sangat cocok dinikmati ketika suhu udara sedang dingin-dinginnya. Oleh karena itu, jangan banyak berpikir lagi jika ingin berkunjung ke Jember ya!</p>
                    </div>
                </aside>

                <div class="blog" id="blog">
                    <div class="conteudo">
                        <div class="post-info">
                            Di Posting Oleh <b>Zulfa Akfi Fikrina (200601110118)</b>
                        </div>
                        <img src="PPM.jpg">
                        <h1>Pantai Papuma, Pantai Eksotis di Jember</h1>
                        <hr>
                        <p>
                            Pantai Papuma itulah namanya, yang merupakan akronim dari Pantai Pasir Putih Malikan atau bisa juga disebut dengan nama Tanjung Papuma. Pantai ini berada di belakang sebuah bukit, sehingga dapat dipastikan memiliki alam yang luar biasa indahnya.Keindahan yang dimilikinya bahkan disandingkan dengan Raja Ampat, Papua. Karena di sepanjang pantainya terdapat bebatuan karang dengan ukuran yang beragam.Pantai ini sempat ditutup untuk mencegah penyebaran covid-19, namun saat ini sudah dibuka kembali, namun tentunya dengan menerapkan protokol kesehatan.
                        </p>				
                        <a href="#" class="continue-lendo">Selengkapnya →</a>
                    </div>
                    <div class="conteudo">
                        <img src="mb.jpeg">
                        <h1> Taman Nasional Meru Betiri, Surga Tersembunyi di Jember</h1>
                        <hr>
                        <p>
                            Jawa Timur memiliki sejumlah taman nasional dengan keindahan alam yang menakjubkan. Salah satu taman nasional yang bisa dikunjungi adalah Taman Nasional Meru Betiri. Taman nasional ini berada di wilayah Kabupaten Banyuwangi dan Kabupaten Jember.Taman Nasional Meru Betiri memiliki daya tarik hutan dan pantai yang masih sangat terjaga keasriannya. Taman nasional ini sangat cocok dikunjungi bagi kamu penggemar petualangan alam bebas. Di sini terdapat puluhan flora dan fauna yang dilindungi.Taman Nasional Meru Betiri bisa jadi destinasi alternatif rekreasi di Jawa Timur, khususnya Banyuwangi dan Jember. Pantai-pantai di Taman Nasional Meru Betiri juga terkenal sangat asri, karena masih dipertahankan kealamiannya.
                        </p>
                        <a href="#" class="continue-lendo">Selengkapnya →</a>
                    </div>
                    <div class="conteudo">
                        <img src="watu.jpg">
                        <h1> Pesona Keindahan Air Terjun Watu Ondo Tempurejo Jember </h1>
                        <hr>
                        <p>
                            Air Terjun Watu Ondo bersumber dari air gunung asli (bukan dari aliran sungai lain), sehingga airnya benar-benar jernih, sampai-sampai dasarnya kelihatan. Air terjun ini terlihat sangat unik, penduduk sekitar memberitahukan nama 2 air terjun berdasarkan bentuknya yang menyerupai Tangga (Ondo), dan Tembikar (Gedhek). Air terjun pertama atau Gedhek adalah yang paling tinggi, sekitar 8 meter. Bentuknya melebar karena batuan yang dilaluinya juga lebar seperti dinding rumah dari anyaman bambu (gedhek). Namun yang lebih di kenal warga adalah Watu Ondo, karena susunan batu air seperti tangga. Hati-hati saat akan menuju Watu Ondo karena jalannnya sempit. Namun pemandangan sangat indah dimana anda akan bisa berenang dibawah air terjun.
                        </p>
                        <a href="#" class="continue-lendo">Selengkapnya →</a>
                    </div>
                    <div class="conteudo" id="saran">
                        <form>
                            <div class="card p-3" id="container7">
                                <label for="KritikSaran" class="form-label">E-mail</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="card p-3" id="container6">
                                <label for="KritikSaran" class="form-label">Kritik dan Saran!</label>
                                <input type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" id = "submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                    <div>
                        <footer class="footer-distributed">
        

                            <div class="footer-left">
                                <h3>Jember Itu Indah</h3>
            
                                <p class="footer-links">
                                    <a href="#beranda">Beranda</a>
                                    |
                                    <a href="#blog">Wisata</a>
                                    |
                                    <a href="#saran">Kritik Saran</a>
                                    |
                                    <a href="#contact">Contact</a>
                                </p>
            
                            </div>
            
                            <div class="footer-center" id="contact">
                                <div>
                                    <i class="fa fa-map-marker"></i>
                                        <p><span>Perum. Griya Mandiri
                                            No. 09</span>
                                            Sukun, Lowokwaru, Malang</p>
                                </div>
            
                                <div>
                                    <i class="fa fa-phone"></i>
                                    <p>+6285 3353 69366</p>
                                </div>
                                <div>
                                    <i class="fa fa-envelope"></i>
                                    <p><a href="https://www.z.akfi2704@gmail.com">z.akfi2704@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="footer-right">
                                <div class="footer-icons">
                                    <a href="https://m.facebook.com/profile.php?eav=Afb6xGF8QTrpEoODTCdSxVSVDLBvaQCas1AGQyMZWaqtmUaMGFx2wKE2bZU94qdoTyY&paipv=0"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/zulfaaakfii"><i class="fa fa-twitter"></i></a>
                                    <a href="https://instagram.com/zulfaakfi"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/zulfa-akfi-fikrina-894359238/"><i class="fa fa-linkedin"></i></a>
                                    <a href="https://www.youtube.com/channel/UCvud3__4pJYyjSuhaT9eh_A"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </footer>
                    </div>
                
        </div>
    </main>
       
</body>
</html>