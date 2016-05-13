<?php

namespace App\Http\Controllers\Forum;


use App\Http\Requests;

use App\Models\Topic;

use App\Models\Section;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


class TopicController extends Controller
{
      public function index(Request $request, Section $section)
      {
          dd('index');
      }

      public function show(Topic $topic)
      {
          dd('show');
      }

      public function store(Request $request)
      {
          dd('store');
      }
}
