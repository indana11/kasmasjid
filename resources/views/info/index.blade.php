@extends('layouts.main')
@section('title','Information')
@section('container')
<!-- MAIN CONTENT -->
<div class="main-content">
        <div class="row">
            <div class="col-md-4">
                <!-- PANEL NO CONTROLS -->
                <div class="panel">
                    <div class="panel-heading">
                        {{-- <h3 class="panel-title">Panel No Right Controls</h3> --}}
                    </div>
                    <div class="panel-body">
                        <div class="logo text-center"><img src="assets/img/masjid3.jpg" alt="Klorofil Logo"></div>
                    </div>
                    <h4 class="text-center">Masjid Subulus Salam</h4>
                    <br>
                    <button type="button" class="btn btn-default btn-block" style="border: none"
                    data-toggle="modal"
                    data-target="#data"><h5>Baca Selengkapnya</h5></button>
                </div>
                <!-- END PANEL NO CONTROLS -->
            </div>
            <div class="col-md-4">
                <!-- PANEL NO CONTROLS -->
                <div class="panel">
                    <div class="panel-heading">
                        {{-- <h3 class="panel-title">Panel No Right Controls</h3> --}}
                    </div>
                    <div class="panel-body">
                        <div class="logo text-center"><img src="assets/img/qiroati.png" width="100px" alt="Klorofil Logo"></div>
                    </div>
                    <h4 class="text-center">TPQ & Madin Subulus Salam</h4>
                    <br>
                    <button type="button" class="btn btn-default btn-block" style="border: none"
                    data-toggle="modal"
                    data-target="#data1"><h5>Baca Selengkapnya</h5></button>
                </div>
                <!-- END PANEL NO CONTROLS -->
            </div>
            <div class="col-md-4">
                <!-- PANEL NO CONTROLS -->
                <div class="panel">
                    <div class="panel-heading">
                        {{-- <h3 class="panel-title">Panel No Right Controls</h3> --}}
                    </div>
                    <div class="panel-body">
                        <div class="logo text-center"><img src="assets/img/tk.png" width="100px" alt="Klorofil Logo"></div>
                    </div>
                    <h4 class="text-center">TK Khadijah 117</h4>
                    <br>
                    <button type="button" class="btn btn-default btn-block" style="border: none"
                    data-toggle="modal"
                    data-target="#data2"><h5>Baca Selengkapnya</h5></button>
                </div>
                </div>
                <!-- END PANEL NO CONTROLS -->
                <div class="col-md-4">
                    <!-- PANEL NO CONTROLS -->
                    <div class="panel">
                        <div class="panel-heading">
                            {{-- <h3 class="panel-title">Panel No Right Controls</h3> --}}
                        </div>
                        <div class="panel-body">
                            <div class="logo text-center"><img src="assets/img/rek.png" width="100px" alt="Klorofil Logo"></div>
                        </div>
                        <h4 class="text-center">Nomor Rekening</h4>
                        <br>
                        <button type="button" class="btn btn-default btn-block" style="border: none"
                        data-toggle="modal"
                        data-target="#norek"><h5>Baca Selengkapnya</h5></button>
                    </div>
                    </div>
                    <!-- END PANEL NO CONTROLS -->
                    <div class="col-md-4">
                        <!-- PANEL NO CONTROLS -->
                        <div class="panel">
                            <div class="panel-heading">
                                {{-- <h3 class="panel-title">Panel No Right Controls</h3> --}}
                            </div>
                            <div class="panel-body">
                                <div class="logo text-center"><img src="assets/img/cs.png" width="100px" alt="Klorofil Logo"></div>
                            </div>
                            <h4 class="text-center">Kontak</h4>
                            <br>
                            <button type="button" class="btn btn-default btn-block" style="border: none"
                            data-toggle="modal"
                            data-target="#kontak"><h5>Baca Selengkapnya</h5></button>
                        </div>
                        </div>
                        <!-- END PANEL NO CONTROLS -->
            </div>

        </div>
