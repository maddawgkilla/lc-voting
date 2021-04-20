<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Catrgory One">Filter One</option>
                <option value="Catrgory One">Filter One</option>
                <option value="Catrgory One">Filter One</option>
                <option value="Catrgory One">Filter One</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an Idea" class="border-none w-full rounded-xl bg-white px-4 py-2 pl-8 placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>
    <!-- end filters -->

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="border border-gray-200 hover:border-gray-400 w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>             
                </div>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id nisi, laboriosam esse in aspernatur quibusdam placeat maiores odit ducimus, deleniti culpa, tempore unde nobis dicta corporis accusantium iste! Exercitationem ipsa accusamus nemo animi quia itaque est voluptatum tenetur eum explicabo iusto deleniti harum blanditiis quaerat qui magnam ratione maiores, quibusdam earum. Eos inventore non neque nemo ullam ex nihil quisquam dolor quam, voluptatum repudiandae quidem sapiente perferendis dignissimos, dolorum explicabo at, reiciendis assumenda quis! Perferendis eius aut hic pariatur ex dignissimos ducimus dicta sunt temporibus commodi animi nihil amet, quasi, sapiente nemo maiores. Libero pariatur praesentium odio fuga atque.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in pb-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="text-left absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Idea Container -->
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="border border-gray-200 hover:border-gray-400 w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id nisi, laboriosam esse in aspernatur quibusdam placeat maiores odit ducimus, deleniti culpa, tempore unde nobis dicta corporis accusantium iste! Exercitationem ipsa accusamus nemo animi quia itaque est voluptatum tenetur eum explicabo iusto deleniti harum blanditiis quaerat qui magnam ratione maiores, quibusdam earum. Eos inventore non neque nemo ullam ex nihil quisquam dolor quam, voluptatum repudiandae quidem sapiente perferendis dignissimos, dolorum explicabo at, reiciendis assumenda quis! Perferendis eius aut hic pariatur ex dignissimos ducimus dicta sunt temporibus commodi animi nihil amet, quasi, sapiente nemo maiores. Libero pariatur praesentium odio fuga atque.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in pb-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Idea Container -->
    </div> 
    <!-- End Ideas Container -->
</x-app-layout>
