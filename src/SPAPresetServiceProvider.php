<?php

namespace ReedJones\SPAPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class SPAPresetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('spa-preset', function($command){
            Preset::install();
            $command->info('Preset Complete! Build something amazing!');
        });
    }
}
