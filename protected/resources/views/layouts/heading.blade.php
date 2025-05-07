<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    body {
        margin: -1% 0%;
    }
    /* Fixed top header styles */
    .headingan-atas {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 60px;
        background-color: #0a183a;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 1rem;
        font-weight: 600;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        z-index: 9999;
        user-select: none; /* prevent text selection to mimic no interaction */
    }
    </style>
</head>

<body>
    <div class="headingan-atas">
        @yield('palaan')
    </div>
</body>