<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw Up Pet Care</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50">

    <header class="bg-teal-600 text-white">
        <div class="container mx-auto px-2  py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-14 h-14">
                <span class="font-bold text-3xl">Paws Up Pet Care</span>
            </div>
            <nav class="absolute left-1/2 transform -translate-x-1/2 flex space-x-6">
                <a href="#benefits" class="hover:underline">Benefits</a>
                <a href="#services" class="hover:underline">Care Services</a>
            </nav>
            <a href="{{ route('pet.reserve') }}" class="border border-white px-4 py-1 rounded hover:bg-teal-300 inline-block text-white">
                Reserve
            </a>

        </div>
    </header>

     <section class="bg-yellow-100 py-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center text-center md:text-left">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h2 class="text-6xl font-extrabold mb-6">Professional <span class="text-teal-500">Pet Training</span> & <span class="text-orange-500">Care</span></h2>
                <p class="text-xl mb-6">Helping your pets become their best selves with personalized training and care services.</p>
                <a href="#what-we-offer" class="bg-teal-500 text-white py-3 px-6 text-lg rounded-lg hover:bg-teal-700">Learn More</a>
            </div>
            <div class="md:w-1/2 flex justify-end">
               <img src="{{ asset('images/dog.jpg') }}" alt="Dog1" lass="w-3/5 h-auto object-cover rounded-lg -translate-x-3 -translate-y-5 mt-6">
            </div>            
            </div>            
        </div>
    </section> 

    <section id="what-we-offer" class="py-12 bg-white">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-bold mb-8 text-orange-500">What We Offers</h3>
            <div class="flex flex-col items-center md:flex-row justify-center">
                <div class="flex flex-col items-end mr-4">
                    <div class="flex items-center mb-6 h-full">
                        <div class="bg-orange-500 text-white p-2 rounded-full w-10 h-10 flex items-center justify-center text-lg font-bold">1</div>
                        <div class="ml-4 text-left">
                            <h4 class="text-xl font-semibold">Obedience Training</h4>
                            <p class="text-gray-600 text-sm">Teaching dogs basic commands and proper behavior.</p>
                        </div>
                    </div>
                    <div class="flex items-center mb-6 h-full">
                        <div class="bg-teal-500 text-white p-2 rounded-full w-10 h-10 flex items-center justify-center text-lg font-bold">2</div>
                        <div class="ml-4 text-left">
                            <h4 class="text-xl font-semibold">Agility Training</h4>
                            <p class="text-gray-600 text-sm">Improving dog's coordination through various courses</p>
                        </div>
                    </div>
                    <div class="flex items-center mb-6 h-full">
                        <div class="bg-orange-500 text-white p-2 rounded-full w-10 h-10 flex items-center justify-center text-lg font-bold">3</div>
                        <div class="ml-4 text-left">
                            <h4 class="text-xl font-semibold">Socialization Training</h4>
                            <p class="text-gray-600 text-sm">Helping dogs interact well with other pets and people.</p>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-auto mb-8 md:mb-0">
                    <img src="{{ asset('images/dogg.png') }}" alt="Dog and Cat" class="w-64 h-auto mx-auto">
                </div>

                <div class="flex flex-col items-start ml-4">
                    <div class="flex items-center mb-6 h-full">
                        <div class="bg-teal-500 text-white p-2 rounded-full w-10 h-10 flex items-center justify-center text-lg font-bold">4</div>
                        <div class="ml-4 text-left">
                            <h4 class="text-xl font-semibold">Trick Training</h4>
                            <p class="text-gray-600 text-sm">Teaching fun tricks to engage and stimulate your dog's mind.</p>
                        </div>
                    </div>
                    <div class="flex items-center mb-6 h-full">
                        <div class="bg-orange-500 text-white p-2 rounded-full w-10 h-10 flex items-center justify-center text-lg font-bold">5</div>
                        <div class="ml-4 text-left">
                            <h4 class="text-xl font-semibold">Service Dog Training</h4>
                            <p class="text-gray-600 text-sm">Training dogs to assist individuals with disabilities.</p>
                        </div>
                    </div>
                    <div class="flex items-center mb-6 h-full">
                        <div class="bg-teal-500 text-white p-2 rounded-full w-10 h-10 flex items-center justify-center text-lg font-bold">6</div>
                        <div class="ml-4 text-left">
                            <h4 class="text-xl font-semibold">Therapy Dog Training</h4>
                            <p class="text-gray-600 text-sm">Preparing dogs to provide comfort and support in therapeutic settings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-12">
        <img src="{{ asset('images/paws.png') }}" alt="Background" class="absolute inset-0 object-cover w-full h-full z-0 opacity-50">
        <div class="container mx-auto text-center relative z-10">
            <div class="flex justify-around">
                <div class="flex flex-col items-center">
                    <h4 class="text-2xl font-semibold text-black">Trainers</h4>
                    <p class="text-lg text-black">Expert Trainers</p>
                </div>
                <div class="flex flex-col items-center">
                    <h4 class="text-2xl font-semibold text-black">Veterinarians</h4>
                    <p class="text-lg text-black">Certified Doctors</p>
                </div>
                <div class="flex flex-col items-center">
                    <h4 class="text-2xl font-semibold text-black">Verified</h4>
                    <p class="text-lg text-black">Trusted Services</p>
                </div>
                <div class="flex flex-col items-center">
                    <h4 class="text-2xl font-semibold text-black">Trusted</h4>
                    <p class="text-lg text-black">Reliable Care</p>
                </div>
            </div>
        </div>
    </section>

    <section id="benefits" class="py-12 bg-gray-100">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold mb-8 text-teal-500">Benefits of Dog Training and Care</h3>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                    <div class="bg-white shadow-lg p-6 rounded-lg transition-transform duration-300 transform hover:-translate-y-2 hover:shadow-xl h-full">
                        <div class="flex items-center justify-center mb-4">
                            <div class="bg-yellow-500 text-white p-4 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold">1</div>
                        </div>
                        <h4 class="text-2xl font-semibold mt-2 mb-2">Enhanced Social Skills</h4>
                        <p class="text-gray-600">Training improves your dog's ability to interact positively with other dogs and people, leading to better socialization.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                    <div class="bg-white shadow-lg p-6 rounded-lg transition-transform duration-300 transform hover:-translate-y-2 hover:shadow-xl h-full">
                        <div class="flex items-center justify-center mb-4">
                            <div class="bg-orange-500 text-white p-4 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold">2</div>
                        </div>
                        <h4 class="text-2xl font-semibold mt-2 mb-2">Improved Obedience</h4>
                        <p class="text-gray-600">Training establishes rules and commands that enhance your dog's obedience and discipline.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                    <div class="bg-white shadow-lg p-6 rounded-lg transition-transform duration-300 transform hover:-translate-y-2 hover:shadow-xl h-full">
                        <div class="flex items-center justify-center mb-4">
                            <div class="bg-yellow-500 text-white p-4 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold">3</div>
                        </div>
                        <h4 class="text-2xl font-semibold mt-2 mb-2">Strengthened Bond</h4>
                        <p class="text-gray-600">Training sessions provide quality time together, strengthening the bond between you and your dog.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                    <div class="bg-white shadow-lg p-6 rounded-lg transition-transform duration-300 transform hover:-translate-y-2 hover:shadow-xl h-full">
                        <div class="flex items-center justify-center mb-4">
                            <div class="bg-teal-500 text-white p-4 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold">4</div>
                        </div>
                        <h4 class="text-2xl font-semibold mt-2 mb-2">Improved Physical Health</h4>
                        <p class="text-gray-600">Regular training and care promote physical activity, leading to a healthier and more active dog.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                    <div class="bg-white shadow-lg p-6 rounded-lg transition-transform duration-300 transform hover:-translate-y-2 hover:shadow-xl h-full">
                        <div class="flex items-center justify-center mb-4">
                            <div class="bg-orange-500 text-white p-4 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold">5</div>
                        </div>
                        <h4 class="text-2xl font-semibold mt-2 mb-2">Mental Stimulation</h4>
                        <p class="text-gray-600">Training provides mental challenges that keep your dog engaged, reducing boredom and destructive behaviors.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                    <div class="bg-white shadow-lg p-6 rounded-lg transition-transform duration-300 transform hover:-translate-y-2 hover:shadow-xl h-full">
                        <div class="flex items-center justify-center mb-4">
                            <div class="bg-teal-500 text-white p-4 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold">6</div>
                        </div>
                        <h4 class="text-2xl font-semibold mt-2 mb-2">Long-term Wellbeing</h4>
                        <p class="text-gray-600">Investing in training and care leads to a well-adjusted, happy dog, enhancing overall family life.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-12">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-bold mb-8 text-orange-500">Care Services</h3>
            <div class="flex justify-around">
                <!-- Grooming Service -->
                <div class="bg-white shadow-lg rounded-lg p-6 w-64">
                    <img src="{{ asset('images/gromming.jpg') }}"alt="Grooming Service" class="mx-auto mb-4">
                    <h4 class="text-xl font-semibold mb-2">Grooming</h4>
                    <p>Professional grooming services to keep your pet looking and feeling their best.</p>
                </div>
                <!-- Dog Walking -->
                <div class="bg-white shadow-lg rounded-lg p-6 w-64">
                     <img src="{{ asset('images/walking.jpg') }}" alt="Dog Walking" class="mx-auto mb-4">
                    <h4 class="text-xl font-semibold mb-2">Dog Walking</h4>
                    <p>Daily dog walking services to ensure your pet gets the exercise they need.</p>
                </div>
                <!-- Health Check-ups -->
                <div class="bg-white shadow-lg rounded-lg p-6 w-64">
                     <img src="{{ asset('images/checkup.jpg') }}" alt="Health Check-ups" class="mx-auto mb-4">
                    <h4 class="text-xl font-semibold mb-2">Health Check-up</h4>
                    <p>Regular health check-ups to monitor your pet's well-being and catch any issues early.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-teal-600 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024  Pawtopia Pet Training & Care. All Rights Reserved.</p>
            
        </div>
    </footer>

</body>
</html>