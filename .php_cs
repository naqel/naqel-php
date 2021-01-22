<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$rules = [
    '@PhpCsFixer'            => true,
    '@DoctrineAnnotation'    => true,
    'binary_operator_spaces' => [
        'default'   => 'single_space',
        'operators' => [
            '=>' => 'align_single_space_minimal',
        ],
    ],
    'linebreak_after_opening_tag'       => true,
    'single_line_comment_style'         => false,
    'not_operator_with_successor_space' => true,
    'phpdoc_no_empty_return'            => false,
    'phpdoc_types_order'                => [
        'null_adjustment' => 'always_last',
        'sort_algorithm'  => 'none',
    ],
    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line',
    ],
];

$finder = Finder::create()
    ->in(__DIR__.'/src')
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return Config::create()
    ->setFinder($finder)
    ->setRules($rules)
    ->setUsingCache(true);
