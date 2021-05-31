<?php
return[
    [
        'label'=>'dashboard',
        'route'=>'admin.dashboard',
        'icon'=>'fa fa-file'
    ],
      [
        'label'=>'Order Management ',
        'route'=>'ordermanagement.index',
        'icon'=>'fa-shopping-cart',
        'items'=> [
            [
            'label'=>'View Oder',
            'route'=>'ordermanagement.index',
        ],
        [
            'label'=>'ADD ALL Order Management',
            'route'=>'ordermanagement.create',
        ]
      ]
    ],
    //product
    [
        'label'=>'Product Manager',
        'route'=>'product.index',
        'icon'=>'fa-shopping-cart',
        'items'=> [
            [
            'label'=>'ALL Product',
            'route'=>'product.index',
        ],
        [
            'label'=>'ADD Product',
            'route'=>'product.create',
        ]
      ]
    ],
    //loai sp
    [
        'label'=>'ProductType Manager',
        'route'=>'producttype.index',
        'icon'=>'fa-shopping-cart',
        'items'=>[
            [
            'label'=>'ALL producttype',
            'route'=>'producttype.index',
        ],
        [
            'label'=>'ADD producttype',
            'route'=>'producttype.create',
        ]

    ]
   
],



[
    'label'=>'News Manager',
    'route'=>'news.index',
    'icon'=>'fa-image',
    'items'=>[
        [
        'label'=>'ALL news',
        'route'=>'news.index',
    ],
    [
        'label'=>'ADD news',
        'route'=>'news.create',
    ]

]
],

[
    'label'=>'User Manager',
    'route'=>'user.index',
    'icon'=>'fa-image',
    'items'=>[
        [
        'label'=>'ALL User',
        'route'=>'user.index',
    ],
    [
        'label'=>'ADD user',
        'route'=>'user.create',
    ]

]
],

[
    'label'=>'Bill Manager',
    'route'=>'bill.index',
    'icon'=>'fa-image',
    'items'=>[
        [
        'label'=>'ALL bill',
        'route'=>'bill.index',
    ],
    [
        'label'=>'Statistic',
        'route'=>'bill.create',
    ]

]
],
[
    'label'=>'Customer Manager',
    'route'=>'customer.index',
    'icon'=>'fa-image',
    'items'=>[
        [
        'label'=>'ALL customer',
        'route'=>'customer.index',
    ]

    
]
,
[
    'label'=>'BillDetail Manager',
    'route'=>'billdetail.index',
    'icon'=>'fa-image',
    'items'=>[
        [
        'label'=>'ALL billdetail',
        'route'=>'billdetail.index',
    ]
]


]]]


?>