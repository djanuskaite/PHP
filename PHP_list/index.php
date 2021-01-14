<?php

$data = [
    'Products' => [
        'IT' => [
            'item1' => 'MacBook',
            'item2' => 'USB hub',
            'item3' => 'Keyboard'
        ],
        'Other' => [
            'item4' => 'Samsung Galaxy',
            'item5' => 'Apple Watch'
        ]
],
        'Service' => [
            'IT' => [
                'item6' => 'WEB development',
                'item7' => 'WEB design'
            ],
            'Business' => [
                'item8' => 'Company registration',
                'item9' => 'SEO optimization'
            ]
        ]
];

?>

<ul>
    <?php foreach ($data as $key => $category): ?>
    <li><strong><?= ucfirst($key); ?></strong>:
        <ul>
            <?php foreach ($category as $type => $subcategory): ?>
                <li><?= ucfirst($type); ?>:
                    <ul>
                        <?php foreach ($subcategory as $value): ?>
                            <li><?=$value;?></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endforeach; ?>
        </ul>
    </li>
    <?php endforeach; ?>
</ul>
