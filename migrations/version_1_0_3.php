<?php
/**
*
* @package phpBB Extension - Topic Author
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topicauthor\migrations;

class version_1_0_3 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\dmzx\topicauthor\migrations\topicauthor_schema');
	}

	public function update_data()
	{
		return array(
			array('config.update', array('topicauthor_version', '1.0.3')),

			array('config.add', array('topicauthor_text_colour_field', '#000000')),
		);
	}
}