</div>
<!-- END MAIN CONTENT -->
<div class="container">
    <div class="modal fade" id="data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="data">Masjid Subulus Salam</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>
                    Masjid Subulussalam merupakan masjid umum yang di bangun pada 1960. Masjid Subulussalam beralamatkan di Dusun Kopen RT 02 RW 02 Desa Kradenan Kecamatan Purwoharjo Kabupaten Banyuwangi Jawa timur. Masjid ini memiliki luas tanah 600 m??, luas bangunan 850 m?? dengan status tanah wakaf. masjid ini memiliki jumlah jamaah kurang lebih 200 orang. Adapun fasilitas yg terdapat di masjid Subulussalam antara lain, Tempat Wudhu, Perlengkapan Sholat, Tempat parkir sepeda dan mobil, karpet, papan pengumuman, lemari, speaker dalam, speaker toa, meja baca alqur'an.
Selain itu terdapat kegiatan rutin yg dilaksanakan di masjid Subulussalam yaitu pengajian malam senin, khataman Al-Qur'an setiap malam Rabu, dan dzikir fida' setiap malam Sabtu.
                </p>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="container">
    <div class="modal fade" id="data1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="data1">TPQ & Madin Subulus Salam</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>
                    Taman Pendidikan Al-Qur'an (TPQ) & Madin Subulussalam merupakan Taman Pendidikan Al-Qur'an yg berada di Dusun Kopen RT 2 RW 2 Desa Kradenan Kecamatan Purwoharjo Kabupaten Banyuwangi Jawa Timur, Taman Pendidikan Al-Qur'an dan Madin Subulussalam ini lebih tepatnya satu lokasi dengan Masjid Subulussalam. TPQ Subulussalam merupakan TPQ yang menggunakan metode qiraati dengan pembelajaran Al-Qur'an secara tartil dan bertajwid, TPQ Subulussalam memiliki santriwan dan santriwati kurang lebih 150, mulai dari usia 4 tahun sampai dengan 13 tahun.
Adapun terdapat Madrasah Diniyah (Madin) Subulussalam yang disini diajarkan kitab kuning, namun disini di ikuti oleh santriwan dan santriwati yang sudah khatam tingkatan Al-Qur'an atau tingkat TPQ nya.
                </p>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="container">
    <div class="modal fade" id="data2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="data2">TK Khadijah 117</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>
                    TK Khadijah 117 merupakan TK yg berada di Dusun Kopen RT 2 RW 2 Desa Kradenan Kecamatan Purwoharjo Kabupaten Banyuwangi Jawa timur, TK Khadijah 117 ini lebih tepatnya satu lokasi dengan Masjid Subulussalam, TK Khadijah 117 di dirikan pada tahun 1996, adapun sarana prasarana yg terdapat di TK Khadijah 117 ini yaitu ruang kelas, ruang perpustakaan, kamar mandi siswa, kamar mandi guru, area bermain.
Adapun terdapat Madrasah Diniyah (Madin) Subulussalam yang disini diajarkan kitab kuning, namun disini di ikuti oleh santriwan dan santriwati yang sudah khatam tingkatan Al-Qur'an atau tingkat TPQ nya.
                </p>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="container">
    <div class="modal fade" id="norek" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="data2">Nomor Rekening</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>
                    3124516781446
            </div>
          </div>
        </div>
      </div>
</div>
<div class="container">
    <div class="modal fade" id="kontak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="data2">Kontak</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <h4>Masjid Subulussalam</h4>
                <div class="logo"><img src="assets/img/lokasi.png" width="50px" alt="Klorofil Logo">
                   <p>Dusun Kopen RT 02 RW 02 Desa Kradenan Kecamatan Purwoharjo 68483 Kabupaten Banyuwangi
                </div>
                <br>
                <div class="logo"><img src="assets/img/nohp.png" width="30px" alt="Klorofil Logo">
                    <p>082232587332 (Imam Syafi'i) </p>
                 </div>
                 <br>
                 <div class="logo"><img src="assets/img/email.png" width="30px" alt="Klorofil Logo">
                    <p>subulussalammasjid47@gmail.com </p>
                 </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
