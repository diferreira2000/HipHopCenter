<?php

namespace App\Http\Controllers;
use App\Models\Playlist;
use App\Models\Musica;
use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;
use DB;

class AlbumController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $albuns = Album::all();
        $artists = Artist::all();
        return view('albuns.index', compact('artists','albuns'))->with([
            'albuns' => Album::paginate(5,['*'],'albuns')
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('albuns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'nome' => 'required',
            'id_artista' => 'required',
            'Likes' => 'required',
        ]);

        Album::create($request->all());

        return redirect()->route('albuns.index')
            ->with('success', 'Album created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album){
    $id_album=$album->id;
    $id_user= auth()->user()->id;
    DB::table('users')
    ->where('id', $id_user)
    ->update(
        ['id_lastAlbum' => $id_album]
    );
        return view('albuns.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album){
        return view('albuns.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album){
        $album->update($request->all());

        return redirect()->route('albuns.index')
            ->with('success', 'Album updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album){
        $album->delete();

        return redirect()->route('albuns.index')
            ->with('success', 'Album deleted successfully');
    }

    /** AJAX METHOD GET ALBUMS  */
    public function getAlbumJson(Request $request){
        $albumId = $request->albunsId;
        $albums = Album::where('id',$albumId)->get()->toArray();
        $albums  = json_encode($albums);
        echo $albums;
        //returnesponse()->json($albums);
    }

}
