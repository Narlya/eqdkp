#
# MySQL EQdkp Structure
#
# $Id$
#
# --------------------------------------------------------
### Configuration

DROP TABLE IF EXISTS eqdkp_config;
CREATE TABLE `eqdkp_config` (
  `config_name` varchar(255) PRIMARY KEY NOT NULL,
  `config_value` varchar(255)
)TYPE=InnoDB;

# --------------------------------------------------------
### Users and Permissions

DROP TABLE IF EXISTS eqdkp_users;
CREATE TABLE `eqdkp_users` (
  `user_id` smallint(5) unsigned NOT NULL auto_increment,
  `user_name` varchar(30) NOT NULL UNIQUE,
  `user_password` varchar(40) NOT NULL,
  `user_salt` varchar(40) NOT NULL,
  `user_email` varchar(100) default NULL,
  `user_alimit` smallint(4) NOT NULL default '100',
  `user_elimit` smallint(4) NOT NULL default '100',
  `user_ilimit` smallint(4) NOT NULL default '100',
  `user_nlimit` smallint(2) NOT NULL default '10',
  `user_rlimit` smallint(4) NOT NULL default '100',
  `user_style` tinyint(4),
  `user_lang` varchar(255),
  `user_key` varchar(32),
  `user_lastvisit` int(11) NOT NULL default '0',
  `user_lastpage` varchar(100) default '',
  `user_active` enum('0','1') NOT NULL default '1',
  `user_newpassword` varchar(40),
  PRIMARY KEY (`user_id`)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS eqdkp_auth_options;
CREATE TABLE `eqdkp_auth_options` (
  `auth_id` smallint(3) unsigned NOT NULL,
  `auth_value` varchar(25) NOT NULL,
  `auth_default` enum('N','Y') NOT NULL default 'N',
  PRIMARY KEY (auth_id),
  KEY auth_value (`auth_value`)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS eqdkp_auth_users;
CREATE TABLE `eqdkp_auth_users` (
  `user_id` smallint(5) unsigned NOT NULL,
  `auth_id` smallint(3) unsigned NOT NULL,
  `auth_setting` ENUM('N','Y') NOT NULL default 'N',
  UNIQUE KEY `user_auth` (`user_id`,`auth_id`)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS eqdkp_sessions;
CREATE TABLE `eqdkp_sessions` (
  `session_id` varchar(32) NOT NULL,
  `user_id` smallint(5) NOT NULL default '-1',
  `session_start` int(11) NOT NULL,
  `session_current` int(11) NOT NULL,
  `session_page` varchar(100) NOT NULL default '0',
  `session_ip` varchar(15) NOT NULL,
  PRIMARY KEY (`session_id`)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS eqdkp_member_user;
CREATE TABLE eqdkp_member_user (
  `member_id` smallint(5) unsigned NOT NULL,
  `user_id` smallint(5) unsigned NOT NULL,
  KEY `member_id` (`member_id`),
  KEY `user_id` (`user_id`)
)ENGINE=InnoDB;

# --------------------------------------------------------
### Basic DKP tables

DROP TABLE IF EXISTS eqdkp_adjustments;
CREATE TABLE `eqdkp_adjustments` (
  `adjustment_id` mediumint(8) unsigned NOT NULL auto_increment,
  `adjustment_value` double(11,2) NOT NULL default '0.00',
  `adjustment_date` int(11) NOT NULL default '0',
  `member_name` varchar(30) default NULL,
  `adjustment_reason` varchar(255) default NULL,
  `adjustment_added_by` varchar(30) NOT NULL,
  `adjustment_updated_by` varchar(30),
  `adjustment_group_key` varchar(32),
  PRIMARY KEY  (`adjustment_id`)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS eqdkp_events;
CREATE TABLE `eqdkp_events` (
  `event_id` smallint(5) unsigned NOT NULL auto_increment,
  `event_name` varchar(255) default NULL,
  `event_value` double(11,2) NOT NULL default '0.00',
  `event_added_by` varchar(30) NOT NULL,
  `event_updated_by` varchar(30),
  PRIMARY KEY (`event_id`)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS eqdkp_items;
CREATE TABLE `eqdkp_items` (
  `item_id` mediumint(8) unsigned NOT NULL auto_increment,
  `item_name` varchar(255) default NULL,
  `item_buyer` varchar(50) default NULL,
  `raid_id` int(10) unsigned NOT NULL default '0',
  `item_value` double(11,2) NOT NULL default '0.00',
  `item_date` int(11) NOT NULL default '0',
  `item_added_by` varchar(30) NOT NULL,
  `item_updated_by` varchar(30),
  `item_group_key` varchar(32),
  PRIMARY KEY  (`item_id`)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS eqdkp_members;
CREATE TABLE `eqdkp_members` (
  `member_id` smallint(5) unsigned NOT NULL auto_increment,
  `member_name` varchar(30) NOT NULL UNIQUE,
  `member_earned` double(11,2) NOT NULL default '0.00',
  `member_spent` double(11,2) NOT NULL default '0.00',
  `member_adjustment` double(11,2) NOT NULL default '0.00',
  `member_status` ENUM('0','1') NOT NULL default '1',
  `member_firstraid` int(11) NOT NULL default '0',
  `member_lastraid` int(11) NOT NULL default '0',
  `member_raidcount` int(11) NOT NULL default '0',
  `member_level` tinyint(2),
  `member_race_id` smallint(3) unsigned NOT NULL default '0',
  `member_class_id` smallint(3) unsigned NOT NULL default '0',
  `member_rank_id` smallint(3) NOT NULL default '0',
  PRIMARY KEY  (`member_id`)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS eqdkp_member_ranks;
CREATE TABLE `eqdkp_member_ranks` (
  `rank_id` smallint(5) unsigned NOT NULL UNIQUE,
  `rank_name` varchar(50) NOT NULL,
  `rank_hide` enum('0','1') NOT NULL DEFAULT '0',
  `rank_prefix` varchar(75) NOT NULL default '',
  `rank_suffix` varchar(75) NOT NULL default ''
)ENGINE=InnoDB;

DROP TABLE IF EXISTS eqdkp_news;
CREATE TABLE `eqdkp_news` (
  `news_id` smallint(5) unsigned NOT NULL auto_increment,
  `news_headline` varchar(255) NOT NULL,
  `news_message` text NOT NULL,
  `news_date` int(11) NOT NULL,
  `user_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`news_id`),
  KEY `user_id` (`user_id`)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS eqdkp_raids;
CREATE TABLE `eqdkp_raids` (
  `raid_id` mediumint(8) unsigned NOT NULL auto_increment,
  `raid_name` varchar(255) default NULL,
  `raid_date` int(11) NOT NULL default '0',
  `raid_note` varchar(255) default NULL,
  `raid_value` double(11,2) NOT NULL default '0.00',
  `raid_added_by` varchar(30) NOT NULL,
  `raid_updated_by` varchar(30),
  PRIMARY KEY  (`raid_id`)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS eqdkp_raid_attendees;
CREATE TABLE `eqdkp_raid_attendees` (
  `raid_id` mediumint(8) unsigned NOT NULL,
  `member_name` varchar(30) NOT NULL,
  UNIQUE KEY `raid_member` (`raid_id`,`member_name`)
)ENGINE=InnoDB;

# --------------------------------------------------------
### Logging

DROP TABLE IF EXISTS eqdkp_logs;
CREATE TABLE `eqdkp_logs` (
  `log_id` int(11) unsigned NOT NULL auto_increment,
  `log_date` int(11) NOT NULL default '0',
  `log_type` varchar(255) NOT NULL default '',
  `log_action` text NOT NULL,
  `log_ipaddress` varchar(15) NOT NULL default '',
  `log_sid` varchar(32) NOT NULL default '',
  `log_result` varchar(255) NOT NULL default '',
  `admin_id` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`log_id`),
  KEY `admin_id` (`admin_id`),
  KEY `log_type` (`log_type`),
  KEY `log_ipaddress` (`log_ipaddress`)
)ENGINE=InnoDB;

# --------------------------------------------------------
### Styles

DROP TABLE IF EXISTS eqdkp_styles;
CREATE TABLE `eqdkp_styles` (
  `style_id` smallint(5) unsigned NOT NULL auto_increment,
  `style_name` varchar(100) NOT NULL default '',
  `template_path` varchar(30) NOT NULL default 'default',
  `body_background` varchar(6) default NULL,
  `body_link` varchar(6) default NULL,
  `body_link_style` varchar(30) default NULL,
  `body_hlink` varchar(6) default NULL,
  `body_hlink_style` varchar(30) default NULL,
  `header_link` varchar(6) default NULL,
  `header_link_style` varchar(30) default NULL,
  `header_hlink` varchar(6) default NULL,
  `header_hlink_style` varchar(30) default NULL,
  `tr_color1` varchar(6) default NULL,
  `tr_color2` varchar(6) default NULL,
  `th_color1` varchar(6) default NULL,
  `fontface1` varchar(60) default NULL,
  `fontface2` varchar(60) default NULL,
  `fontface3` varchar(60) default NULL,
  `fontsize1` tinyint(4) default NULL,
  `fontsize2` tinyint(4) default NULL,
  `fontsize3` tinyint(4) default NULL,
  `fontcolor1` varchar(6) default NULL,
  `fontcolor2` varchar(6) default NULL,
  `fontcolor3` varchar(6) default NULL,
  `fontcolor_neg` varchar(6) default NULL,
  `fontcolor_pos` varchar(6) default NULL,
  `table_border_width` tinyint(3) default NULL,
  `table_border_color` varchar(6) default NULL,
  `table_border_style` varchar(30) default NULL,
  `input_color` varchar(6) default NULL,
  `input_border_width` tinyint(3) default NULL,
  `input_border_color` varchar(6) default NULL,
  `input_border_style` varchar(30) default NULL,
  PRIMARY KEY  (`style_id`)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS eqdkp_style_config;
CREATE TABLE `eqdkp_style_config` (
  `style_id` smallint(5) unsigned NOT NULL,
  `attendees_columns` ENUM('1','2','3','4','5','6','7','8','9','10') NOT NULL default '6',
  `date_notime_long` varchar(10) NOT NULL default 'F j, Y',
  `date_notime_short` varchar(10) NOT NULL default 'm/d/y',
  `date_time` varchar(20) NOT NULL default 'm/d/y h:ia T',
  `logo_path` varchar(255) NOT NULL default 'logo.gif',
  PRIMARY KEY (`style_id`)
)ENGINE=InnoDB;

# --------------------------------------------------------
### Plugins

DROP TABLE IF EXISTS eqdkp_plugins;
CREATE TABLE `eqdkp_plugins` (
  `plugin_id` smallint(2) unsigned NOT NULL auto_increment,
  `plugin_name` varchar(50) NOT NULL,
  `plugin_code` varchar(20) NOT NULL,
  `plugin_installed` ENUM('0','1') NOT NULL default '0',
  `plugin_path` varchar(255) NOT NULL,
  `plugin_contact` varchar(100),
  `plugin_version` varchar(7) NOT NULL,
  PRIMARY KEY (`plugin_id`),
  KEY `plugin_code` (`plugin_code`)
)ENGINE=InnoDB;

# --------------------------------------------------------
### Games

DROP TABLE IF EXISTS eqdkp_class_armor;
DROP TABLE IF EXISTS eqdkp_armor_types;
DROP TABLE IF EXISTS eqdkp_classes;
DROP TABLE IF EXISTS eqdkp_races;
DROP TABLE IF EXISTS eqdkp_factions;

CREATE TABLE `eqdkp_factions` (
  `faction_id` smallint(3) unsigned NOT NULL UNIQUE,
  `faction_name` varchar(50) NOT NULL,
  `faction_key` varchar(30) NOT NULL,
  `faction_hide` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`faction_id`)
)ENGINE=InnoDB;

CREATE TABLE `eqdkp_races` (
  `race_id` smallint(3) unsigned NOT NULL UNIQUE,
  `race_name` varchar(50) NOT NULL,
  `race_key` varchar(30) NOT NULL,
  `race_faction_id` smallint(3) NOT NULL DEFAULT '0',
  `race_hide` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`race_id`)
)ENGINE=InnoDB;

CREATE TABLE `eqdkp_classes` (
  `class_id` smallint(3) unsigned NOT NULL UNIQUE,
  `class_name` varchar(50) NOT NULL,
  `class_key` varchar(30) NOT NULL,
  `class_hide` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`class_id`)
)ENGINE=InnoDB;

CREATE TABLE `eqdkp_armor_types` (
  `armor_type_id` smallint(3) unsigned NOT NULL UNIQUE,
  `armor_type_name` varchar(50) NOT NULL,
  `armor_type_key` varchar(30) NOT NULL,
  PRIMARY KEY (`armor_type_id`)
)ENGINE=InnoDB;

CREATE TABLE `eqdkp_class_armor` (
  `class_id` smallint(3) unsigned NOT NULL,
  `armor_type_id` smallint(3) unsigned NOT NULL,
  `armor_min_level` smallint(3) NOT NULL DEFAULT '0',
  `armor_max_level` smallint(3),
  PRIMARY KEY (`class_id`, `armor_type_id`),
  INDEX classes (`class_id`),
  INDEX armor_types (`armor_type_id`)
)ENGINE=InnoDB;

# --------------------------------------------------------
### Game Foreign-key constraints

#ALTER TABLE `eqdkp_class_armor`
#  ADD CONSTRAINT `eqdkp_game_classes_fk` FOREIGN KEY (`class_id`) REFERENCES `eqdkp_classes` (`class_id`) 
#    ON DELETE RESTRICT
#    ON UPDATE CASCADE;

#ALTER TABLE `eqdkp_class_armor`
#  ADD CONSTRAINT `eqdkp_game_armor_types_fk` FOREIGN KEY (`armor_type_id`) REFERENCES `eqdkp_armor_types` (`armor_type_id`)
#    ON DELETE RESTRICT
#    ON UPDATE CASCADE;
