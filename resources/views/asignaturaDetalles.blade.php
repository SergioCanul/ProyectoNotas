<x-app-layout>
    <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Asignatura Detalles</title>
            </head>

               <!--Card mensaje inicio-->          
                <div class="w-1/4 pb-4 mx-auto px-5 my-10 border-4 border-indigo-50  bg-white rounded-sm">

                    <!-- Información -->
                    <div class="w-full mt-4 bg-cyan-100  rounded-md">
                        <h1 class="text-2xl  text-center font-bold  text-black">Detalles de la asignatura</h1>
                    </div>  
                
                </div>

            <body>
                <div class="flex">

                <div class="w-1/3 mx-auto  text-black border-black border-4 border-separate bg-violet-400" >
                    <h1 class=" px-3 my-2">Asignatura: <br> 
                        <span class="text-2xl text-center">
                        {{$asignatura->nombre}}
                        </span>
                    </h1>

                    <h1 class="px-3 mt-2">Clave:
                        <br>
                        <span class="font-semibold">
                            {{$asignatura->clave}}
                        </span>
                    </h1>

                    
                    <h3 class="px-3 mt-2">Semestre: 
                        <span class="font-semibold">
                        {{$asignatura->semestre}}
                        </span>
                    </h3>
                    <h1 class="p-3 my-2">ID:<br> {{$asignatura->id}}</h1>
                </div>

                <div class="w-2/4 mx-auto text-md text-black border-black border-4 border-separate bg-white" >
                    <h3 class="px-3 mt-2">TEMAS:</h1>
                    <ul class="p-3 my-2 mx-5">
                        @foreach ($asignatura->topics as $topic)
                            <li class="list-decimal">
                                {{$topic->tema}}
                            </li>
                        @endforeach
                        </ul>
                </div>
                

            </div>

            </body>
        </html>
</x-app-layout>