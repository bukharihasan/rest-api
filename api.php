<?php
header("Content-Type: application/json; charset=UTF-8");
$requestMethod = $_SERVER["REQUEST_METHOD"];
include('koneksi.php');
switch($requestMethod) {
	case 'GET':	
		if(isset($_GET['lihat'])) {
            $empId = $_GET['id'];
            $result =   mysqli_query($conn,"SELECT * FROM karyawan WHERE id=". $empId);
            $y = mysqli_num_rows($result);
            if($y > 0){
                $data = mysqli_fetch_assoc($result);
                echo json_encode($data);
        }else{
            $data['message'] = "Data tidak ditemukan";
            echo json_encode($data);
        }
    }
    break;
    case 'POST' :
        if(isset($_POST['kirim'])){
            $json = $_POST['json'];
            $ubah = json_decode($json, true);
            //echo count($ubah);die;
            if(count($ubah) == 4){
                
                $nama = $ubah['nama'];
                $email = $ubah['email'];
                $no_hp = $ubah['nomor_hp'];
                $pekerjaan = $ubah['pekerjaan'];
                $que = mysqli_query($conn, "INSERT INTO karyawan (nama,email,nomor_hp,pekerjaan) VALUES ('" . $nama  . "', '" . $email . "', '" . $no_hp . "', '" . $pekerjaan . "')");
                if(que){
                    echo "Penyimpanan berhasil dilakukan";
                }else{
                    echo "Penyimpanan gagal " . $que->error;
            }
            }
            else{
                echo "Masukan data secara benar dan lengkap!";
            }
        }
    break;
	default:
	header("HTTP/1.0 405 Method Not Allowed");
    break;
    
    

    
}


?>