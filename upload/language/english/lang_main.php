<?php
/**
 * Project:     EQdkp - Open Source Points System
 * License:     http://eqdkp.com/?p=license
 * -----------------------------------------------------------------------
 * File:        lang_main.php
 * Began:       Wed Dec 18 2002
 * Date:        $Date: 2007-10-15 01:48:40 +1000 (D, d m Y) $
 * -----------------------------------------------------------------------
 * @author      $Author: dazza $
 * @copyright   2002-2007 The EQdkp Project Team
 * @link        http://eqdkp.com/
 * @package     eqdkp
 * @version     $Rev: 47 $
 */

if ( !defined('EQDKP_INC') )
{
    header('HTTP/1.0 404 Not Found');
    exit;
}

// Initialize the language array if it isn't already
if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

// %1\$<type> prevents a possible error in strings caused
// by another language re-ordering the variables
// $s is a string, $d is an integer, $f is a float

$lang = array_merge($lang, array(
    'ENCODING'    => 'iso-8859-1',
    'XML_LANG'    => 'en',
    
    // Titles
    'admin_title_prefix'  => "%1\$s %2\$s Admin",
    'listadj_title'       => 'Group Adjustment Listing',
    'listevents_title'    => 'Event Values',
    'listiadj_title'      => 'Individual Adjustment Listing',
    'listitems_title'     => 'Item Values',
    'listnews_title'      => 'News Entries',
    'listmembers_title'   => 'Member Standings',
    'listpurchased_title' => 'Item History',
    'listraids_title'     => 'Raids Listing',
    'login_title'         => 'Login',
    'message_title'       => 'EQdkp: Message',
    'register_title'      => 'Register',
    'settings_title'      => 'Account Settings',
    'stats_title'         => "%1\$s Stats",
    'summary_title'       => 'News Summary',
    'title_prefix'        => "%1\$s %2\$s",
    'viewevent_title'     => "Viewing Recorded Raid History for %1\$s",
    'viewitem_title'      => "Viewing Purchase History for %1\$s",
    'viewmember_title'    => "History for %1\$s",
    'viewraid_title'      => 'Raid Summary',
    
    // Main Menu
    'menu_admin_panel' => 'Administration Panel',
    'menu_events'      => 'Events',
    'menu_itemhist'    => 'Item History',
    'menu_itemval'     => 'Item Values',
    'menu_news'        => 'News',
    'menu_raids'       => 'Raids',
    'menu_register'    => 'Register',
    'menu_settings'    => 'Settings',
    'menu_standings'   => 'Standings',
    'menu_stats'       => 'Stats',
    'menu_summary'     => 'Summary',
    
    // Column Headers
    'account'                       => 'Account',
    'action'                        => 'Action',
    'active'                        => 'Active',
    'add'                           => 'Add',
    'added_by'                      => 'Added By',
    'adjustment'                    => 'Adjustment',
    'administration'                => 'Administration',
    'administrative_options'        => 'Administrative Options',
    'admin_index'                   => 'Admin Index',
    'armor'                         => 'Armor',
    'attendance_by_event'           => 'Attendance by Event',
    'attended'                      => 'Attended',
    'attendees'                     => 'Attendees',
    'average'                       => 'Average',
    'buyer'                         => 'Buyer',
    'buyers'                        => 'Buyers',
    'class'                         => 'Class',
    'class_distribution'            => 'Class Distribution',
    'class_summary'                 => "Class Summary: %1\$s to %2\$s",
    'configuration'                 => 'Configuration',
    'current'                       => 'Current',
    'date'                          => 'Date',
    'delete'                        => 'Delete',
    'delete_confirmation'           => 'Delete Confirmation',
    'dkp_value'                     => "%1\$s Value",
    'drops'                         => 'Drops',
    'earned'                        => 'Earned',
    'enter_dates'                   => 'Enter Dates',
    'eqdkp_index'                   => 'EQdkp Index',
    'eqdkp_upgrade'                 => 'EQdkp Upgrade',
    'event'                         => 'Event',
    'events'                        => 'Events',
    'filter'                        => 'Filter',
    'first'                         => 'First',
    'general_admin'                 => 'General Admin',
    'get_new_password'              => 'Get a New Password',
    'group_adj'                     => 'Group Adj.',
    'group_adjustments'             => 'Group Adjustments',
    'individual_adjustments'        => 'Individual Adjustments',
    'individual_adjustment_history' => 'Individual Adjustment History',
    'indiv_adj'                     => 'Indiv. Adj.',
    'ip_address'                    => 'IP Address',
    'item'                          => 'Item',
    'items'                         => 'Items',
    'item_purchase_history'         => 'Item Purchase History',
    'last'                          => 'Last',
    'lastloot'                      => 'Last Loot',
    'lastraid'                      => 'Last Raid',
    'last_visit'                    => 'Last Visit',
    'level'                         => 'Level',
    'log_date_time'                 => 'Date/Time of this Log',
    'loot_factor'                   => 'Loot Factor',
    'loots'                         => 'Loots',
    'manage'                        => 'Manage',
    'member'                        => 'Member',
    'members'                       => 'Members',
    'members_present_at'            => "Members Present at %1\$s on %2\$s",
    'miscellaneous'                 => 'Miscellaneous',
    'name'                          => 'Name',
    'news'                          => 'News',
    'note'                          => 'Note',
    'online'                        => 'Online',
    'options'                       => 'Options',
    'paste_log'                     => 'Paste a Log Below',
    'percent'                       => 'Percent',
    'permissions'                   => 'Permissions',
    'per_day'                       => 'Per Day',
    'per_raid'                      => 'Per Raid',
    'pct_earned_lost_to'            => '% Earned Lost to',
    'preferences'                   => 'Preferences',
    'purchase_history_for'          => "Purchase History for %1\$s",
    'quote'                         => 'Quote',
    'race'                          => 'Race',
    'raid'                          => 'Raid',
    'raids'                         => 'Raids',
    'raid_id'                       => 'Raid ID',
    'raid_attendance_history'       => 'Raid Attendance History',
    'raids_lifetime'                => "Lifetime (%1\$s - %2\$s)",
    'raids_x_days'                  => "Last %1\$d Days",
    'rank'                          => 'Rank',
    'rank_distribution'             => 'Rank Distribution',
    'recorded_raid_history'         => "Recorded Raid History for %1\$s",
    'reason'                        => 'Reason',
    'registration_information'      => 'Registration Information',
    'result'                        => 'Result',
    'session_id'                    => 'Session ID',
    'settings'                      => 'Settings',
    'spent'                         => 'Spent',
    'summary_dates'                 => "Raid Summary: %1\$s to %2\$s",
    'themes'                        => 'Themes',
    'time'                          => 'Time',
    'total'                         => 'Total',
    'total_earned'                  => 'Total Earned',
    'total_items'                   => 'Total Items',
    'total_raids'                   => 'Total Raids',
    'total_spent'                   => 'Total Spent',
    'transfer_member_history'       => 'Transfer Member History',
    'turn_ins'                      => 'Turn-ins',
    'type'                          => 'Type',
    'update'                        => 'Update',
    'updated_by'                    => 'Updated By',
    'user'                          => 'User',
    'username'                      => 'Username',
    'value'                         => 'Value',
    'view'                          => 'View',
    'view_action'                   => 'View Action',
    'view_logs'                     => 'View Logs',
    
    // Page Foot Counts
    'listadj_footcount'               => "... found %1\$d adjustment(s) / %2\$d per page",
    'listevents_footcount'            => "... found %1\$d events / %2\$d per page",
    'listiadj_footcount'              => "... found %1\$d individual adjustment(s) / %2\$d per page",
    'listitems_footcount'             => "... found %1\$d unique items / %2\$d per page",
    'listmembers_active_footcount'    => "... found %1\$d active members / %2\$sshow all</a>",
    'listmembers_compare_footcount'   => "... comparing %1\$d members",
    'listmembers_footcount'           => "... found %1\$d members",
    'listnews_footcount'              => "... found %1\$d news entries / %2\$d per page",
    'listpurchased_footcount'         => "... found %1\$d item(s) / %2\$d per page",
    'listraids_footcount'             => "... found %1\$d raid(s) / %2\$d per page",
    'stats_active_footcount'          => "... found %1\$d active member(s) / %2\$sshow all</a>",
    'stats_footcount'                 => "... found %1\$d member(s)",
    'viewevent_footcount'             => "... found %1\$d raid(s)",
    'viewitem_footcount'              => "... found %1\$d item(s)",
    'viewmember_adjustment_footcount' => "... found %1\$d adjustment(s)",
    'viewmember_item_footcount'       => "... found %1\$d purchased item(s) / %2\$d per page",
    'viewmember_raid_footcount'       => "... found %1\$d attended raid(s) / %2\$d per page",
    'viewraid_attendees_footcount'    => "... found %1\$d attendee(s)",
    'viewraid_drops_footcount'        => "... found %1\$d drop(s)",
    
    // Submit Buttons
    'close_window'        => 'Close Window',
    'compare_members'     => 'Compare Members',
    'create_news_summary' => 'Create News Summary',
    'login'               => 'Login',
    'logout'              => 'Logout',
    'log_add_data'        => 'Add Data to Form',
    'lost_password'       => 'Lost Password',
    'no'                  => 'No',
    'proceed'             => 'Proceed',
    'reset'               => 'Reset',
    'set_admin_perms'     => 'Set Administrative Permissions',
    'submit'              => 'Submit',
    'upgrade'             => 'Upgrade',
    'yes'                 => 'Yes',
    
    // Form Element Descriptions
    'admin_login'           => 'Administrator Login',
    'confirm_password'      => 'Confirm Password',
    'confirm_password_note' => 'You only need to confirm your new password if you changed it above',
    'current_password'      => 'Current Password',
    'current_password_note' => 'You must confirm your current password if you wish to change your username or password',
    'email'                 => 'Email',
    'email_address'         => 'Email Address',
    'ending_date'           => 'Ending Date',
    'from'                  => 'From',
    'guild_tag'             => 'Guild Tag',
    'language'              => 'Language',
    'new_password'          => 'New Password',
    'new_password_note'     => 'You only need to supply a new password if you want to change it',
    'password'              => 'Password',
    'remember_password'     => 'Remember me (cookie)',
    'starting_date'         => 'Starting Date',
    'style'                 => 'Style',
    'to'                    => 'To',
    'username'              => 'Username',
    'users'                 => 'Users',
    
    // Pagination
    'next_page'     => 'Next Page',
    'page'          => 'Page',
    'previous_page' => 'Previous Page',
    
    // Permission Messages
    'noauth_default_title' => 'Permission Denied',
    'noauth_u_event_list'  => 'You do not have permission to list events.',
    'noauth_u_event_view'  => 'You do not have permission to view events.',
    'noauth_u_item_list'   => 'You do not have permission to list items.',
    'noauth_u_item_view'   => 'You do not have permission to view items.',
    'noauth_u_member_list' => 'You do not have permission to view member standings.',
    'noauth_u_member_view' => 'You do not have permission to view member history.',
    'noauth_u_raid_list'   => 'You do not have permission to list raids.',
    'noauth_u_raid_view'   => 'You do not have permission to view raids.',
    
    // Submission Success Messages
    'add_itemvote_success'    => 'Your vote on the item has been recorded.',
    'update_itemvote_success' => 'Your vote on the item has been updated.',
    'update_settings_success' => 'The user settings have been updated.',
    
    // Form Validation Errors
    'fv_alpha_attendees'             => 'Characters\' names in EverQuest contain only alphabetic characters.',
    'fv_already_registered_email'    => 'That e-mail address is already registered.',
    'fv_already_registered_username' => 'That username is already registered.',
    'fv_difference_transfer'         => 'A history transfer must be made between two different people.',
    'fv_difference_turnin'           => 'A turn-in must be made between two different people.',
    'fv_invalid_email'               => 'The e-mail address does not appear to be valid.',
    'fv_match_password'              => 'The password fields must match.',
    'fv_member_associated'           => "%1\$s is already associated with another user account.",
    'fv_number'                      => 'Must be a number.',
    'fv_number_adjustment'           => 'The adjustment value field must be a number.',
    'fv_number_alimit'               => 'The adjustments limit field must be a number.',
    'fv_number_ilimit'               => 'The items limit field must be a number.',
    'fv_number_inactivepd'           => 'The inactive period must be a number.',
    'fv_number_pilimit'              => 'The purchased items limit must be a number.',
    'fv_number_rlimit'               => 'The raids limit must be a number.',
    'fv_number_value'                => 'The value field must be a number.',
    'fv_number_vote'                 => 'The vote field must be a number.',
    'fv_range_day'                   => 'The day field must be an integer between 1 and 31.',
    'fv_range_hour'                  => 'The hour field must be an integer between 0 and 23.',
    'fv_range_minute'                => 'The minute field must be an integer between 0 and 59.',
    'fv_range_month'                 => 'The month field must be an integer between 1 and 12.',
    'fv_range_second'                => 'The second field must be an integer between 0 and 59.',
    'fv_range_year'                  => 'The year field must be an integer with a value of at least 1998.',
    'fv_required'                    => 'Required Field',
    'fv_required_acro'               => 'The guild acronym field is required.',
    'fv_required_adjustment'         => 'The adjustment value field is required.',
    'fv_required_attendees'          => 'There must be at least one attendee on this raid.',
    'fv_required_buyer'              => 'A buyer must be selected.',
    'fv_required_buyers'             => 'At least one buyer must be selected.',
    'fv_required_email'              => 'The e-mail address field is required.',
    'fv_required_event_name'         => 'An event must be selected.',
    'fv_required_guildtag'           => 'The guildtag field is required.',
    'fv_required_headline'           => 'The headline field is required.',
    'fv_required_inactivepd'         => 'If the hide inactive members field is set to Yes, a value for the inactive period must also be set.',
    'fv_required_item_name'          => 'The item name field must be filled out or an existing item must be selected.',
    'fv_required_member'             => 'A member must be selected.',
    'fv_required_members'            => 'At least one member must be selected.',
    'fv_required_message'            => 'The message field is required.',
    'fv_required_name'               => 'The name field is required.',
    'fv_required_password'           => 'The password field is required.',
    'fv_required_raidid'             => 'A raid must be selected.',
    'fv_required_user'               => 'The username field is required.',
    'fv_required_value'              => 'The value field is required.',
    'fv_required_vote'               => 'The vote field is required.',
    
    // Miscellaneous
    'added'                               => 'Added',
    'additem_raidid_note'                 => "Only raids less than two weeks old are shown / %1\$sshow all</a>",
    'additem_raidid_showall_note'         => 'Showing all raids',
    'addraid_datetime_note'               => 'If you parse a log, the date and time will be found automatically.',
    'addraid_value_note'                  => 'for a one-time bonus, preset value for the event selected is used if left blank',
    'add_items_from_raid'                 => 'Add Items from this Raid',
    'deleted'                             => 'Deleted',
    'done'                                => 'Done',
    'enter_new'                           => 'Enter New',
    'error'                               => 'Error',
    'head_admin'                          => 'Head Admin',
    'hold_ctrl_note'                      => 'Hold CTRL to select multiple',
    'list'                                => 'List',
    'list_groupadj'                       => 'List Group Adjustments',
    'list_events'                         => 'List Events',
    'list_indivadj'                       => 'List Individual Adjustments',
    'list_items'                          => 'List Items',
    'list_members'                        => 'List Members',
    'list_news'                           => 'List News',
    'list_raids'                          => 'List Raids',
    'may_be_negative_note'                => 'may be negative',
    'not_available'                       => 'Not Available',
    'no_news'                             => 'No news entries found.',
    'of_raids'                            => "%1\$d%% of raids",
    'or'                                  => 'Or',
    'powered_by'                          => 'Powered by',
    'preview'                             => 'Preview',
    'required_field_note'                 => 'Items marked with a * are required fields.',
    'select_1ofx_members'                 => "Select 1 of %1\$d members...",
    'select_existing'                     => 'Select Existing',
    'select_version'                      => 'Select the EQdkp version that you are upgrading from',
    'success'                             => 'Success',
    's_admin_note'                        => 'These fields cannot be modified by the users.',
    'transfer_member_history_description' => 'This transfers all of a member\'s history (raids, items, adjustments) to another member.',
    'updated'                             => 'Updated',
    'upgrade_complete'                    => 'Your EQdkp installation has been successfully upgraded.<br /><br />',
    
    // Settings
    'account_settings'     => 'Account Settings',
    'adjustments_per_page' => 'Adjustments per Page',
    'basic'                => 'Basic',
    'events_per_page'      => 'Events per Page',
    'items_per_page'       => 'Items per Page',
    'news_per_page'        => 'News Entries per Page',
    'raids_per_page'       => 'Raids per Page',
    'associated_members'   => 'Associated Members',
    'guild_members'        => 'Guild Member(s)',
    'default_locale'       => 'Default Locale',
    
    // Error messages
    'error_account_inactive'       => 'Your account is inactive.',
    'error_already_activated'      => 'That account has already been activated.',
    'error_invalid_email'          => 'A valid e-mail address was not provided.',
    'error_invalid_event_provided' => 'A valid event id was not provided.',
    'error_invalid_item_provided'  => 'A valid item id was not provided.',
    'error_invalid_key'            => 'You have provided an invalid activation key.',
    'error_invalid_name_provided'  => 'A valid member name was not provided.',
    'error_invalid_news_provided'  => 'A valid news id was not provided.',
    'error_invalid_raid_provided'  => 'A valid raid id was not provided.',
    'error_user_not_found'         => 'A valid username was not provided',
    'incorrect_password'           => 'Incorrect password',
    'invalid_login'                => 'You have provided an incorrect or invalid username or password',
    'not_admin'                    => 'You are not an administrator',
    
    // Registration
    'account_activated_admin'   => 'The account has been activated. An e-mail has been sent to the user informing them of this change.',
    'account_activated_user'    => "Your account has been activated and you can now %1\$slog in%2\$s.",
    'password_sent'             => 'Your new account password has been e-mailed to you.',
    'register_activation_self'  => "Your account has been created, but before you can use it you need to activate it.<br /><br />An e-mail has been sent to %1\$s with information on how to activate your account.",
    'register_activation_admin' => "Your account has been created, but before you can use it an administrator needs to activate it.<br /><br />An e-mail has been sent to %1\$s with more information.",
    'register_activation_none'  => "Your account has been created and you can now %1\$slog in%2\$s.<br /><br />An e-mail has been sent to %3\$s with more information.",
    
    // Upgrade
    'upgrade_complete'    => "You are already running EQdkp <b>%s</b>, no upgrade is necessary. <b>Delete the /install/ folder before continuing.</b>",
    'upgrade_continue'    => "Continue",
    'upgrade_continuing'  => "Continuing in %d seconds...",
    'upgrade_instruction' => "You are currently running EQdkp <b>%1\$s</b>. Click 'Upgrade' below to upgrade to <b>%2\$s</b>.",
    'upgrade_selversion'  => "Please select the EQdkp version from which you are upgrading",
    'upgrade_started'     => "Upgrading from <b>%s</b>...",
    'upgrade_progress'    => "Completed upgrade to <b>%s</b>.",
    'upgrade_delete'      => "Please delete the following file before continuing:",
));