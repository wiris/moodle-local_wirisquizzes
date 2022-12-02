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
 * Version details for WIIRIS Quizzes local plugin.
 * This plugin declares all the dependencies on all Wiris Quizzes question types.
 *
 * @package    local
 * @subpackage wirisquizzes
 * @copyright  WIRIS Europe (Maths for more S.L)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2022120200;
$plugin->requires = 2015111600; // Moodle 3.0.
$plugin->release = '4.6.0';
$plugin->maturity = MATURITY_STABLE;
$plugin->component = 'local_wirisquizzes';
$plugin->dependencies = array(
    'qtype_wq' => 2022120200,
    'qtype_essaywiris' => 2022120200,
    'qtype_matchwiris' => 2022120200,
    'qtype_multianswerwiris' => 2022120200,
    'qtype_multichoicewiris' => 2022120200,
    'qtype_shortanswerwiris' => 2022120200,
    'qtype_truefalsewiris' => 2022120200
);
