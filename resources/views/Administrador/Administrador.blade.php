
<x-app-layout>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
 
                
                apellido materno
                <p>{{$user->ap_materno}}  </p>  
                apellido paterno
                <p>{{$user->ap_paterno}}  </p>  
                nombre
                <p>{{$user->name}}  </p>  
                tipo usuario
                <p>{{$user->id_tipo_usuario}}  </p>  
            
           
            </div>
        </div>
    </div>

</x-app-layout>
