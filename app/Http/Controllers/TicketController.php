<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;
use App\Models\Help_topic;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $estado, $id_usuario, $asunto, $id_help_topic;
    
    public function index()
    {
        $user = Auth::user();
        $id= $user->id;
        $ticket= Ticket::latest()->where('id_usuario', $id)->get();
        $acceso = $user->id_tipo_usuario;
        if ($acceso=="4") {
            return view('ticket.admin.index');
         
        }else return view('ticket.index', compact('ticket', 'user'));
        
        /*
        $help_topic = Help_Topic::all();
        $tickets = Ticket::latest('id')->get();
        return view('livewire.ticket-component', compact('tickets', 'help_topic'));
    */}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $help_topic = Help_Topic::all();
        $user = Auth::user();
        
        $acceso = $user->id_tipo_usuario;
        if ($acceso=="4") {
            return view('Administrador.Administrador', compact('user'));
         
        }
         
        return view('ticket.create', compact( 'help_topic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $user = Auth::user();
     
        $acceso = $user->id_tipo_usuario;
        if ($acceso=="4") {
            return view('Administrador.Administrador', compact('user'));
         
        }
        $tickets = new Ticket();
       
        $tickets->id_help_topic = $request->id_help_topic;
        $tickets->id_usuario = Auth::user()->id;
        $tickets->estado = 'Canalizado';
        $tickets->asunto = $request->asunto;
               
        $tickets->save();
        
        return redirect()->route('ticket.show', $tickets);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $ticket = Ticket::find($id);
        $help_topic = Help_Topic::find($ticket->id_help_topic);
        $user = Auth::user();
        return view('ticket.confirm', compact('ticket','help_topic', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ticket $ticket)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket $ticket)
    {
        $user = Auth::user();
     
        $acceso = $user->id_tipo_usuario;
        if ($acceso=="4") {
           
         
        }
    }
}
