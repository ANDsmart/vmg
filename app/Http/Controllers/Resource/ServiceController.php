<?php


namespace App\Http\Controllers\Resource;


use App\Http\Controllers\Controller;
use App\Models\Resource\Service;
use App\Repositories\Resource\ServiceRepository;
use App\Repositories\System\CodeValueRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{

    protected $service_repo;

    public function __construct()
    {
        $this->service_repo = new ServiceRepository();
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('cms.service.index');
    }

    public function create()
    {

        $service_types = (new CodeValueRepository())->getServiceForDirectory()->pluck('name','id');

        return view('cms.service.create.create')
            ->with('service_types',$service_types);
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $service = $this->service_repo->store($input);
        return redirect()->route('cms.service.index');
    }


    public function display($service)
    {
        $service = Service::find($service);
        return view('system.service.service')
            ->with('service',$service);
    }

    public function profile(Service $service)
    {
        $image = $service->getImageAttribute();
        return view('cms.service.show.show')
            ->with('service',$service)
            ->with('image',$image);
    }

    public function edit(Service $service)
    {
        $service_types = (new CodeValueRepository())->getServiceForDirectory()->pluck('name','id');

        return view('cms.service.edit.edit')
            ->with('service_types',$service_types)
            ->with('service',$service);
    }

    //update note
    public function update(Request $request,Service $service)
    {
        $input = $request->all();
        $blog = $this->service_repo->update($input,$service);
        return redirect()->route('cms.service.index')->withFlashSuccess(trans('alert.general.updated'));

    }


    public function services()
    {
        $service_types = (new CodeValueRepository())->getServiceForDirectory()->pluck('name','id');
        $services = $this->service_repo->queryActive();

    }
    /**
     *list all blog
     */
    public function getForAdminDatatable()
    {
        $result_list = $this->service_repo->getAllForDt();
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