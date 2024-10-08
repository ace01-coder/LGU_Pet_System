<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-semibold text-center mb-6">Adoption Registration Form</h2>
            <form method="POST" action="">
                <div class="mb-4">
                    <label for="fullName" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="fullName" id="fullName" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="birthDate" class="block text-sm font-medium text-gray-700">Birth Date</label>
                    <input type="text" name="birthDate" id="birthDate" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="Occupation" class="block text-sm font-medium text-gray-700">Occupation</label>
                    <input type="text" name="Occupation" id="Occupation" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
               
                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <div class="">
                        <div class="">
                            <input type="radio" name="Single" id="Single">
                            <label for="Single">Single</label>
                        </div>
                        <div class="">
                            <input type="radio" name="Married" id="Married">
                            <label for="Married">Married</label>

                        </div>
                        <div class="">
                            <input type="radio" name="Other" id="Other">
                            <label for="Other">Other</label>
                        </div>
                    </div>

                <div class="mb-4">
                     <label for="adoptBefore">Have you adopted from PAWS before?</label>
                     <div class="">
                        <input type="radio" name="yes" id="yes">
                        <label for="yes">Yes</label>

                    </div>
                    <div class="mb-4">
                        <input type="radio" name="no" id="no">
                        <label for="no">No</label>
                    </div>
                </div>

                </div>

                <div class="mb-4">
                    <label for="socialMedia" class="block text-sm font-medium text-gray-700">Social Media Account</label>
                    <input type="text" name="socialMedia" id="socialMedia" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
               
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                       
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="tel" name="phone" id="phone" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <textarea name="address" id="address" rows="3" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="mb-4">
                    <label for="adoptedAnimal" class="block text-sm font-medium text-gray-700">Type of Animal to Adopt</label>
                    <select name="adoptedAnimal" id="adoptedAnimal" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Select...</option>
                        <option value="Dog">Dog</option>
                        <option value="Cat">Cat</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="m-4">
                    <label for="animalName" class="block text-sm font-medium text-gray-700">Name of adopted animal</label>
                    <textarea name="animalName"  id="animalName" rows="4" required class="mt-1 block w-full border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Additional Information</label>
                    <textarea name="message" id="message" rows="5" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <button type="submit" class="w-full bg-cyan-700 text-black font-semibold rounded-md p-2 hover:bg-blue-600">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
