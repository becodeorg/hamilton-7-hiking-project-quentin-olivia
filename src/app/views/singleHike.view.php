<div class="flex justify-center py-24" style="background-image: url('https://images.unsplash.com/photo-1526772662000-3f88f10405ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80'); background-size: cover;">
  <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
    <h2 class="text-gray-900 text-xl leading-tight font-medium mb-2"><?= $hike['name'] ?></h2>
    <p class="text-gray-700 text-base mb-4">
     <?= $hike['description'] ?>
    </p>
    <button type="button" class="px-6 py-2.5 bg-lime-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-lime-700 hover:shadow-lg focus:bg-lime-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out my-4">Edit</button>
    <button type="button" class="px-6 py-2.5 bg-lime-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-lime-700 hover:shadow-lg focus:bg-lime-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out my-4">Delete</button>
  </div>
</div>