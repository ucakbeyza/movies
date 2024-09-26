<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filmmodel;
use Illuminate\Support\Facades\Redirect;
class FilmContoller extends Controller
{
    public function ekleme(){
        //dd('burada');
        return view ('eklemesayfasi');
    }
    public function veritabaniyaz(Request $req){
        filmmodel::insert([ 
            'ad'=>$req->filmadi,
            'puan'=>$req->filmpuani
        ]);
        return "veri tabanına yazıldı";
    }
    public function tumfilmlerver(){
        $tumfilmler=filmmodel::get();

        return view('tumfilmler',["tmfilm"=>$tumfilmler]);
        
    }
    public function duzenlemever($idnumara){
        $film=filmmodel::where('id',$idnumara)->first();
        
        return view('duzenlemesayfasi',["tekfilm"=>$film]);
    }
    public function duzenlemeyap(Request $req, $idnumara){
        filmmodel::where('id',$idnumara)->update([
            'ad'=>$req->adifilm,
            'puan'=>$req->puanifilm
        ]);
        return 0;
    }
    public function silme($idnumara){
        $film=filmmodel::where('id',$idnumara)->delete();
        //return redirect()->to("tumfilmler");
        return Redirect::route("tmfilmler");
    }
}
