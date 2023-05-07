<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

Route::get('/', function (Request $request) {
    $request->session()->forget('conversation');
    return view('form');
});

Route::get('/about', function () {
    return view('about');
});

Route::post('/generate', function (Request $request) {
    try {
        $userPrompt = $request->input('prompt');
        $response = Http::withOptions([
            'verify' => false,
        ])->post('https://Freddo.pythonanywhere.com/generate', [
            'prompt' => $userPrompt
        ])->json();

        $conversation = $request->session()->get('conversation', []);
        $conversation[] = ['type' => 'user', 'text' => $userPrompt];
        $conversation[] = ['type' => 'freddy', 'text' => $response['response']];
        $request->session()->put('conversation', $conversation);

        return view('form', [
            'conversation' => $conversation
        ]);
    } catch (RequestException $e) {
        // Handle exception if needed
        return view('error', [
            'message' => 'An error occurred while connecting to the API.'
        ]);
    }
});
