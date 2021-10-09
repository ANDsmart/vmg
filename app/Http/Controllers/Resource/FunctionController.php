<?php


namespace App\Http\Controllers\Resource;


use App\Http\Controllers\Controller;
use App\Models\Resource\Functions;
use App\Models\Resource\Service;
use App\Models\System\CodeValue;
use App\Repositories\Resource\FunctionRepository;
use App\Repositories\Resource\ServiceRepository;
use App\Repositories\System\CodeValueRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FunctionController extends Controller
{

    protected $function_repo;

    public function __construct()
    {
        $this->function_repo = new FunctionRepository();
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('cms.function.index');
    }

    public function create()
    {

        $service_types = (new CodeValueRepository())->getServiceForDirectory()->pluck('name','id');

        return view('cms.function.create.create')
            ->with('service_types',$service_types);
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $function = $this->function_repo->store($input);
        return redirect()->route('cms.function.index');
    }


    public function display($function)
    {

        $function_type = CodeValue::find($function);
        $functions = Service::where('function_type_cv_id',$function)->get();
        return view('system.function.function')
            ->with('functions',$functions)
            ->with('function_type',$function_type);
    }

    public function profile($function)
    {
        $function = Functions::find($function);
        $image = $function->getImageAttribute();
        return view('cms.function.show.show')
            ->with('function',$function)
            ->with('image',$image);
    }

    public function edit(Service $function)
    {
        $service_types = (new CodeValueRepository())->getServiceForDirectory()->pluck('name','id');

        return view('cms.function.edit.edit')
            ->with('function_types',$service_types)
            ->with('function',$function);
    }

    //update note
    public function update(Request $request,Service $function)
    {
        $input = $request->all();
        $blog = $this->function_repo->update($input,$function);
        return redirect()->route('cms.function.index')->withFlashSuccess(trans('alert.general.updated'));

    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * list of all functions
     */
    public function functions()
    {
        $service_types = (new CodeValueRepository())->getServiceForDirectory();
        $functions = $this->function_repo->queryActive()->get();
        return view('system.function.all_functions')
            ->with('service_types',$service_types)
            ->with('functions',$functions);
    }

    /**
     * @param $function_type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getServiceByServiceType($function_type)
    {
        $service_types = (new CodeValueRepository())->getServiceForDirectory();
        $functions = $this->function_repo->queryActive()->where('function_type_cv_id',$function_type)->get();
        return view('system.function.all_functions')
            ->with('function_types',$service_types)
            ->with('functions',$functions);
    }
    /**
     *list all blog
     */
    public function getForAdminDatatable()
    {
        $result_list = $this->function_repo->getAllForDt();
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
