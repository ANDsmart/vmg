<?php

namespace App\Http\Controllers;

use App\Models\Cms\Testimonial;
use App\Models\Resource\Service;
use App\Models\Resource\Slider;
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

        $services = Service::where('isactive',1)->orderBy('service_type_cv_id')->get();
        $sliders = Slider::where('isactive',1)->get();
        $testimonials = Testimonial::where('isactive',1)->paginate(6);
        return view('welcome')
            ->with('clients',\App\Models\Cms\Client::all())
            ->with('trainings',Training::all())
            ->with('sliders',$sliders)
            ->with('testimonials',$testimonials)
            ->with('services',$services);
    }
}
