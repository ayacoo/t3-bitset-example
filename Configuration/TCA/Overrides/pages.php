<?php
defined('TYPO3_MODE') or die();


$newPageColumns = [
    'weekday' => [
        'label' => 'Wochentag',
        'config' => [
            'type' => 'check',
            'eval' => 'int',
            'items' => [
                ['Sonntag', ''],
                ['Montag', ''],
                ['Dienstag', ''],
                ['Mittwoch', ''],
                ['Donnerstag', ''],
                ['Freitag', ''],
                ['Samstag', '']
            ],
            'cols' => 'inline',
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $newPageColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    'weekday'
);
