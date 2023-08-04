<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $app_name;

    public string $company;

    public ?string $country;

    public ?string $city;

    public ?string $address;

    public string $phone;

    public string $email;

    public ?string $facebook;

    public ?string $linkedin;

    public ?string $instagram;

    public ?string $twitter;

    public static function group(): string
    {
        return 'default';
    }
}
