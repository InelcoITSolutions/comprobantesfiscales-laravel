<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;

class ContactUSController extends Controller
{
	 /**
		* Show the application dashboard.
		*
		* @return \Illuminate\Http\Response
		*/
	 public function contactUS()
	 {
			 return view('index');
	 }

	 /**
		* Show the application dashboard.
		*
		* @return \Illuminate\Http\Response
		*/
	 public function contactUSPost(Request $request)
	 {
			 $this->validate($request, [
				 'name' => 'required',
				 'lastname' => 'required',
				 'phone' => 'required|max:10',
				 'ext' => 'max:6',
				 'email' => 'required|email',
				 'subject' => 'max:255',
				 'message' => 'required',
				 'g-recaptcha-response' => 'required|recaptcha'
			 ]);

			 $this->recibido=$request;
			 //INSERT EN BD
			ContactUS::create($request->all());
			 //Notificación al usuario			
			Mail::send('contact.email', 
				['nombrec' => $this->recibido->name.' '.$this->recibido->lastname,
				'nombre' => $this->recibido->name, 
				'apellido' => $this->recibido->lastname,
				'email' => $this->recibido->email], 
				function ($message) {
					//remitente
	            $message->from('contacto@comprobantesfiscales.org','ComprobantesFiscales.org');
	            //asunto
	            $message->subject('Hemos recibido el mensaje que nos enviaste.');
	            //receptor
	            $message->to($this->recibido->email, $this->recibido->name.' '.$this->recibido->lastname);
	            $message->cc('contacto@comprobantesfiscales.org');
			});
			 //Notificación a empresa			
			Mail::send('contact.notificacion', 
				['nombre' => $this->recibido->name, 
				'apellido' => $this->recibido->lastname,
				'telefono' => $this->recibido->phone,
				'extension' => $this->recibido->ext,
				'asunto' => $this->recibido->subject, 
				'email' => $this->recibido->email,
				'mensaje' => $this->recibido->message],
				function ($message) {
					//remitente
	            $message->from($this->recibido->email, $this->recibido->name.' '.$this->recibido->lastname);
	            //asunto
	            $message->subject('Envió de mensaje desde ComprobantesFiscales.org por parte de: ' . $this->recibido->name.' '.$this->recibido->lastname);
	            //receptor
	            $message->to('luis.carrillo@inelco.com.mx');
	            $message->cc('contacto@comprobantesfiscales.org');
			});
			$input = request()->all();
			return response()->json(['success'=>'Mensaje enviado correctamente.']);
	 }
}