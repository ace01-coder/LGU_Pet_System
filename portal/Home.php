<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Sidebar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 ">
    <!--Navbar-->
    <nav class=" bg-gray-800">
        <div class="flex text-white p-5 justify-between">
         <div class="">
          <button id="toggleSidebar" class="mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
              </svg>
            </button> 
         </div>
            <div class="">
              <ul class="flex">
                  <li class="px-4">Home</li>
                  <li class="px-4">Our animal</li>
                  <li class="px-4">Contact</li>
                  <li class="px-4">Blog's</li>
                  <li class="px-4">About</li>
              </ul>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->
    <div class="flex">
      <div id="sidebar" class="bg-gray-800 text-white w-64 h-screen p-5 space-y-5 transition-all duration-300">
        <div class=" flex justify-center items-center">
          <img width="70" height=""  src="img/BARANGAY_PAW_PATROL_SYSTEM-removebg-preview.png" alt="">
        </div>
        <ul>
          <li class="flex items-center space-x-3 space-y-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18M9 16l-6-6 6-6" />
            </svg>
            <span class="sidebar-text">Home</span>
          </li>
          <li class="flex items-center space-x-3 space-y-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18M9 16l-6-6 6-6" />
            </svg>
            <span class="sidebar-text">Our animal</span>
          </li>
          <li class="flex items-center space-x-3 space-y-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18M9 16l-6-6 6-6" />
            </svg>
            <span class="sidebar-text">Contact</span>
          </li>
          <li class="flex items-center space-x-3 space-y-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18M9 16l-6-6 6-6" />
            </svg>
            <span class="sidebar-text">Blog's</span>
          </li>
          <li class="flex items-center space-x-3 space-y-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18M9 16l-6-6 6-6" />
            </svg>
            <span class="sidebar-text">About</span>
          </li>
        </ul>
      </div>  
      <div class="container mx-auto bg-gray-400">
         <div class="">a</div>
      </div>
  </div> 
  <script src="script.js"></script>

</body>
</html>
