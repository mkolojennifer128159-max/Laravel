<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Lab Work 4: Blade Template Inheritance + Dynamic Theme
|--------------------------------------------------------------------------
| The theme can be changed with ?theme=ocean, ?theme=sunset, or ?theme=forest.
*/

$availableThemes = ['ocean', 'sunset', 'forest'];

$resolveTheme = static function (Request $request) use ($availableThemes): string {
    $requestedTheme = $request->query('theme', 'ocean');

    return in_array($requestedTheme, $availableThemes, true)
        ? $requestedTheme
        : 'ocean';
};

Route::get('/', function (Request $request) use ($resolveTheme) {
    return view('home', ['theme' => $resolveTheme($request)]);
})->name('home');

Route::get('/about', function (Request $request) use ($resolveTheme) {
    return view('about', ['theme' => $resolveTheme($request)]);
})->name('about');

Route::get('/contact', function (Request $request) use ($resolveTheme) {
    return view('contact', ['theme' => $resolveTheme($request)]);
})->name('contact');

Route::post('/contact', function (Request $request) use ($availableThemes) {
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:80'],
        'email' => ['required', 'email', 'max:150'],
        'message' => ['required', 'string', 'max:2000'],
        'theme' => ['nullable', 'in:ocean,sunset,forest'],
    ]);

    // This lab demo validates the form and shows a confirmation; it does not send email.
    $theme = in_array($validated['theme'] ?? 'ocean', $availableThemes, true)
        ? ($validated['theme'] ?? 'ocean')
        : 'ocean';

    return redirect()
        ->route('contact', ['theme' => $theme])
        ->with('success', 'Thank you, ' . $validated['name'] . '! Your demo message passed validation.');
})->name('contact.send');
