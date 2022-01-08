<?php
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtMaNV'])){
        $maNhanVien = $_POST['txtMaNV'];
    }
    if(isset($_POST['txtHoTen'])){
        $hoTen = $_POST['txtHoTen'];
    }

    $chucVu = $_POST['txtChucVu'];
    $soMayBan = $_POST['txtSoMayBan'];
    $soDiDong = $_POST['txtSoDiDong'];
    $email = $_POST['txtEmail'];
    $maDonVi = $_POST['cboDonVi'];

    
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','dhtl_danhba');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE db_nhanvien SET hovaten='$hoTen', chucvu='$chucVu', sodt_coquan = '$soMayBan', sodt_didong = '$soDiDong', email='$email', ma_donvi = '$maDonVi' WHERE ma_nhanvien = '$maNhanVien'";
    // echo $sql;

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: admin.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>