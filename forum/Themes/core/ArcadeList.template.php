<?php
// Version: 2.5 RC1; ArcadeList

function template_arcade_list()
{
	global $scripturl, $txt, $context, $settings, $user_info, $modSettings;

	$arcade_buttons = array(
		'random' => array(
			'text' => 'arcade_random_game',
			'image' => 'arcade_random.gif', // Theres no image for this included (yet)
			'url' => $scripturl . '?action=arcade;sa=play;random',
			'lang' => true
		),
		'favorites' => array(
			'text' => 'arcade_favorites_only',
			'image' => 'arcade_favorites.gif',
			'url' => $scripturl . '?action=arcade;favorites',
			'lang' => true
		),
	);

	if (isset($context['arcade']['search']) && $context['arcade']['search'])
		$arcade_buttons['search'] = array(
			'text' => 'arcade_show_all',
			'image' => 'arcade_search.gif',
			'url' => $scripturl . '?action=arcade'
		);


	// Header for Game listing
	echo '
		<div id="arcadebuttons_top" class="modbuttons clearfix margintop">
			<div class="floatleft middletext">', $txt['pages'], ': ', $context['page_index'], !empty($modSettings['topbottomEnable']) ? $context['menu_separator'] . '&nbsp;&nbsp;<a href="#bot"><b>' . $txt['go_down'] . '</b></a>' : '', '</div>
			', template_button_strip($arcade_buttons, 'bottom'), '
		</div>
		<div class="tborder">
			<table cellspacing="1" class="bordercolor gamesframe">
				<thead>
					<tr>';

	// Is there games?
	if (!empty($context['arcade']['games']))
	{
		echo '

					<th class="catbg3 headerpadding"></th>
					<th class="catbg3 headerpadding"><a href="', $scripturl, '?action=arcade;sort=name', $context['sort_by'] == 'name' && $context['sort_direction'] == 'up' ? ';desc' : '', '">', $txt['arcade_game_name'], $context['sort_by'] == 'name' ? ' <img src="' . $settings['images_url'] . '/sort_' . $context['sort_direction'] . '.gif" alt="" />' : '', '</a></th>', !$user_info['is_guest'] ? '
					<th class="catbg3 headerpadding"><a href="' . $scripturl . '?action=arcade;sort=myscore' . ($context['sort_by'] == 'myscore' && $context['sort_direction'] == 'up' ? ';desc' : '') . '">' . $txt['arcade_personal_best'] . ($context['sort_by'] == 'myscore' ? ' <img src="' . $settings['images_url'] . '/sort_' . $context['sort_direction'] . '.gif" alt="" />' : '') . '</a></th>' : '', '
					<th class="catbg3 headerpadding"><a href="', $scripturl, '?action=arcade;sort=champion', $context['sort_by'] == 'champion' && $context['sort_direction'] == 'up' ? ';desc' : '', '">', $txt['arcade_champion'], $context['sort_by'] == 'champion' ? ' <img src="' . $settings['images_url'] . '/sort_' . $context['sort_direction'] . '.gif" alt="" />' : '', '</a></th>';
	}
	else
	{
		echo '
					<th class="catbg3 headerpadding"><strong>', $txt['arcade_no_games'], '</strong></th>';
	}

	echo '
					</tr>
				</thead>';

	foreach ($context['arcade']['games'] as $game)
	{
		echo '
				<tr>
					<td class="icon windowbg" align="center">', $game['thumbnail'] != '' ? '
						<a href="' . $game['url']['play'] . '"><img width="60" src="' . $game['thumbnail'] . '" alt="" /></a>' : '', '
					</td>
					<td class="info windowbg2">
						<h4 class="clearfix">
							<a href="', $game['url']['play'], '">', $game['name'], '</a>';

		// Favorite link (if can favorite)
		if ($context['arcade']['can_favorite'])
			echo '
							<span class="favorite"><a href="', $game['url']['favorite'], '" onclick="arcade_favorite(', $game['id'] , '); return false;">
								', !$game['is_favorite'] ?
								'<img id="favgame' . $game['id'] . '" src="' . $settings['images_url'] . '/favorite.gif" alt="' . $txt['arcade_add_favorites'] . '" />' :
								'<img id="favgame' . $game['id'] . '" src="' . $settings['images_url'] . '/favorite2.gif" alt="' . $txt['arcade_remove_favorite'] .'" />', '
							</a></span>';
		echo '
						</h4>
						<p class="smalltext clearfix">
							<span class="game_left">';

		// Is there description?
		if (!empty($game['description']))
			echo '
								', $game['description'], '<br />';

		// Does this game support highscores?
		if ($game['highscore_support'])
			echo '
								<a href="' . $game['url']['highscore'] . '">' . $txt['arcade_viewscore'] . '</a>';

		echo '
							</span>
							<span class="game_right">';

		// Rating
		if ($game['rating2'] > 0)
			echo str_repeat('<img src="' . $settings['images_url'] . '/arcade_star.gif" alt="*" />' , $game['rating2']), str_repeat('<img src="' . $settings['images_url'] . '/star2.gif" alt="" />' , 5 - $game['rating2']), '<br />';

		// Category
		if (!empty($game['category']['name']))
			echo '
								<a href="', $game['category']['link'], '">', $game['category']['name'], '</a><br />';

		echo '
							</span>
						</p>
					</td>';

		// Show personal best and champion only if game doest support highscores
		if ($game['is_champion'] && !$user_info['is_guest'])
			echo '
					<td class="score windowbg">
						', $game['is_personal_best'] ? $game['personal_best'] :  $txt['arcade_no_scores'], '
					</td>';

		if ($game['is_champion'])
			echo '
					<td class="score windowbg">
						', $game['champion']['member_link'], '<br />', $game['champion']['score'], '
					</td>';

		elseif (!$game['highscore_support'])
			echo '
					<td class="score2 windowbg" colspan="', $user_info['is_guest'] ? '1' : '2', '">', $txt['arcade_no_highscore'], '</td>';
		else
			echo '
					<td class="score2 windowbg" colspan="', $user_info['is_guest'] ? '1' : '2', '">', $txt['arcade_no_scores'], '</td>';

		echo '
				</tr>';
		}


	echo '
			</table>
		</div>
		<div id="arcadebuttons_bottom" class="modbuttons clearfix marginbottom">
			<div class="floatleft middletext">', $txt['pages'], ': ', $context['page_index'], !empty($modSettings['topbottomEnable']) ? $context['menu_separator'] . '&nbsp;&nbsp;<a href="#top"><strong>' . $txt['go_up'] . '</strong></a>' : '', '</div>
			', template_button_strip($arcade_buttons, 'top'), '
		</div>';


	if (!empty($modSettings['arcadeShowInfoCenter']))
	{
		echo '
		<div id="infocenterframe" class="tborder clearfix">
			<h3 class="catbg headerpadding">', $txt['arcade_info_center'], '</h3>
			<div class="infocenter_section">
				<h4 class="headerpadding titlebg">', $txt['arcade_latest_scores'], '</h4>
				<div class="windowbg">
					<p class="section"></p>
					<div class="windowbg2 sectionbody middletext">';

		if (!empty($context['arcade']['latest_scores']))
		{
			echo '
						<ul class="reset">';

			foreach ($context['arcade']['latest_scores'] as $score)
				echo '
							<li class="clearfix">
								<div class="floatleft">', sprintf($txt['arcade_latest_score_item'], $scripturl . '?action=arcade;sa=play;game=' . $score['game_id'], $score['name'], $score['score'], $score['memberLink']), '</div>
								<div class="floatright">',  $score['time'], '</div>
							</li>';

			echo '
						</ul>';
		}
		else
			echo '
						', $txt['arcade_no_scores'];

		echo '
					</div>
				</div>
			</div>
			<div class="infocenter_section">
				<h4 class="headerpadding titlebg">', $txt['arcade_game_highlights'], '</h4>
				<div class="windowbg">
					<p class="section"></p>
					<div class="windowbg2 sectionbody middletext">';

		if ($context['arcade']['stats']['longest_champion'] !== false)
			echo sprintf($txt['arcade_game_with_longest_champion'], $context['arcade']['stats']['longest_champion']['member_link'], $context['arcade']['stats']['longest_champion']['game_link']), '<br />';

		if ($context['arcade']['stats']['most_played'] !== false)
			echo sprintf($txt['arcade_game_most_played'], $context['arcade']['stats']['most_played']['link']), '<br />';

		if ($context['arcade']['stats']['best_player'] !== false)
			echo sprintf($txt['arcade_game_best_player'], $context['arcade']['stats']['best_player']['link']), '<br />';

		if ($context['arcade']['stats']['games'] != 0)
			echo sprintf($txt['arcade_game_we_have_games'], $context['arcade']['stats']['games']), '<br />';

		echo '
					</div>
				</div>
			</div>
			<div class="infocenter_section">
				<h4 class="headerpadding titlebg">', $txt['arcade_users'], '</h4>
				<div class="windowbg">
					<p class="section"></p>
					<div class="windowbg2 sectionbody middletext">
						', implode(', ', $context['arcade_viewing']), '
					</div>
				</div>
			</div>
		</div>';
	}
}

?>