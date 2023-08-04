<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('default.app_name', 'Sitember');
        $this->migrator->add('default.company', 'Sitember Ltd.');
        $this->migrator->add('default.country', 'Bulgaria');
        $this->migrator->add('default.city', 'гр. Пловдив, 4000');
        $this->migrator->add('default.address', 'ул."Цар Борис III"');
        $this->migrator->add('default.phone', '(+359) 123 456 789');
        $this->migrator->add('default.email', 'sales@sitember.com');
        $this->migrator->add('default.facebook', 'https://facebook.com/sitember');
        $this->migrator->add('default.linkedin', 'https://linkedin.com/sitember');
        $this->migrator->add('default.instagram', 'https://instagram.com/sitember');
        $this->migrator->add('default.twitter', 'https://twitter.com/sitember');
    }
};
