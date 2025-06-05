// public/Javascript/dashboard.js

// Struktur global cart
let cart = [];

// Saat halaman dimuat, ambil cart dari localStorage
document.addEventListener("DOMContentLoaded", function () {
    cart = JSON.parse(localStorage.getItem("cart")) || [];
    updateBadge();
});

// Tambah ke keranjang dari tombol "Tambah ke Keranjang" di modal (menggunakan counter)
function addToCart() {
    const nama = currentProduct.nama;
    const harga = Number(currentProduct.harga);
    const image = currentProduct.image;
    const id = currentProduct.id;
    const quantity = Number(document.getElementById("counter").innerText);

    _addOrUpdateCartItem(id, nama, harga, image, quantity);
    alert(
        `"${nama}" sebanyak ${quantity} buah telah ditambahkan ke keranjang.`
    );
    updateBadge();
}

// Tambah ke keranjang langsung dari klik gambar (quantity = 1)
function addToCartFromImage(id, nama, harga, image) {
    _addOrUpdateCartItem(id, nama, harga, image, 1);
    alert(`"${nama}" telah ditambahkan ke keranjang.`);
    updateBadge();
}

// Fungsi internal untuk menambahkan atau mengupdate item di dalam array cart
function _addOrUpdateCartItem(id, nama, harga, image, quantityToAdd) {
    // Cek apakah item sudah ada di cart
    let existingIndex = cart.findIndex((item) => item.id === id);
    if (existingIndex > -1) {
        // Jika sudah ada, tambah quantity
        cart[existingIndex].quantity += quantityToAdd;
    } else {
        // Jika belum ada, push sebagai item baru
        cart.push({
            id: id,
            nama: nama,
            harga: harga,
            image: image,
            quantity: quantityToAdd,
        });
    }
    // Simpan kembali ke localStorage
    localStorage.setItem("cart", JSON.stringify(cart));
}

// Update badge keranjang (menampilkan total quantity)
function updateBadge() {
    cart = JSON.parse(localStorage.getItem("cart")) || [];
    const badge = document.getElementById("cartBadge");
    let totalQty = cart.reduce((sum, item) => sum + item.quantity, 0);
    badge.innerText = totalQty;
}

// Fungsi increment/decrement di modal untuk mengubah counter
let counter = 1;
function increment() {
    counter++;
    document.getElementById("counter").innerText = counter;
}
function decrement() {
    if (counter > 1) {
        counter--;
        document.getElementById("counter").innerText = counter;
    }
}

// Menyimpan data nota di localStorage dan kosongkan cart (dipakai di cart.blade.php)
function checkout() {
    if (cart.length === 0) {
        alert("Keranjang kosong.");
        return;
    }

    const nama = document.getElementById("formNama").value.trim();
    const jenis = document.querySelectorAll("select")[0].value;
    const metode = document.querySelectorAll("select")[1].value;
    const meja = document.getElementById("angka").value.trim();

    if (
        !nama ||
        jenis === "Makan Di Tempat?" ||
        metode === "Masukan Metode Pembayaran" ||
        (jenis === "Dine In" && !meja)
    ) {
        alert("Mohon lengkapi semua data.");
        return;
    }

    const total = cart.reduce(
        (sum, item) => sum + item.harga * item.quantity,
        0
    );

    const notaData = {
        nama: nama,
        jenis: jenis,
        metode: metode,
        meja: meja || "-",
        items: cart,
        total: total,
    };

    localStorage.setItem("nota", JSON.stringify(notaData));
    localStorage.setItem("cart", JSON.stringify([]));
    window.location.href = "/nota"; // sesuaikan jika route nota berbeda
}
