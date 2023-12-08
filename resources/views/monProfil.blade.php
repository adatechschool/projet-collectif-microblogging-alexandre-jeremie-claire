{{$userId = "test" }}
<x-app-layout>

    <div class="flex-col flex">
    
    
        <div class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
            <a href="/createPost/{{$userId}}" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Crée un post </a>
        </div>
    
        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md mt-4 ">
                <div class="flex-row">
               <div class=" flex justify-center ">
            
                <a href="#" class=" mt-4 ml-2 ">
                    <img
                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;w=1780&amp;q=80"
                        alt="avatar" class="hidden object-cover w-20 h-20 mx-4 rounded-full sm:block">
                    <h1 class="font-bold text-2xl text-gray-700 hover:underline">Alex John</h1>
                </a>
            </div>
            <div class="flex justify-end">
            <div class="flex flex-col max-w-sm px-6 py-4  bg-white rounded-lg shadow-md">
            <ul class="-mx-4">
            <li class="flex items-center">Age
                
                <li><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Alex John</li><span
                        class="text-sm font-light text-gray-700">Created 23 Posts</span></p>
            </li>
            </div>
            </div>
            </div>
        
    <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Biography.</a>
        <p class="mt-2  text-l text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
            reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque architecto sunt distinctio ipsum laborum. Nemo itaque optio quibusdam voluptatum architecto quae cupiditate omnis perspiciatis, sequi ipsum dolorem expedita mollitia deserunt. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe officiis atque eligendi? Consequatur ad adipisci esse eius itaque. Qui sunt dolor nemo, saepe esse fuga voluptatem mollitia consequatur voluptatum omnis.</p>
    </div>
    </div>
    </div>
    
    <div class="mt-6">
        <div class="flex items-center justify-between">
            <h1 class="text-xl font-bold mx-auto text-gray-700 md:text-2xl">Post</h1>
    
        </div>
        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md mt-4">
            <div class="flex items-center justify-between"><span class="font-light text-gray-600">Jun 1,
                    2020</span><a href="#"
                    class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Laravel</a>
            </div>
            <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Build
                    Your New Idea with Laravel Freamwork.</a>
                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
            </div>
    
    
    </div>
    </div>
    </div>
    
    


</x-app-layout>