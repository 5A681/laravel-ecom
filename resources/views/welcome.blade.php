<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <section  class="w-100% h-[700px] bg-[url('../../public/images/background.jpg')] bg-contain relative font-Roboto">
    <div class="w-[100%]  flex justify-between items-center p-10">
        <div class="ml-[10%]">
            <a href="#" class="font-bold text-2xl font-sans text-lime-500">TREE STORE</a>
        </div>
        <div class="flex gap-10 mr-[10%] text-[17px] items-center o">
            <a href="#" class="text-lime-500">HOME</a>
            <span>ABOUT</span>
            <span>SHOP</span>
            <span>CONTACT</span>
            <div class="flex gap-5 text-lime-500">
                <div class="relative cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                    <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
                </svg>
                <div class="absolute mt-[-10] bg-lime-600 top-[-10px] right-[-10px]  w-[18px] h-[18px] flex items-center justify-center rounded-full">
                    <span class="text-white text-[14px]">9</span>
                </div>
            </div>
                <span class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                    </svg>
                </span>
            </div>
        </div>
        
    </div>
    <div class="absolute w-[100%] h-[100%]  flex items-center justify-center">
           <div class="text-center font-Roboto">
             <p class="text-[60px] font-bold text-lime-600">TREE</p>
             <p class="text-[40px] font-light text-lime-950">GREENSPACE STORE</p>
             <button class="bg-lime-600 text-[24px] px-2 text-white rounded-sm">SHOP NOW</button>
           </div>
    </div>
  </section>
  <section class="border-b-2">
    <div class="grid grid-cols-3 gap-4  mt-[100px]  mx-20"> 
        <div class="mb-10">
            <img src="{{URL::asset('images/plant1.webp')}}" alt="" class=" ">
            <p class="text-gray-400 text-[16px]">Trees</p>
            <p class="400 text-[18px] font-bold">Tree 1</p>
            <p class="text-gray-600 text-[16px] font-bold">$20.99</p>
        </div>
        <div>
             <img src="{{URL::asset('images/plant2.webp')}}" alt="" class="">
             <p class="text-gray-400 text-[16px]">Trees</p>
             <p class="400 text-[18px] font-bold">Tree 2</p>
             <p class="text-gray-600 text-[16px] font-bold">$30.99</p>
        </div>
        <div>
             <img src="{{URL::asset('images/plant3.webp')}}" alt="" class="">
             <p class="text-gray-400 text-[16px]">Trees</p>
             <p class="400 text-[18px] font-bold">Tree 3</p>
             <p class="text-gray-600 text-[16px] font-bold">$40.99</p>
        </div>
        
    </div>
   
      
  </section>
  <section class="bg-[url('../../public/images/bg2.jpg')] h-[500px] flex items-center justify-center">
   <div class="font-Roboto text-center">
        <h1 class="text-2xl font-bold ">Give the Gift of a Tree</h1>
        <p class="text-xl py-5">Give the gift of a lasting memory with a tree</p>
        <button class="bg-lime-600 text-[20px] px-6 py-1 text-white rounded-sm">PURCHASE A TREE</button>
   </div>
  </section>
  <section>
    <div class="grid grid-cols-3 gap-4  py-10 border-b-2 "> 
        <div class="flex justify-center items-center gap-2 ">
            <div class="bg-lime-500 p-2 rounded-full">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd"/>
            </svg>
            </div>
            <div>
                <p>SECURE PAYMENT</p>
                <p>All our payments our SSL secured</p>
            </div>
        </div>
            
        <div class="flex justify-center items-center gap-2 border-l border-r">
              <div class="bg-lime-500 p-2 rounded-full">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20 7h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C10.4 2.842 8.949 2 7.5 2A3.5 3.5 0 0 0 4 5.5c.003.52.123 1.033.351 1.5H4a2 2 0 0 0-2 2v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9a2 2 0 0 0-2-2Zm-9.942 0H7.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM13 14h-2v8h2v-8Zm-4 0H4v6a2 2 0 0 0 2 2h3v-8Zm6 0v8h3a2 2 0 0 0 2-2v-6h-5Z"/>
                </svg>
              </div>
            <div>
                <p>DELIVERED WITH CARE</p>
                <p>Super fast shipping to your door</p>
            </div>
        </div>
        <div class="flex justify-center items-center gap-2">
            <div class="bg-lime-500 p-2 rounded-full">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd"/>
                </svg>
            </div>

            <div>
                <p>EXCELLENT SERVICE</p>
                <p>Live chat and phone support</p>
            </div>
        </div>
      </div>
  </section>
  {{-- footer --}}
  <section class="grid grid-cols-3 p-10 font-Roboto">
    <div class="flex gap-3 items-center justify-center">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Shop</a>
        <a href="#">Contract</a>
    </div>
    <div class="flex items-center justify-center">
        <span class="text-[24px]">TREE STORE</span>
    </div>
    <div class="flex items-center justify-center">
        <span class="">JUST TUTORIAL</span>
    </div>
  </section>
</body>
</html>