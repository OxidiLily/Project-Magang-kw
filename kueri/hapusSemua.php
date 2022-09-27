<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/sidebar.css">
<link rel="stylesheet" href="../css/dashboard_admin.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script src="../../js/sidebar.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="../../js/main.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<?php 
include "../koneksi/koneksi.php";
if(isset($_POST['hapusSemuaData'])){
    $sql = "DELETE FROM agenda";
    if(mysqli_query($konek,$sql)){
        
        echo '
        <div class="alert alert-success" style="margin-bottom: 0; text-align: center; width:100%; height: 100%; padding-top:200px;">
        <strong>Sukses !!</strong> Berhasil menghapus data
        <div id="msg"></div>
        </div>';
    }else{
        echo '
        <div class="alert alert-danger" style="margin-bottom: 0; text-align: center; width:100%; height: 100%; padding-top:200px;">
        <strong>Gagal !!</strong> Gagal menghapus data
        <div id="msg"></div>
        </div>';

    }
}
?>
<script>
    var url = "../halaman/admin/inputdata.php"; // membuat url tujuan
    var count = 5; // membuat hitungan kedalam detik
    function countDown() {
    if (count > 0) {
        count--;
        var waktu = count + 1;
        $('#msg').html('Kamu akan dialihkan menuju ke Halaman Input Data dalam hitungan: ' + waktu + ' detik.'+'<i>');
        setTimeout("countDown()", 1000);
    } else {
        window.location.href = url;
       }
    }
        countDown();
</script>
</body>
</html>