<?php
// Version: 2.0 RC5; Settings

function template_options()
{
	global $context, $settings, $options, $scripturl, $txt;

	$context['theme_options'] = array(
		array(
			'id' => 'show_board_desc',
			'label' => $txt['board_desc_inside'],
			'default' => true,
		),
		array(
			'id' => 'show_children',
			'label' => $txt['show_children'],
			'default' => true,
		),
		array(
			'id' => 'use_sidebar_menu',
			'label' => $txt['use_sidebar_menu'],
			'default' => true,
		),
		array(
			'id' => 'show_no_avatars',
			'label' => $txt['show_no_avatars'],
			'default' => true,
		),
		array(
			'id' => 'show_no_signatures',
			'label' => $txt['show_no_signatures'],
			'default' => true,
		),
		array(
			'id' => 'show_no_censored',
			'label' => $txt['show_no_censored'],
			'default' => true,
		),
		array(
			'id' => 'return_to_post',
			'label' => $txt['return_to_post'],
			'default' => true,
		),
		array(
			'id' => 'no_new_reply_warning',
			'label' => $txt['no_new_reply_warning'],
			'default' => true,
		),
		array(
			'id' => 'view_newest_first',
			'label' => $txt['recent_posts_at_top'],
			'default' => true,
		),
		array(
			'id' => 'view_newest_pm_first',
			'label' => $txt['recent_pms_at_top'],
			'default' => true,
		),
		array(
			'id' => 'posts_apply_ignore_list',
			'label' => $txt['posts_apply_ignore_list'],
			'default' => false,
		),
		array(
			'id' => 'wysiwyg_default',
			'label' => $txt['wysiwyg_default'],
			'default' => false,
		),
		array(
			'id' => 'popup_messages',
			'label' => $txt['popup_messages'],
			'default' => true,
		),
		array(
			'id' => 'copy_to_outbox',
			'label' => $txt['copy_to_outbox'],
			'default' => true,
		),
		array(
			'id' => 'pm_remove_inbox_label',
			'label' => $txt['pm_remove_inbox_label'],
			'default' => true,
		),
		array(
			'id' => 'auto_notify',
			'label' => $txt['auto_notify'],
			'default' => true,
		),
		array(
			'id' => 'topics_per_page',
			'label' => $txt['topics_per_page'],
			'options' => array(
				0 => $txt['per_page_default'],
				5 => 5,
				10 => 10,
				25 => 25,
				50 => 50,
			),
			'default' => true,
		),
		array(
			'id' => 'messages_per_page',
			'label' => $txt['messages_per_page'],
			'options' => array(
				0 => $txt['per_page_default'],
				5 => 5,
				10 => 10,
				25 => 25,
				50 => 50,
			),
			'default' => true,
		),
		array(
			'id' => 'calendar_start_day',
			'label' => $txt['calendar_start_day'],
			'options' => array(
				0 => $txt['days'][0],
				1 => $txt['days'][1],
				6 => $txt['days'][6],
			),
			'default' => true,
		),
		array(
			'id' => 'display_quick_reply',
			'label' => $txt['display_quick_reply'],
			'options' => array(
				0 => $txt['display_quick_reply1'],
				1 => $txt['display_quick_reply2'],
				2 => $txt['display_quick_reply3']
			),
			'default' => true,
		),

		array(
			'id' => 'wysiwyg_quick_reply',
			'label' => $txt['wysiwyg_quick_reply'],
			'options' => array(
				0 => $txt['wysiwyg_quick_reply0'],
				1 => $txt['wysiwyg_quick_reply1'],
				2 => $txt['wysiwyg_quick_reply2'],
				3 => $txt['wysiwyg_quick_reply3'],
				4 => $txt['wysiwyg_quick_reply4'],
				5 => $txt['wysiwyg_quick_reply5'],
				6 => $txt['wysiwyg_quick_reply6'],
				7 => $txt['wysiwyg_quick_reply7'],
			),
			'default' => true,
		),

		array(
			'id' => 'display_quick_mod',
			'label' => $txt['display_quick_mod'],
			'options' => array(
				0 => $txt['display_quick_mod_none'],
				1 => $txt['display_quick_mod_check'],
				2 => $txt['display_quick_mod_image'],
			),
			'default' => true,
		),
	);
}

