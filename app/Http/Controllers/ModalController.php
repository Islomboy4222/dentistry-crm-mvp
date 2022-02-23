<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function modal($id)
    {
        $item = Treatment::find($id);

        return view('treatments.modal-data', compact('item'));
    }
}
