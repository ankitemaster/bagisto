<?php

namespace Webkul\Core\Http\Controllers;

use Webkul\Core\Repositories\CountryRepository;
use Webkul\Core\Repositories\CountryStateRepository;

class InfoController extends Controller
{
    public function index()
    {
        echo "<pre>";
        print_r(phpinfo());
    }
}