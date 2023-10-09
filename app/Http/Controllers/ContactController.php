<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\People;
use Illuminate\Http\Request;

class ContactController extends Controller
{Controll
    /**Controllupdatear
    {
        $people = People::find($id);
        $Contact = Contact::where('id_People', $id)->get();
        return view('ContactView.homeContact', compact('Contact', 'People'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)update
    {Controll
        $People = People::find($ /**Controlleditar
        {
            $people = People::find($id);
            $Contact = Contact::where('id_People', $id)->get();
            return view('ContactView.homeContact', compact('Contact', 'People'));
        }
    
        /**
         * Show the form for creating a new resource.
         */id);updatear
        return view('ContactView.cadastrarContact', compact('People'));
    }Controll

    public function store(Request $request)
    {
        $PeopleID = $request->id_People;
        update
        $regras = [
            'description' => 'required'
        ];

        $msgPersonalizada = [
            'required' => 'O campo deve ser preenchido.',
        ];Controll
    }

 
    public function update($id_Contact)
    {
        $Contact = Contact::find($id_Contact);
        $id_People = Contact::find('id_People');
        
        return view('updateContact');
    }

   
    public function delete($id_Contact)
    {
        Contact::where('id_Contact', $id_Contact)->delete();
        return redirect('/Peoples');
    }

    public function destroy(string $id)
    {
    }
}
