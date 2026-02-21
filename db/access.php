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
 * Manage user capabilities specific to Advanced Notifications plugin.
 *
 * @package    block_advnotifications
 * @copyright  2016 onwards LearningWorks Ltd {@link https://learningworks.co.nz/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Zander Potgieter <zander.potgieter@learningworks.co.nz>
 */

defined('MOODLE_INTERNAL') || die;

    $capabilities = [
        'block/advnotifications:myaddinstance' => [
            'captype' => 'write',
            'contextlevel' => CONTEXT_SYSTEM,
            'archetypes' => [
                'user' => CAP_ALLOW,
            ],
            'clonepermissionsfrom' => 'moodle/my:manageblocks',
        ],
        'block/advnotifications:addinstance' => [
            'riskbitmask' => RISK_SPAM | RISK_XSS,
            'captype' => 'write',
            'contextlevel' => CONTEXT_BLOCK,
            'archetypes' => [
                'editingteacher' => CAP_ALLOW,
                'manager' => CAP_ALLOW,
            ],
            'clonepermissionsfrom' => 'moodle/site:manageblocks',
        ],
        'block/advnotifications:managenotifications' => [
            'riskbitmask' => RISK_SPAM,
            'captype' => 'write',
            'contextlevel' => CONTEXT_SYSTEM,
            'archetypes' => [
                'frontpage' => CAP_PREVENT,
                'guest' => CAP_PREVENT,
                'user' => CAP_PREVENT,
                'student' => CAP_PREVENT,
                'teacher' => CAP_PREVENT,
                'editingteacher' => CAP_PREVENT,
                'coursecreator' => CAP_PREVENT,
                'manager' => CAP_ALLOW,
            ],
        ],
        'block/advnotifications:manageownnotifications' => [
            'riskbitmask' => RISK_SPAM,
            'captype' => 'write',
            'contextlevel' => CONTEXT_BLOCK,
            'archetypes' => [
                'frontpage' => CAP_PREVENT,
                'guest' => CAP_PREVENT,
                'user' => CAP_PREVENT,
                'student' => CAP_PREVENT,
                'teacher' => CAP_PREVENT,
                'editingteacher' => CAP_ALLOW,
                'coursecreator' => CAP_PREVENT,
                'manager' => CAP_ALLOW,
            ],
        ],
    ];
