<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- Tailwind CSS CDN link -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        div {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }
        
        textarea,
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        
        button[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }
        
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        
        button[type="submit"]:focus {
            outline: none;
        }
    </style>
</head>

<body>
    <div class="relative w-full bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-2 sm:px-6 lg:px-8">
            <div class="inline-flex items-center space-x-2">

                <span class="font-bold">Tinder For Housing</span>
            </div>
            <div class="hidden grow items-start lg:flex">
                <ul class="ml-12 inline-flex space-x-8">
                    <li>
                        <a href="index.php" class="inline-flex items-center text-sm font-semibold text-gray-800 hover:text-gray-900">
                Home
              </a>
                    </li>
                    <li>
                        <a href="index.php" class="inline-flex items-center text-sm font-semibold text-gray-800 hover:text-gray-900">
                About
              </a>
                    </li>
                    <li>
                        <a href="index.php" class="inline-flex items-center text-sm font-semibold text-gray-800 hover:text-gray-900">
                Contact
              </a>
                    </li>
                    <li>
                        <a href="index.php" class="inline-flex items-center text-sm font-semibold text-gray-800 hover:text-gray-900">
                FAQs
              </a>
                    </li>
                    <li>
                        <a href="questionnaire .php" class="inline-flex items-center text-sm font-semibold text-gray-800 hover:text-gray-900">
                            Questionnaire 
              </a>
                    </li>
                </ul>
            </div>
            <div class="hidden space-x-2 lg:block">
                <a href="signIn.php"> <button type="button" class="rounded-md bg-transparent px-3 py-2 text-sm font-semibold text-black hover:bg-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                    Sign In
                  </button></a>
                <a href="signUp.php">
                    <button type="button" class="rounded-md border border-black px-3 py-2 text-sm font-semibold text-black shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                Log In
              </button></a>

            </div>
            <div class="lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 cursor-pointer">
            <line x1="4" y1="12" x2="20" y2="12"></line>
            <line x1="4" y1="6" x2="20" y2="6"></line>
            <line x1="4" y1="18" x2="20" y2="18"></line>
          </svg>
            </div>
        </div>
    </div>

    <form id="questionnaire">
        <h2>Landlord Questionnaire</h2>
        <div>
            <label for="property-type">Property Type:</label>
            <input type="radio" id="property-flat" name="property-type" value="Flat">
            <label for="property-flat">Flat</label>
            <input type="radio" id="property-house" name="property-type" value="House">
            <label for="property-house">House</label>
            <input type="radio" id="property-townhouse" name="property-type" value="Townhouse">
            <label for="property-townhouse">Townhouse</label>
        </div>
        <div>
            <label for="bedrooms">Number of Bedrooms:</label>
            <input type="number" id="bedrooms" min="1">
        </div>
        <div>
            <label for="bathrooms">Number of Bathrooms:</label>
            <input type="number" id="bathrooms" min="1">
        </div>
        <div>
            <label for="address">Property Address:</label>
            <input type="text" id="address">
        </div>
        <div>
            <label for="description">Property Description:</label>
            <textarea id="description"></textarea>
        </div>
        <div>
            <label for="laundry-type">Laundry Type:</label>
            <select id="laundry-type">
            <option value="None">None</option>
            <option value="In-unit">In-unit</option>
            <option value="Shared">Shared</option>
          </select>
        </div>
        <div>
            <label for="parking-type">Parking Type:</label>
            <input type="radio" id="parking-garage" name="parking-type" value="Garage">
            <label for="parking-garage">Garage</label>
            <input type="radio" id="parking-street" name="parking-type" value="Street">
            <label for="parking-street">Street</label>
            <input type="radio" id="parking-off-street" name="parking-type" value="Off Street">
            <label for="parking-off-street">Off Street</label>
            <input type="radio" id="parking-available" name="parking-type" value="Parking Available">
            <label for="parking-available">Parking Available</label>
            <input type="radio" id="parking-none" name="parking-type" value="None">
            <label for="parking-none">None</label>
        </div>
        <div>
            <label for="ac-type">Air Conditioning Type:</label>
            <input type="radio" id="ac-central" name="ac-type" value="Central AC">
            <label for="ac-central">Central AC</label>
            <input type="radio" id="ac-available" name="ac-type" value="AC Available">
            <label for="ac-available">AC Available</label>
            <input type="radio" id="ac-none" name="ac-type" value="None">
            <label for="ac-none">None</label>
        </div>
        <div>
            <label for="heating-available">Heating Available:</label>
            <input type="radio" id="heating-yes" name="heating-available" value="Yes">
            <label for="heating-yes">Yes</label>
            <input type="radio" id="heating-no" name="heating-available" value="No">
            <label for="heating-no">No</label>
        </div>
        <div>
            <label for="amenities">Amenities:</label>
            <input type="checkbox" id="amenities-pool" name="amenities" value="Pool">
            <label for="amenities-pool">Pool</label>
            <input type="checkbox" id="amenities-gym" name="amenities" value="Gym">
            <label for="amenities-gym">Gym</label>
            <input type="checkbox" id="amenities-park" name="amenities" value="Park">
            <label for="amenities-park">Park</label>
        </div>
        <button type="submit">Submit</button>
    </form>




    <script src="index.js">
    </script>


</body>

</html>