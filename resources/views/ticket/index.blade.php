<x-app-layout>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                <div class="container">
                    Estos son tus Tickets:
                    @foreach ($ticket as $ticket)
                        <div>{{$ticket->id}}</div>
                        <div>{{$user->name}}</div>
                        <div>{{$ticket->estado}}</div>
                         
                        <br>                    

                        <figure class="md:flex bg-gray-100 rounded-xl p-8 md:p-0 ">
                             
                            <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                              <blockquote>
                                <p class="text-lg font-semibold">
                                    {{$ticket->estado}}
                                </p>
                              </blockquote>
                              <figcaption class="font-medium">
                                <div class="text-cyan-600">
                                  Sarah Dayan
                                </div>
                                <div class="text-gray-500">
                                  Staff Engineer, Algolia
                                </div>
                              </figcaption>
                            </div>
                          </figure>

                    @endforeach
                    
                </div>
                
                
            </div>
        </div>
    </div>
</x-app-layout>
