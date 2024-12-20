<?php

// hàm connection dùng để kết nối đến CSDL
function connection()
{
    try {
        $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . ";port=" . PORT . ";charset=utf8", USERNAME, PASSWORD);
        // Thiết đặt thuộc tính để kiểm soát ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Lỗi kết nối CSDL" . $e->getMessage();
    }
}

function view($view, $data = [])
{
    //hàm extract để tạo các biến theo mảng liên kết như sau:
    // $data=['id'=>1, 'name'=>'nguyễn văn a'] thì khi sử dụng hàm extract sẽ được biến $id=1 và biến $name='nguyễn văn a'
    extract($data);
    include_once "views/$view.php";
}
// hàm dd dùng để debug
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    die;
}

//Hàm upload file ảnh
function upload_file($file)
{
    if ($file['size'] > 0) {
        $anh = "public/client/assets/images/" . $file['name'];
        move_uploaded_file($file['tmp_name'], $anh);
        return $anh;
    }
    return "";
}

function deleteSessionErrors(){
    if(isset($_SESSION['flash'])){
        // Hủy session sau khi load trang
        unset($_SESSION['flash']);
        unset($_SESSION['errors']);
        unset($_SESSION['thongBao']);
        unset($_SESSION['old_data']);
        unset($_SESSION['successMk']);
        unset($_SESSION['successTt']);
        unset($_SESSION['successAnh']);
        unset($_SESSION['errorsKH']);
        unset($_SESSION['tong']);
        unset($_SESSION['layMk']);
        unset( $_SESSION['dat_hang_thanh_cong']);

     //   session_unset();
      //  session_destroy();
    }
}