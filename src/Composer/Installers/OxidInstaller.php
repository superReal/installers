<?php
namespace Composer\Installers;

class OxidInstaller extends BaseInstaller
{
    protected $locations = array(
        'module' => 'modules/{$name}/',
        'theme'  => 'application/views/',
        'out'    => 'out/',
    );
}
