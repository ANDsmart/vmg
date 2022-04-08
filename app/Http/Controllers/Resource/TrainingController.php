<?php


namespace App\Http\Controllers\Resource;


use App\Http\Controllers\Controller;
use App\Models\Cms\Category;
use App\Models\Resource\Training;
use App\Models\System\CodeValue;
use App\Repositories\Resource\TrainingRepository;
use App\Repositories\System\CodeValueRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TrainingController extends Controller
{

    protected $training_repo;

    public function __construct()
    {
        $this->training_repo = new TrainingRepository();
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('cms.training.index');
    }

    public function create()
    {

        $training_types = (new CodeValueRepository())->query()->where('code_id',3)->pluck('name','id');

        return view('cms.training.create.create')
            ->with('training_types',$training_types);
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $training = $this->training_repo->store($input);
        return redirect()->route('cms.training.index');
    }


    public function display(Training $training)
    {
        return view('system.training.training')
            ->with('training',$training);
    }

    public function profile(Training $training)
    {
        $image = $training->getImageAttribute();
        return view('cms.training.show.show')
            ->with('training',$training)
            ->with('image',$image);
    }

    public function edit(Training $training)
    {
        $training_types = (new CodeValueRepository())->getTrainingCategories()->pluck('name','id');

        return view('cms.training.edit.edit')
            ->with('training_types',$training_types)
            ->with('training',$training);
    }

    //update note
    public function update(Request $request,Training $training)
    {
        $input = $request->all();
        $blog = $this->training_repo->update($input,$training);
        return redirect()->route('cms.training.index')->withFlashSuccess(trans('alert.general.updated'));

    }

    public function trainings()
    {
        $trainings = Training::all();
        return view('system.training.all_trainings')
            ->with('trainings',$trainings);
    }

    /**
     *list all blog
     */
    public function getForAdminDatatable()
    {
        $result_list = $this->training_repo->getAllForDt();
        return DataTables::of($result_list)
            ->addIndexColumn()
            ->addColumn('category', function ($blog) {
                return isset($blog->category_id) ? CodeValue::find($blog->category_id)->name : '';
            })->addColumn('status', function ($blog) {
                return ($blog->isactive == 1) ? trans('label.active') : trans('label.inactive');
            })
            ->rawColumns(['status',])
            ->make(true);

    }



}
