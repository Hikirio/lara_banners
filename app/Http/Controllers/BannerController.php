<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * @param  Request  $request
     * @param  Banner  $banner
     * @return \Exception|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, Banner $banner)
    {
        try {
            $banner->fill([

                'title' => $request->title,
                'image' => $request->file,
                'url' => $request->url,
                'status' => $request->status,
                'position' => $request->position,

            ])->save();
        } catch (\Exception $e) {
            return $e;
        }
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        try {
            $banner->fill([

                'title' => $request->title,
                'image' => $request->image,
                'url' => $request->url,
                'status' => $request->status,
                'position' => $request->position,

            ])->save();
        } catch (\Exception $e) {
            return $e;
        }
        return redirect('/admin');
    }


    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect('/admin');
    }
}
