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
 * Block version details
 *
 * @package    block_advnotifications
 * @copyright  2016 onwards LearningWorks Ltd {@link https://learningworks.co.nz/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Zander Potgieter <zander.potgieter@learningworks.co.nz>
 */

defined('MOODLE_INTERNAL') || die;

$plugin->component = 'block_advnotifications';          // Recommended since 2.0.2 (MDL-26035). Required since 3.0 (MDL-48494).
$plugin->version = 2026022000;                          // YYYYMMDDXX format.
$plugin->requires = 2024042200;                         // Moodle 4.4.2 minimum.
$plugin->supported = [404, 500];                        // Supported Moodle branches: 4.4 to 5.0.
$plugin->incompatible = null;
$plugin->maturity = MATURITY_STABLE;                    // Code maturity/stability.
$plugin->release = 'v2.0.0';                            // Human-readable release version.
