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


        if (empty($values)) {
            print "No data found.\n";

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
            }
        }
?>
<!-- Jurusan -->

<div class="container mt-4">
<div class="judul mb-4 "><h3>Rekapitulasi Pemilihan Jurusan</h3></div>
    <div class="row">
        <div class="col-lg-6 ">
        
            <div class="card">
                <div class="card-header bg-primary">Pilihan 1</div>
            <ul class="list-group">              
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
        <div class="col-lg-6 mt-2">
        <div class="card ">
                <div class="card-header bg-danger">Pilihan 2</div>
            <ul class="list-group ">              
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

</div>
<!-- Akhir Jurusan -->
    
