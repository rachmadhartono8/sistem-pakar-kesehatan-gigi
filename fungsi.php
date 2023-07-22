<?php

function answer($kode){
    if($kode=='n1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=n2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=n3'>Tidak</a>";
    }
    if($kode=='n2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S200'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m3-b'>Tidak</a>";
    }

    if($kode=='n3'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=n1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=S100'>Tidak</a>";
    }

    if($kode=='n4'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S200'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=n6'>Tidak</a>";
    }

    if($kode=='n5'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S200'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=n8'>Tidak</a>";
    }


}

function kesimpulan($penyakit){
    include 'koneksi.php';
    $sql = "SELECT * from tb_kesimpulan_gigi WHERE solusi='$penyakit' AND status='setuju'";
    $data = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p>-'.$row['fakta'].'</p>';
    }  
}

function solusi($kode){    
    if ($kode=='S200') {
        $penyakit = "Scaling";
        kesimpulan($penyakit);        
    }
    if ($kode=='S200') {
        $jurusan = "Informatika";
        kesimpulan($jurusan);        
    }
    if ($kode=='s2') {
        $jurusan = "Sistem Informasi";
        kesimpulan($jurusan);
    }
}
?>
