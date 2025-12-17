<?php
// ==, ===
// ==  : so sánh giá tri, php sẽ ép Kiểu nếu cần
// === : so sánh giá trị + KIỂU Dlieu (strict)

echo "<h3>== so sánh giá trị,=== so sánh giá trị và dlieu</h3>";
$a = 1;
$b = "1";

var_dump($a == $b); // true: 1 == "1"  php ép "1" thành số 1 rồi so sánh
echo "<pre>";
var_dump($a === $b); // false: int(1) !== string("1") vì khác kiểu dữ liệu


$a = 0;
$b = false;

var_dump($a == $b); // true: 0 == false  cả hai đều là falsy khi ép kiểu
echo "<pre>";
var_dump($a === $b);// false: int(0) !== bool(false)

$a = null;
$b = "";

var_dump($a == $b); // true: php coi null và chuỗi rỗng đều là "rỗng"
echo "<pre>";
var_dump($a === $b); // false: null !== string("")
?>

<hr>

<?php
echo "<h3>! phủ định,!! phủ định của phủ định</h3>";
// ! và !!
// !  : phủ định (đảo ngược true  false)
// !! : phủ định kép  ép giá trị về boolean chuẩn

$a = true;

var_dump(!$a); // false: phủ định true
echo "<pre>";
var_dump(!!$a); // true: phủ định của phủ định  trả về boolean gốc

$a = 0;

var_dump(!$a); // true: 0 là falsy  phủ định thành true
echo "<pre>";
var_dump(!!$a); // false: ép 0 về boolean  false

$a = "0";

var_dump(!$a); // true: chuỗi "0" là falsy trong php (đặc biệt)
echo "<pre>";
var_dump(!!$a);// false: ép "0" về boolean  false
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
echo "<pre>";

$a = 0;
$b = "hello";

var_dump($a || $b); // true: 0 là falsy, "hello" là truthy
echo "<pre>";

$a = null;
$b = 0;
$c = "PHP";

var_dump($a || $b || $c); // true: $c là chuỗi không rỗng  truthy
echo "<pre>";
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
echo "<pre>";

$a = 0;

echo $a ?? 100; // 0: vì 0 ko phải null
echo "<pre>";

$a = null;
$b = null;
$c = "OK";

echo $a ?? $b ?? $c; // "OK": lấy giá trị đầu tiên khác null
echo "<pre>";
?>

<hr>

<?php
// toán tử ?: (ternary)
// Điều kiện ? giá_trị_đúng : giá_trị_sai
// Dựa vào truthy / falsy

echo "<h3>toán tử ?:</h3>";

$a = true;

echo $a ? "yes" : "ko"; // yes: true là truthy
echo "<pre>";

$a = 0;

echo $a ? "hop le" : "Ko hop lệ"; // ko hop lệ: 0 là falsy
echo "<pre>";

$a = "";

echo $a ? "có dữ liệu" : "rong"; // rong: chuỗi rỗng là falsy
echo "<pre>";

?>

<hr>

<?php
/* nâng cao 1 tí */
// kết hợp ?? và !!

echo "<h3>kết hợp so sánh ?? !! != !==</h3>";

$a = null;

$result = $a ?? false; // nếu $a null  false
var_dump(!!$result); // false: ép về boolean
echo "<pre>";

$user = null;

echo $user ?? "Guest"; // Guest: biến null  lấy giá trị mặc định
echo "<pre>";

$a = "0";

echo !!$a ? "true" : "false";
// false: "0" là falsy  !!"0" = false
echo "<pre>";

// (!= So sánh không bằng nhau về giá trị,!== So sánh không bằng nhau tuyệt đối)
$a = 1;
$b = "1";

$a != $b;      
$a !== $b; 
echo "<pre>";
var_dump($a != $b);   // false vì cùng giá trị (ép kiểu)
var_dump($a !== $b);  // true vì ko cùng giá trị và dữ liệu


$a = 0;
$b = false;
echo "<pre>";

var_dump($a != $b);    // bool(false)  vì 0 == false
var_dump($a !== $b);   // bool(true)   vì khác kiểu (int / bool)

$a = "0";
$b = false;
echo "<pre>";
var_dump($a != $b);    // bool(false)  vì "0" == false
var_dump($a !== $b);   // bool(true)   vì string / bool


$a = null;
$b = 0;
echo "<pre>";
var_dump($a != $b);    // bool(false)  vì null == 0
var_dump($a !== $b);   // bool(true)   vì null / int


$a = "";
$b = false;
echo "<pre>";
var_dump($a != $b);    // bool(false)  vì "" == false
var_dump($a !== $b);   // bool(true)   vì string / bool
