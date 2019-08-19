<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PocController extends Controller
{
    public function index()
    {
        $client = App::make('aws')->createClient('s3');

        $result = $client->listBuckets([])['Buckets'];

        $owner = $client->listBuckets([])['Owner'];

        $datas = [
            'datas' => $result
        ];

        // View Title
        $service = 'Amazon S3';
        $header = 'S3 Buckets List';

        return view('s3poc', compact('datas', 'service', 'header', 'owner'));
    }
}