<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script  src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ========== FontsAwesome Css ========  -->
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
        #bot{
        position: absolute;
        bottom: 1rem;
        }
        #margin{
          margin-right: 5rem;
        }
         </style>
</head>
<body>
  @auth
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
      <div class=" bg-gray-100 p-6 ">
    
    <div  class="center" class="container mx-auto mt-8">
        <h2 class="text-xl font-semibold mb-4">Create a Recipe</h2>
    
        <form  action="/create_recepie" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="mb-5">
                <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                <input type="text" name="title" id="title" class="mt-1 p-2 border rounded w-full"  required>
            </div>
    
            <div class="mb-4">
                <label for="ingridient" class="block text-sm font-medium text-gray-600">Ingredients</label>
                <textarea name="ingridient" id="ingridient" rows="4" class="mt-1 p-2 border rounded w-full" required></textarea>
            </div>
    
            <div class="mb-4">
                <label for="instructions" class="block text-sm font-medium text-gray-600">Instructions</label>
                <textarea name="instructions" id="instructions" rows="4" class="mt-1 p-2 border rounded w-full" required></textarea>
            </div>
    
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-600">Image</label>
                <input type="file" name="image_path" id="image" class="mt-1 p-2 border rounded w-full">
            </div>
    
            <div class="mb-4">  
                <button type="submit" class="bg-red-700 text-white p-2 rounded">Submit Recipe</button>
            </div>
        </form>
      </div>
   

      <div>
    <div class="max-w-6xl mx-auto bg-white rounded-md overflow-hidden">
      <h2 class="text-2xl font-semibold p-4 bg-gray-200">Recettes</h2>
    <table>
      <thead>
          <tr>
            <th class="py-2 px-4 border-b">id</th>
              <th class="py-2 px-4 border-b">Titre</th>
              <th class="py-2 px-4 border-b">Ingrédients</th>
              <th class="py-2 px-4 border-b">Instructions</th>
              <th class="py-2 px-4 border-b">Image</th>
              <th class="py-2 px-4 border-b">delete</th>
              <th class="py-2 px-4 border-b">update</th>
          </tr>
      </thead>
      <tbody>
        @foreach($recepies as $recepie)
        <tr>
          <td class="py-2 px-4 border-b">{{ $recepie->id}}</td>
            <td class="py-2 px-4 border-b">{{ $recepie->title }}</td>
            <td class="py-2 px-4 border-b">{{ $recepie->ingridient }}</td>
            <td class="py-2 px-4 border-b">{{ $recepie->instructions }}</td>
            <td class="py-2 px-4 border-b">{{ $recepie->image_path }}</td>
        
            <td class="py-2 px-4 border-b">  
              <form action="/delete-recepie/{{$recepie->id}}" method="POST">
                @csrf
                @method('DELETE')
              <button class="text-white p-2 rounded" style="background-color: #d70b0b">delete</button>
            </form>
          </td>
            <td class="py-2 px-4 border-b"><a href="/edit-recepie/{{$recepie->id}}"><button  class="text-white p-2 rounded" style="background-color: #ad4816">update</button></a></td>
          </tr>
          @endforeach
       </table>
      </div>
    </div>
  </div>  
    @else
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
      </div>
    </div>
  </nav>
    <section >
        <div id="class" class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="images/lo.png" alt="logo" width="200%">
             krusty krab
            </a>
            <div  id="class" class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div  id="class" class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                      log in 
                    </h1>
                    <!-- form -->
                    <form class="space-y-4 md:space-y-6" action="/login" method="POST" >
                    <div>
               
                            <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">full name</label>
                            @csrf
                            <input type="text" id="name" name="logname" placeholder="full name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                  
                        <div>
                            <label for="pass" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password"  name="logpassword" id="password" placeholder="********" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                        </div>
                        <button  id="btn" type="submit"  class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" style="background-color: #d70b0b">log in </button>
                       
                        
                    </form>
                </div>
            </div>
        </div>
      </section>
    @endauth
</body>
</html>