function template_settings()
{
	global $context, $settings, $options, $scripturl, $txt;

	$context['theme_settings'] = array(
		array(
			'id' => 'smiley_sets_default',
			'label' => $txt['smileys_default_set_for_theme'],
			'options' => $context['smiley_sets'],
			'type' => 'text',
		),
		array(
			'id' => 'forum_width',
			'label' => $txt['forum_width'],
			'description' => $txt['forum_width_desc'],
			'type' => 'text',
			'size' => 8,
		),
	'',
		array(
			'id' => 'linktree_link',
			'label' => $txt['current_pos_text_img'],
		),
		array(
			'id' => 'show_mark_read',
			'label' => $txt['enable_mark_as_read'],
		),
		array(
			'id' => 'allow_no_censored',
			'label' => $txt['allow_no_censored'],
		),
		array(
			'id' => 'enable_news',
			'label' => $txt['enable_random_news'],
		),
	'',
		array(
			'id' => 'show_newsfader',
			'label' => $txt['news_fader'],
		),
		array(
			'id' => 'newsfader_time',
			'label' => $txt['admin_fader_delay'],
			'type' => 'number',
		),
		array(
			'id' => 'number_recent_posts',
			'label' => $txt['number_recent_posts'],
			'description' => $txt['number_recent_posts_desc'],
			'type' => 'number',
		),
		array(
			'id' => 'show_stats_index',
			'label' => $txt['show_stats_index'],
		),
		array(
			'id' => 'show_latest_member',
			'label' => $txt['latest_members'],
		),
		array(
			'id' => 'show_group_key',
			'label' => $txt['show_group_key'],
		),
		array(
			'id' => 'display_who_viewing',
			'label' => $txt['who_display_viewing'],
			'options' => array(
				0 => $txt['who_display_viewing_off'],
				1 => $txt['who_display_viewing_numbers'],
				2 => $txt['who_display_viewing_names'],
			),
			'type' => 'number',
		),
	'',
		array(
			'id' => 'show_modify',
			'label' => $txt['last_modification'],
		),
		array(
			'id' => 'show_profile_buttons',
			'label' => $txt['show_view_profile_button'],
		),
		array(
			'id' => 'show_user_images',
			'label' => $txt['user_avatars'],
		),
		array(
			'id' => 'show_blurb',
			'label' => $txt['user_text'],
		),
		array(
			'id' => 'show_gender',
			'label' => $txt['gender_images'],
		),
		array(
			'id' => 'hide_post_group',
			'label' => $txt['hide_post_group'],
			'description' => $txt['hide_post_group_desc'],
		),
	'',
		array(
			'id' => 'show_bbc',
			'label' => $txt['admin_bbc'],
		),
		array(
			'id' => 'additional_options_collapsable',
			'label' => $txt['additional_options_collapsable'],
		),

	'',
		array(
			'id' => 'geshi_code_container',
			'label' => $txt['geshi_code_container'],
			'description' => $txt['geshi_code_container_desc'],
			'options' => array(
				0 => 'GESHI_HEADER_NONE',
				1 => 'GESHI_HEADER_DIV',
				2 => 'GESHI_HEADER_PRE',
				3 => 'GESHI_HEADER_PRE_VALID',
				4 => 'GESHI_HEADER_PRE_TABLE',
			),
			'type' => 'number',
		),
		array(
			'id' => 'geshi_line_numbers',
			'label' => $txt['geshi_line_numbers'],
			'description' => $txt['geshi_line_numbers_desc'],
			'options' => array(
				0 => 'GESHI_NO_LINE_NUMBERS',
				1 => 'GESHI_NORMAL_LINE_NUMBERS',
				2 => 'GESHI_FANCY_LINE_NUMBERS',
			),
			'type' => 'number',
		),
		array(
			'id' => 'geshi_fancy_line_number',
			'label' => $txt['geshi_fancy_line_number'],
			'description' => $txt['geshi_fancy_line_number_desc'],
			'type' => 'number',
			'size' => 2,
		),
		array(
			'id' => 'geshi_line_style',
			'label' => $txt['geshi_line_style'],
			'description' => $txt['geshi_line_style_desc'],
			'type' => 'text',
			'size' => 50,
		),
		array(
			'id' => 'geshi_line_style_fancy',
			'label' => $txt['geshi_line_style_fancy'],
			'description' => $txt['geshi_line_style_fancy_desc'],
			'type' => 'text',
			'size' => 50,
		),
		array(
			'id' => 'geshi_highlight_lines_extra_style',
			'label' => $txt['geshi_highlight_lines_extra_style'],
			'description' => $txt['geshi_highlight_lines_extra_style_desc'],
			'type' => 'text',
			'size' => 50,
		),
		array(
			'id' => 'geshi_enable_pre_header',
			'label' => $txt['geshi_enable_pre_header'],
			'description' => $txt['geshi_enable_pre_header_desc'],
		),
		array(
			'id' => 'geshi_pre_header',
			'label' => $txt['geshi_pre_header'],
			'description' => $txt['geshi_pre_header_desc'],
			'type' => 'text',
			'size' => 50,
		),
		array(
			'id' => 'geshi_enable_header',
			'label' => $txt['geshi_enable_header'],
			'description' => $txt['geshi_enable_header_desc'],
		),
		array(
			'id' => 'geshi_header',
			'label' => $txt['geshi_header'],
			'description' => $txt['geshi_header_desc'],
			'type' => 'text',
			'size' => 50,
		),
		array(
			'id' => 'geshi_enable_footer',
			'label' => $txt['geshi_enable_footer'],
			'description' => $txt['geshi_enable_footer_desc'],
		),
		array(
			'id' => 'geshi_footer',
			'label' => $txt['geshi_footer'],
			'description' => $txt['geshi_footer_desc'],
			'type' => 'text',
			'size' => 50,
		),
		array(
			'id' => 'geshi_enable_language_selector',
			'label' => $txt['geshi_enable_language_selector'],
			'description' => $txt['geshi_enable_language_selector_desc'],
		),
		array(
			'id' => 'geshi_language_selector',
			'label' => $txt['geshi_language_selector'],
			'description' => $txt['geshi_language_selector_desc'],
			'type' => 'text',
			'size' => 50,
		),

	'',
		array(
			'id' => 'geshi_code_container',
			'label' => $txt['geshi_code_container'],
			'description' => $txt['geshi_code_container_desc'],
			'options' => array(
				0 => 'GESHI_HEADER_NONE',
				1 => 'GESHI_HEADER_DIV',
				2 => 'GESHI_HEADER_PRE',
				3 => 'GESHI_HEADER_PRE_VALID',
				4 => 'GESHI_HEADER_PRE_TABLE',
			),
			'type' => 'number',
		),
		array(
			'id' => 'geshi_line_numbers',
			'label' => $txt['geshi_line_numbers'],
			'description' => $txt['geshi_line_numbers_desc'],
			'options' => array(
				0 => 'GESHI_NO_LINE_NUMBERS',
				1 => 'GESHI_NORMAL_LINE_NUMBERS',
				2 => 'GESHI_FANCY_LINE_NUMBERS',
			),
			'type' => 'number',
		),
		array(
			'id' => 'geshi_fancy_line_number',
			'label' => $txt['geshi_fancy_line_number'],
			'description' => $txt['geshi_fancy_line_number_desc'],
			'type' => 'number',
			'size' => 2,
		),
		array(
			'id' => 'geshi_line_style',
			'label' => $txt['geshi_line_style'],
			'description' => $txt['geshi_line_style_desc'],
			'type' => 'text',
			'size' => 50,
		),
		array(
			'id' => 'geshi_line_style_fancy',
			'label' => $txt['geshi_line_style_fancy'],
			'description' => $txt['geshi_line_style_fancy_desc'],
			'type' => 'text',
			'size' => 50,
		),
		array(
			'id' => 'geshi_highlight_lines_extra_style',
			'label' => $txt['geshi_highlight_lines_extra_style'],
			'description' => $txt['geshi_highlight_lines_extra_style_desc'],
			'type' => 'text',
			'size' => 50,
		),
		array(
			'id' => 'geshi_enable_pre_header',
			'label' => $txt['geshi_enable_pre_header'],
			'description' => $txt['geshi_enable_pre_header_desc'],
		),
		array(
			'id' => 'geshi_pre_header',
			'label' => $txt['geshi_pre_header'],
			'description' => $txt['geshi_pre_header_desc'],
			'type' => 'text',
			'size' => 50,
		),
		array(
			'id' => 'geshi_enable_header',
			'label' => $txt['geshi_enable_header'],
			'description' => $txt['geshi_enable_header_desc'],
		),
		array(
			'id' => 'geshi_header',
			'label' => $txt['geshi_header'],
			'description' => $txt['geshi_header_desc'],
			'type' => 'text',
			'size' => 50,
		),
		array(
			'id' => 'geshi_enable_footer',
			'label' => $txt['geshi_enable_footer'],
			'description' => $txt['geshi_enable_footer_desc'],
		),
		array(
			'id' => 'geshi_footer',
			'label' => $txt['geshi_footer'],
			'description' => $txt['geshi_footer_desc'],
			'type' => 'text',
			'size' => 50,
		),
		array(
			'id' => 'geshi_enable_language_selector',
			'label' => $txt['geshi_enable_language_selector'],
			'description' => $txt['geshi_enable_language_selector_desc'],
		),
		array(
			'id' => 'geshi_language_selector',
			'label' => $txt['geshi_language_selector'],
			'description' => $txt['geshi_language_selector_desc'],
			'type' => 'text',
			'size' => 50,
		),
	);
}

?>