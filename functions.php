<?php

// If module not loading just call artisan command "microweber:reload_database"

\Artisan::command('microweber:get-templates', function () {

    $templates = [];
    $getTemplates = site_templates();
    if (!empty($getTemplates)) {
        foreach ($getTemplates as $template) {
            $templates[] = [
                'name'=>$template['name'],
                'author'=>$template['author'],
                'version'=>$template['version'],
                'dir_name'=>$template['dir_name'],
            ];
        }
    }

    echo json_encode($templates);
});

\Artisan::command('microweber:get-modules', function () {


});

\Artisan::command('microweber:get-languages', function () {


});
