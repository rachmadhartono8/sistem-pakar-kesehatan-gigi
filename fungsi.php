<?php

function question($kode){
    // Pertanyaan

    if($kode=='G01'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G02'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G04'>Tidak</a>";
    }

    if($kode=='G02'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G03'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=P01'>Tidak</a>";
    }

    if($kode=='G04'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G14'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G10'>Tidak</a>";
    }

    if($kode=='G03'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=P02'>Ya</a>";
        // ya akan merefer ke Periodontitis
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G05'>Tidak</a>";
    }

    if($kode=='G05'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G12'>Ya</a>";
        // echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G16'>Tidak</a>";
    }
    if($kode=='G12'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=P05'>Ya</a>";
        // Stomatitis Aftosa
        // echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=n8'>Tidak</a>";
    }

    

    if($kode=='G14'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=P03'>Ya</a>";
        // Stomatitis Aftosa
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=n8'>Tidak</a>";
    }

    if($kode=='G10'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=P04'>Ya</a>";
        // Cheilitis
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G06'>Tidak</a>";
    }

    if($kode=='G06'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G07'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G16'>Tidak</a>";
    }
    if($kode=='G07'){
        // echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode='>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G08'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G07'>Tidak</a>";
    }

    if($kode=='G08'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=P07'>Ya</a>";
        // Cheilitis
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G06'>Tidak</a>";
    }

    if($kode=='G16'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G14'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=G16'>Tidak</a>";
    }



    // Solusi
    if($kode=='P06'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s5'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s6'>Tidak</a>";
    }

    if($kode=='m9-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s5'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s6'>Tidak</a>";
    }

    if($kode=='m9-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s5'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s6'>Tidak</a>";
    }

    if($kode=='m9-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s5'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s6'>Tidak</a>";
    }


}

function kesimpulan($penyakit){
    include 'koneksi.php';
    $sql = "SELECT * from tb_kesimpulan_gigi WHERE solusi='$penyakit' AND status='setuju'";
    $data = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p>-'.$row['fakta'].'</p>';
    }
    
    $sql = "SELECT * from tb_kesimpulan_gigi WHERE solusi='$penyakit' AND status='setuju'";
    $data = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($data)) {
        // echo '<p>-'.$row['fakta'].'</p>';
    echo '<br>-'.$row['tindakan'].'</br>';
    }
}

// function solusi($kode){    
//     if ($kode=='S200') {
//         $penyakit = "Scaling";
//         kesimpulan($penyakit);        
//     }
//     if ($kode=='S203') {
//         $penyakit = "Root Planing";
//         kesimpulan($penyakit);        
//     }
//     if ($kode=='S204') {
//         $penyakit = "Medikasi";
//         kesimpulan($penyakit);
//     }
//     if ($kode=='S205') {
//         $penyakit = "Medikasi";
//         kesimpulan($penyakit);
//     }
//     if ($kode=='S206') {
//         $penyakit = "Medikasi";
//         kesimpulan($penyakit);
//     }
//     if ($kode=='S207') {
//         $penyakit = "Medikasi";
//         kesimpulan($penyakit);
//     }
//     if ($kode=='S208') {
//         $penyakit = "Medikasi & Perawatan Saluran Akar";
//         kesimpulan($penyakit);
//     }
// }



function solusi($kode){    
    if ($kode=='P01') {
        $penyakit = "Gingvitis";
        kesimpulan($penyakit);        
    }
    if ($kode=='P02') {
        $penyakit = "Periodontitis";
        kesimpulan($penyakit);        
    }
    if ($kode=='P03') {
        $penyakit = "Stomatitis Aftosa";
        kesimpulan($penyakit);
    }
    if ($kode=='P04') {
        $penyakit = "Halitosis";
        kesimpulan($penyakit);
    }
    if ($kode=='P05') {
        $penyakit = "Cheilitis";
        kesimpulan($penyakit);
    }
    if ($kode=='P06') {
        $penyakit = "Abses Periodontal";
        kesimpulan($penyakit);
    }
    if ($kode=='P07') {
        $penyakit = "Karies Gigi";
        kesimpulan($penyakit);
    }
}


// function penyakitGigi($penyakit){
//     include 'koneksi.php';
//     $sql = "SELECT * from tb_kesimpulan_gigi WHERE solusi='$penyakit' AND status='setuju'";
//     $data = mysqli_query($connect,$sql);
//     while ($row = mysqli_fetch_assoc($data)) {
//         echo '<p>-'.$row['fakta'].'</p>';
//     }  
// }

// function penyakit($kode){    
//     if ($kode=='S200') {
//         $penyakit = "Scaling";
//         kesimpulan($penyakit);        
//     }
//     if ($kode=='S203') {
//         $penyakit = "Root Planing";
//         kesimpulan($penyakit);        
//     }
//     if ($kode=='S204') {
//         $penyakit = "Medikasi";
//         kesimpulan($penyakit);
//     }
//     if ($kode=='S205') {
//         $penyakit = "Medikasi";
//         kesimpulan($penyakit);
//     }
//     if ($kode=='S206') {
//         $penyakit = "Medikasi";
//         kesimpulan($penyakit);
//     }
//     if ($kode=='S207') {
//         $penyakit = "Medikasi";
//         kesimpulan($penyakit);
//     }
// }
?>
