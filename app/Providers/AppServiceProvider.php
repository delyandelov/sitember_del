<?php

namespace App\Providers;

use App\Settings\GeneralSettings;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('settings', app(GeneralSettings::class));

        Filament::serving(function () {
            \Filament\Tables\Columns\IconColumn::macro('toggle', function () {
                $this->action(function ($record, $column) {
                    $name = $column->getName();
                    $record->update([
                        $name => ! $record->$name,
                    ]);
                });

                return $this;
            });
        });
    }
}
