<?php
class Dance {
    protected string $name;
    protected string $gender;
    public function __construct(string $name, string $gender) {
        $this->name = $name;
        $this->gender = $gender;
    }
    public function getGender(): string {
        return $this->gender;
    }
    public function getName(): string {
        return $this->name;
    }
}
$maleQueue = new SplQueue();
$femaleQueue = new SplQueue();

function getFirstMaleDance($maleQueue) {
    if ($maleQueue->isEmpty()) {
        echo "Không còn dance nam.<br>";
    } else {
        return $maleQueue->dequeue();
    }
}
function getFirstFemaleDance($femaleQueue) {
    if ($femaleQueue->isEmpty()) {
        echo "Không còn dance nữ.<br>";
    } else {
        return $femaleQueue->dequeue();
    }
}
// Thêm dancer nam vào hàng đợi
$maleQueue->enqueue(new Dance("Nam 1", "Nam"));
$maleQueue->enqueue(new Dance("Nam 2", "Nam"));
$maleQueue->enqueue(new Dance("Nam 3", "Nam"));
$maleQueue->enqueue(new Dance("Nam 4", "Nam"));
$maleQueue->enqueue(new Dance("Nam 5", "Nam"));
$maleQueue->enqueue(new Dance("Nam 5", "Nam"));

// Thêm Dance nữ vào hàng đợi
$femaleQueue->enqueue(new Dance("Nữ 1", "Nữ"));
$femaleQueue->enqueue(new Dance("Nữ 2", "Nữ"));
$femaleQueue->enqueue(new Dance("Nữ 3", "Nữ"));
$femaleQueue->enqueue(new Dance("Nữ 1", "Nữ"));
$femaleQueue->enqueue(new Dance("Nữ 2", "Nữ"));
$femaleQueue->enqueue(new Dance("Nữ 3", "Nữ"));
// echo $maleQueue->count();
// echo $femaleQueue->count();
$sl_nam = $maleQueue->count();
$sl_nu = $femaleQueue->count();
// Tạo cặp nhảy cho đến khi ai đó phải đợi (dancer nam)
while (!$maleQueue->isEmpty() && !$femaleQueue->isEmpty()) {
    $maleDancer = getFirstMaleDance($maleQueue);
    // if (!$maleDancer) {
    //     break;
    // }
    $femaleDancer = getFirstFemaleDance($femaleQueue);
    // if (!$femaleDancer) {
    //     break;
    // }
    if ($maleDancer && $femaleDancer) {
        echo "Cặp nhảy: " . $maleDancer->getName() . " và " . $femaleDancer->getName() . "<br>";
    }
}
if ($maleQueue->isEmpty()){
    $maleDancer = getFirstMaleDance($maleQueue);
}
if ($femaleQueue->isEmpty()){
    $femaleDancer = getFirstFemaleDance($femaleQueue);
}
if ($sl_nam > $sl_nu) {
    echo $kq = "Số dance nam đang phải đợi: " . ($sl_nam - $sl_nu);
} elseif($sl_nam < $sl_nu) {
    echo $kq = "Số dance nữ đang phải đợi: " . ($sl_nu - $sl_nam);
}else{
    echo "<hr>" . "khong con ai phai buon";
}
// echo "<hr>";
// echo "<pre>";
// print_r( $femaleQueue->isEmpty());
// Hiển thị số người đang phải đợi (dancer nữ)
// echo "Số Dance nữ đang phải đợi: " . $femaleQueue->count() . "<br>";
// echo "Số Dance nam đang phải đợi: " . $maleQueue->count() . "<br>";
// echo "$kq <br>";