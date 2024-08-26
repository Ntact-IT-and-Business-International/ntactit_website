<?php

namespace Modules\NoticeBoard\App\Http\Controllers;

use App\Http\Controllers\Controller;

class NoticeBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getNotice()
    {
        return view('noticeboard::index');
    }

}
