@extends('layouts.template')

@section('judul')
Beranda
@endsection

@section('hero')
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Whistleblowing System SPI UNSIKA</h1>
          <h2>Mari kita tingkatkan kualitas UNSIKA bersama-sama! Ayo jadi bagian dari perubahan positif!</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://youtu.be/OkgbKHkErjs?si=HYyJnbH8sZf3RiNl" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('/tema/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

</section>
@endsection

@section('header')
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{url('/')}}">LASPIKA</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="{{url('/')}}">Beranda</a></li>
            <li><a class="nav-link scrollto" href="https://spi.unsika.ac.id/">Website SPI Unsika</a></li>
            @if(Auth::check())
                <li><a class="getstarted scrollto" href="{{url('/logout')}}" style="background-color: red !important;">Logout</a></li>
            @else
                <li><a class="getstarted scrollto" href="{{url('/login')}}">Login</a></li>
            @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
@endsection

@section('main')
    <!-- ======= Logo Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

          <div class="row" data-aos="zoom-in">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{asset('/tema/assets/img/clients/unsikalogo.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{asset('/tema/assets/img/clients/twh.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{asset('/tema/assets/img/clients/blu.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{asset('/tema/assets/img/clients/kampusmerdeka.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{asset('/tema/assets/img/clients/unsika.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{asset('/tema/assets/img/clients/wbs.png')}}" class="img-fluid" alt="">
            </div>

          </div>

        </div>
      </section>

      <!-- ======= Definisi WBS Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Definisi LASPIKA</h2>
          </div>

          <div class="row content">
            <div class="col-lg-6">
              <p>
                LASPIKA adalah kependekan dari "Laporan SPI UNSIKA", sebuah platform untuk melaporkan pelanggaran atau tindakan yang melanggar hukum atau berpotensi merugikan organisasi atau pihak terkait, yang biasa disebut dengan Whistleblowing System (WBS). Whistleblowing system merupakan suatu sistem yang memungkinkan pengungkapan tindakan pelanggaran atau kegiatan yang bertentangan dengan hukum atau yang dapat menimbulkan kerugian bagi organisasi atau pihak-pihak yang berkepentingan.
              </p>
            </div>
            <div class="col-lg-6">
              <p>
                Dalam upaya mengawasi internal perguruan tinggi, inisiatif ini telah mengembangkan sebuah whistleblowing system. Sistem ini dirancang sebagai langkah preventif untuk mencegah terjadinya pelanggaran dan kejahatan di lingkungan internal perguruan tinggi. Tujuannya adalah memberikan sarana bagi pegawai atau pihak eksternal untuk melaporkan kejahatan yang dilakukan oleh perguruan tinggi.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ======= Cara Membuat Pengaduan Section ======= -->
      <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

              <div class="content">
                <h3>Tata Cara <strong>Pengaduan</strong></h3>
              </div>

              <div class="accordion-list">
                <ul>
                  <li>
                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Periksa Laporan Anda <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                      <p>
                        Sebelum melaporkan pengaduan Anda di LASPIKA, terlebih dahulu periksa kelengkapan pengaduan Anda apakah telah sesuai dengan kriteria pengaduan yang telah ditetapkan
                      </p>
                    </div>
                  </li>

                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Isi Formulir Pengaduan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Silahkan daftarkan diri Anda ke layanan LASPIKA lalu Anda dapat melakukan login. Selanjutnya klik menu "Buat Pengaduan" dan lanjutkan dengan mengisi formulir pengaduan yang telah disediakan dan lanjutkan dengan menekan tombol "Kirim".
                      </p>
                    </div>
                  </li>

                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Simpan Kode Akun <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Setelah mengirim pengaduan, Anda akan mendapatkan kode akun yang memastikan Anda dapat masuk ke halaman khusus pelapor yang telah disediakan. Simpan dan jaga kerahasiaan kode akun tersebut.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Pantau Pengaduan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Anda dapat memantau pengaduan yang pernah dikirim, membuat pengaduan baru dan juga dapat melakukan komunikasi secara pribadi dengan administrator LASPIKA melalui halaman khusus pelapor.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>

            </div>

            <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{asset('/tema/assets/img/why-us.png')}}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
          </div>
        </div>
      </section>

      <!-- ======= Kriteria Pengaduan Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Kriteria Pengaduan</h2>
            <p>Jika Anda melihat atau mengetahui dugaan Tindak Pidana Korupsi atau bentuk pelanggaran lainnya yang dilakukan staff UNSIKA, silahkan melapor ke SPI UNSIKA. Jika laporan anda memenuhi syarat/kriteria, maka laporan Anda akan diproses lebih lanjut.</p>
          </div>

          <div class="row">
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-briefcase"></i></div>
                <h4><a href="">Apa</a></h4>
                <p>Apa perbuatan terindikasi Tindak Pidana Korupsi/Pelanggaran yang diketahui</p>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-5 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-person"></i></div>
                <h4><a href="">Siapa</a></h4>
                <p>Siapa yang bertanggungjawab/terlibat dan terkait dalam perbuatan tersebut</p>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-5 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-buildings"></i></div>
                <h4><a href="">Dimana</a></h4>
                <p>Dimana terjadinya perbuatan tersebut dilakukan</p>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-5 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-calendar"></i></div>
                <h4><a href="">Kapan</a></h4>
                <p>Kapan waktu perbuatan tersebut dilakukan</p>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-5 mt-xl-" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-question-circle"></i></div>
                <h4><a href="">Bagaimana</a></h4>
                <p>Bagaimana cara perbuatan tersebut dilakukan (modus, cara, dan sebagainya)</p>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-5 mt-xl-5" data-aos="zoom-in" data-aos-delay="600">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-file-earmark"></i></div>
                <h4><a href="">Bukti</a></h4>
                <p>Dilengkapi dengan bukti permulaan (data, dokumen, gambar, rekaman) yang mendukung</p>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

          <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
              <h3>Jaminan Kerahasiaan dan Komitmen Kami</h3>
              <p> Tidak perlu merasa cemas tentang terungkapnya identitas Anda, karena SPI UNSIKA berkomitmen untuk menjaga kerahasiaan dan melindungi Anda sebagai whistleblower. Kami sangat menghormati laporan yang Anda berikan, dengan fokus utama pada substansi informasi yang disampaikan.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="{{'/login'}}">Buat Pengaduan</a>
            </div>
          </div>

        </div>
      </section>

      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Frequently Asked Questions</h2>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apakah LASPIKA itu? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>
                    LASPIKA, yang merupakan kependekan dari "Lapor SPI UNSIKA", atau Whistleblowing System SPI UNSIKA, adalah sebuah sistem yang dikelola oleh SPI UNSIKA untuk menangani pengaduan dan memberikan tindak lanjut terhadap pelaporan yang masuk. Sistem ini menyediakan sarana bagi pejabat dan pegawai internal UNSIKA, serta masyarakat umum yang menggunakan layanan UNSIKA, untuk melaporkan dugaan pelanggaran atau ketidakpuasan terhadap layanan yang diberikan oleh pejabat atau pegawai UNSIKA.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apakah bentuk respon yang diberikan kepada pelapor atas pengaduan yang disampaikan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Respon yang diberikan kepada pelapor berupa respon awal (ucapan terima kasih telah melakukan pengaduan) dan status/tindak lanjut pengaduan paling akhir sesuai dengan respon yang telah diberikan oleh pihak penerima pengaduan. Respon terkait dengan status/tindak lanjut pengaduan dapat dilihat dalam history pengaduan aplikasi LASPIKA.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Berapa lama respon atas pengaduan yang disampaikan diberikan kepada pelapor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Sesuai dengan Pedoman Menteri Kominfo No.6 tahun 2018 jawaban/respon atas pengaduan yang disampaikan wajib diberikan dalam kurun waktu paling lambat 30 (tiga puluh) hari terhitung sejak pengaduan diterima. Untuk respon yang disampaikan melalui surat dapat diberikan apabila pelapor mencantumkan identitas secara jelas (nama dan alamat koresponden). Untuk respon dari media pengaduan lainnya akan disampaikan dan diberikan sesuai identitas pelapor yang dicantumkan dalam media pengaduan tersebut.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Apakah pengaduan yang saya berikan selalu mendapatkan respon? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Pengaduan yang Anda berikan akan direspon dan tercantum dalam website LASPIKA ini dan akan terupdate secara otomatis sesuai dengan respon yang telah diberikan oleh pihak penerima pengaduan. Untuk dapat melihat respon yang diberikan, Anda harus masuk terlebih dahulu dengan username yang telah Anda registrasikan di aplikasi ini dan Anda dapat melihat status pengaduan dalam history pengaduan sesuai dengan nomor register pengaduan yang didapatkan. Sebagai catatan, pengaduan Anda akan lebih mudah ditindaklanjuti apabila memenuhi unsur pengaduan.
                  </p>
                </div>
              </li>

            </ul>
          </div>

        </div>
      </section>
@endsection

@section('footer')
      <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>laspika</h3>
            <p>
              Jl. HS. Ronggowaluyo <br>
              Telukjambe Timur<br>
              Karawang - 41363 <br><br>
              <strong>Phone:</strong> 0812 - 1866 - 9229<br>
              <strong>Email:</strong> info@unsika.ac.id<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6">
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Indikasi Pelanggaran</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Pidana Korupsi</li>
              <li><i class="bx bx-chevron-right"></i>Pelanggaran Pengadaan Barang/Jasa</li>
              <li><i class="bx bx-chevron-right"></i>Pelanggaran Pengelolaan Keuangan</li>
              <li><i class="bx bx-chevron-right"></i>Pelanggaran Kepegawaian</li>
              <li><i class="bx bx-chevron-right"></i>Penyalahgunaan Wewenang</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright. 2024. <strong><span>SPI UNSIKA</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer>
@endsection


