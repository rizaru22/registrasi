<script>
    $(document).ready(function() {
    $('#example').DataTable();

} );
</script>
<!-- PHP -->
<?php   
require_once 'quickstart.php';
require_once 'function_date.php';
$client = getClient();
$service = new Google_Service_Sheets($client);

$spreadsheetId = '18iohLrBWRJE80nwgqkgjpVH8yHHlYUTEhprJU1B4TTY';
$range = 'Form Responses 1!A2:T';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

?>
    <!-- Akhir PHP -->


<div class="judul mt-5"><h3>Daftar Calon Peserta Didik Baru</h3></div>
<div class="col mt-2">
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
