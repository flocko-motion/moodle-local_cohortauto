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
 * Language strings for auto-cohort plugin.
 * @package    local_cohortauto
 * @copyright  2019 Catalyst IT
 * @author     David Thompson <david.thompson@catalyst.net.nz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Auto-Cohort Plugin';
$string['plugindescription'] = 'Dieses Plugin erlaubt es, Nutzer nach gewissen Kriterien automatisch globalen Gruppen (Kohorten) hinzuzufügen.';

// Admin strings.
$string['label_cohortautotool'] = 'Auto-Cohort Gruppenverwaltung';
$string['label_cohortautoview'] = 'Auto-Cohort Gruppenansicht';

// View strings.
$string['selectcohort'] = 'Wähle globale Gruppe';
$string['username'] = 'Benutzername';
$string['link'] = 'Link';
$string['emptycohort'] = 'Leere Gruppe';
$string['viewcohort'] = 'Gruppenansicht';
$string['userprofile'] = 'Benutzerprofil &gt;&gt;';
$string['total'] = 'Anzahl Benutzer in Gruppe: {$a}';

// Convert strings.
$string['cohortoper_help'] = '<p>Wähle die Gruppen, welche konvertiert werden sollen.</p><p><b>ACHTUNG:</b> <i>Automatisierte Gruppen können <b>NICHT</b> mehr manuell bearbeitet werden!</i></p><p>Datenbank Backup dringend empfohlen!!</p>';
$string['userlink'] = 'Benutzer anzeigen';
$string['heading_cohortname'] = 'Gruppenname';
$string['heading_component'] = 'Verwaltet durch';
$string['heading_count'] = '# Benutzer';
$string['heading_link'] = 'Link';
$string['convert_do'] = 'Konvertiere in automatisierte Gruppe';
$string['convert_restore'] = 'Konvertiere in manuelle Gruppe';
$string['convert_delete'] = 'Gruppe(n) löschen';
$string['error_unknown_action'] = 'Unbekannte Aktion: \'{$a}\'';

// Settings strings.
$string['mainrule_fld'] = 'Regeln (eine Regel pro Zeile)';
$string['profile_help'] = 'Verfügbare Felder';
$string['delim'] = 'Zeilenumbruch';
$string['delim_help'] = 'Verschiedene Betriebssyteme nutzen unterschiedliche Zeichen für den Zeilenumbruch<br />CR+LF wird von Windows und LF von Linux/MacOS verwendet.<br>Wenn das Plugin mit der aktuellen Einstellung nicht funktioniert, versuchen Sie die Alternative.';
$string['secondrule_fld'] = 'Text für leeres Feld';
$string['replace_arr'] = 'Ersetzungen (Eine Regel pro Zeile: old_val|new_val)';
$string['donttouchusers'] = 'Nutzer ignorieren';
$string['donttouchusers_help'] = 'Komma-separierte Benutzernamen';
$string['enableunenrol'] = 'Automatisches abmelden aus Gruppen';

// CLI strings.
$string['cli_migrated_auth_mcae'] = "Migrated any auth_mcae cohorts to local_cohortauto.";
$string['cli_user_sync_complete'] = 'Sync for user \'{$a}\' complete.';
$string['cli_user_sync_notfound'] = 'User \'{$a}\' not found.';
$string['cli_sync_users_begin'] = 'Beginning user cohort sync...';
$string['cli_sync_users_userstart'] = '- User \'{$a}\' ...';
$string['cli_sync_users_userdone'] = 'done.';
$string['cli_sync_users_finished'] = 'Sync for {$a} users finished.';

// Privacy API strings.
$string['privacy:metadata'] = 'Das Auto-Cohort Plugin speichert keine Nutzerdaten.';
