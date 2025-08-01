<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

use App\Models\Course;
use Illuminate\Support\Str;

$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

Course::all()->each(function ($course) {
    $course->slug = Str::slug($course->title);
    $course->save();
});

echo "Slugs updated successfully.\n";
