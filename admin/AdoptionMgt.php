<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Sidebar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 ">
  <div class="flex ">
    <!--Start:Sidebar-->
    <div id="sidebar" class=" bg-blue-600 text-white w-64 h-screen p-5 space-y-5 transition-all duration-300">
      <div class="flex justify-center items-center">
      <img width="100" height=""  src="img/logo.png" alt="">
      </div>
      <span></span>
      <hr>
      <ul class="">
        <li class="flex mb-6 items-center space-x-3 space-y-3">
         <a class="flex items-center space-x-6 hover:bg-PictonBlue" href="DashBoard.php">
          <img width="39" height="39" src="https://img.icons8.com/ios/39/FFFFFF/dashboard.png" alt="dashboard"/>
          <span class="sidebar-text">DASHBOARD</span>
         </a>
        </li>
        <li class="flex mb-6 items-center space-x-3 space-y-3">
         <a class="flex items-center space-x-6 " href="Registered.php">
      <img width="40" height="40" src="https://img.icons8.com/ios/40/FFFFFF/registered-trademark.png" alt="registered-trademark"/>
          <span class="sidebar-text">REGISTERED MANAGEMENT</span>
         </a>
        </li>
        <li class="flex mb-6 items-center space-x-3 space-y-3">
          <a class="flex items-center space-x-6 " href="ReportList.php">
            <img width="40" height="40" src="https://img.icons8.com/ios/40/FFFFFF/graph-report.png" alt="graph-report"/>
          <span class="sidebar-text">REPORT MANAGEMENT</span>
          </a>
        </li>
        <li class="flex mb-6 items-center space-x-3 space-y-3">
      <a class="flex items-center space-x-6 " href="AdoptionMgt.php">
         <img width="40" height="40" src="https://img.icons8.com/ios-filled/40/FFFFFF/cat-footprint.png" alt="cat-footprint"/>
          <span class="sidebar-text">ADOPTION MANAGEMENT</span>
      </a>
        </li>
        <li class="flex mb-6 items-center space-x-3 space-y-3">
          <a class="flex items-center space-x-6 " href="AccountMgt.php">
            <img width="40" height="40" src="https://img.icons8.com/ios/40/FFFFFF/guest-male.png" alt="guest-male"/>
            <span class="sidebar-text">ACCOUNT MANAGEMENT</span>
          </a>
        </li>
      </ul>
    </div>
    <!--End:Sidebar-->
    <!--Start:Navbar-->
 <div class="flex flex-col w-full h-full  ">
  <nav class="flex m-2 p-4 text-white rounded-md justify-between  bg-blue-600">
      <button id="toggleSidebar" class="">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </button> 
          <div class="flex items-center space-x-3">
            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
              <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
              <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4
  
   11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
          </button>
            <img width="30" height="30" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/50/FFFFFF/external-user-web-and-seo-tanah-basah-basic-outline-tanah-basah.png" alt="external-user-web-and-seo-tanah-basah-basic-outline-tanah-basah"/>
          </div>
</nav> 
<!--End:Navbar-->
<!--Start:Main-->
<main>
<!--Start:Table-->
<div class="container mx-auto p-5">
  <h1 class="text-2xl font-bold mb-5">CRUD Table with Search</h1>

  <input type="text" id="search" placeholder="Search..." class="mb-5 p-2 border border-gray-300 rounded">

  <button id="openModal" class="mb-5 bg-blue-500 text-white px-4 py-2 rounded">Add Entry</button>

  <table class="min-w-full bg-white border border-gray-300">
      <thead>
          <tr>
              <th class="border px-4 py-2">ID</th>
              <th class="border px-4 py-2">Person Name</th>
              <th class="border px-4 py-2">Pet Name</th>
              <th class="border px-4 py-2">Phone</th>
              <th class="border px-4 py-2">Actions</th>
          </tr>
      </thead>
      <tbody id="table-body">
          <!-- Rows will be dynamically added here -->
      </tbody>
  </table>
</div>
    </div>
    <!--End:Table-->
</main>
<!--End:Main-->
 </div>  
  </div> 
 
  <!--Modal-->
  <div id="modal" class="fixed inset-0 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
    <div class="bg-white p-5 rounded shadow-lg w-96">
        <h2 class="text-xl font-bold mb-4" id="modal-title">Add Entry</h2>
        <input type="hidden" id="entry-id">
        <input type="text" id="entry-name" placeholder="Person Name" class="mb-4 p-2 border border-gray-300 rounded w-full">
        <input type="text" id="entry-pet" placeholder="Pet Name" class="mb-4 p-2 border border-gray-300 rounded w-full">
        <input type="tel" id="entry-phone" placeholder="Phone" class="mb-4 p-2 border border-gray-300 rounded w-full">
        <div class="flex justify-end">
            <button id="saveBtn" class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
            <button id="closeModal" class="ml-2 bg-red-500 text-white px-4 py-2 rounded">Close</button>
        </div>
    </div>
</div>

<script src="js/script.js"></script>

</body>
</html>
