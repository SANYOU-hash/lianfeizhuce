<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST['data'];
    file_put_contents('cont.txt', $data, FILE_APPEND | LOCK_EX);
    echo "注册成功";
} else {
    echo "无效请求";
}
?>
