<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
    <div class="text-2xl text-black mx-auto border-4 border-separate" >
            
            <table class = "table border-black border-4 text-base mx-auto">
            <thead >
                <tr class="border-black border-4 bg-violet-400">
                <th class="border-black border-4">Nombre</th>
                <th class="border-black border-4">Email</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class=" border-black border-4">
                
                <td class=" border-black border-2 mx-2  bg-white py-2 px-2">{{ $user->name }}</td>
                <td class=" border-black border-2 mx-2  bg-white py-2 px-2">{{ $user->email }}</td>
                
                </tr>
                @endforeach
                
                    <!-- Información -->
                    <div class="w-full mt-4 bg-cyan-100 px-5 my-7 rounded-md">
                        <h1 class="text-3xl  text-center font-bold  text-black">USUARIOS EN EL SISTEMA</h1>
                        <h3 class="text-xl  text-center  text-black">Aqui puedes ver a los usuarios que se encuentran registrados en el sistema</h3>
                    </div>  
                
                </div>
            </tbody>
            </table>

        </div>
    </body>
    </html>

</x-app-layout>
