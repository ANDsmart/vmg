<?php


namespace App\Http\Controllers\Resource;


use App\Http\Controllers\Controller;
use App\Models\Resource\Career;
use App\Models\System\CodeValue;
use App\Repositories\Resource\CareerRepository;
use App\Repositories\System\CodeValueRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CareerController extends Controller
{

    protected $career_repo;

    public function __construct()
    {
        $this->career_repo = new CareerRepository();
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('cms.career.index');
    }

    public function create()
    {

        $service_types = (new CodeValueRepository())->getServiceForDirectory()->pluck('name','id');

        return view('cms.career.create.create')
            ->with('service_types',$service_types);
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $career = $this->career_repo->store($input);
        return redirect()->route('cms.career.index');
    }


    public function display($career)
    {

        $career_type = CodeValue::find($career);
        $careers = Career::where('career_type_cv_id',$career)->get();
        return view('system.career.career')
            ->with('careers',$careers)
            ->with('career_type',$career_type);
    }

    public function profile($career)
    {
        $career = Career::find($career);
        $image = $career->getImageAttribute();
        return view('cms.career.show.show')
            ->with('career',$career)
            ->with('image',$image);
    }

    public function edit($career)
    {
        $service_types = (new CodeValueRepository())->getServiceForDirectory()->pluck('name','id');

        $career = Career::find($career);
        return view('cms.career.edit.edit')
            ->with('service_types',$service_types)
            ->with('career',$career);
    }

    //update note
    public function update(Request $request,Career $career)
    {
        $input = $request->all();
        $blog = $this->career_repo->update($input,$career);
        return redirect()->route('cms.career.index')->withFlashSuccess(trans('alert.general.updated'));

    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * list of all careers
     */
    public function careers()
    {
        $career_types = (new CodeValueRepository())->getServiceForDirectory();
        $careers = $this->career_repo->queryActive()->get();
        return view('system.career.all_careers')
            ->with('career_types',$career_types)
            ->with('careers',$careers);
    }

    /**
     * @param $career_type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getCareerByCareerType($career_type)
    {
        $career_types = (new CodeValueRepository())->getServiceForDirectory();
        $careers = $this->career_repo->queryActive()->where('career_type_cv_id',$career_type)->get();
        return view('system.career.all_careers')
            ->with('career_types',$career_types)
            ->with('careers',$careers);
    }
    /**
     *list all blog
     */
    public function getForAdminDatatable()
    {
        $result_list = $this->career_repo->getAllForDt();
        return DataTables::of($result_list)
            ->addIndexColumn()
            ->addColumn('category', function ($blog) {
                return isset($blog->category_id) ? $blog->category_id : '';
            })->addColumn('status', function ($blog) {
                return ($blog->isactive == 1) ? trans('label.active') : trans('label.inactive');
            })
            ->rawColumns(['status',])
            ->make(true);

    }


}
