<x-app-layout>


<div class="container mx-auto">


    <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto p-4 mb-6">
            <form action="{{route('ticket.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                
                    <label class="form-label mb-2" for="id_help_topic">id help topic</label>
                    <select wire:model="id_help_topic" name="id_help_topic" id="id_help_topic">
                        @foreach ($help_topic as $topics)
                    <option value="{{$topics->id}}">{{$topics->help_topic}}</option>
                            
                        @endforeach
    
                    </select>           
                 </div>
               
                
                <div class="mb-3">
                    <label for="asunto" class="form-label mb-2">asunto</label>
                    <textarea wire:model="asunto" id="asunto" name="asunto" placeholder="ingrese el asunto del ticket"  rows="4" class="form-control"></textarea>
                </div>
                <button  type="submit"  class="boton mr-9 ">Crear ticket</button>
                <a href="{{route('inicio')}}" class="button hover:no-underline">Cancelar</a>

            </form>
            
        
    </div>


</div>
</x-app-layout>
