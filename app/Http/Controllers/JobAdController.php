<?php

namespace App\Http\Controllers;

use App\Http\Resources\JobAdResource;
use App\JobAd;
use Illuminate\Http\Request;

class JobAdController extends Controller
{
    const PER_PAGE = 8;

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->title)) {
            return JobAdResource::collection(JobAd::where('title', 'like', $request->title)->paginate(self::PER_PAGE));
        }

        return JobAdResource::collection(JobAd::paginate(self::PER_PAGE));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return JobAd::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new JobAdResource(JobAd::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jobAd = JobAd::find($id)->update($request->all());

        return $jobAd;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return JobAd::destroy($id);
    }
}
