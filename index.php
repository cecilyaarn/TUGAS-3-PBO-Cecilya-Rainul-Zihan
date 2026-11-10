<?php

// Parent Class: Class utama yang menjadi induk bagi class Jacket, TShirt, dan Pants.
class Clothes {

    public $brand; // Public: Data brand bisa diakses dari dalam maupun luar class.
    protected $size; // Protected: Data size hanya bisa diakses dari class sendiri dan class turunannya.
    public $color; // Public: Data warna bisa diakses dari dalam maupun luar class.
    private $price; // Private: Data harga hanya bisa diakses dari class Clothes.

    // Public Constructor: Method khusus yang otomatis dijalankan saat object dibuat untuk mengisi nilai awal property.
    public function __construct($brand, $size, $color, $price) {
        $this->brand = $brand; // Mengisi property brand dengan nilai yang diberikan.
        $this->size = $size; // Mengisi property size dengan nilai yang diberikan.
        $this->color = $color; // Mengisi property color dengan nilai yang diberikan.
        $this->price = $price; // Mengisi property price dengan nilai yang diberikan.
    }

    // Protected Method: Method untuk menampilkan ukuran pakaian dan hanya bisa dipanggil dari class sendiri atau turunannya.
    protected function tampilkanUkuran() {
        echo "Size: " . $this->size . "<br>";
    }

    // Private Method: Method untuk menampilkan harga dan hanya bisa digunakan di dalam class Clothes.
    private function tampilkanHarga() {
        return "Price: Rp" . number_format($this->price, 0, ',', '.') . "<br>";
    }

    // Public Method: Method untuk menampilkan seluruh informasi pakaian dan bisa dipanggil dari luar class.
    public function tampilkanInfo() {
        echo "Brand: " . $this->brand . "<br>";
        $this->tampilkanUkuran(); // Memanggil method untuk menampilkan ukuran.
        echo "Color: " . $this->color . "<br>";
        echo $this->tampilkanHarga(); // Memanggil method untuk menampilkan harga.
    }
}

// Child Class 1: Class Jacket merupakan turunan dari class Clothes.
class Jacket extends Clothes {
}

// Child Class 2: Class TShirt merupakan turunan dari class Clothes.
class TShirt extends Clothes {
}

// Child Class 3: Class Pants merupakan turunan dari class Clothes.
class Pants extends Clothes {
}

// Membuat Object: Membuat object pakaian sekaligus mengisi nilai brand, size, color, dan price.
$jacket = new Jacket("Nike", "L", "Black", 3500000);
$tshirt = new TShirt("Adidas", "M", "White", 2500000);
$pants = new Pants("Levis", "32", "Blue", 4000000);

// Menampilkan Hasil: Memanggil method tampilkanInfo() untuk menampilkan informasi setiap pakaian.
echo "<h2>Jacket</h2>";
$jacket->tampilkanInfo();
echo "<br>";

echo "<h2>T-Shirt</h2>";
$tshirt->tampilkanInfo();
echo "<br>";

echo "<h2>Pants</h2>";
$pants->tampilkanInfo();

?>