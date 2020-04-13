<?php
require_once 'quickstart.php';
require_once 'function_date.php';
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PPDB SMKN 1 Karang Baru</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
        <link href="style_index.css" rel="stylesheet">
    </head>
    <body>

    <!-- PHP -->
 <?php   
$client = getClient();
$service = new Google_Service_Sheets($client);

$spreadsheetId = '18iohLrBWRJE80nwgqkgjpVH8yHHlYUTEhprJU1B4TTY';
$range = 'Form Responses 1!A2:T';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

?>
    <!-- Akhir PHP -->

    
    <nav class="nav navbar-expand-lg bg-dark">
    
            <h5 class="mr-auto ml-5 mt-2" style="color : white;">
             SMKN 1 <br> Kr Baru
            </h5>
            <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSebBvvyJ92ra6ZfRXqE0xca8_blmhwJ3lt7lOOUG-pT8FPuRw/viewform" target="_blank">Form Pendaftaran</a>
            <a class="nav-link" href="https://docs.google.com/spreadsheets/d/18iohLrBWRJE80nwgqkgjpVH8yHHlYUTEhprJU1B4TTY/edit#gid=45012603" target="_blank">Spreadsheet</a>
         
          </nav>
<div class="judul mt-5"><h3>Daftar Calon Peserta Didik Baru</h3></div>
<div class="col-lg mt-2">
    <!-- Table -->

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <!-- <th>Tempat Lahir</th> -->
                <!-- <th>Tanggal Lahir</th> -->
                <th>Asal Sekolah</th>
                <th>Pilihan 1</th>
                <th>Pilihan 2</th>
                <th>No. HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (empty($values)) {
            print "No data found.\n";
            echo '<tr>
            <td colspan="10" style="color: red;">Data Tidak Tersedia</td>
            </tr>';
        } else {
           // print "Name, Major:\n";
           $rpl=0;
           $mm=0;
           $amp=0;
           $ppt=0;
           $atph=0;
           $apat=0;
           $aphp=0;
           $atu=0;
           $atp=0;


           $rpl2=0;
           $mm2=0;
           $amp2=0;
           $ppt2=0;
           $atph2=0;
           $apat2=0;
           $aphp2=0;
           $atu2=0;
           $atp2=0;

           $no=1;

            foreach ($values as $row) {
                
                $data=array(
                    "no"=>$no,
                    "nama"=> $row[1],
                    "nisn"=> $row[2],
                    "tempat_lahir" =>$row[4],
                    "tanggal_lahir"=>$row[5],
                    "jenis_kelamin"=>$row[6],
                    "asal_sekolah"=>$row[7],
                    "alamat"=>$row[8],
                    "wali"=>$row[9],
                    "pekerjaan"=>$row[11],
                    "alamat_wali"=>$row[12],
                    "no_hp"=>$row[13],
                    "pilihan1"=>$row[14],
                    "pilihan2"=>$row[15],
                    "matematika"=>$row[16],
                    "indonesia"=>$row[17],
                    "inggris"=>$row[18]);

                if ($row[14]=='Multimedia'){
                    $mm+=1;
                }elseif($row[14]=='Rekayasa Perangkat Lunak'){
                    $rpl+=1;
                }elseif($row[14]=='Alat Mesin Pertanian'){
                    $amp+=1;
                }elseif($row[14]=='Pemuliaan dan Pembenihan Tanaman'){
                    $ppt+=1;
                }elseif($row[14]=='Agribisnis Tanaman Pangan dan Hortikultura'){
                    $atph+=1;
                }elseif($row[14]=='Agribisnis Perikanan Air Tawar'){
                    $apat+=1;
                }elseif($row[14]=='Agribisnis Pengelohan Hasil Pertanian'){
                    $aphp+=1;
                }elseif($row[14]=='Agribisnis Ternak Unggas'){
                    $atu+=1;
                }elseif($row[14]=='Agribisnis Tanaman Perkebunan'){
                    $atp+=1;
                }

                if ($row[15]=='Multimedia'){
                    $mm2+=1;
                }elseif($row[15]=='Rekayasa Perangkat Lunak'){
                    $rpl2+=1;
                }elseif($row[15]=='Alat Mesin Pertanian'){
                    $amp2+=1;
                }elseif($row[15]=='Pemuliaan dan Pembenihan Tanaman'){
                    $ppt2+=1;
                }elseif($row[15]=='Agribisnis Tanaman Pangan dan Hortikultura'){
                    $atph2+=1;
                }elseif($row[15]=='Agribisnis Perikanan Air Tawar'){
                    $apat2+=1;
                }elseif($row[15]=='Agribisnis Pengelohan Hasil Pertanian'){
                    $aphp2+=1;
                }elseif($row[15]=='Agribisnis Ternak Unggas'){
                    $atu2+=1;
                }elseif($row[15]=='Agribisnis Tanaman Perkebunan'){
                    $atp2+=1;
                }
            echo '<tr>
                <td>'.$no.'</td>
                <td>'.$row[2].'</td>
                <td>'.strtoupper($row[1]).'</td>';
                //<td>'.$row[4].'</td>
                //<td>'.tgl_indonesia($row[5]).'</td>
                echo '<td>'.$row[7].'</td>
                <td>'.$row[14].'</td>
                <td>'.$row[15].'</td>
                <td>'.$row[13].'</td>
                <td><button type="button" class="btn btn-success" onclick="cetak('.htmlentities(json_encode($data)).')">Print</button></td>
            </tr>';
                $no++;
            }
        }
        ?>
            
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <!-- <th>Tempat Lahir</th> -->
                <!-- <th>Tanggal Lahir</th> -->
                <th>Asal Sekolah</th>
                <th>Pilihan 1</th>
                <th>Pilihan 2</th>
                <th>No. HP</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>
    </div>
    <!-- Akhir Table -->
