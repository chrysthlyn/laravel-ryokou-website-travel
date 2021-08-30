<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TravelPackageRequest;
use App\TravelPackage;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Str;
=======
>>>>>>> abe3b0dee89a78cb439dabead9b80131310c7cbf

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TravelPackage::all();
        
        return view('pages.admin.travel-package.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function store(TravelPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        TravelPackage::create($data);
        return redirect()->route('travel-package.index');
=======
    public function store(Request $request)
    {
        //
>>>>>>> abe3b0dee89a78cb439dabead9b80131310c7cbf
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        $item = TravelPackage::findOrFail($id);

        return view('pages.admin.travel-package.edit', [
            'item' => $item
        ]);
=======
        //
>>>>>>> abe3b0dee89a78cb439dabead9b80131310c7cbf
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(TravelPackageRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = TravelPackage::findOrFail($id);

        $item->update($data);
        
        return redirect()->route('travel-package.index');
=======
    public function update(Request $request, $id)
    {
        //
>>>>>>> abe3b0dee89a78cb439dabead9b80131310c7cbf
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        $item = TravelPackage::findOrFail($id);
        
        $item->delete();

        return redirect()->route('travel-package.index');
=======
        //
>>>>>>> abe3b0dee89a78cb439dabead9b80131310c7cbf
    }
}
