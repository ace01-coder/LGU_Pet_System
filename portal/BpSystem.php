<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPA System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" leading-normal text-base tracking-normal">
     <!--start:Nav-->
     <?php
       include("header.php");
     ?>
     <!--end:nav-->
     
     <!--start:main-->
     <main class="">
      <!--main-Slider-content-->
      <div id="home" class=" container mx-auto py-20">
        <div class="relative">
          <!-- Slider Container -->
          <div id="slider" class="overflow-hidden rounded-lg">
            <!-- Slide 1 -->
            <div class="slide w-full h-96 bg-cover bg-center relative" style="background-image: url('https://via.placeholder.com/800x400');">
              <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50">
                <h2 class="text-white text-3xl font-bold mb-4">Slide 1</h2>
                <button class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">Register</button>
              </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide w-full h-96 bg-cover bg-center relative" style="background-image: url('https://via.placeholder.com/800x400/333');">
              <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50">
                <h2 class="text-white text-3xl font-bold mb-4">Slide 2</h2>
                <button class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">Adoption</button>
              </div>
            </div>
            <!-- Slide 3 -->
            <div class="slide w-full h-96 bg-cover bg-center relative" style="background-image: url('https://via.placeholder.com/800x400/555');">
              <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50">
                <h2 class="text-white text-3xl font-bold mb-4">Slide 3</h2>
                <button class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">Report abuse</button>
              </div>
            </div>
          </div>
    
          <!-- Slider Controls -->
          <div class="absolute inset-y-0 left-0 flex items-center">
            <button id="prevBtn" class="bg-white text-black px-3 py-2 rounded-full shadow hover:bg-gray-200">‹</button>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center">
            <button id="nextBtn" class="bg-white text-black px-3 py-2 rounded-full shadow hover:bg-gray-200">›</button>
          </div>
        </div>
      </div>
    </div>
    <!--main-animal-content-->
       <div class="container mx-auto">
         <div class="mt-52 mb-16">
          <h1 id="ourAnimal" class="flex text-black text-3xl font-bold justify-center items-center">Our Animal</h>
         </div>
          <div class="flex justify-around">
            <span class="px-5 py-2 rounded-lg border-black bg-slate-300">Cats</span>
            <span class="px-5 py-2 rounded-lg border-black bg-slate-300">all</span>
            <span class="px-5 py-2 rounded-lg border-black bg-slate-300">cats</span>
          </div> 
         <div class="grid  grid-cols-4  space-y-4 space-x-4">
          <div class="mt-4 ml-4 max-w-sm  bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Card Image">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card Title</h2>
            </div>
          </div>
          <div class="max-w-sm  bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Card Image">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card Title</h2>
            </div>
          </div>
          <div class="max-w-sm  bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Card Image">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card Title</h2>
            </div>
          </div>
          <div class="max-w-sm  bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Card Image">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card Title</h2>
            </div>
          </div> <div class="max-w-sm  bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Card Image">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card Title</h2>
            </div>
          </div>
          <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Card Image">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card Title</h2>
            </div>
          </div>
          <div class="max-w-sm  bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Card Image">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card Title</h2>
            </div>
          </div>
          <div class="max-w-sm  bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Card Image">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card Title</h2>
            </div>
          </div>
          <div class="max-w-sm  bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Card Image">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card Title</h2>
            </div>
          </div>
          <div class="max-w-sm  bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Card Image">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card Title</h2>
            </div>
          </div>
          <div class="max-w-sm  bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Card Image">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card Title</h2>
            </div>
          </div>
          <div class="max-w-sm  bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Card Image">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card Title</h2>
            </div>
          </div> 
          </div>          
         </div>


         <!--about-->
         <div class="container mx-auto my-10">
                <div class="mt-52 mb-10">
                  <h1 id="about" class="flex text-black text-3xl font-bold justify-center items-center">About</h>
                 </div>
                <div class="grid grid-cols-3 space-x-3 space-y-3">
                  <div class="mt-3 ml-3 py-6 px-4 bg-white shadow-2xl rounded-lg overflow-hidden">
                    <div class="flex flex-col items-center">
                      <h2 class="py-10 items-center justify-center text-xl font-bold text-gray-800">ABOUT 1</h2>
                      <span class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam tempore veniam necessitatibus consectetur. Optio recusandae delectus fuga, unde officiis commodi quaerat aspernatur vitae quam adipisci obcaecati nesciunt corporis suscipit tempore!</span>
                    </div>
                  </div> 
                  <div class=" py-6 px-4 bg-white shadow-2xl rounded-lg overflow-hidden">
                    <div class="flex flex-col items-center">
                      <h2 class="py-10 items-center justify-center text-xl font-bold text-gray-800">ABOUT 2</h2>
                      <span class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam tempore veniam necessitatibus consectetur. Optio recusandae delectus fuga, unde officiis commodi quaerat aspernatur vitae quam adipisci obcaecati nesciunt corporis suscipit tempore!</span>
                    </div>
                  </div> 
                  <div class=" py-6 px-4 bg-white shadow-2xl rounded-lg overflow-hidden">
                    <div class="flex flex-col items-center">
                      <h2 class="py-10 items-center justify-center text-xl font-bold text-gray-800">ABOUT 3</h2>
                      <span class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam tempore veniam necessitatibus consectetur. Optio recusandae delectus fuga, unde officiis commodi quaerat aspernatur vitae quam adipisci obcaecati nesciunt corporis suscipit tempore!</span>
                    </div>
                  </div>  
                </div>
              </div>
     </main>
     <footer class="my-10 ">
      <div class="">
        <h2 class="flex justify-center text-lg">LOGO</h2>
        <div class="">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="flex justify-center">
          <div class="flex items-center p-5">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAACBElEQVR4nO2Wv0tcQRDHP9wRCZcyCHoEi0AK4y/wmvwHemAqn0V6wTK5FAErW4X0ATu1kaBgl0I5uUCOVNEyVUAIiKBWXhqTO1n4LgzPe+/tu0uIhV9YeG9ndr4zszO7C/e4wygCZaCiMay5f4YqsAVcAp3YuJRs9m8STgGfDUkL+ALsarjvX0beACb7JV0QkTP4DZgHSl30SpIdSfcKiPohbQPXwGugELDG6bzRmracyZ3elgzM9eD0nNa6yCfyLGwoZS7SPBgEnuq7JhuHoYurZk9D0zsDfFSET8y83/OZEOItKWftzwiwApyYit6O6USa38wiLaonWwnVOyBjn4A/Mto2xC9i+iW12kVW9soy4HrTYhR4D5wZklNgFVjU/9cEm03Jh9KIK1La0f/z2OHRUaRrit5hT/OvEmzuSF7JQ+wrdQk4AH4bB74Dz+TIT+BBP8RlKbn0dIN34of0fDaWU2wGpbqYUVwe70zkrngeJ+g9kvw8pDVD2mncEK+n6Pl22iAAs1I+yvDyRK00liB3a4/zHCD2yHQHfhI+APsp8reyUU/RuYVJHX9pl8TLFJm9JNy25EJkrsVal7Q/7DJXUKQ9X4se8/La73mU8hCIzJ5e9UPqMaGrzbZP0zx9mrGnT72X9GZV+6YO/Phj71wtE1y9vaCgJ+20xnDgvX0P/gtuAIZSqSPTU4ucAAAAAElFTkSuQmCC">
            <span>address</span>
          </div>
          <div class="flex items-center p-5">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA/klEQVR4nN3Vry9FYRgH8A+CjU0gCnT9VgJ/A0HS/AmSpJHMHc0IqJpiiqAIZorgx6YIgsZw7W7v3c7enXPm2nNn892e9G7v57y/zsN/yhy2sJNVIwp4Rauk9qKAhwrgIgo4qwA+MBYBbFQALSxEAPM1wHYEMIr3ksnfMC0ox9nkn1gUmNkMWBOcPpwXgGsMRSONtDUdZF8Psp5t1Uo0MIjLDFlNW1hMP5Z++78ax2OGHGA4jQ9gtzD2jBNsYuanyBSeMuQ+Pcqjmod5281KJnBTM1lZtT+qq4yk3vDVK6DYlK56CXRuTvsMTmtWdCcok1jGYTrYl9Q/mlHA3+cbCZaJ8S9xeiMAAAAASUVORK5CYII=">
            <span>contact</span>
          </div>
          <div class="flex items-center p-5">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAABC0lEQVR4nO3TPUoDURTF8Z92KexE3YYQE0W0EN2GC/Db9LEQRdEFiOAKUogfRSzcgWgKv0A7VyIPrvAcNBMllXjgFu/e4T/nzH3DvwqaxD5aUduo+oXG0MYNVjGLBWygg3MM/wT2imUMfDFPvXU89wq9wkoh9lZUPesnt2dlsCncZs4S5B6bUQ9oxmww4le7AQ/izcJNglWyeSWgtTg3sNMNmCLMZ+6Sq6IaMROLanUDnvYIPMq+b7sbcC+D1CNeMfITTuI8g4uypXSypTSzpSRnjzjGG5ZwjTUlasc9+1At4qc/Zjp64zjE4jd39ZNG8RLQ0od71QgucRdx0zaH9EET2I2rMdcPoL+ndwxOM7KrGspgAAAAAElFTkSuQmCC">
             <span>email</span>
          </div>
         
        </div>
      </div>
     </footer>


    <script src="js-portal/PortalFunction.js"></script>
</body>
</html>
