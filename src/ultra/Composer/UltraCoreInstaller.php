<?php

namespace ultra\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class UltraCoreInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $prefix = substr($package->getPrettyName(), 0, 5);
        if ('ultra-' !== $prefix) {
            throw new \InvalidArgumentException(
                'Unable to install ultra core '
                .'should always start their package name with '
                .'"ultra-"'
            );
        }

        return 'ultra/'.substr($package->getPrettyName(), 11);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'loadfusion' === $packageType;
    }
}
