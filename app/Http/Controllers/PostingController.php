<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function index()
    { 
        $data['post'] = \App\Posting::get();
        return view('tables', $data);
    }

    public function store(Request $request)
    {
        $rule = [
            'post' => 'Required'
        ];

        $this->validate($request, $rule);

        $input = $request->all();

        $posting = new \App\Posting;
        $posting->post = $input['post'];

        $status = $posting->save();

        if ($status) {
            
            return redirect('/posting')->with('success');
        } else {
            
            return redirect('/posting')->wirh('Error');
        }
    }


     public function update(Request $request)
    {
        $rule = [
            'post' => 'Required'
            ];
        $this->validate($request, $rule);

        $input = $request->all();
        // dd($input['id']);
        $posting = \App\Posting::find($input['id']);
        $posting->post = $input['post'];

        $status = $posting->update();
        
        if ($status) {
            
            return redirect('/posting')->with('success');
        } else {
            
            return redirect('/posting')->wirh('Error');
        }
    }

    public function destroy(Request $request)
    {
        $input = $request->all();



        $id = $input['del'];        
        // dd($id);
        $posting = \App\Posting::find($id);

        $status = $posting->delete();

        if ($status) {
            
            return redirect('/posting')->with('success');
        } else {
            
            return redirect('/posting')->wirh('Error');
        }
    }

    public function search(Request $request)
    {
        // menangkap data pencarian
        $input = $request->all();
     
        // mengambil data dari table posting sesuai pencarian data
        $posting = DB::table('t_post')
        ->where('post','like',"%".$input."%")
        ->paginate();
     
            // mengirim data posting ke view index
        return view('/posting',['post' => $posting]);
 
    }
}
