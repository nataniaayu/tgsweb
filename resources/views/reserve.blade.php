<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw Up Pet Care</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-base-200 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-teal-600 text-white">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-14 h-14">
                <span class="font-bold text-3xl">Pawtopia Training & Care</span>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="{{ route('pet.home') }}" class="hover:underline">Home</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        <section class="py-12 px-4">
            <div class="container mx-auto max-w-md bg-white rounded-lg shadow-md p-8">
                <h2 class="text-center text-3xl font-extrabold text-teal-600 mb-8">
                    Pawtopia Training & Care Reservation
                </h2>

                <form action="#" method="POST" novalidate>
                    @csrf

                    <!-- Owner's Name -->
                    <div class="form-control mb-5">
                        <label for="owner_name" class="label">
                            <span class="label-text font-semibold text-gray-700">Owner's Name</span>
                        </label>
                        <input type="text" id="owner_name" name="owner_name" placeholder="Your full name" required
                            class="input input-bordered w-full rounded-md focus:ring-2 focus:ring-teal-500 focus:outline-none" />
                    </div>

                    <!-- Pet's Name -->
                    <div class="form-control mb-5">
                        <label for="pet_name" class="label">
                            <span class="label-text font-semibold text-gray-700">Pet's Name</span>
                        </label>
                        <input type="text" id="pet_name" name="pet_name" placeholder="Your pet's name" required
                            class="input input-bordered w-full rounded-md focus:ring-2 focus:ring-teal-500 focus:outline-none" />
                    </div>

                    <!-- Service -->
                    <div class="form-control mb-5">
                        <label for="service" class="label">
                            <span class="label-text font-semibold text-gray-700">Service Type</span>
                        </label>
                        <select id="service" name="service" required
                            class="select select-bordered w-full rounded-md focus:ring-2 focus:ring-teal-500 focus:outline-none">
                            <option disabled selected>Select service</option>
                            <option value="Grooming">Grooming</option>
                            <option value="Walking">Dog Walking</option>
                            <option value="Check-up">Health Check Up</option>
                        </select>
                    </div>

                    <!-- Date -->
                    <div class="form-control mb-7">
                        <label for="reservation_date" class="label">
                            <span class="label-text font-semibold text-gray-700">Reservation Date</span>
                        </label>
                        <input type="date" id="reservation_date" name="reservation_date" required
                            class="input input-bordered w-full rounded-md focus:ring-2 focus:ring-teal-500 focus:outline-none" />
                    </div>

                    <button type="submit"
                        class="btn btn-primary w-full bg-teal-600 hover:bg-teal-700 text-white font-semibold text-lg rounded-md transition-colors duration-300">
                        Reserve Now
                    </button>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-teal-600 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
            <!-- Location -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Our Location</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18..."
                    width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Get in Touch</h3>
                <p>1234 Paw Street, New York City, US</p>
                <p>+62 8768755</p>
                <p>info@pawtopia.com</p>
                <div class="flex space-x-3 mt-3">
                    <a href="#" class="hover:text-gray-200"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-gray-200"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-gray-200"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Menu</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('pet.home') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('pet.shop') }}" class="hover:underline">Pet Shop</a></li>
                    <li><a href="{{ route('pet.reserve') }}" class="hover:underline">Reserve</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-6 border-t border-teal-500 pt-4 text-sm">
            Pawtopia © 2024 | Privacy Policy
        </div>
    </footer>

</body>

</html>
