<?php
//namespace Composer\Installers;
namespace ultra\Composer;

class UltraInstaller extends BaseInstaller
{
	protected $locations = array(
		'core'      => 'CCF/orbit/{$name}/',
		'theme'     => 'CCF/app/themes/{$name}/',
	);
}