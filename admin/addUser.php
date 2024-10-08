<header>
     <script src="https://cdn.tailwindcss.com"></script>
</header>
<div id="popup-form-container" class="fixed inset-0 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
    <div class="bg-white p-5 rounded shadow-lg w-96">
         <div class="flex justify-center items-center  p-2 mb-4">
         <h2 class="flex text-2xl font-bold text-blue-500">ADD USER</h2>
         </div>
         <form action="db/db_addUser.php" method="post">
         <input type="text" name="uname" placeholder="Username" class="mb-4 p-2 border border-gray-300 rounded w-full">
        <input type="text" name="mail" placeholder="E-mail" class="mb-4 p-2 border border-gray-300 rounded w-full">
        <input type="password" name="pwd" placeholder="Password" class="mb-4 p-2 border border-gray-300 rounded w-full">
        <input type="password" name="rpwd" placeholder="Repeat password" class="mb-4 p-2 border border-gray-300 rounded w-full">
        <div class="flex justify-center">
            <button name="adduserBtn" class="bg-blue-500 hover:bg-blue-800 text-white px-4 py-2 rounded">add</button>
        </div>
         </form>
    </div>

