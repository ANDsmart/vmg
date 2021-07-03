<?php

use App\Models\Cms\Client;
use App\Models\System\Designation;
use App\Repositories\Cms\ClientRepository;

Route::get('/testimonial/{client}', function(Client $client) {
    $designations = Designation::all()->where('isactive',1)->pluck('name','id');

    return view('cms.client.includes.fill_testimonial')
            ->with('designations',$designations)
            ->with('client',$client);
    })->name('testimonial');


Route::post('/submit_testimonial/{client}', function(Client $client,\Illuminate\Http\Request $request) {
        $input = $request->all();
        (new \App\Repositories\Cms\ClientTestimonialRepository())->storeFromClient($input,$client);
        $clients = (new ClientRepository())->queryActive()->get();
        $clients_with_testimonial =Client::whereHas('testimonial',function (){
        })->get();
        return redirect()->route('home')
            ->with('clients',$clients)
            ->with('clients_with_testimonial',$clients_with_testimonial);;
    })->name('submit_testimonial');
