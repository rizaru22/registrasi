<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
        <style>
      
        </style>
         <link href="style.css" rel="stylesheet">
    </head>
    <body>
    <?php
    require_once 'function_date.php';
    $data=json_decode($_GET['data']);
    $ambil_data=(array)$data;
    //var_dump($data);
    $no=strlen($ambil_data['no']);
   
    $no_pendaftaran='';
    if ($no==1){
        $no_pendaftaran='00'.(string)$ambil_data['no'];
    }elseif($no==2){
        $no_pendaftaran='0'.(string)$ambil_data['no'];
    }elseif($no==3){
        $no_pendaftaran=(string)$ambil_data['no'];
    }
?>
    <div class="header">
        <img src="img/kopsmk1_2.png" alt="">
    </div>
    <div class="judul">
        <h4>Bukti Pendaftaran <br>PPDB SMK Negeri 1 Karang Baru <br> TA 2020/2021</h4>
        <h5><?= $no_pendaftaran; ?>/PSB/SMKN1/2020</h5>
    </div>
  <div class="container">
    <div class="bagian1">
        <h5>A.Biodata Calon Siswa</h5>
        <div class="bagian1-tabel">
            <table>
            
                <tbody>
                    <tr>
                        <td width="250px">Nama</td>
                        <td>:</td>
                        <td><?= strtoupper($ambil_data['nama']); ?></td>
                    </tr>
                    <tr>
                        <td width="250px">NISN</td>
                        <td>:</td>
                        <td><?= $ambil_data['nisn']; ?></td>
                    </tr>
                    <tr>
                        <td width="250px">Tempat/Tanggal Lahir</td>
                        <td>:</td>
                        <td><?= ucwords($ambil_data['tempat_lahir']).' / '.tgl_indonesia($ambil_data['tanggal_lahir']); ?></td>
                    </tr>
                    <tr>
                        <td width="250px">Jenis Kelamin</td>
                        <td>:</td>
                        <td><?= $ambil_data['jenis_kelamin']; ?></td>
                    </tr>
                    <tr>
                        <td width="250px">Asal Sekolah</td>
                        <td>:</td>
                        <td><?= strtoupper($ambil_data['asal_sekolah']); ?></td>
                    </tr>
                    <tr>
                        <td width="250px" valign="top">Alamat</td>
                        <td valign="top">:</td>
                        <td valign="top"><?= ucwords($ambil_data['alamat']); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="bagian1-img">
            <p>Photo 3x4</p>
        </div>
    </div>

    <div class="bagian2">
        <h5>B.Data Orang Tua/Wali</h5>
        <div class="bagian1-tabel">
            <table>
                <tbody>
                    <tr>
                        <td width="250px">Nama Orang Tua/Wali</td>
                        <td>:</td>
                        <td><?= strtoupper($ambil_data['wali']); ?></td>
                    </tr>
                    <tr>
                        <td width="250px">Pekerjaan Orang Tua/Wali</td>
                        <td>:</td>
                        <td><?= ucwords($ambil_data['pekerjaan']); ?></td>
                    </tr>
                    <tr>
                        <td width="250px" valign="top">Alamat</td>
                        <td valign="top">:</td>
                        <td valign="top"><?= ucwords($ambil_data['alamat_wali']); ?></td>
                    </tr>
                    <tr>
                        <td width="250px">No HP</td>
                        <td>:</td>
                        <td><?= ucwords($ambil_data['no_hp']); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

   
    <div class="bagian3">
        <h5>C.Jurusan Pilihan & Nilai</h5>
        <div class="bagian1-tabel">
            <table>
                <tbody>
                    <tr>
                        <td width="250px">Pilihan 1</td>
                        <td>:</td>
                        <td><?= ucwords($ambil_data['pilihan1']); ?></td>
                    </tr>
                    <tr>
                        <td width="250px">Pilihan 2</td>
                        <td>:</td>
                        <td><?= ucwords($ambil_data['pilihan2']); ?></td>
                    </tr>
                    <tr>
                        <td width="250px">Matematika</td>
                        <td>:</td>
                        <td><?= ucwords($ambil_data['matematika']); ?></td>
                    </tr>
                    <tr>
                        <td width="250px">Bahasi Indonesia</td>
                        <td>:</td>
                        <td><?= ucwords($ambil_data['indonesia']); ?></td>
                    </tr>
                    <tr>
                        <td width="250px">Bahasi Inggris</td>
                        <td>:</td>
                        <td><?= ucwords($ambil_data['inggris']); ?></td>
                    </tr>
                    <tr>
                        <td width="250px">Prestasi</td>
                        <td>:</td>
                        <td><?= ucwords($ambil_data['prestasi']); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="bagian4">
        <h5>D.Kelengkapan Berkas</h5>
        <div class="bagian4-box">
            <div class="row">
            <table>
                <tr>
                    <td>
                        <div class="item"><p><div class="box"></div>Pas Photo 3x4 dan 2x3 (<i>3 Lembar</i>)</p></div>
                        <div class="item"><p><div class="box"></div>Foto Copy Raport semester 1 s.d 5(<i>Legalisir Kepsek</i>) </p></div>
                        <?php 
                        if(($ambil_data['pilihan1']=='Multimedia')||($ambil_data['pilihan1']=='Rekayasa Perangkat Lunak')||($ambil_data['pilihan1']=='Alat Mesin Pertanian')||($ambil_data['pilihan2']=='Alat Mesin Pertanian')){
                          echo '<div class="item"><p><div class="box"></div>Surat Keterangan Sehat dan Tidak Buta Warna</p></div>';
                        }
                        ?>
                        <div class="item"><p><div class="box"></div>Akte Kelahiran Asli</p></div> 
                        
                    </td>
                    <!-- <td valign="top">
                        
                        
                    </td> -->
                </tr>
            </table>
               
            </div>
        </div>
    </div>

    <div class="bagian5">
        <table>
        <tr>
                <td width="500px">&nbsp;</td>
                <td>&nbsp;</td>
                <td>Karang Baru,.........................</td>
            </tr>
            <tr>
                <td width="500px">Petugas Pendaftaran</td>
                <td>&nbsp;</td>
                <td>Orang Tua/Wali</td>
            </tr>
            <tr>
                <td width="200px" height="140px">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>___________________________</td>
                <td>&nbsp;</td>
                <td><u><?= strtoupper($ambil_data['wali']); ?></u></td>
            </tr>
        </table>
    </div>
    </div>
        <!-- jQuery -->
        
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
                $(document).ready(function(){
                window.print();
                });
        </script>
    </body>
</html>


 
