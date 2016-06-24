<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Asset;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function addasset()
    {
        return view('pages.add-asset');
    }

    public function editasset(Asset $asset)
    {
        $asset = $asset->get();

        return view('pages.edit-asset', compact('asset'));
    }

    public function viewasset(Asset $asset)
    {
        $asset = $asset->get();

        return view('pages.view-asset', compact('asset'));
    }
}
?>