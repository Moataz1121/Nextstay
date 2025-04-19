@include('user.layouts.head')
@include('user.layouts.header_2')
<?php
$hotels = [
    [
        "name" => "Luxor Hilton Resort and Spa",
        "rating" => 5.0,
        "reviews" => 1200,
        "description" => "Nestled on the banks of the Nile, Hilton Luxor Resort & Spa offers stylish rooms with uninterrupted views from the water's edge, luxurious spa facilities, and stunning infinity pools.",
        "address" => "El Karnak St., East bank, Luxor, Egypt",
        "price" => 2024,
        "image" => "hotel1.jpg",
    ],
    [
        "name" => "Steigenberger Nile Palace",
        "rating" => 4.8,
        "reviews" => 980,
        "description" => "Experience luxury on the Nile with modern amenities, a relaxing spa, and breathtaking river views.",
        "address" => "Khaled Ibn El Walid St., East bank, Luxor, Egypt",
        "price" => 1800,
        "image" => "hotel2.jpg",
    ],
    [
        "name" => "Sofitel Winter Palace Luxor",
        "rating" => 4.9,
        "reviews" => 1350,
        "description" => "A historic hotel offering refined elegance, luxurious rooms, and lush gardens right by the Nile.",
        "address" => "Corniche El Nile St., Luxor, Egypt",
        "price" => 2500,
        "image" => "hotel3.jpg",
    ],
    [
        "name" => "Jolie Ville Resort & Spa",
        "rating" => 4.7,
        "reviews" => 890,
        "description" => "A serene resort with family-friendly facilities, pools, and stunning views of the Nile.",
        "address" => "Ismailia Bridge Road, West Bank, Luxor, Egypt",
        "price" => 1500,
        "image" => "hotel4.jpg",
    ],
    [
        "name" => "Ghady Villa Resort & Spa",
        "rating" => 4.7,
        "reviews" => 890,
        "description" => "A serene resort with family-friendly facilities, pools, and stunning views of the Nile.",
        "address" => "Ismailia Bridge Road, West Bank, Luxor, Egypt",
        "price" => 1500,
        "image" => "hotel5.jpg",
    ],
];
?>

<header class="bg-white shadow">
    <div class="container mx-auto flex items-center justify-between p-4"></div>
</header>

<main class="container mx-auto mt-6 p-4">
<!-- Check Availability Bar -->
<div class="bg-gray-200 py-4">
    <div class="container mx-auto">
        <form action="search-result.php" class="bg-white p-4 rounded-lg shadow-md flex items-center space-x-2">
            <!-- Check-in -->
            <div class="w-1/5">
                <label for="checkin" class="block text-gray-700 text-sm mb-1">Check In:</label>
                <input type="date" id="checkin" name="checkin" class="w-full border px-2 py-1 text-sm rounded">
            </div>
            <!-- Check-out -->
            <div class="w-1/5">
                <label for="checkout" class="block text-gray-700 text-sm mb-1">Check Out:</label>
                <input type="date" id="checkout" name="checkout" class="w-full border px-2 py-1 text-sm rounded">
            </div>
            <!-- Rooms -->
            <div class="w-1/6">
                <label for="rooms" class="block text-gray-700 text-sm mb-1">Rooms:</label>
                <select id="rooms" name="rooms" class="w-full border px-2 py-1 text-sm rounded">
                    <option value="1">1 Room</option>
                    <option value="2">2 Rooms</option>
                    <option value="3">3 Rooms</option>
                    <option value="4">4 Rooms</option>
                </select>
            </div>
            <!-- Adults -->
            <div class="w-1/6">
                <label for="adults" class="block text-gray-700 text-sm mb-1">Adults:</label>
                <select id="adults" name="adults" class="w-full border px-2 py-1 text-sm rounded">
                    <option value="1">1 Adult</option>
                    <option value="2">2 Adults</option>
                    <option value="3">3 Adults</option>
                    <option value="4">4 Adults</option>
                </select>
            </div>
            <!-- Children -->
            <div class="w-1/6">
                <label for="children" class="block text-gray-700 text-sm mb-1">Children:</label>
                <select id="children" name="children" class="w-full border px-2 py-1 text-sm rounded">
                    <option value="0">0 Children</option>
                    <option value="1">1 Child</option>
                    <option value="2">2 Children</option>
                    <option value="3">3 Children</option>
                </select>
            </div>
            <!-- Button -->
            <div class="w-1/5">
                <button type="submit" class="w-full bg-green-500 text-white px-2 py-2 text-sm rounded hover:bg-green-600">
                    Check Availability
                </button>
            </div>
        </form>
    </div>
