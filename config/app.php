<?php return array (
  'name' => 'Laravel',
  'env' => 'production',
  'debug' => false,
  'url' => 'http://localhost:8000/',
  'asset_url' => NULL,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'fallback_locale' => 'en',
  'key' => 'base64:UENuYzNua2NRTVhvQkcwbEl5Vm1IeG0yNThNV3VtWVk=',
  'cipher' => 'AES-256-CBC',
  'log' => 'daily',
  'providers' => 
  array (
    0 => 'MicroweberPackages\\App\\Providers\\AppServiceProvider',
    1 => 'MicroweberPackages\\App\\Providers\\EventServiceProvider',
    2 => 'MicroweberPackages\\App\\Providers\\RouteServiceProvider',
  ),
  'manifest' => storage_path().DIRECTORY_SEPARATOR.'framework',
);