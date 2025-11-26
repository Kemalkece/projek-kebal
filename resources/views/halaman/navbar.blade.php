<nav class="sticky top-0 z-50 h-24 select-none bg-[#1B2533]" x-data="{ showMenu: false }">
    <div class="container flex overflow-hidden relative flex-wrap justify-between items-center mx-auto h-24 font-medium border-b border-gray-200 md:overflow-visible lg:justify-center sm:px-4 md:px-2 lg:px-0">
        <div class="flex justify-start items-center pr-4 w-1/4 h-full">
            <a href="#_" class="flex items-center py-4 space-x-2 font-extrabold text-white md:py-0">
                <span class="flex justify-center items-center w-8 h-8 text-white bg-gray-900 rounded-full">
                    <svg class="w-auto h-5 -translate-y-px" viewBox="0 0 69 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m31.2 12.2-3.9 12.3-13.4.5-13.4.5 10.7 7.7L21.8 41l-3.9 12.1c-2.2 6.7-3.8 12.4-3.6 12.5.2.2 5-3 10.6-7.1 5.7-4.1 10.9-7.2 11.5-6.8.6.4 5.3 3.8 10.5 7.5 5.2 3.8 9.6 6.6 9.8 6.4.2-.2-1.4-5.8-3.6-12.5l-3.9-12.2 8.5-6.2c14.7-10.6 14.8-9.6-.4-9.7H44.2L40 12.5C37.7 5.6 35.7 0 35.5 0c-.3 0-2.2 5.5-4.3 12.2Z" fill="currentColor" />
                    </svg>
                </span>
                <span>LOGO</span>
            </a>
        </div>
        <div class="hidden top-0 left-0 items-start p-4 w-full h-full text-sm bg-[#1B2533] bg-opacity-95 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
            <div class="overflow-hidden flex-col w-full h-auto bg-[#1B2533] md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                <a href="#_" class="block inline-flex items-center px-6 w-auto h-16 text-xl font-black leading-none text-white md:hidden">
                    LOGO
                </a>
                <div class="flex flex-col justify-center items-start space-x-6 w-full text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                    <a href="/" class="inline-block py-2 mx-0 ml-6 w-full font-medium text-left text-white hover:text-gray-300 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Home</a>
                    <a href="#teknisi" class="inline-block py-2 mx-0 w-full font-medium text-left text-gray-300 hover:text-white md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Teknisi</a>
                    <a href="#price" class="inline-block py-2 mx-0 w-full font-medium text-left text-gray-300 hover:text-white md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Price</a>
                    <a href="#artikel" class="inline-block py-2 mx-0 w-full font-medium text-left text-gray-300 hover:text-white md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Artikel</a>
                    <a href="#_" class="inline-block py-2 mx-0 w-full font-medium text-left text-gray-300 hover:text-white md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Tentang Kami</a>
                </div>
                <div class="flex flex-col justify-end items-start pt-4 w-full md:items-center md:w-1/3 md:flex-row md:py-0">
                    <!-- <a href="#" class="px-6 py-2 mr-0 w-full text-gray-200 hover:text-white md:px-3 md:mr-2 lg:mr-3 md:w-auto">Sign In</a>
                    <a href="#_" class="inline-flex items-center px-5 px-6 py-3 w-full text-sm font-medium leading-4 text-[#334155] bg-white md:w-auto md:rounded-full hover:bg-gray-100 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-gray-100">Login</a> -->
                </div>
            </div>
        </div>
        <div @click="showMenu = !showMenu" class="flex absolute right-0 flex-col justify-center items-end items-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
            <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </div>
    </div>
</nav>
