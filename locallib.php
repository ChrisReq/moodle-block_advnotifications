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
 * Backward-compatibility shim – logic has moved to
 * \block_advnotifications\local\notification_manager.
 *
 * @package    block_advnotifications
 * @copyright  2016 onwards LearningWorks Ltd {@link https://learningworks.co.nz/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @deprecated since v2.0.0 – use \block_advnotifications\local\notification_manager directly.
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Wrapper kept for backward compatibility. Use notification_manager::prep_notifications() instead.
 *
 * @param  mixed $instanceid Block instance id.
 * @return array
 * @throws dml_exception
 * @deprecated since v2.0.0
 */
function prep_notifications($instanceid) {
    return \block_advnotifications\local\notification_manager::prep_notifications((int)$instanceid);
}

/**
 * Wrapper kept for backward compatibility. Use notification_manager::get_date_formats() instead.
 *
 * @return array
 * @deprecated since v2.0.0
 */
function get_date_formats() {
    return \block_advnotifications\local\notification_manager::get_date_formats();
}
