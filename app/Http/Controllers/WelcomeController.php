<?php

namespace App\Http\Controllers;

use App\Models\Resource\Training;
use App\Repositories\System\DocumentResourceRepository;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }


    public function welcome()
    {

        return view('welcome')
            ->with('clients',\App\Models\Cms\Client::all())
            ->with('trainings',Training::all())
            ->with('services',(new \App\Repositories\System\CodeValueRepository())->getServiceForDirectory());
    }
}
