<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Perfume;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'perfumes' => Perfume::paginate(6)
        ];

        return view('admin.perfumes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.perfumes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newperfume = new Perfume();
        $newperfume->fill($data);
        $newperfume->save();

        return redirect()->route('admin.perfumes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singolo_perfume = Perfume::findOrFail($id);

        return view('admin.perfumes.show', compact('singolo_perfume'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perfume = Perfume::findOrFail($id);

        return view('admin.perfumes.edit', compact('perfume'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $data = $request->all();
        $singolo_perfume = Perfume::findOrFail($id);

        $singolo_perfume->update($data);

        return redirect()->route('admin.perfumes.index', $singolo_perfume->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $singolo_perfume = Perfume::findOrFail($id);



        $singolo_perfume->delete();

        return redirect()->route('admin.perfumes.index');
    }
}
