<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyVideoListRequest;
use App\Http\Requests\StoreVideoListRequest;
use App\Http\Requests\UpdateVideoListRequest;
use App\Models\VideoList;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class VideoListController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('video_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = VideoList::query()->select(sprintf('%s.*', (new VideoList())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'video_list_show';
                $editGate = 'video_list_edit';
                $deleteGate = 'video_list_delete';
                $crudRoutePart = 'video-lists';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('url_link', function ($row) {
                return $row->url_link ? $row->url_link : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.videoLists.index');
    }

    public function create()
    {
        abort_if(Gate::denies('video_list_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.videoLists.create');
    }

    public function store(StoreVideoListRequest $request)
    {
        $videoList = VideoList::create($request->all());

        return redirect()->route('admin.video-lists.index');
    }

    public function edit(VideoList $videoList)
    {
        abort_if(Gate::denies('video_list_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.videoLists.edit', compact('videoList'));
    }

    public function update(UpdateVideoListRequest $request, VideoList $videoList)
    {
        $videoList->update($request->all());

        return redirect()->route('admin.video-lists.index');
    }

    public function show(VideoList $videoList)
    {
        abort_if(Gate::denies('video_list_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.videoLists.show', compact('videoList'));
    }

    public function destroy(VideoList $videoList)
    {
        abort_if(Gate::denies('video_list_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $videoList->delete();

        return back();
    }

    public function massDestroy(MassDestroyVideoListRequest $request)
    {
        VideoList::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
