<?php
/**
 * SkinTemplate class for the Noble skin.
 * 
 * @file
 * @ingroup Skins
 */

class SkinNoble extends SkinTemplate {
	public $skinname = 'noble',
			$stylename = 'Noble',
			$template = 'NobleTemplate';

	/**
	 * This function adds JavaScript to the skin, via ResourceLoader.
	 *
	 * @param OutputPage $out
	 */
	public function initPage( OutputPage $out ) : void {
		parent::initPage( $out );
		$out->addModules( 'skins.noble.js' );
	}

	/**
	 * Add CSS to the skin, via ResourceLoader.
	 *
	 * @param OutputPage $out
	 */
	function setupSkinUserCss( OutputPage $out ) : void {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( [
			'mediawiki.skinning.interface',
			'skins.noble.styles'
		] );
	}
}

