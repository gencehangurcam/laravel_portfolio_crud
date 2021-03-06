<!--Container-->
<div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-16">
    <div class="w-full lg:w-1/5 px-6 text-xl text-gray-800 leading-normal">
        <p class="text-base font-bold py-2 lg:pb-6 text-gray-700">Menu</p>
        <div class="block lg:hidden sticky inset-0">
            <button id="menu-toggle"
                class="flex w-full justify-end px-3 py-3 bg-white lg:bg-transparent border rounded border-gray-600 hover:border-yellow-600 appearance-none focus:outline-none">
                <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </button>
        </div>
        <div class="w-full sticky inset-0 hidden max-h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 my-2 lg:my-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20"
            style="top:6em;" id="menu-content">
            <ul class="list-reset py-2 md:py-0">
                <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                    <a href='{{ route("admin") }}'
                        class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-600">
                        <span class="pb-1 md:pb-0 text-sm">Section: about</span>
                    </a>
                </li>
                <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                    <a href='{{ route("admin.services") }}'
                        class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-600">
                        <span class="pb-1 md:pb-0 text-sm">Section: services</span>
                    </a>
                </li>
                <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                    <a href='{{ route("admin.work") }}'
                        class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-600">
                        <span class="pb-1 md:pb-0 text-sm">Section: work</span>
                    </a>
                </li>

                <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                    <a href='{{ route("admin.contact") }}'
                        class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-600">
                        <span class="pb-1 md:pb-0 text-sm">Section: contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
