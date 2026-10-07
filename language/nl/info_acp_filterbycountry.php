<?php
/**
 *
 * Filter by country. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, Mark D. Hamill, https://www.phpbbservices.com
 * @license GNU General Public License, version 2 (GPL-2.0)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// » “ “ …
//

$lang = array_merge($lang, array(
	'ACP_FBC'					=> 'Filteren op land',
	'ACP_FBC_STATS'				=> 'Statistieken',
	'ACP_FBC_STATS_TITLE'		=> 'Filteren op landstatistieken',
	'ACP_FBC_STATS_TITLE_EXPLAIN'	=> 'Deze pagina bevat een rapport van toegestane of geblokkeerde paginaverzoeken per land sinds de laatste keer dat statistieken voor de extensie zijn ingeschakeld. Gebruik de pijlen omhoog en omlaag om de kolom in oplopende of aflopende volgorde te sorteren. Statistieken zijn alleen beschikbaar %s sinds. <strong>Als er geen paginaverzoeken waren voor een land, wordt dit niet weergegeven.</strong> Als u statistieken opnieuw instellen selecteert, zullen alle statistieken nul weergeven en worden alle rijen verwijderd uit de tabel met statistieken.',
	'ACP_FBC_TITLE'				=> 'Filteren op landinstellingen',
	'ACP_FBC_TITLE_EXPLAIN'		=> 'Met deze extensie kun je het verkeer naar je forum per land filteren. Dit product bevat GeoLite2-gegevens gemaakt door MaxMind, verkrijgbaar via <a href="https://www.maxmind.com" target="_blank">https://www.maxmind.com</a>. De GeoLite2-landendatabase wordt elke week automatisch ververst.',
	'ACP_FBC_TITLE_SHORT'		=> 'Instellingen',

	'LOG_ACP_FBC_BAD_ACCESS'				=> '<strong>Filteren op land: %1$s werd de toegang tot het bord geweigerd vanaf IP(s) %2$s omdat toegang vanuit land/landen “%3$s“ niet is toegestaan.',
	'LOG_ACP_FBC_CREATE_DIRECTORY_ERROR'	=> '<strong>Kan de map niet maken %1$s. Dit kan te wijten zijn aan onvoldoende rechten. De bestandsrechten voor de map moeten worden ingesteld op openbaar beschrijfbaar (777 op Unix-gebaseerde systemen).</strong>',
	'LOG_ACP_FBC_DEBUG'						=> '<strong>%1$s</strong>',
	'LOG_ACP_FBC_DELETE_ERROR'				=> '<strong>Kan niet verwijderen %1$s. Dit kan te wijten zijn aan onvoldoende rechten. Volledige openbare schrijfrechten zijn vereist.</strong>',
	'LOG_ACP_FBC_EXTRACT_ERROR'				=> '<strong>Kan niet uitpakken %1$s tot %2$s. Een “%3$s” uitzondering vond plaats.</strong>',
	'LOG_ACP_FBC_FILTERBYCOUNTRY_SETTINGS'	=> '<strong>Filteren op landinstellingen bijgewerkt</strong>',
	'LOG_ACP_FBC_FOPEN_ERROR'				=> '<strong>Kan bestand niet downloaden: %1$s. De MaxMind-service is mogelijk tijdelijk niet beschikbaar.</strong>',
	'LOG_ACP_FBC_GZIP_OPEN_ERROR'			=> '<strong>Kon gzip-bestand niet openen: %1$s</strong>',
	'LOG_ACP_FBC_HTTP_ERROR'				=> '<strong>Kan bestand niet downloaden: %1$s. Er is en onverwachte HTTP-foutcode %1$s opgetreden.</strong>',
	'LOG_ACP_FBC_MAXMIND_ERROR'				=> '<strong>Een aanroep naar de MaxMind-database met landcodes veroorzaakte een fout. De database is hoogstwaarschijnlijk corrupt.</strong>',
	'LOG_ACP_FBC_READ_FILE_ERROR'			=> '<strong>Geen leesrechten voor bestand: %1$s</strong>',
	'LOG_ACP_FBC_TARBALL_MOVE_ERROR'		=> '<strong>Kan bestand niet verplaatsen: %1$s</strong>',
	'LOG_ACP_FBC_WRITE_FILE_ERROR'			=> '<strong>Geen schrijfrechten voor bestand: %1$s</strong>',
));