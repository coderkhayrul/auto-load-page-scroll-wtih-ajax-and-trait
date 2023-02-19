<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Traits\PostTrait;

class WebsiteController extends Controller
{
    use PostTrait;
}
