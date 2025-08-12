<!DOCTYPE html>
<html lang="en" class="h-full bg-base-200">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw Up Pet Care</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-base-200 min-h-screen flex items-center justify-center py-12 px-4 md:px-0">
 <section>
    
  <div class="container mx-auto max-w-md bg-white rounded-lg shadow-md p-8">
    <h2 class="text-center text-3xl font-extrabold text-teal-600 mb-8">Pet Clinic & Care Reservation</h2>

    <form action="#" method="POST" novalidate>
      @csrf

      <div class="form-control mb-5">
        <label for="owner_name" class="label">
          <span class="label-text font-semibold text-gray-700">Owner's Name</span>
        </label>
        <input
          type="text"
          id="owner_name"
          name="owner_name"
          placeholder="Your full name"
          required
          class="input input-bordered w-full rounded-md focus:ring-2 focus:ring-teal-500 focus:outline-none"
        />
      </div>

      <div class="form-control mb-5">
        <label for="pet_name" class="label">
          <span class="label-text font-semibold text-gray-700">Pet's Name</span>
        </label>
        <input
          type="text"
          id="pet_name"
          name="pet_name"
          placeholder="Your pet's name"
          required
          class="input input-bordered w-full rounded-md focus:ring-2 focus:ring-teal-500 focus:outline-none"
        />
      </div>

      <div class="form-control mb-5">
        <label for="service" class="label">
          <span class="label-text font-semibold text-gray-700">Service Type</span>
        </label>
        <select
          id="service"
          name="service"
          required
          class="select select-bordered w-full rounded-md focus:ring-2 focus:ring-teal-500 focus:outline-none"
        >
          <option disabled selected>Select service</option>
          <option value="Grooming">Grooming</option>
          <option value="Walking">Dog Walking</option>
          <option value="Check-up">Health Check Up</option>
        </select>
      </div>

      <div class="form-control mb-7">
        <label for="reservation_date" class="label">
          <span class="label-text font-semibold text-gray-700">Reservation Date</span>
        </label>
        <input
          type="date"
          id="reservation_date"
          name="reservation_date"
          required
          class="input input-bordered w-full rounded-md focus:ring-2 focus:ring-teal-500 focus:outline-none"
        />
      </div>

      <button
        type="submit"
        class="btn btn-primary w-full bg-teal-600 hover:bg-teal-700 text-white font-semibold text-lg rounded-md transition-colors duration-300"
      >
        Reserve Now
      </button>
    </form>
  </div>
  </section>

  
</body>
</html>
