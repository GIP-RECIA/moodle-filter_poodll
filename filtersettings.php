<?php  //$Id: filtersettings.php,v 0.0.0.1 2010/01/15 22:40:00 thomw Exp $


defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

$items = array();

//$items[] = new admin_setting_heading('filter_poodll_settings', get_string('settings', 'filter_poodll'), '');
	//PoodLL Network Settings.
$items[] = new admin_setting_heading('filter_poodll_network_settings', get_string('filter_poodll_network_heading', 'filter_poodll'), '');
$items[] = new admin_setting_configtext('filter_poodll_servername', get_string('servername', 'filter_poodll'), '', 'tokyo.poodll.com');
$items[] = new admin_setting_configtext('filter_poodll_serverid', get_string('serverid', 'filter_poodll'), '', 'poodll');
$items[] = new admin_setting_configtext('filter_poodll_serverport', get_string('serverport', 'filter_poodll'), '', '80', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_serverhttpport', get_string('serverhttpport', 'filter_poodll'), '', '443', PARAM_INT);

	//PoodLL player type settings.
$items[] = new admin_setting_heading('filter_poodll_playertypes_settings', get_string('filter_poodll_playertypes_heading', 'filter_poodll'), '');
$options = array('pd' => 'PoodLL', 'fp' => 'Flowplayer', 'jw' => 'JWPlayer');
$items[] = new admin_setting_configselect('filter_poodll_defaultplayer', get_string('defaultplayer', 'filter_poodll'), '', 'fp', $options);
$options = array('native' => 'Native', 'js' => 'Javascript');
$items[] = new admin_setting_configselect('filter_poodll_html5controls', get_string('html5controls', 'filter_poodll'), '', 'native', $options);

	//PoodLL Filepicker intercept settings.
$items[] = new admin_setting_heading('filter_poodll_intercept_settings', get_string('filter_poodll_intercept_heading', 'filter_poodll'), '');
$items[] = new admin_setting_configcheckbox('filter_poodll_handleflv', get_string('handleflv', 'filter_poodll'), '', 0);
$items[] = new admin_setting_configcheckbox('filter_poodll_handlemp4', get_string('handlemp4', 'filter_poodll'), '', 0);
$items[] = new admin_setting_configcheckbox('filter_poodll_handlemp3', get_string('handlemp3', 'filter_poodll'), '', 0);

	//audio player settings.	
$items[] = new admin_setting_heading('filter_poodll_audioplayer_settings', get_string('filter_poodll_audioplayer_heading', 'filter_poodll'), '');
$items[] = new admin_setting_configtext('filter_poodll_audiowidth', get_string('audiowidth', 'filter_poodll'), '', '320', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_audioheight', get_string('audioheight', 'filter_poodll'), '', '40', PARAM_INT);
$items[] = new admin_setting_configcheckbox('filter_poodll_audiosplash', get_string('audiosplash', 'filter_poodll'), get_string('audiosplashdetails', 'filter_poodll'), 1);
$items[] = new admin_setting_configtext('filter_poodll_miniplayerwidth', get_string('miniplayerwidth', 'filter_poodll'), '', '32', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_wordplayerfontsize', get_string('wordplayerfontsize', 'filter_poodll'), '', '24', PARAM_INT);

//audio capture settings
$items[] = new admin_setting_heading('filter_poodll_mic_settings', get_string('filter_poodll_mic_heading', 'filter_poodll'), '');
$items[] = new admin_setting_configtext('filter_poodll_studentmic', get_string('studentmic', 'filter_poodll'), '', '');
$items[] = new admin_setting_configtext('filter_poodll_micrate', get_string('micrate', 'filter_poodll'), '','22', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_micsilencelevel', get_string('micsilencelevel', 'filter_poodll'), '', '1', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_micgain', get_string('micgain', 'filter_poodll'), '', '50', PARAM_INT); 
$items[] = new admin_setting_configtext('filter_poodll_micecho', get_string('micecho', 'filter_poodll'), '', 'yes');
$items[] = new admin_setting_configtext('filter_poodll_micloopback', get_string('micloopback', 'filter_poodll'), '', 'no');
$items[] = new admin_setting_configcheckbox('filter_poodll_audiotranscode', get_string('audiotranscode', 'filter_poodll'), get_string('audiotranscodedetails', 'filter_poodll'), 0);
	
		//video player settings.
$items[] = new admin_setting_heading('filter_poodll_videoplayer_setting', get_string('filter_poodll_videoplayer_heading', 'filter_poodll'), '');
$items[] = new admin_setting_configtext('filter_poodll_videowidth', get_string('videowidth', 'filter_poodll'), '', '480', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_videoheight', get_string('videoheight', 'filter_poodll'), '', '360', PARAM_INT);
$items[] = new admin_setting_configcheckbox('filter_poodll_videosplash', get_string('videosplash', 'filter_poodll'), get_string('videosplashdetails', 'filter_poodll'), 1);
$items[] = new admin_setting_configcheckbox('filter_poodll_thumbnailsplash', get_string('thumbnailsplash', 'filter_poodll'), get_string('thumbnailsplashdetails', 'filter_poodll'), 1);


//video capture settings.
$items[] = new admin_setting_heading('filter_poodll_camera_settings', get_string('filter_poodll_camera_heading', 'filter_poodll'), '');
$items[] = new admin_setting_configtext('filter_poodll_studentcam', get_string('studentcam', 'filter_poodll'), '', '');
$items[] = new admin_setting_configtext('filter_poodll_capturewidth', get_string('capturewidth', 'filter_poodll'), '', '320', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_captureheight', get_string('captureheight', 'filter_poodll'), '', '240', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_capturefps', get_string('capturefps', 'filter_poodll'), '', '17', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_bandwidth', get_string('bandwidth', 'filter_poodll'), '', '0', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_picqual', get_string('picqual', 'filter_poodll'), '', '5', PARAM_INT);
$items[] = new admin_setting_configcheckbox('filter_poodll_videotranscode', get_string('videotranscode', 'filter_poodll'), get_string('videotranscodedetails', 'filter_poodll'), 0);

//PoodLL Whiteboard
$items[] = new admin_setting_heading('filter_poodll_whiteboard_setting', get_string('filter_poodll_whiteboard_heading', 'filter_poodll'), '');
$items[] = new admin_setting_configtext('filter_poodll_whiteboardwidth', get_string('wboardwidth', 'filter_poodll'), '', '600', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_whiteboardheight', get_string('wboardheight', 'filter_poodll'), '', '350', PARAM_INT);

//Video Gallery Settings
$items[] = new admin_setting_heading('filter_poodll_videogallery_setting', get_string('filter_poodll_videogallery_heading', 'filter_poodll'), '');
$items[] = new admin_setting_configtext('filter_poodll_biggallwidth', get_string('biggallwidth', 'filter_poodll'), '', '850', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_biggallheight', get_string('biggallheight', 'filter_poodll'), '', '680', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_smallgallwidth', get_string('smallgallwidth', 'filter_poodll'), '', '450', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_smallgallheight', get_string('smallgallheight', 'filter_poodll'), '', '320', PARAM_INT);


//Legacy headings
$items[] = new admin_setting_heading('filter_poodll_legacy_setting', get_string('filter_poodll_legacy_heading', 'filter_poodll'), '');
$items[] = new admin_setting_configcheckbox('filter_poodll_usecourseid', get_string('usecourseid', 'filter_poodll'), '', 0);
$items[] = new admin_setting_configtext('filter_poodll_filename', get_string('filename', 'filter_poodll'), '', 'poodll_file.flv');
$items[] = new admin_setting_configcheckbox('filter_poodll_overwrite', get_string('overwrite', 'filter_poodll'), '', 1);

$items[] = new admin_setting_configtext('filter_poodll_screencapturedevice', get_string('screencapturedevice', 'filter_poodll'), '', 'none');
$items[] = new admin_setting_configtext('filter_poodll_talkbackwidth', get_string('talkbackwidth', 'filter_poodll'), '', '760', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_talkbackheight', get_string('talkbackheight', 'filter_poodll'), '', '380', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_newpairwidth', get_string('newpairwidth', 'filter_poodll'), '', '750', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_newpairheight', get_string('newpairheight', 'filter_poodll'), '', '480', PARAM_INT);

//screencast
$items[] = new admin_setting_configtext('filter_poodll_showwidth', get_string('showwidth', 'filter_poodll'), '', '750', PARAM_INT);
$items[] = new admin_setting_configtext('filter_poodll_showheight', get_string('showheight', 'filter_poodll'), '', '480', PARAM_INT);

//$items[] = new admin_setting_configcheckbox('filter_poodll_forum_recording', get_string('forum_recording', 'filter_poodll'), '', 0);
//$items[] = new admin_setting_configcheckbox('filter_poodll_forum_audio', get_string('forum_audio', 'filter_poodll'), '', 1);
//$items[] = new admin_setting_configcheckbox('filter_poodll_forum_video', get_string('forum_video', 'filter_poodll'), '', 1);

//$items[] = new admin_setting_configcheckbox('filter_poodll_journal_recording', get_string('journal_recording', 'filter_poodll'), '', 0);
//$items[] = new admin_setting_configcheckbox('filter_poodll_journal_audio', get_string('journal_audio', 'filter_poodll'), '', 1);
//$items[] = new admin_setting_configcheckbox('filter_poodll_journal_video', get_string('journal_video', 'filter_poodll'), '', 1);
//bandwidth settings (how close is the poodll server ...) / pic qual 1 - 100


foreach ($items as $item) {
    $settings->add($item);
}

}
?>