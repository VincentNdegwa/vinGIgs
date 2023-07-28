<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    public function getAll()
    {
        return view('pages.home', [
            'data' => DB::table('listings')->get(),
        ]);
    }

    public function show(Request $request, $id)
    {
        $res = $this->getAll();

        foreach ($res['data'] as $r) {
            if ($r->id == $id) {
                return view('pages.listing', [
                    'data' => [$r],
                ]);
            }
        }
        return view('pages.error', [
            'message' => 'Listing not found',
        ]);
    }
}
