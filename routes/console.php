<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

/*
 | Render the landing page to plain static files (used by the GitHub Pages workflow).
 | Asset and link URLs are built from APP_URL, so set it to the public site URL first,
 | e.g. APP_URL=https://<user>.github.io/<repo>. Run `npm run build` beforehand.
 */
Artisan::command('export:static {--output=dist : Directory to write the static site to}', function () {
    if (! File::exists(public_path('build/manifest.json'))) {
        $this->error('Missing public/build/manifest.json — run `npm run build` first.');

        return 1;
    }

    $out = base_path($this->option('output'));
    File::deleteDirectory($out);
    File::ensureDirectoryExists($out);

    File::put("{$out}/index.html", view('home')->render());

    foreach (['build', 'images'] as $dir) {
        File::copyDirectory(public_path($dir), "{$out}/{$dir}");
    }

    foreach (['favicon.ico', 'robots.txt'] as $file) {
        if (File::exists(public_path($file))) {
            File::copy(public_path($file), "{$out}/{$file}");
        }
    }

    // Serve files as-is on GitHub Pages (skip Jekyll processing).
    File::put("{$out}/.nojekyll", '');

    $this->info("Static site exported to {$out} (base URL: ".config('app.url').')');
})->purpose('Render the landing page to static HTML for GitHub Pages');
