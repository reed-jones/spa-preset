<?php
namespace ReedJones\SPAPreset;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;

class Preset extends LaravelPreset
{
    const STUBS = __DIR__ . "/stubs/";

    public static function install()
    {
        static::cleanDirectories();
        static::updatePackages();
        static::updateScripts();
        static::updateConfigs();
        static::updateViewsFiles();
        static::updateLaravelRoutes();
    }

    public static function cleanDirectories()
    {
        // remove all the things
        File::cleanDirectory(resource_path('assets'));
        File::cleanDirectory(resource_path('views'));
    }

    public static function updatePackageArray($packages)
    {
        return array_merge([
            'pug' => "^2.0.3",
            'vue-router' => "^3.0.1",
            'stylus' => "^0.54.5",
            'stylus-loader' => "^3.0.2",
            'vuex'  => "^3.0.1"
        ], Arr::except($packages, [
            'popper.js',
            'lodash',
            'jquery',
            'bootstrap'
        ]));
    }

    public static function updateScripts()
    {
        File::copyDirectory(self::STUBS . 'assets/js', resource_path('assets/js'));
    }

    public static function updateConfigs()
    {
        File::copy(self::STUBS . 'configs/.prettierrc', base_path('.prettierrc'));
        File::copy(self::STUBS . 'configs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    public static function updateViewsFiles()
    {
        File::copyDirectory(self::STUBS . 'assets/views', resource_path('assets/views'));
    }

    public static function updateLaravelRoutes()
    {
        File::copy(self::STUBS . 'routes/web.php', base_path('routes/web.php'));
    }
}