<?php
namespace Composer\Installers;

class UltraInstaller extends BaseInstaller
{
	protected $locations = array(
		'core'      => 'CCF/orbit/{$name}/',
		'theme'     => 'CCF/app/themes/{$name}/',
	);
}