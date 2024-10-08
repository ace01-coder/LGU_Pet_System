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
<?php
  include("modalFormRegistered.html");
?>
 <script src="js/script.js">
  
 //Sidebar functions
 const sidebar = document.getElementById('sidebar');
  const toggleSidebar = document.getElementById('toggleSidebar');
  const sidebarText = document.querySelectorAll('.sidebar-text');

  toggleSidebar.addEventListener('click', () => {
    sidebar.classList.toggle('w-64');
    sidebar.classList.toggle('w-16');
    
    // Toggle text visibility
    sidebarText.forEach(text => {
      text.classList.toggle('hidden');
    });
  });


  //darkmode funtions
  var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
  var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

  // Change the icons inside the button based on previous settings
  if (
      localStorage.getItem("color-theme") === "dark" ||
      (!("color-theme" in localStorage) &&
          window.matchMedia("(prefers-color-scheme: dark)").matches)
  ) {
      themeToggleLightIcon.classList.remove("hidden");
  } else {
      themeToggleDarkIcon.classList.remove("hidden");
  }

  var themeToggleBtn = document.getElementById("theme-toggle");

  themeToggleBtn.addEventListener("click", function () {
      // Toggle icons inside button
      themeToggleDarkIcon.classList.toggle("hidden");
      themeToggleLightIcon.classList.toggle("hidden");

      // If set via local storage previously
      if (localStorage.getItem("color-theme")) {
          if (localStorage.getItem("color-theme") === "light") {
              document.documentElement.classList.add("dark");
              localStorage.setItem("color-theme", "dark");
          } else {
              document.documentElement.classList.remove("dark");
              localStorage.setItem("color-theme", "light");
          }

      // If NOT set via local storage previously
      } else {
          if (document.documentElement.classList.contains("dark")) {
              document.documentElement.classList.remove("dark");
              localStorage.setItem("color-theme", "light");
          } else {
              document.documentElement.classList.add("dark");
              localStorage.setItem("color-theme", "dark");
          }
      }
  });

  //table
  const modal = document.getElementById('modal');
  const tableBody = document.getElementById('table-body');
  const entryId = document.getElementById('entry-id');
  const entryName = document.getElementById('entry-name');
  const entryPet = document.getElementById('entry-pet');
  const entryPhone = document.getElementById('entry-phone');
  const saveBtn = document.getElementById('saveBtn');
  const searchInput = document.getElementById('search');
  
  let entries = [];
  let editingIndex = null;
  
  document.getElementById('openModal').onclick = () => {
      modal.classList.remove('hidden');
      entryId.value = '';
      entryName.value = '';
      entryPet.value = '';
      entryPhone.value = '';
      document.getElementById('modal-title').textContent = 'Add Entry';
  };
  
  document.getElementById('closeModal').onclick = () => {
      modal.classList.add('hidden');
  };
  
  saveBtn.onclick = () => {
      const name = entryName.value;
      const pet = entryPet.value;
      const phone = entryPhone.value;
  
      if (editingIndex !== null) {
          // Update
          entries[editingIndex] = { id: entries[editingIndex].id, name, pet, phone 
  
          };
          editingIndex = null;
      } else {
          // Create
          entries.push({ id: entries.length + 1, name, pet, phone 
              
          });
      }
      updateTable();
      modal.classList.add('hidden');
  };
  
  function updateTable() {
      tableBody.innerHTML = '';
      const searchTerm = searchInput.value.toLowerCase();
      entries.forEach((entry, index) => {
          if (
              entry.name.toLowerCase().includes(searchTerm) ||
              entry.pet.toLowerCase().includes(searchTerm) ||
              entry.phone.includes(searchTerm)
          ) {
              const row = document.createElement('tr');
              row.innerHTML = `
                  <td class="border px-4 py-2">${entry.id}</td>
                  <td class="border px-4 py-2">${entry.name}</td>
                  <td class="border px-4 py-2">${entry.pet}</td>
                  <td class="border px-4 py-2">${entry.phone}</td>
                  <td class="border px-4 py-2">
                      <button onclick="editEntry(${index})" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</button>
                      <button onclick="deleteEntry(${index})" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                  </td>
              `;
              tableBody.appendChild(row);
          }
      });
  }
  
  function editEntry(index) {
      editingIndex = index;
      entryId.value = entries[index].id;
      entryName.value = entries[index].name;
      entryPet.value = entries[index].pet;
      entryPhone.value = entries[index].phone;
      modal.classList.remove('hidden');
      document.getElementById('modal-title').textContent = 'Edit Entry';
  }
  
  function deleteEntry(index) {
      entries.splice(index, 1);
      updateTable();
  }
  
  searchInput.oninput = updateTable;
 

 /* const slider = document.getElementById('slider');
const slides = slider.getElementsByClassName('slide');
let currentIndex = 0;

function showSlide(index) {
  // Hide all slides
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  // Show the selected slide
  slides[index].style.display = 'block';
}

document.getElementById('prevBtn').addEventListener('click', () => {
  currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
  showSlide(currentIndex);
});

document.getElementById('nextBtn').addEventListener('click', () => {
  currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
  showSlide(currentIndex);
});

// Show the first slide initially
showSlide(currentIndex);*/
 </script>

</body>
</html>
