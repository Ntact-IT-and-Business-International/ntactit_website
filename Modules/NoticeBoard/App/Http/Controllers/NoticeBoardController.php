<?php

namespace Modules\NoticeBoard\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
