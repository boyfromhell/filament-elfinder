<x-filament::page>
    @push('scripts')
        <!-- jQuery and jQuery UI (REQUIRED) -->
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

        <!-- elFinder CSS (REQUIRED) -->
        <link rel="stylesheet" type="text/css" href="/vendor/filament-elfinder/css/elfinder.min.css">
        <link rel="stylesheet" type="text/css" href="/vendor/filament-elfinder/css/theme.css">

        <!-- elFinder JS (REQUIRED) -->
        <script src="/vendor/filament-elfinder/js/elfinder.min.js"></script>

        <!-- elFinder initialization (REQUIRED) -->
        <script type="text/javascript" charset="utf-8">
            // Documentation for client options:
            // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
            $().ready(function () {
                $('#elfinder').elfinder({
                    // set your elFinder options here
                    customData: {
                        _token: '<?= csrf_token() ?>'
                    },
                    url: '<?= route("elfinder.connector") ?>',  // connector URL
                    soundPath: '<?= ('/vendor/filament-elfinder/sounds') ?>'
                });
            });
        </script>
    @endpush
    <!-- Element where elFinder will be created (REQUIRED) -->
    <div id="elfinder"></div>
</x-filament::page>
