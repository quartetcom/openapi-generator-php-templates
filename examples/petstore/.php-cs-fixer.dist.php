<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor')
    ->exclude('test')
    ->exclude('tests')
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        'phpdoc_order' => true,
        'array_syntax' => [ 'syntax' => 'short' ],
        'strict_comparison' => true,
        'strict_param' => true,
        'no_trailing_whitespace' => false,
        'no_trailing_whitespace_in_comment' => false,
        'braces' => false,
        'single_blank_line_at_eof' => false,
        'blank_line_after_namespace' => false,
        'no_leading_import_slash' => false,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;
