<?php
// ==, ===
// ==  : so sánh giá tri, php sẽ ép Kiểu nếu cần
// === : so sánh giá trị + KIỂU Dlieu (strict)

echo "<h3>== so sánh giá trị,=== so sánh giá trị và dlieu</h3>";
$a = 1;
$b = "1";

var_dump($a == $b); // true: 1 == "1"  php ép "1" thành số 1 rồi so sánh
echo "\n\n";
var_dump($a === $b); // false: int(1) !== string("1") vì khác kiểu dữ liệu
echo "\n\n";


$a = 0;
$b = false;

var_dump($a == $b); // true: 0 == false  cả hai đều là falsy khi ép kiểu
echo "\n";
var_dump($a === $b);// false: int(0) !== bool(false)
echo "\n\n";

$a = null;
$b = "";

var_dump($a == $b); // true: php coi null và chuỗi rỗng đều là "rỗng"
echo "\n";
var_dump($a === $b); // false: null !== string("")
echo "\n";
?>

<hr>

<?php
echo "<h3>! phủ định,!! phủ định của phủ định</h3>";
// ! và !!
// !  : phủ định (đảo ngược true  false)
// !! : phủ định kép  ép giá trị về boolean chuẩn

$a = true;

var_dump(!$a); // false: phủ định true
echo "\n";
var_dump(!!$a); // true: phủ định của phủ định  trả về boolean gốc
echo "\n\n";

$a = 0;

var_dump(!$a); // true: 0 là falsy  phủ định thành true
echo "\n";
var_dump(!!$a); // false: ép 0 về boolean  false
echo "\n\n";

$a = "0";

var_dump(!$a); // true: chuỗi "0" là falsy trong php (đặc biệt)
echo "\n";
var_dump(!!$a);// false: ép "0" về boolean  false
echo "\n";
?>

<hr>

<?php
// toán tử logic || (OR)
// Chỉ cần 1 vế là true  kết quả true
// php đánh giá theo truthy / falsy

echo "<h3>logic || OR</h3>";
$a = false;
$b = true;

var_dump($a || $b); // true: false OR true
echo "\n\n";

$a = 0;
$b = "hello";

var_dump($a || $b); // true: 0 là falsy, "hello" là truthy
echo "\n\n";

$a = null;
$b = 0;
$c = "PHP";

var_dump($a || $b || $c); // true: $c là chuỗi không rỗng  truthy
echo "\n";
?>

<hr>

<?php
// toán tử ?? (null coalescing)
// Chỉ kiểm tra NULL hoặc biến ko tồn tại
// ko quan tâm truthy / falsy

echo "<h3> toán tử ??</h3>";

$a = null;
$b = "Manh";

echo $a ?? $b; // "Manh": $a là null  lấy $b
echo "\n\n";

$a = 0;

echo $a ?? 100; // 0: vì 0 KHÔNG phải null
echo "\n\n";

$a = null;
$b = null;
$c = "OK";

echo $a ?? $b ?? $c; // "OK": lấy giá trị đầu tiên khác null
echo "\n";
?>

<hr>

<?php
// toán tử ?: (ternary)
// Điều kiện ? giá_trị_đúng : giá_trị_sai
// Dựa vào truthy / falsy

echo "<h3>toán tử ?:</h3>";

$a = true;

echo $a ? "YES" : "NO"; // YES: true là truthy
echo "\n\n";

$a = 0;

echo $a ? "HOP LE" : "KHONG HOP LE"; // KHONG HOP LE: 0 là falsy
echo "\n\n";

$a = "";

echo $a ? "CO DU LIEU" : "RONG"; // RONG: chuỗi rỗng là falsy
echo "\n\n";

?>

<hr>

<?php
/* nâng cao 1 tí */
// kết hợp ?? và !!

echo "<h3>kết hợp so sánh ?? !!</h3>";

$a = null;

$result = $a ?? false; // nếu $a null  false
var_dump(!!$result); // false: ép về boolean
echo "\n\n";

$user = null;

echo $user ?? "Guest"; // Guest: biến null  lấy giá trị mặc định
echo "\n\n";

$a = "0";

echo !!$a ? "TRUE" : "FALSE";
// false: "0" là falsy  !!"0" = false
echo "\n";