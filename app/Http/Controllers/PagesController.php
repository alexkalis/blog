<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
      // return 'index';
      $title = 'Welcome to the start!';
      return view('pages.index',compact('title'));
    }
    public function about() {
      $title = 'About us!';
      return view('pages.about', compact('title'));
    }
    public function services() {
      $data = array (
        'title' => 'Services',
        'services'  => ['Web design', 'Programming', 'gaming']
      );
      return view('pages.services')->with($data);
    }
}
