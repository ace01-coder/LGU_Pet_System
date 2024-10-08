<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Sidebar</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">
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
  <nav class="flex m-2 p-4 text-white rounded-md justify-between bg-blue-600">
      <button id="toggleSidebar" class="">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </button> 
          <div class="flex items-center space-x-3">
            <img width="30" height="30" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/50/FFFFFF/external-user-web-and-seo-tanah-basah-basic-outline-tanah-basah.png" alt="external-user-web-and-seo-tanah-basah-basic-outline-tanah-basah"/>
          </div>
</nav> 
<!--End:Navbar-->
<!--Start:Main-->
<main>
  <!--Container-->
  <div class="w-full">
    <!--Container 1-->
    <h2 class="font-bold text-xl  md:ml-6 md:mt-3">RECORDS</h2>
    <div class="grid grid-cols-2">
      <div class=" m-2">
        <div class="bg-white rounded-lg shadow-lg m-2 ">
          <div class="flex flex-col items-center">
            <h2 class="font-bold">REGISTERED NO.</h2>
            <div class="p-5">
              <span>0</span>
            </div>
          </div>
        </div>
      <!--Container 2-->
        <div class="bg-white rounded-lg shadow-lg m-2 ">
          <div class="flex flex-col items-center">
            <h2 class="font-bold">REPORT NO.</h2>
            <div class="p-5">
              <span>0</span>
            </div>
          </div>
        </div>
        </div>
      <!--Container 3-->
        <div class="m-2">
          <div class="bg-white rounded-lg shadow-lg m-2 ">
            <div class="flex flex-col items-center">
              <h2 class="font-bold">ADOPTION NO.</h2>
              <div class="p-5">
                <span>0</span>
              </div>
            </div>
          </div>
        <!--Container 4-->
          <div class="bg-white rounded-lg shadow-lg m-2 ">
            <div class="flex flex-col items-center">
              <h2 class="font-bold">ACCOUNT NO.</h2>
              <div class="p-5">
                <span>0</span>
              </div>
            </div>
          </div>
        </div>
    </div>
<!--End:Container-->
<!--Start:Table-->
    <div class=" mx-2">
      <div class="flex justify-between mb-2
      mt-10">
        <h2 class="font-bold text-xl  md:ml-6 md:mt-3">LIST</h2>
        <input class="border-black shadow-lg rounded-lg px-10 mr-6" type="text" placeholder="Search">
      </div>
      <table class="bg-white rounded-lg shadow-lg w-full ">
        <thead class=" bg-blue-600 text-white">
            <tr>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Age</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Occupation</th>
              
            </tr>
        </thead>
        <tbody class="text-gray-700 ">
            <tr>
                <td class="text-left m py-3 px-2">John Doe</td>
                <td class="text-left m py-3 px-2">28</td>
                <td class="text-left py-3 px-4">Software Engineer</td>
              
            </tr>
            <tr class="bg-gray-100">
                <td class="text-left m py-3 px-2">Jane Smith</td>
                <td class="text-left m py-3 px-2">34</td>
                <td class="text-left m py-3 px-2">Data Scientist</td>

            </tr>
            <tr>
                <td class="text-left m py-3 px-2">Paul Walker</td>
                <td class="text-left m py-3 px-2">45</td>
                <td class="text-left m py-3 px-2">Manager</td>

            </tr>
    

        </tbody>
    </table>
     </div>
    </div>
    <!--End:Table-->
</main>
<!--End:Main-->
 </div>  
  </div> 
 
<script>
  
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

