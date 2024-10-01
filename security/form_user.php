<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();
$user = NULL; //Add new user
$_id = NULL;

// if (empty($_SESSION['id'])) {
//     header('Location: login.php');
// }

if (!empty($_GET['id'])) {
    //Câu 2: Lấy id mã hóa và giải mã để truy vấn
    $_id = $userModel->decodeId($_GET['id'],123);
    $user = $userModel->findUserById($_id); //Update existing user
}


if (!empty($_POST['submit'])) {
    $errors = validateInput($_POST['name'], $_POST['password']);
    // var_dump($errors);
    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
    } 
}

function validateInput($name, $password)
{
    $errors = [];
    // xác minh username
    if (empty($name)) {
        $errors['name'] = "Tên là bắt buộc.";
    } elseif (!preg_match("/^[A-Za-z0-9]{5,15}$/", $name)) {
        $errors['name'] = "Tên phải là ký tự hợp lệ (A-Z, a-z, 0-9) và có chiều dài từ 5 đến 15 ký tự.";
    }
    // xác minh mật khẩu
    if (empty($password)) {
        $errors['password'] = "Mật khẩu là bắt buộc.";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/", $password)) {
        $errors['password'] = "Mật khẩu phải bao gồm chữ thường, chữ HOA, số, và ký tự đặc biệt (~!@#$%^&*()), với chiều dài từ 5 đến 10 ký tự.";
    }
    return $errors;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                    <?php if (isset($errors['name'])): ?>
                        <p style="color: red;"><?php echo $errors['name']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <?php if (isset($errors['password'])): ?>
                        <p style="color: red;"><?php echo $errors['password']; ?></p>
                    <?php endif; ?>
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>

</html>