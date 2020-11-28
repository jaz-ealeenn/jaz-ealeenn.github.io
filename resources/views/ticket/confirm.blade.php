<x-app-layout>
<div class="container mx-auto pt-3  ">
    <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto p-4 mb-6 ">
        
        <label class="font-bold">Ticket No.</label><br>
        <p>{{$ticket->id}}</p></br>

        <label class="font-bold">Tema de ayuda</label><br>
        <p>{{$help_topic->help_topic}} </p><br>

        <label class="font-bold">Nombre</label><br>
        <p>{{$user->name}}</p></br>

        <label class="font-bold">Apellido Paterno</label><br>
        <p>{{$user->ap_paterno}}</p></br>

        <label class="font-bold">Apellido Materno</label><br>
        <p>{{$user->ap_materno}}</p></br>

        <label class="font-bold">Correo Electronico</label><br>
        <p>{{$user->email}}</p></br>
         
        <label class="font-bold">Asunto</label><br>
        <p>{{$ticket->asunto}}</p></br>
        <p>Es importante que recuerdes o anotes tu numero de ticket, te servira para ver su status.</p><br>
        <a href="{{route('inicio')}}" class="boton hover:no-underline">Regresar</a>
    </div>
</div>
</x-app-layout>