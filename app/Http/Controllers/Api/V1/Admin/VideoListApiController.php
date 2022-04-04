<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVideoListRequest;
use App\Http\Requests\UpdateVideoListRequest;
use App\Http\Resources\Admin\VideoListResource;
use App\Models\VideoList;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VideoListApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('video_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VideoListResource(VideoList::all());
    }

    public function store(StoreVideoListRequest $request)
    {
        $videoList = VideoList::create($request->all());

        return (new VideoListResource($videoList))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(VideoList $videoList)
    {
        abort_if(Gate::denies('video_list_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VideoListResource($videoList);
    }

    public function update(UpdateVideoListRequest $request, VideoList $videoList)
    {
        $videoList->update($request->all());

        return (new VideoListResource($videoList))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(VideoList $videoList)
    {
        abort_if(Gate::denies('video_list_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $videoList->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
