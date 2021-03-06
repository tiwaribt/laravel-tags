<?php

declare(strict_types=1);

return [

    // Tags Database Tables
    'tables' => [

        'tags' => 'tags',
        'taggables' => 'taggables',

    ],

    // Tags Models
    'models' => [
        'tag' => \Rinvex\Tags\Models\Tag::class,
    ],

];
