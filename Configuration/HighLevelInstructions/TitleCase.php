<?php

return new \Mabolek\Highlevel\Instruction\FieldButton\FieldButtonInstruction(
    'TitleCase',
    'Convert to Title Case',
    'actions-bolt',
    'tt_content',
    'header',
    'header',
    function (string $title): string {
        return mb_convert_case($title, MB_CASE_TITLE);
    }
);
