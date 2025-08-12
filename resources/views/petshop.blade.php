<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawtopia Shop</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-orange-500 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white font-bold text-xl">Pawtopia Shop</h1>
            <ul class="flex space-x-6">
                <li><a href="#" class="text-white hover:underline">Shop</a></li>
                <li><a href="#" class="text-white hover:underline">Cart</a></li>
                <li><a href="#" class="text-white hover:underline">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Product List -->
    <section class="container mx-auto py-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Produk Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Product Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://placekitten.com/300/200" alt="Product 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg">Makanan Kucing</h3>
                    <p class="text-gray-600">Rp 50.000</p>
                    <button class="mt-3 bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <!-- Product Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://placekitten.com/301/200" alt="Product 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg">Mainan Anjing</h3>
                    <p class="text-gray-600">Rp 35.000</p>
                    <button class="mt-3 bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <!-- Product Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://placekitten.com/302/200" alt="Product 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg">Shampoo Hewan</h3>
                    <p class="text-gray-600">Rp 25.000</p>
                    <button class="mt-3 bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-orange-500 text-white text-center py-4 mt-10">
        &copy; 2025 Pawtopia Shop. Semua Hak Dilindungi.
    </footer>
</body>

</html>
