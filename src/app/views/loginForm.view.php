<div class="section-login flex justify-center items-center py-24" style="background-image: url('https://images.unsplash.com/photo-1564849458468-65cf246d4906?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80'); background-size: cover;">
    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
        <h2 class="text-2xl font-bold text-lime-500 my-4">Login</h2>

        <form action="/login" method="post">
            <div>
                <label for="username" class="form-label inline-block mb-2 text-gray-700">Username</label>
                <input type="text" name="username" id="username" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            </div>
            <button type="submit" class="px-6 py-2.5 bg-lime-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-lime-700 hover:shadow-lg focus:bg-lime-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out my-4">Connect</button>
        </form>
    </div>
</div>