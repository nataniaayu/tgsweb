<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawtopia Shop</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
   <header class="bg-teal-600 text-white">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-14 h-14">
            <span class="font-bold text-3xl">Pawtopia Training & Care</span>
            </div>
            <div class="flex items-center space-x-4">
            <nav class="hidden md:flex space-x-6">
                <a href="{{ route('pet.home') }}">Home</a>
            </nav>
        </div>
    </header>

    <!-- Product Section -->
    <section class="container mx-auto py-10 px-4">
        <h2 class="text-2xl font-bold text-teal-700 mb-6 border-b-2 border-teal-500 pb-2">Foods</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden ">
                <img src="{{ asset('images/puppyfood.jpg') }}" alt="Puppy Food" class="w-50 h-48 object-cover mx-auto">
                <div class="p-4">
                    <h3 class="font-bold text-lg">Dry Food for Puppy</h3>
                    <p class="text-gray-600">Rp 70.000</p>
                    <button class="mt-3 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700 w-full">
                        Add to Cart
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
               <img src="{{ asset('images/addultfood.jpg') }}" alt="Dog Food" class="w-30 h-48 object-cover mx-auto">
                <div class="p-4">
                    <h3 class="font-bold text-lg">Dry Food for Aduult </h3>
                    <p class="text-gray-600">Rp 90.000</p>
                    <button class="mt-3 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700 w-full">
                        Add to Cart
                </div>
            </div>

             <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
               <img src="{{ asset('images/vitamin.jpg') }}" alt="Vitamin" class="w-40 h-48 object-cover mx-auto">
                <div class="p-4">
                    <h3 class="font-bold text-lg">Vitamin</h3>
                    <p class="text-gray-600">Rp 110.000</p>
                    <button class="mt-3 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700 w-full">
                        Add to Cart
                </div>
            </div>

            <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
               <img src="{{ asset('images/snack.jpg') }}" alt="Snack" class="w-40 h-48 object-cover mx-auto">
                <div class="p-4">
                    <h3 class="font-bold text-lg">Chewy Snack</h3>
                    <p class="text-gray-600">Rp 40.000</p>
                    <button class="mt-3 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700 w-full">
                        Add to Cart
                </div>
            </div>
        </div>

        <h2 class="text-2xl font-bold text-teal-700 mb-6 border-b-2 border-teal-500 pb-2">Toys</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('images/toy1.jpg') }}"alt="Dog Toy" class="w-50 h-48 object-cover mx-auto">
                <div class="p-4">
                    <h3 class="font-bold text-lg">Chew Toys</h3>
                    <p class="text-gray-600">Rp 65.000</p>
                    <button class="mt-3 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700 w-full">
                        Add to Cart
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('images/colar.jpg') }}" alt="Pet Colar" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg">Pet Colar</h3>
                    <p class="text-gray-600">Rp 25.000</p>
                    <button class="mt-3 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700 w-full">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-teal-600 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
            <div>
                <h3 class="text-lg font-semibold mb-4">Our Location</h3>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.2709027817025!2d-122.4194152846814!3d37.77492977975986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDQ2JzMwLjkiTiAxMjLCsDI1JzA2LjkiVw!5e0!3m2!1sen!2sus!4v1675280385574!5m2!1sen!2sus" 
                    width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Get in Touch</h3>
                <p>1234 Paw Street, New York City, US</p>
                <p>+62 8768755</p>
                <p>info@pawtopia.com</p>
                <div class="flex space-x-3 mt-3">
                    <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Menu</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('pet.home') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('pet.shop') }}">Pet Shop</a></li>
                    <li><a href="{{ route('pet.reserve') }}">Reserve</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-6 border-t border-teal-500 pt-4 text-sm">
            Pawtopia © 2024 | Privacy Policy
        </div>
    </footer>
</body>

</html>
