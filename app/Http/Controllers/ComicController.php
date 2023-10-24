<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Comic;
use App\Http\Controllers\Controller;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     * * @return \Illuminate1Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        

        return view('comics.index', compact('comics'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('comics.create');
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
        $data = $this->validation($request->all());
        $Comic = new Comic();
        $Comic->fill($data);
        $Comic->save();
    
        return redirect()->route('comics.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::where('id', '=', $id)->get();
         
        return view('comics.index', compact('comics'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $this->validation($request->all(), $comic->id);
        $comic->update($data);

        
        return redirect()->route('comics.show', $comic->id)
            ->with('updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')
            ->with('delete comic');
            private function validation($data)
            {
                $validator = Validator::make(
                    $data,
                    [
                        'title' => 'required|string',
                        'thumb' => 'required|string',
                        'price' => 'required|integer',
                        'series' => 'required|string',
                        'sale_date' => 'required|integer',
                        'type' => 'required|in:graphic novel,comic book',
                    ],
                    [
                        'title.required' => 'The title is mandatory',
                        'thumb.required' => 'The Thumb is mandatory',
        
                        'price.required' => 'The price is mandatory',
                        'price.integer' => 'The price entered is not a number',
        
                        'series.string' => 'Welcome',
        
                        'sale_date.required' => 'The Date is mandatory',
                        'sale_date.integer' => 'The Date entered is not a number',
        
                        'type.required' => 'The Comic type is mandatory',
                        'type.in' => 'Enter a correct and recognized value',
                    ]
                )->validate();
        
                return $validator;
            }
    }
}