<?php

namespace ultra\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class UltraPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new UltraCoreInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}