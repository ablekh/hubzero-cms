<?php
/**
 * HUBzero CMS
 *
 * Copyright 2005-2015 HUBzero Foundation, LLC.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * HUBzero is a registered trademark of Purdue University.
 *
 * @package   hubzero-cms
 * @author    Shawn Rice <zooley@purdue.edu>
 * @copyright Copyright 2005-2015 HUBzero Foundation, LLC.
 * @copyright Copyright 2005-2014 Open Source Matters, Inc.
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GPLv2
 */

$canDo = \Components\Installer\Admin\Helpers\Installer::getActions();

Toolbar::title(Lang::txt('COM_INSTALLER_HEADER_' . $this->getName()), 'install.png');
if ($canDo->get('core.admin'))
{
	Toolbar::preferences('com_installer');
	Toolbar::divider();
}
Toolbar::help('warnings');

Document::setTitle(Lang::txt('COM_INSTALLER_TITLE_' . $this->getName()));
?>
<div id="installer-warnings">
	<form action="<?php echo Route::url('index.php?option=com_installer&controller=warnings'); ?>" method="post" name="adminForm" id="item-form">
		<?php
		if (!count($this->messages))
		{
			echo '<p class="nowarning">' . Lang::txt('COM_INSTALLER_MSG_WARNINGS_NONE') . '</p>';
		}
		else
		{
			echo Html::sliders('start', 'warning-sliders', array('useCookie' => 1));
			foreach ($this->messages as $message)
			{
				echo Html::sliders('panel', $message['message'], str_replace(' ', '', $message['message']));
				echo '<div style="padding: 5px;">' . $message['description'] . '</div>';
			}
			echo Html::sliders('panel', Lang::txt('COM_INSTALLER_MSG_WARNINGFURTHERINFO'), 'furtherinfo-pane');
			echo '<div style="padding: 5px;" >'. Lang::txt('COM_INSTALLER_MSG_WARNINGFURTHERINFODESC') .'</div>';
			echo Html::sliders('end');
		}
		?>
		<div class="clr"></div>

		<input type="hidden" name="boxchecked" value="0" />
		<?php echo Html::input('token'); ?>
	</form>
</div>
