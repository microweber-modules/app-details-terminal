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
                'target-dir'=>$template['dir_name'],
            ];
        }
    }

    echo json_encode($templates);
});

\Artisan::command('microweber:get-modules', function () {

    $modules = [];
    $getModules = get_modules();
    if (!empty($getModules)) {
        foreach ($getModules as $module) {
            $modules[] = [
                'name'=>$module['name'],
                'author'=>$module['author'],
                'version'=>$module['version'],
                'target-dir'=>$module['module'],
            ];
        }
    }

    echo json_encode($modules);

});

\Artisan::command('microweber:get-languages', function () {

    $languages = \MicroweberPackages\Translation\TranslationPackageInstallHelper::getAvailableTranslations();
    return json_encode($languages);

});
