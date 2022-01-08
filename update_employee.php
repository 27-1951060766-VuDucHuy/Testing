<?php
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma_nhanvien = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','dhtl_danhba');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM db_nhanvien WHERE ma_nhanvien = '$ma_nhanvien'";

    $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

    // Bước 03: Xử lý kết quả
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $ma_donvi = $row['ma_donvi'];
    }

    // Bước 04: Đóng kết nối
    mysqli_close($conn);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TLU - Administration</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
            </nav>
        </div>
    </header>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Cập nhật thông tin Danh bạ nhân viên</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="process-update-employee.php" method="post">
            <div class="form-group">
                <label for="txtMaNV">Mã nhân viên</label>
                <input type="text" class="form-control" id="txtMaNV" name="txtMaNV" placeholder="Mã nhân viên" value="<?php echo $row['ma_nhanvien']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên" value="<?php echo $row['hovaten']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            
            <div class="form-group">
                <label for="txtChucVu">Chức vụ</label>
                <input type="text" class="form-control" id="txtChucVu" name="txtChucVu" placeholder="Nhập chức vụ" value="<?php echo $row['chucvu']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtSoMayBan">Số máy bàn</label>
                <input type="tel" class="form-control" id="txtSoMayBan" name="txtSoMayBan" placeholder="Nhập số máy bàn" value="<?php echo $row['sodt_coquan']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtSoDiDong">Số di động</label>
                <input type="tel" class="form-control" id=txtSoDiDong" name="txtSoDiDong" placeholder="Số di động" value="<?php echo $row['sodt_didong']; ?>">
                
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập email" value="<?php echo $row['email']; ?>">
               
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Đơn vị</label>
                <select class="form-control" id="cboDonVi" name="cboDonVi">
                    <!-- Truy vấn dữ liệu để Hiển thị lựa chọn Đơn vị -->
                    <?php 
                        // Bước 01: Kết nối Database Server
                        $conn = mysqli_connect('localhost','root','','dhtl_danhba');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT * FROM db_donvi";

                        $result = mysqli_query($conn,$sql);

                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                                if($row['ma_donvi'] == $ma_donvi){
                                    echo '<option selected value="'.$row['ma_donvi'].'">'.$row['ten_donvi'].'</option>';
                                }else{
                                    echo '<option value="'.$row['ma_donvi'].'">'.$row['ten_donvi'].'</option>';
                                }

                            }
                        }

                        // Bước 03: Đóng kết nối
                        mysqli_close($conn);
                    ?>
               
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>