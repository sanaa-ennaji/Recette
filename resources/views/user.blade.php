<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script  src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
        
         </style>
</head>
<body>
    @auth
    <p>welcome, dear user </p>
    <form action="/logout" method="POST">
@csrf
<button>log out</button>
    </form>
   
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-semibold mb-4">Create a Recipe</h1>
    
        <form action="/create_recepie" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                <input type="text" name="title" id="title" class="mt-1 p-2 border rounded w-full"  required>
            </div>
    
            <div class="mb-4">
                <label for="ingredients" class="block text-sm font-medium text-gray-600">Ingredients</label>
                <textarea name="ingredients" id="ingredients" rows="4" class="mt-1 p-2 border rounded w-full" required></textarea>
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
                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Submit Recipe</button>
            </div>
        </form>
    </div>

    @else
    <section >
        <div id="class" class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="w.png" alt="logo" width="200%">
            the krusty krab
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
                      
                        <!-- <input type="hidden" name="action" value="register"> -->
                        <button  id="btn" type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">log in </button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="/user" class="font-medium text-primary-600 hover:underline dark:text-primary-500">register here</a>
                        </p>
                        
                    </form>
                </div>
            </div>
        </div>
      </section>
   
    @endauth


<script>

tailwind.config = {
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
      }
    },
    fontFamily: {
      'body': [
    'Inter', 
    'ui-sans-serif', 
    'system-ui', 
    '-apple-system', 
    'system-ui', 
    'Segoe UI', 
    'Roboto', 
    'Helvetica Neue', 
    'Arial', 
    'Noto Sans', 
    'sans-serif', 
    'Apple Color Emoji', 
    'Segoe UI Emoji', 
    'Segoe UI Symbol', 
    'Noto Color Emoji'
  ],
      'sans': [
    'Inter', 
    'ui-sans-serif', 
    'system-ui', 
    '-apple-system', 
    'system-ui', 
    'Segoe UI', 
    'Roboto', 
    'Helvetica Neue', 
    'Arial', 
    'Noto Sans', 
    'sans-serif', 
    'Apple Color Emoji', 
    'Segoe UI Emoji', 
    'Segoe UI Symbol', 
    'Noto Color Emoji'
  ]
    }
  }
}
</script>
</body>
</html>
