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
        $prefix = substr($package->getPrettyName(), 0, 13);
        if ('ultra/custom-' !== $prefix) {
            throw new \InvalidArgumentException(
                'Unable to install ultra core '
                .'should always start their package name with '
                .'"ultra/custom-"'
            );
        }

        return 'CoreFramwork/'.substr($package->getPrettyName(), 11);
    }

    /**
     * {@inheritDoc}
     */
//     public function supports($packageType)
//     {
//         return 'loadfusion' === $packageType;
//     }
}