<!-- Jurusan -->

<div class="container mt-5 pb-5 ">
<div class="judul mb-5 ">
        <h3>Rekapitulasi Pemilihan Jurusan</h3>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary">Pilihan 1</div>
            <ul class="list-group list-group-flush">              
                <li class="list-group-item d-flex justify-content-between align-items-center">Agribisnis Tanaman Perkebunan<span class="badge badge-success badge-pill"><?= $atp; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Agribisnis Ternak Unggas<span class="badge badge-success badge-pill"><?= $atu; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Agribisnis Pengelohan Hasil Pertanian<span class="badge badge-success badge-pill"><?= $aphp; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Agribisnis Perikanan Air Tawar<span class="badge badge-success badge-pill"><?= $apat; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Agribisnis Tanaman Pangan dan Hortikultura<span class="badge badge-success badge-pill"><?= $atph; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Pemuliaan dan Pembenihan Tanaman<span class="badge badge-success badge-pill"><?= $ppt; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Alat Mesin Pertanian<span class="badge badge-success badge-pill"><?= $amp; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Multimedia<span class="badge badge-success badge-pill"><?= $mm; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Rekayasa Perangkat Lunak<span class="badge badge-success badge-pill"><?= $rpl; ?></span></li>
            </ul>
        </div>            
        </div>
        <div class="col-lg-6">
        <div class="card">
                <div class="card-header bg-danger">Pilihan 2</div>
            <ul class="list-group list-group-flush">              
                <li class="list-group-item d-flex justify-content-between align-items-center">Agribisnis Tanaman Perkebunan<span class="badge badge-warning badge-pill"><?= $atp2; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Agribisnis Ternak Unggas<span class="badge badge-warning badge-pill"><?= $atu2; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Agribisnis Pengelohan Hasil Pertanian<span class="badge badge-warning badge-pill"><?= $aphp2; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Agribisnis Perikanan Air Tawar<span class="badge badge-warning badge-pill"><?= $apat2; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Agribisnis Tanaman Pangan dan Hortikultura<span class="badge badge-warning badge-pill"><?= $atph2; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Pemuliaan dan Pembenihan Tanaman<span class="badge badge-warning badge-pill"><?= $ppt2; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Alat Mesin Pertanian<span class="badge badge-warning badge-pill"><?= $amp2; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Multimedia<span class="badge badge-warning badge-pill"><?= $mm2; ?></span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Rekayasa Perangkat Lunak<span class="badge badge-warning badge-pill"><?= $rpl2; ?></span></li>
            </ul>
            
        </div>            

        </div>
    </div>
</div>

<!-- Akhir Jurusan -->
    

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script>
    $(document).ready(function() {
    $('#example').DataTable();

} );

function cetak(data){
    var stringData = JSON.stringify( data );
    $("<iframe id='cetak'>")    
    //.hide()                   
    .attr("style","width:0;height:0;border:0;border:none;")  
    .attr("src", "cetak.php?data="+stringData)
    .appendTo("body");    

    
}
</script>
    </body>
</html>

