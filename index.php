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

    

    
    <nav class="nav navbar-expand-lg navbar-dark">
    
            <h5 class="mr-auto ml-5 mt-2" style="color : white;">
             SMKN 1 <br> Kr Baru
            </h5>
            <a class="nav-link navigasi" href="home.php">Home</a>
            <a class="nav-link navigasi" href="rekapJurusan.php">Rekap Jurusan</a>
            <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSebBvvyJ92ra6ZfRXqE0xca8_blmhwJ3lt7lOOUG-pT8FPuRw/viewform" target="_blank">GForm</a>
            <a class="nav-link" href="https://docs.google.com/spreadsheets/d/18iohLrBWRJE80nwgqkgjpVH8yHHlYUTEhprJU1B4TTY/edit#gid=45012603" target="_blank">GSheet</a>
         
          </nav>
<div class="row pb-5">
    <div class="col-lg">
        <div class="content-wraper" id="isi">
        </div>
    </div>
</div>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script>
$('#isi').load('home.php');
$('.navigasi').click(function(){
	var link=$(this).attr('href')
	$('#isi').hide().load(link).fadeIn('normal');
	return false;
}); 

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

