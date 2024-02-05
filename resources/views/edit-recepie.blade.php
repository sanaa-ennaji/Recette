<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script  src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <div  class="center" class="container mx-auto mt-8">
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
                <textarea name="ingridient" id="ingridient" rows="4" class="mt-1 p-2 border rounded w-full"  value="{{$recepie->ingridient}}" required></textarea>
            </div>
    
            <div class="mb-4">
                <label for="instructions" class="block text-sm font-medium text-gray-600">Instructions</label>
                <textarea name="instructions" id="instructions" rows="4" class="mt-1 p-2 border rounded w-full"  value="{{$recepie->instructions}}" required></textarea>
            </div>
    
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-600">Image</label>
                <input type="file" name="image_path" id="image" class="mt-1 p-2 border rounded w-full"  value="{{$recepie->image_path}}">
            </div>
    
            <div class="mb-4">  
                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Submit changes</button>
            </div>
        </form>
      </div>
</body>
</html>