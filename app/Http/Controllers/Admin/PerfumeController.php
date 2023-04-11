<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Perfume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        if (array_key_exists('image', $data)) {
            $image = Storage::put('public/images', $data['image']);
            $data['image'] = $image;
        }

        $request->validate(
            [
                'name' => 'required',
                'brand' => 'required',
                'category' => 'required',
                'price' => 'required|numeric|min:0.01',
                'image' => 'required',

            ],
            [
                'name.required' => 'Il campo nome è obbligatorio.',
                'brand.required' => 'Il campo brand è obbligatorio.',
                'category.required' => 'Il campo category è obbligatorio.',
                'price.required' => 'Il prezzo è obbligatorio.',
                'price.numeric' => 'Formato prezzo non valido.',
                'price.min' => 'Il prezzo deve essere uguale o maggiore a 0.01',
                'image.required' => 'Carica un immagine.',
                'image.mimes' => 'Formato immagine non valido.',
                'image.max' => 'Dimensioni massime consentite 4096kb.'
            ]
        );

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

        if ($singolo_perfume->image) {
            Storage::delete($singolo_perfume->image);
        };

        $singolo_perfume->delete();

        return redirect()->route('admin.perfumes.index');
    }
}
