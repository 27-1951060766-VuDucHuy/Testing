<?php
    // Bất kì đoạn code PHP nào cũng phải được đặt vào khối này (cho dù có HTML hay không);

    // // 1. Khai báo biến
    // $bien1 = 5;
    // $bien2 = "Chuỗi 1";
    // $bien3 = 'Chuỗi 2';

    //     // Biến khai báo mở đầu bằng kí tự $, ko cần chỉ định kiểu, tự xác định động theo giá trị
    // // 2. Kiểu dữ liệu PHP: int, float, String, NULL, Boolean, array, object ...
    // // array, string, date ... là các kiểu mà nó được cung cấp kèm theo rất nhiều HÀM DỰNG sẵn > các hàm có tên là gì, sử dụng thế nào 

    // $mang1 = [1, 3, 4, 6, 7];
    // $mang2 = array(3, 4, 5, 6, 7);

    // // Mảng Indexed Array (Mảng chỉ số/Mảng chỉ mục)
    // echo '<pre>';
    // echo print_r($mang2);
    // echo '</pre>';

    // $mang3 = ['hi'=>'xin chào', 'morning'=>'chào buổi sáng','afternoon'=>'chào buổi chiều'];
    // // Mảng associated ... > Dạng mảng thường truy vấn để lấy ra từ CSDL

    // // Cú pháp sau: sau này có thể dùng để phân tích cấu trúc 1 biến MẢNG
    // echo '<pre>';
    // echo print_r($mang3);
    // echo '</pre>';
    // $mausac = 'red';
    // // 3. Kiểu String và cách xử lý biến 
    // echo 'Tôi đang là biến 1, giá trị của tôi là: $bien1 <br>'; //Mọi thứ đặt trong dấu nháy đơn đều được coi là kí tự.
    // echo 'Tôi đang là biến 1, giá trị của tôi là: '.$bien1.'<br>'; //Dùng dấu . để tách và nối chuỗi
    // echo 'Tôi đang là biến 1, giá trị của tôi là: {$bien1} <br>';
    // echo "Tôi đang là biến 1, giá trị của tôi là: $bien1 <br>"; //Dùng nháy kép, nó luôn phân tích chuỗi > Tìm xem có BIẾN ở trong ko?
    // echo "Tôi đang là biến 1, giá trị của tôi là: {$mang3["hi"]} <br>";
    // // echo "Tôi đang là biến 1, giá trị của tôi là: $mang3["hi"] <br>";
    // echo '<a href="http://dantri.com.vn" style="color:$mausac"> Click Here</a>';
    // echo "<a href='http://dantri.com.vn' style='color:$mausac'> {$mang3['afternoon']}</a> <br>";

    // // 4. Phạm vi biến: local (cục bộ), global (toàn cục), super global (siêu toàn cục: $_GET, $_POST, $_SERVER ...)

    // function hamGiDo(){
    //     // $mang3 = 'Gì gì đó';
    //     global $mang3;

    //     // echo 'Tôi là biến '.$mang3['hi'];
    //     // echo '<pre>';
    //     //     echo print_r($_SERVER);
    //     // echo '</pre>';
        
    //     echo $_SERVER['SERVER_PORT'];
    // }

    // hamGiDo();

    // // 5. Hằng số
    // define("HANGSO","Tôi là hằng số");
    // echo HANGSO.'<br>';

    // echo __FILE__;
    // //6. Các cấu trúc điều khiển rẽ nhánh, lặp
    // echo 'Demo vòng FOR thông thường:';
    // for($i=0;$i<count($mang2);$i++){
    //     echo $mang2[$i].'<br>';
    // }

    // echo 'Demo vòng FOREACH:';
    // foreach($mang2 as $element){
    //     echo $element.'<br>';
    // }

    // echo 'Demo vòng FOR:';
    // for($i=0;$i<count($mang2);$i++):
    //     echo $mang2[$i].'<br>';
    // endfor;

    // echo 'Demo vòng FOREACH:';
    // foreach($mang2 as $element):
    //     echo $element.'<br>';
    // endforeach;

    // 7. Truyền nhận dữ liệu trong PHP
    // Sử dụng phương thức GET với thẻ a
    // Sử dụng phương thức GET/POST với FORM
    // Sử dụng phương thức GET/POST với Ajax (Javascript)

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="other.php" method="post">
        Username: <input type="text" name="txtInput">
        Password: <input type="password" name="txtPass">
        <button type="submit" name="btnGuiDi" value="send">Gửi đi</button>
    </form>
</body>
</html>