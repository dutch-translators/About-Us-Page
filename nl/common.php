<?php
/**
*
* @package phpBB Extension - Crizzo About Us (Dutch)
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* [Dutch] translated by Dutch Translators (https://github.com/dutch-translators)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ABOUTUS'						=> 'Over Ons',
	'ABOUTUS_SETTINGS'				=> 'Over ons Instellingen',
	'ABOUTUS_UPDATED'				=> 'Over ons is succesvol bijgewerkt.',

	'ACP_ABOUTUS_ENABLE'			=> 'Over Ons',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Wanneer "ingeschakeld" wordt er een link in de footer van de pagina weergeven die linkt naar de "Over ons" pagina. Wanneer "Uitgeschakeld" wordt de link in de footer niet getoond, deze optie zal de tekst die je hebt opgemaakt niet verwijderen.',
	'ACP_ABOUTUS_SETTINGS'			=> 'Over ons instellingen',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Hier kan je de tekst voor de "Over ons" pagina aanpassen en je kan de "Over ons"-pagina inschakelen of uitschakelen.',
	'ACP_ABOUTUS_INFO'				=> 'Over ons Tekst',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Hier kan je de tekst aanpassen die wordt weergegeven op de "Over ons" pagina.',

	'VIEWONLINE_ABOUTUS'	=> 'Bekijkt Over ons',
));
