<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

// if (empty($_SESSION['id'])) {
//     header('Location: login.php');
// }

$user = NULL; //Add new user
$id = NULL;
//Câu 3: Kiểm tra id sau khi đăng nhập xem có quyền xóa không
$currentId = $_SESSION['id'];
if (!empty($_GET['id'])) {
    $id = $userModel->decodeId($_GET['id'],123);
    if ($currentId == $id) {
        $userModel->deleteUserById($id); //Delete existing user
        $_SESSION['message'] = "Xóa thành công!";
    } else {
        $_SESSION['message'] = "Bạn không có quyền thực hiện hành động này!";
    }
    header('Location: list_users.php');
}
?>

    