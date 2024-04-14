<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ========== Tailwind Css ========  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ========== FontsAwesome Css ========  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
  
    <title>HomePage</title>
    <style>
        body{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        
    </style>
</head>

<body class="bg-gray-100">

<nav
  class="relative flex w-full flex-wrap items-center justify-between bg-[#FBFBFB] py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:py-4"
  data-te-navbar-ref>
  <div class="flex w-full flex-wrap items-center justify-between px-3">
    <div>
      <a
        class="mx-2 my-1 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
        href="/rece">
        <img
          {{-- class="mr-1" --}}
          src="images/lo.png"
          style="height: 35px"
          alt="Logo"
          loading="lazy" />
      </a>
    </div>
    <button
    class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
    type="button"
    data-te-collapse-init
    data-te-target="#navbarSupportedContent4"
    aria-controls="navbarSupportedContent4"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="[&>svg]:w-7">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        fill="currentColor"
        class="h-7 w-7">
        <path
          fill-rule="evenodd"
          d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
          clip-rule="evenodd" />
      </svg>
    </span>
  </button>

    <div
      class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
      id="navbarSupportedContent4"
      data-te-collapse-item>
     
      <ul
        class="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 lg:flex-row"
        data-te-navbar-nav-ref>
      
        <li
          class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1"
          data-te-nav-item-ref>
          <a
            class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
            aria-current="page"
            href="#"
            data-te-nav-link-ref
            >krusty krub</a
          >
        </li>
      </ul>
      
      <div class="flex items-center">
        <a href="/user">
        <button
          type="button"
          data-te-ripple-init
          data-te-ripple-color="light"
          class="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out bg-neutral-100 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 motion-reduce:transition-none">
          Login
        </button>
    </a>
      <a href="/user">
        <button
          type="button"
          data-te-ripple-init
          data-te-ripple-color="light"
          class="mr-3 inline-block rounded px-3 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg motion-reduce:transition-none"
          style="background-color: #d70b0b">
          <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-5 w-5">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
        </svg>
        </button>
    </a>
      </div>
    </div>
  </div>
</nav>
 <div class="relative mx-auto w-64 md:w-96 mt-5">

   <!-- search start -->
   <div id="" class="mt-10">
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <form action="/search" method="GET"> 
        <input type="text" name="query" id="query" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required>
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="background-color: #e31f1f">
          Search</button>
    </form>
    </div>
</div>
</div>
<!-- search bar end -->
		<div class="space-y-2 text-center py-5" >
			<h2 class="text-3xl font-bold">welcome to the world of recepies</h2>
			<p class="font-serif text-sm dark:text-gray-400">Our community serves as an expansive digital.</p>
		</div>
  </div>
  <section class="py-6 sm:py-12 dark:bg-gray-800 dark:text-gray-100">
    <div class="container p-6 mx-auto space-y-8">
		<div class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-3">

@foreach ($recepies as $recepie)
			<article class="flex flex-col dark:bg-slate-500">
				<a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
					<img  src="{{ asset('storage/images/' . $recepie->image_path) }}" alt="{{ $recepie->title }}" class="object-cover w-full h-52 dark:bg-gray-500" >
				</a>
				<div class="flex flex-col flex-1 p-6">
					<a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum"></a>
                    <h3 class="flex-1 py-2 text-lg font-semibold leadi">{{$recepie['title']}}</h3>
					{{-- <a rel="noopener noreferrer" href="#" class="text-xm tracki uppercase hover:underline dark:text-violet-400">{{$recepie['ingridient']}}</a> --}}
                    <span class="pb-3">  <span style="color:rgb(57, 46, 29); font-size:1.2rem;" >ingridients:</span> {{$recepie['ingridient']}}</span>
                    
                    <span rel="noopener noreferrer" href="#" class="text-xs tracki uppercase  dark:text-violet-400">{{$recepie['instructions']}}</span>
                    {{-- <h4 class="flex-1 py-2 text-lg font-semibold leadi"></h4> --}}
					<div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-400">
                       
                        <td class="py-2 px-4 border-b"><span>user : {{ $recepie->user->name }}</span></td>
                
						<span>2.2K views</span>
					</div>
				</div>
			</article>
            @endforeach
	</div>
    </div>
</section>





