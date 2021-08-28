<?php

namespace App\Http\Controllers;

use App\Level1Category;
use App\Level2Category;
use App\Level3Category;
use App\Select;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SelectsController extends Controller
{

    public function index()
    {
        $level1categories = Level1Category::all();
        $selects = Select::with(['level1Category', 'level2Category', 'level3Category'])->paginate(5);
        return view('dashboard.index', compact('level1categories', 'selects'));

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'level1_category_id' => 'required',
            'level2_category_id' => 'required',
            'level3_category_id' => 'required',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $location = Select::create([
            'title'         => Str::random(10),
            'level1_category_id'    => $request->level1_category_id,
            'level2_category_id'       => $request->level2_category_id,
            'level3_category_id'   => $request->level3_category_id,
        ]);

        if ($location) {
            return redirect()->back()->with([
                'message' => 'added_successfully',
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => 'something_was_wrong',
                'alert-type' => 'danger'
            ]);
        }

    }


    public function get_level2categories(Request $request)
    {
        $cities = Level2Category::whereLevel1CategoryId($request->level1_category_id)->pluck('name', 'id');
        return response()->json($cities);
    }

    public function get_level3categories(Request $request)
    {
        $districts = Level3Category::whereLevel2CategoryId($request->level2_category_id)->pluck('name', 'id');
        return response()->json($districts);
    }


}
