
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