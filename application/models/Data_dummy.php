<?php

/**
*
*/
class Data_dummy extends MY_Model
{
  public $data_dummy = array(
      'dummyservices' => array(
        'mechanical' => array (
            'article' => array(
              array(
                'title' => 'System plumbing dan instalasi air bersih',
                'content' => 'Sistem plumbing adalah suatu pekerjaan meliputi sistem pembuangan limbah / air buangan (air kotor dan air bekas) dan system penyediaan air bersih.'
              ),
              array(
                'title' => 'System Fire Fighting (System Pemadam kebakaran)',
                'content' => 'Sistem Fire Fighting atau sistem pemadam kebakaran disediakan di gedung sebagai preventif (pencegah) terjadinya kebakaran. Sistem ini terdiri dari sistem sprinkler,sistem hidran dan Fire Extinguisher. Dan pada tempat-tempat tertentu digunakanjuga sistem fire gas. Tetapi pada umumnya sistem yang digunakan terdiri dari system sprinkler, hidran  dan  fire  extinguisher'
              ),
              array(
                'title' => 'System Tata Udara (AC / Air Conditioning)',
                'content' => 'Secara umum sistem tata udara berfungsi mempertahankan kondisi udara ruanga baik suhu maupun kelembaban agar udara terasa lebih nyaman.     Kenyamanan dalam suatu ruangan diperkantoran  / fungsi gedung lainnya merupakan kebutuhan psikologis yang mulai banyak diperhatikan di zaman modern ini.'
              )
            )
          ),
          'electrical' => array(
            'article' => array(
              array(
                'title' => 'Sistem Elektrikal',
                'content' => 'Sistem elektrikal merupakan suatu rangkaian peralatan penyediaan daya listrik untuk memenuhi kebutuhan daya listrik tegangan rendah. Dalam rangkaian peralatan yang disediakan meliputi sarana penyesuaian tegangan listrik (trafo/ transformator), sarana penyaluran utama (Kabel feeder)  dan panel hubung utama  atau LVMDP (Low Voltage Main Distribution  Panel) dan panel distribusi utama di tiap gedung (SDP / Sub Distribution Panel) dan terakhir panel-panel di tiap lantai (PP-LP untuk penerangan, Panel Stop Kontak, Panel Stop Kontak UPS, Panel UPS OK dan PVAC utuk power AC).'
              ),
              array(
                'title' => 'Sistem penangkal petir',
                'content' => 'Secara umum sistem ini berfungsi untuk memproteksi gedung dan sekitarnya dari  petir. Pekerjaan penangkal petir menyangkut meliputi pemassangan dan penyediaan instalasi penagkal petir,  grounding dan pembuatan bak kontrol.'
              ),
              array(
                'title' => 'Sistem telepon',
                'content' => 'Sistem telepon berfungsi ssebagai alat komunikasi antar instansi dalam gedung. Sistem ini  menggunakan PABX yang berfungsi sebagai sentral komunikasi telepon di dalam gedung (pelanggan) yang terhubung dengan telkom'
              ),
              array(
                'title' => 'Sistem tata suara (Sound system)',
                'content' => 'Sistem  ini berfungsi sebagai publik adress, paging dan pengumuman. Sistem ini  terdiri dari peralatan untuk memenuhi background music dan pengumuman darurat.'
              ),
              array(
                'title' => 'Sistem Data / Jaringan Komputer',
                'content' => 'Berfungsi sebagai jaringan komputer terintegrasi dalam gedung.      Sistem kabel data  atau  disebut juga Local Area Network (LAN) merupakan jaringan computer yang menghubungkan computer pc dari workstation untuk memakai bersama sumberdaya(resource, misalnya printer, internet, dan lain-lain) dan saling bertukar informasi.'
              ),
              array(
                'title' => 'Sistem MATV (master Television)',
                'content' => ' Kebutuhan pengelolaan televisi dalam suatu bangungan menjadi kebutuhan di perkantoran. Sistem ini dinamakan dengan sistem master antena TV (MATV). Sistem MATV terdiri dari beberapa perangkat penerima (receiver), mixer, dan penguat sinyal.'
              ),
              array(
                'title' => 'Sistem CCTV (Close Circuit Television)',
                'content' => 'Sistem CCTV  merupakan bagian dari upaya untuk mempermudah pekerjaan sekuriti sistem, yang terintegrasi untuk  memberikan kemudahan dalam proses pengontrolan dan pemantauan lebih akurat dan otomatis.'
              )
            )
          ),
          'gas installation' => array(
            'article' => array(
              array(
                'title' => 'Sistem Instalasi Gas',
                'content' => 'Sistem instalasi gas di mall biasanya untuk peruntukan restoran dan Food Court (pusat makanan). Sistem instalasi gas di Mall ini merupakan sentral instalasi  gas yang terkoneksi dengan peralatan masak di dalam unit restoran maupun foodcourt sebagai fungsi suply bahan bakar  yang berkaiatan dengan penggunaan alat masak  di restoran atau  food court tersebut.'
              )
            )
          )
      )
		);
	function __construct()
	{
		parent::__construct();
	}
  function get_data()
  {
    return $this->data_dummy;
  }

}

 ?>
