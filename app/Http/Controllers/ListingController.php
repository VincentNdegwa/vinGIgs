<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Js;

class ListingController extends Controller
{
    public function getAll()
    {
        return view('pages.home', [
            'data' => DB::table('listings')->get(),
        ]);
    }

    public function show($id)
    {
        $res = $this->getAll();

        foreach ($res['data'] as $r) {
            if ($r->id == $id) {
                return view('pages.listing', [
                    'data' => [$r],
                ]);
            }
        }
    }
    public function listingGet($id)
    {
        $res = $this->getAll();

        foreach ($res['data'] as $r) {
            if ($r->id == $id) {
                return view('pages.create', [
                    'userCreatedJobs' => Listings::where('email', auth()->user()->email)->get(),
                    'updatingData' => $r,
                ]);
            }
        }

    }


    public function create(Request $data)
    {
        $latest = json_encode(Listings::create([
            "title"     =>  $data["title"],
            "description" =>   $data["desc"],
            "tags" => $data['tags'],
            "company" => $data['company'],
            "location" => $data['location'],
            "website" => $data['website'],
            "email"    =>  auth()->user()->email,
            "description" => $data['description']
        ]));
        View::share('dataCreated', $latest);
        return redirect('/create');
    }


    public function listingDelete($id)
    {

        $item = DB::table('listings')->where('id', $id)->delete();
        return redirect('/create');
        // $item = Listings::find($id);

        // return dd($item);
        // if (!$item) {
        //     return response()->json([
        //         'msg' => "Item not found",
        //     ]);
        // } else {
        //     $item->delete();
        //     return redirect("/create");
        // }
    }
}
