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
       <?php
     include("sidebar.html");
    ?>
    <!--End:Sidebar-->
    <?php 
    include("navbar.html");
 ?>
<!--End:Navbar-->
<!--Start:Main-->
<main>
<!--Start:Table-->
<div class="container mx-auto p-5">
   <div class="flex justify-between">
     <div class="flex justify-center items-center">
     <label class="flex px-4 py-2 text-3xl font-bold" >ALL Users</label>
     <span class="flex" >0</span>
     </div>
     <button id="open-popup-btn" class="flex justify-center items-center mb-5  bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-800">
         <span class="mr-2" ><img width="20" height="20" src="https://img.icons8.com/android/20/FFFFFF/plus.png" alt="plus"/></span>
         <span class="font-semibold text-lg" >Add New User</span>
    </button>
   </div>

  <table class="w-full bg-white border border-gray-300">
      <thead class="bg-blue-500">
          <tr>
              <th class="text-white px-4 py-2">Username</th>
              <th class="text-white px-4 py-2">Email</th>
              <th class="text-white px-4 py-2">Role</th>
              <th class="text-white px-4 py-2">Actions</th>
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
  <?php
   include("addUser.php");
  ?>
</div>
<script src="js/script.js"></script> 
</body>
</html>
