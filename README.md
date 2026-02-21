[![Build Status](https://github.com/learningworks/moodle-block_advnotifications/actions/workflows/moodle-plugin-ci.yml/badge.svg?branch=master)](https://github.com/learningworks/moodle-block_advnotifications/actions)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](README.md)
[![Moodle Plugin CI](https://img.shields.io/badge/Moodle-4.4--5.0-blue)](https://moodle.org/plugins/block_advnotifications)
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

## Easily create, manage and display notifications/alerts to users

[![Functionality](docs/AdvNotifications.gif)](docs/AdvNotifications.gif)

This block allows users to display DEFCON-like alerts, which are Bootstrap-based, allowing for various configurations.
This could be useful in cases such as alerting users of scheduled outages, welcoming them to your site, teachers can use it to notify users of changes/due dates, etc.


### Requirements

* Moodle 4.4.2 or higher
* Supported Moodle branches: 4.4 – 5.0


### Features

* Customisable title & message
* Basic HTML tags allowed for advanced users
* Multi-lingual/filter support
* Multiple types of notifications (Bootstrap-based styles): Info, Success, Warning, Danger, Announcement
* Type-based icons (optional setting)
* Dismissible/Non-Dismissible
* Customisable date range to show notifications
* Display a notification to the user a set amount of times
* Instance-based or global/site-wide notifications
* Users (e.g. teachers) can create and manage their own instance-based notifications - **disabled by default**
* Enable/Disable a/all notifications (site-wide and instance-based)
* Edit/Delete/Restore notifications
* Option to auto-delete notification after end date
* Option to permanently delete notifications that have had the deleted flag for more than 30 days
* Option to automatically remove user (dismissed/seen) records that relate to notifications that no longer exist
* Audit trail via Moodle event logging (creation, updates, deletions)
* Automated daily maintenance task (auto-cleanup & auto-deletion)
* AJAX used to improve user-experience and simplify processes
* Live-preview when adding/editing a notification
* Easy to use, but fully documented with all the nitty-gritty information
* Implements Privacy API (GDPR Compliance)


#### Notification Anatomy

[![Alert Types](docs/AlertTypes.png)](docs/AlertTypes.png)


#### Installation Notice

All the plugin's settings are disabled by default. Enable it upon installation if you wish to start using it immediately or enable it later by navigating to **Site Administration > Plugins > Blocks > Advanced Notifications**.


#### Permissions / Capabilities

| Capability | Default Role | Description |
|---|---|---|
| `block/advnotifications:addinstance` | Manager, Editing Teacher | Add the block to a course or page |
| `block/advnotifications:myaddinstance` | All users | Add the block to the My Dashboard page |
| `block/advnotifications:managenotifications` | Manager | Full global notification management |
| `block/advnotifications:manageownnotifications` | Editing Teacher | Manage own instance-based notifications |


#### Admin Settings

Navigate to **Site Administration > Plugins > Blocks > Advanced Notifications** to configure:

* Enable/disable the plugin
* Allow HTML in notification titles and messages
* Enable multilang filter support
* Choose date display format (6 formats available)
* Auto-delete notifications after their end date
* Permanently delete notifications flagged as deleted for more than 30 days
* Auto-remove user seen/dismissed records for deleted notifications


#### Backwards Compatibility/Progressive Enhancement

Although the plugin works and is usable without JavaScript, it is highly recommended to use the plugin with JavaScript enabled.
Using the plugin with JavaScript disabled does not allow for some features to be used to their full potential — ranging from dismissing a notification to dynamically editing existing notifications and the live-preview feature — all of which rely on JavaScript to make the user's experience more enjoyable.


#### Pull Requests

Pull requests are welcome — submit pull requests to address issues, add features, fix typos, anything!

For full documentation, please check [here](docs/AdvancedNotifications.pdf) or the plugin's `/docs` directory.


#### TODO

* Add time (hh:mm) to 'From/To' setting.
