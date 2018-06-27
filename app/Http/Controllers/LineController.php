<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;

class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $token =  env('LINE_TOKEN');//'3YlxoCCjI6dKQ3+Haj210d0ixxiTmrbHfEcCqQroMJj/7Pcf1sN8hlN8IeyPS2vh9O4oN3ldSKMGHtlbwMQL5x4fuhgHzLHZp1mSeUIqFHblhFVKXE5+TMS7+7HVH87IoGqjc8kJXDYBgyOo4zsphAdB04t89/1O/w1cDnyilFU=';

        $secret = env('LINE_SECRET'); //'08384daa5c4d7e48ba6f629b190258ea';
        $httpClient = new CurlHTTPClient($token);
        $bot = new LINEBot($httpClient, ['channelSecret' => $secret]);


        dd($bot);

        $textMessageBuilder = new LINEBot\MessageBuilder\TextMessageBuilder('hello');
        $response = $bot->replyMessage('U4469097c14247ec2057b974ce08ec477', $textMessageBuilder);
        if ($response->isSucceeded()) {
            echo 'Succeeded!';

            return response()->json([
                'Succeeded' => true,
            ]);

        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function show(Request $request)
    {



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
