<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimeController extends Controller
{
    public function index()
    {
        $times = Time::query()->orderBy('id', 'desc')->get();
        return view('times.index', compact('times'));
    }

    public function create()
    {
        return view('times.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $times = new Time();
            if ($request->get('date_to') < $request->get('date_from')) {
                DB::rollBack();
                return redirect()->route('times.create')->withInput($request->all())->withErrors('Date to không thể nhỏ hơn Date from');
            }
            $times->date_from = date('Y-m-d', strtotime($request->get('date_from'))) ;
            $times->date_to = date('Y-m-d', strtotime($request->get('date_to')));
            if (!$times->save()) {
                DB::rollBack();
                return redirect()->route('times.create')->withInput($request->all())->withErrors('Có lỗi xảy ra trong quá trình lưu dữ liệu');
            }
            Db::commit();
            return redirect()->route('times.index')->withSuccess('Them moi thanh cong');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('times.create')->withInput($request->all())->withErrors('Có lỗi xảy ra');
        }
    }
}
