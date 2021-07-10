<?php

namespace App\Http\Controllers;

use App\Models\Resource\Service;
use App\Models\Resource\Training;
use App\Repositories\System\DocumentResourceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $services = Service::limit(4)->get();
        return view('welcome')
            ->with('clients',\App\Models\Cms\Client::all())
            ->with('trainings',Training::all())
            ->with('services',$services);
    }
}
