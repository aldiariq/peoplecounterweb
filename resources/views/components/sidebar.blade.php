@php
$links = [
    [
        "href" => "dashboard",
        "text" => "Dashboard",
        "is_multi" => false,
    ],
    [
        "href" => [
            [
                "section_text" => "Kelola Kamera",
                "section_list" => [
                    ["href" => "kamera", "text" => "Data Kamera"],
                    ["href" => "kamera.new", "text" => "Tambah Kamera"]
                ]
            ]
        ],
        "text" => "Kelola Kamera",
        "is_multi" => true,
    ],
    [
        "href" => [
            [
                "section_text" => "Pengaturan Garis",
                "section_list" => [
                    ["href" => "pengaturangaris", "text" => "Data Garis Pendeteksi"],
                    ["href" => "pengaturangaris.new", "text" => "Tambah Garis Pendeteksi"]
                ]
            ]
        ],
        "text" => "Pengaturan Garis",
        "is_multi" => true,
    ],
    [
        "href" => [
            [
                "section_text" => "Kelola User",
                "section_list" => [
                    ["href" => "user", "text" => "Data User"],
                    ["href" => "user.new", "text" => "Tambah User"]
                ]
            ]
        ],
        "text" => "Kelola User",
        "is_multi" => true,
    ],
    [
        "href" => [
            [
                "section_text" => "Kelola Setting (DVR)",
                "section_list" => [
                    ["href" => "setting", "text" => "Data Setting (DVR)"],
                    ["href" => "setting.new", "text" => "Tambah Setting (DVR)"]
                ]
            ]
        ],
        "text" => "Kelola Setting (DVR)",
        "is_multi" => true,
    ],
    [
        "href" => [
            [
                "section_text" => "Kelola Pengunjung",
                "section_list" => [
                    ["href" => "pengunjung", "text" => "Data Pengunjung"],
                    // ["href" => "setting.new", "text" => "Tambah Setting (DVR)"]
                ]
            ]
        ],
        "text" => "Kelola Pengunjung",
        "is_multi" => true,
    ]
];
$navigation_links = array_to_object($links);
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="" alt="">
            </a>
        </div>
        @foreach ($navigation_links as $link)
        <ul class="sidebar-menu">
            <li class="menu-header">{{ $link->text }}</li>
            @if ($link->text == "Dashboard")
            <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route($link->href) }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            @endif

            @if ($link->text == "Kelola Kamera")
                @foreach ($link->href as $section)
                    @php
                    $routes = collect($section->section_list)->map(function ($child) {
                        return Request::routeIs($child->href);
                    })->toArray();

                    $is_active = in_array(true, $routes);
                    @endphp
                    <li class="dropdown {{ ($is_active) ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-camera"></i> <span>{{ $section->section_text }}</span></a>
                        <ul class="dropdown-menu">
                            @foreach ($section->section_list as $child)
                                <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a class="nav-link" href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            @endif

            @if ($link->text == "Pengaturan Garis")
                @foreach ($link->href as $section)
                    @php
                    $routes = collect($section->section_list)->map(function ($child) {
                        return Request::routeIs($child->href);
                    })->toArray();

                    $is_active = in_array(true, $routes);
                    @endphp
                    <li class="dropdown {{ ($is_active) ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-grip-lines-vertical"></i> <span>{{ $section->section_text }}</span></a>
                        <ul class="dropdown-menu">
                            @foreach ($section->section_list as $child)
                                <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a class="nav-link" href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            @endif

            @if ($link->text == "Kelola User")
                @foreach ($link->href as $section)
                    @php
                    $routes = collect($section->section_list)->map(function ($child) {
                        return Request::routeIs($child->href);
                    })->toArray();

                    $is_active = in_array(true, $routes);
                    @endphp
                    <li class="dropdown {{ ($is_active) ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>{{ $section->section_text }}</span></a>
                        <ul class="dropdown-menu">
                            @foreach ($section->section_list as $child)
                                <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a class="nav-link" href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            @endif

            @if ($link->text == "Kelola Setting (DVR)")
                @foreach ($link->href as $section)
                    @php
                    $routes = collect($section->section_list)->map(function ($child) {
                        return Request::routeIs($child->href);
                    })->toArray();

                    $is_active = in_array(true, $routes);
                    @endphp
                    <li class="dropdown {{ ($is_active) ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i> <span>{{ $section->section_text }}</span></a>
                        <ul class="dropdown-menu">
                            @foreach ($section->section_list as $child)
                                <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a class="nav-link" href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            @endif

            @if ($link->text == "Kelola Pengunjung")
                @foreach ($link->href as $section)
                    @php
                    $routes = collect($section->section_list)->map(function ($child) {
                        return Request::routeIs($child->href);
                    })->toArray();

                    $is_active = in_array(true, $routes);
                    @endphp
                    <li class="dropdown {{ ($is_active) ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>{{ $section->section_text }}</span></a>
                        <ul class="dropdown-menu">
                            @foreach ($section->section_list as $child)
                                <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a class="nav-link" href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            @endif
        </ul>
        @endforeach
    </aside>
</div>
