<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Advanced Notifications renderer - delegates to Mustache templates.
 *
 * @package    block_advnotifications
 * @copyright  2016 onwards LearningWorks Ltd {@link https://learningworks.co.nz/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Zander Potgieter <zander.potgieter@learningworks.co.nz>
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Renders notifications using Mustache templates.
 *
 * @copyright  2016 onwards LearningWorks Ltd {@link https://learningworks.co.nz/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_advnotifications_renderer extends plugin_renderer_base {
    /**
     * Renders notification alerts on the page via the notification Mustache template.
     *
     * @param  array  $notifications Attributes about notifications to render.
     * @return string HTML output.
     */
    public function render_notification($notifications) {
        if (empty($notifications)) {
            return '';
        }

        $context = ['notifications' => []];

        foreach ($notifications as $notification) {
            $notifdata = [
                'extraclasses' => $notification['extraclasses'],
                'notifid'      => $notification['notifid'],
                'alerttype'    => $notification['alerttype'],
                'hasicon'      => !empty($notification['aiconflag']) && $notification['aiconflag'] == 1,
                'title'        => $notification['title'],
                'message'      => $notification['message'],
                'dismissible'  => $notification['dismissible'] == 1,
            ];

            if ($notifdata['hasicon']) {
                $notifdata['aiconurl'] = $this->image_url($notification['aicon'], 'block_advnotifications')->out(false);
            }

            $context['notifications'][] = $notifdata;
        }

        return $this->render_from_template('block_advnotifications/notification', $context);
    }

    /**
     * Renders the add/edit notification form via the add_notification Mustache template.
     *
     * @param  array  $params Passes information such as whether notification is new or the block's instance id.
     * @return string HTML output.
     * @throws coding_exception
     */
    public function add_notification($params) {
        global $CFG;

        // Build time-display options (0 = forever, 1-10 = limited views).
        $timeoptions = [];
        for ($i = 0; $i <= 10; $i++) {
            $timeoptions[] = ['value' => $i, 'label' => $i];
        }

        // Determine global/local display mode.
        $showglobaltoggle = array_key_exists('blockid', $params)
            && array_key_exists('global', $params)
            && $params['global'] === true;

        $forcedglobal = !$showglobaltoggle
            && array_key_exists('global', $params)
            && $params['global'] === true;

        $forcedlocal = !$showglobaltoggle && !$forcedglobal;

        $context = [
            'form_action'        => $CFG->wwwroot . '/blocks/advnotifications/pages/process.php',
            'cancel_url'         => $CFG->wwwroot . '/blocks/advnotifications/pages/notifications.php',
            'sesskey'            => sesskey(),
            'blockid'            => array_key_exists('blockid', $params) ? (int)$params['blockid'] : -1,
            'show_global_toggle' => $showglobaltoggle,
            'forced_global'      => $forcedglobal,
            'forced_local'       => $forcedlocal,
            'timeoptions'        => $timeoptions,
        ];

        return $this->render_from_template('block_advnotifications/add_notification', $context);
    }
}
