<?php

namespace App\Http\Controllers;

use App\Http\Resources\TrnslateResource;
use App\Models\Translate;
use Illuminate\Http\Request;

class TranslateController extends Controller
{
    public function index(Request $request)
    {
        if (count($request->all()) > 0) {

            $translate = Translate::where('component', $request->component)
                ->where('lang', $request->lang)
                ->first();

            return response()->json(TrnslateResource::make($translate));
        } else {

            $translate = Translate::all();

            return response()->json(TrnslateResource::collection($translate));
        }
    }

    public function store(Request $request)
    {

        $request->validate([
            'component' => '',
            'lang' => 'required|string',
            'data' => 'required',
        ]);

        $translate = Translate::create([
            'component' => $request->component,
            'lang' => $request->lang,
            'data' => json_encode($request->data),
        ]);

        $translate = new TrnslateResource($translate);

        return response()->json($translate, 201);
    }
}
