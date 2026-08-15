<?php

    // Basic Set up Blade and view


    // Syntax of Blade and view
    public function boot(): void
    {
        Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('m/d/yH:i:s'); ?>";
        });

        // Directive with no Argument
    Blade::directive('data', function () {
        return "<?php Welocme to Learning Laravel Routing...!?>";
    });

    // Directive with Conditional
    Blade::if('env', function (string $enviroment) {
        return app()->environment($enviroment);
    });


    }









?>
