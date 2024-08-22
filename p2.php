<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
$x = "Hello world";

echo " Do dai chuoi:" . strlen($x).'<br>';

echo " So tu:" . str_word_count($x).'<br>';

echo " chuoi sau khi dao nguoc:" . strrev($x).'<br>';

echo " thay the ki tu:" . str_replace("world","TMU","Hello world").'<br>';
echo "In hoa het chu cai dau tien:". ucwords("Lam Phuong Thuy").'<br>';
$chuoi = "Hello TMU";
$chuoiCon = "Hello";

echo "một chuỗi có bắt đầu bằng một chuỗi con khác không: " .strncmp($chuoi, $chuoiCon,strlen($chuoiCon)).'<br>';
echo "một chuỗi thành chữ hoa : " . strtoupper("lam phuong thuy").'<br>';
echo "một chuỗi thành chữ thường : " .strtolower("$x").'<br>';
echo "loại bỏ khoảng trắng ở đầu và cuối chuỗi: ". trim(" Welcome ").'<br>';
echo "loại bỏ ký tự đầu tiên của một chuỗi: ". ltrim($x,'H').'<br>';
echo "loại bỏ ký tự cuối cùng của một chuỗi: ". rtrim($x,'d').'<br>';

$y = explode(' ',$x);
echo 'tách một chuỗi thành một mảng các phần tử : <pre>';
print_r(($y));
echo '</pre><br>';
// ex14
$mang = array("Hello", "How", "Are", "You", "Today");
$chuoi = implode(" ", $mang);
echo "Chuỗi sau khi nối: " . $chuoi.'<br>';
//ex15
$chuoiCuoi = str_pad($x, strlen($x) + 6, " today", STR_PAD_RIGHT);
echo "Thêm 'Today' vào cuối chuỗi: " . $chuoiCuoi.'<br>';
//ex16
function endsWithUsingStrrchr($string, $substring) {
    // Tìm vị trí cuối cùng của ký tự đầu tiên trong chuỗi con
    $pos = strrchr($string, $substring[0]);

    // Kiểm tra nếu vị trí này trùng với phần cuối của chuỗi gốc và chuỗi con có độ dài khớp nhau
    return $pos !== false && substr($pos, -strlen($substring)) === $substring;
}

$string = "Hello, TMU!";
$substring = "TMU!";
if (endsWithUsingStrrchr($string, $substring)) {
    echo "Chuỗi '$string' kết thúc bằng '$substring'.";
} else {
    echo "Chuỗi '$string' không kết thúc bằng '$substring'.";
}
//ex17
if (strstr($string, $substring) !== false) {
    echo "Chuỗi '$string' có chứa chuỗi con '$substring'.";
} else {
    echo "Chuỗi '$string' không chứa chuỗi con '$substring'.";
}
//ex18
$replacement = "_";
// Thay thế tất cả ký tự không phải chữ cái hoặc số
$result = preg_replace('/\W/', $replacement, $string);

// Thay thế tất cả các khoảng trắng
$result = preg_replace('/\s/', $replacement, $result);

echo $result.'<br>'; // Output: Hello_World__
//ex19
$st = "123"; // Thay đổi chuỗi này để kiểm tra

// Chuyển đổi chuỗi thành số nguyên và kiểm tra
echo (is_numeric($st) && (int)$st == $st) ? "Chuỗi '$st' là một số nguyên." : "Chuỗi '$st' không phải là một số nguyên.";

//ex20
$email = "lpt0407@example.com"; // Thay đổi chuỗi này để kiểm tra

// Kiểm tra xem chuỗi có phải là email hợp lệ không
echo filter_var($email, FILTER_VALIDATE_EMAIL) ? "Chuỗi '$email' là một email hợp lệ." : "Chuỗi '$email' không phải là một email hợp lệ.";
?>










</body>
</html>