</div>
</main>
</section>
    <div class="grid grid-cols-12 gap-4 mt-6">
        <aside class="col-span-3">
            <form method="GET" action="">
                <div class="bg-white p-4 shadow rounded">
                    <h2 class="font-bold text-lg text-gray-800">Search by Hotel Name</h2>
                    <input
                        type="text"
                        name="hotel_name"
                        placeholder="eg. Nefertiti Hotel"
                        class="w-full border px-4 py-2 rounded mt-2"
                        value="<?php echo isset($_GET['hotel_name']) ? htmlspecialchars($_GET['hotel_name']) : ''; ?>">
                </div>

                <div class="bg-white p-4 shadow rounded mt-6">
                    <h2 class="font-bold text-lg text-gray-800">Filter results</h2>

                    <h3 class="mt-4 font-semibold text-gray-800">Price Range</h3>
                    <ul class="mt-2 space-y-2">
                        <li><input type="checkbox" name="price[]" value="0-5000"> EGP 0 - 5000</li>
                        <li><input type="checkbox" name="price[]" value="5000-7500"> EGP 5000 - 7500</li>
                        <li><input type="checkbox" name="price[]" value="7500-9000"> EGP 7500 - 9000</li>
                        <li><input type="checkbox" name="price[]" value="9000-111ئ000"> EGP 9000 - 11000</li>
                        <li><input type="checkbox" name="price[]" value="11000-80000"> EGP 11000 - 80000</li>
                    </ul>

                    <h3 class="mt-4 font-semibold text-gray-800">Star Rating</h3>
                    <ul class="mt-2 space-y-2">
                        <li><input type="checkbox" name="rating[]" value="5"> 5 Stars</li>
                        <li><input type="checkbox" name="rating[]" value="4"> 4 Stars</li>
                        <li><input type="checkbox" name="rating[]" value="3"> 3 Stars</li>
                        <li><input type="checkbox" name="rating[]" value="2"> 2 Stars</li>
                        <li><input type="checkbox" name="rating[]" value="1"> 1 Star</li>
                    </ul>
                </div>

                <button type="submit" class="mt-6 px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600 w-full">Apply Filters</button>
            </form>
        </aside>

        <section class="col-span-9">

            <div class="bg-white p-4 shadow rounded mt-4">
                <div class="flex items-center">
                    <img src="<?php echo $hotel['image']; ?>" alt="Hotel" class="w-32 h-32 rounded">
                    <div class="ml-4 flex-grow">
                        <h2 class="text-lg font-bold text-gray-800"><?php echo $hotel['name']; ?></h2>
                        <div class="flex items-center mt-1 space-x-2">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-sm text-gray-600"><?php echo $hotel['rating']; ?> (<?php echo $hotel['reviews']; ?> Reviews)</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2"><?php echo $hotel['description']; ?></p>
                        <p class="text-sm text-gray-600 mt-2"><i class="fas fa-map-marker-alt text-green-500"></i> <?php echo $hotel['address']; ?></p>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-gray-800">$<?php echo $hotel['price']; ?></p>
                        <p class="text-sm text-gray-600">Taxes incl.</p>
                        <button class="mt-2 px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600">Select</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

@include('user.layouts.footer')