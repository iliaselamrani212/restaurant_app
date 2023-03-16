<?php

namespace App\Http\Controllers;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function addCommentaires(Request $request){
        $commentaire = new Commentaire;
        $commentaire->cmnt = $request->cmnt;
        $commentaire->save();
        return redirect()->back();
    
    }
    
}
