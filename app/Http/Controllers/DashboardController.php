<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Client\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Show the dash
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Dashboard', [
            'devices' => Device::get()->transform(fn ($item) => [
                'id' => $item->id,
                'name' => $item->name,
                'inf' => $item->getInfluxData()
            ])
        ]);
    }
}
