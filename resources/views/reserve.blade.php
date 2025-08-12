<!DOCTYPE html>
<html lang="en" class="h-full bg-base-200">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pet Clinic Reservation</title>
  @vite('resources/css/app.css')
</head>
<body class="h-full flex items-center justify-center p-6">

  <div class="card w-full max-w-md shadow-lg bg-base-100 rounded-lg">
    <div class="card-body p-8">
      <h2 class="card-title text-center text-3xl font-semibold mb-8">Pet Clinic & Care Reservation</h2>

      <form action="#" method="POST" novalidate>
        @csrf

        <div class="form-control mb-6">
          <label class="label" for="owner_name">
            <span class="label-text font-medium text-gray-700">Owner's Name</span>
          </label>
          <input
            type="text"
            name="owner_name"
            id="owner_name"
            placeholder="Your full name"
            class="input input-bordered w-full focus:outline-none focus:ring-2 focus:ring-teal-400"
            required
          />
        </div>

        <div class="form-control mb-6">
          <label class="label" for="pet_name">
            <span class="label-text font-medium text-gray-700">Pet's Name</span>
          </label>
          <input
            type="text"
            name="pet_name"
            id="pet_name"
            placeholder="Your pet's name"
            class="input input-bordered w-full focus:outline-none focus:ring-2 focus:ring-teal-400"
            required
          />
        </div>

        <div class="form-control mb-6">
          <label class="label" for="service">
            <span class="label-text font-medium text-gray-700">Service Type</span>
          </label>
          <select
            name="service"
            id="service"
            class="select select-bordered w-full focus:outline-none focus:ring-2 focus:ring-teal-400"
            required
          >
            <option disabled selected>Select service</option>
            <option value="Grooming">Grooming</option>
            <option value="walking">Dog Walking</option>
            <option value="check-up">Health Check Up</option>
          </select>
        </div>

        <div class="form-control mb-8">
          <label class="label" for="reservation_date">
            <span class="label-text font-medium text-gray-700">Reservation Date</span>
          </label>
          <input
            type="date"
            name="reservation_date"
            id="reservation_date"
            class="input input-bordered w-full focus:outline-none focus:ring-2 focus:ring-teal-400"
            required
          />
        </div>

        <button
          type="submit"
          class="btn btn-primary w-full text-lg font-semibold hover:bg-teal-600"
        >
          Reserve Now
        </button>
      </form>
    </div>
  </div>

</body>
</html>
