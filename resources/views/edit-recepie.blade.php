<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script  src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <style>
        #btn{
        background-color: blue;
        }   
        section{
            background-color: rgb(77, 77, 202);
         width: 100vw;
           height: 100vh;
            background-repeat: no-repeat;
          
        }
        .center{
            margin-inline: 25rem;
        }
        .bg-red-500{
          height: 100vh;
          position: fixed
        }
         </style>
    <title>Document</title>
</head>
<body>
      <nav
  class="relative flex w-full flex-wrap items-center justify-between bg-[#FBFBFB] py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:py-4"
  data-te-navbar-ref>
  <div class="flex w-full flex-wrap items-center justify-between px-3">
    <div>
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
          clip-rule="evenodd"/>
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
      
      
      </ul>
      
      <div class="flex items-center" id="margin">
        <a href="" class="ml-2">
          <form action="/logout" method="POST">
            @csrf
            <button  id="bot">
              <i class="fas fa-sign-out-alt"></i>
              <span >Logout</span>
          </button>
        </form>
    </a>
   
      </div>
    </div>
  </div>
</nav>
    <div class="m-10 mr-6">
    <div  class="center" class="container mx-auto mt-8 bg-gray-100">
        <h1 class="text-2xl font-semibold mb-4">edit recepies</h1>
    
        <form  action="/edit-recepie/{{$recepie->id}}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                <input type="text" name="title" id="title" class="mt-1 p-2 border rounded w-full" value="{{$recepie->title}}"  required>
            </div>
            <div class="mb-4">
                <label for="ingridient" class="block text-sm font-medium text-gray-600">Ingredients</label>
                <textarea name="ingridient" id="ingridient" rows="4" class="mt-1 p-2 border rounded w-full"  required>{{$recepie->ingridient}}</textarea>
            </div>
    
            <div class="mb-4">
                <label for="instructions" class="block text-sm font-medium text-gray-600">Instructions</label>
                <textarea name="instructions" id="instructions" rows="4" class="mt-1 p-2 border rounded w-full" required>{{$recepie->instructions}}</textarea>
            </div>
    
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-600">Image</label>
                <input type="file" name="image_path" id="image" class="mt-1 p-2 border rounded w-full">
            </div>
    
            <div class="mb-4">  
              <a href="/user">  <button type="submit" class="text-white p-2 rounded" style="background-color: #d70b0b">Submit changes</button></a>
            </div>
        </form>
      </div>
    </div>
</body>
</html>