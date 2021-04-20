<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>
    <!-- Start Idea Container -->
    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>             
            </div>
            <div class="mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id nisi, laboriosam esse in aspernatur quibusdam placeat maiores odit ducimus, deleniti culpa, tempore unde nobis dicta corporis accusantium iste! Exercitationem ipsa accusamus nemo animi quia itaque est voluptatum tenetur eum explicabo iusto deleniti harum blanditiis quaerat qui magnam ratione maiores, quibusdam earum. Eos inventore non neque nemo ullam ex nihil quisquam dolor quam, voluptatum repudiandae quidem sapiente perferendis dignissimos, dolorum explicabo at, reiciendis assumenda quis! Perferendis eius aut hic pariatur ex dignissimos ducimus dicta sunt temporibus commodi animi nihil amet, quasi, sapiente nemo maiores. Libero pariatur praesentium odio fuga atque.
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
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
                            <ul class="hidden text-left absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
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
    <!-- Start Buttons Conatiner -->
    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center spcae-x-4 ml-6">
            <button type="button" class="text-white flex items-center justify-center w-32 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in pc-6 py-3">
                <span class="ml-1">Reply</span>
            </button>
            <button type="button" class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:bg-gray-400 transition duration-150 ease-in px-6 py-3 ml-3">
                <span>Set Status</span>
                <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>     
        <div class="flex items-center spcae-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button type="button" class="w-32 h-11 text-xs bg-gray-200 uppercase font-semibold rounded-xl border border-gray-200 hover:bg-gray-400 transition duration-150 ease-in px-6 py-3 ml-3">
                <span>Vote</span>
            </button>
        </div> 
    </div>
    
    <!-- End Buttons Container -->

    <!-- Start Comments Container -->
    <div class="comments-container relative space-y-6 ml-22 my-8 mt-1 pt-4">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v2" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>             
                </div>
                <div class="mx-4">
                    <!-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> -->
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id nisi, laboriosam esse in aspernatur quibusdam placeat maiores odit ducimus, deleniti culpa.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">Mary Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in pb-2 px-3">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="hidden text-left absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Comment Conatainer -->
        <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="uppercase text-blue text-center text-xxs font-bold mt-1">Admin</div>
                </div>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status Changed to "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id nisi, laboriosam esse in aspernatur quibusdam placeat maiores odit ducimus, deleniti culpa.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">Andrea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in pb-2 px-3">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="hidden text-left absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Comment Container -->
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v4" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>             
                </div>
                <div class="mx-4">
                    <!-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> -->
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id nisi, laboriosam esse in aspernatur quibusdam placeat maiores odit ducimus, deleniti culpa.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">Mary Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in pb-2 px-3">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="hidden text-left absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Comment Container -->
    </div>
    <!-- Endd Comments Container -->
</x-app-layout>
