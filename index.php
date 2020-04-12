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
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
  
       <style>
           body{
               font-family:"Roboto";
           }
       </style>
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
             SMKN 1 Kr Baru
            </h5>
            <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSebBvvyJ92ra6ZfRXqE0xca8_blmhwJ3lt7lOOUG-pT8FPuRw/viewform" target="_blank">Form Pendaftaran</a>
            <a class="nav-link" href="https://docs.google.com/spreadsheets/d/18iohLrBWRJE80nwgqkgjpVH8yHHlYUTEhprJU1B4TTY/edit#gid=45012603" target="_blank">Spreadsheet</a>
         
          </nav>

<div class="col-lg mt-5">
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
    <!-- Akhir Table -->

    

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

