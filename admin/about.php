<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

use Xmf\Module\Admin;

/**
 * @copyright       2017 XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @author          Richard Griffith <richard@geekwright.com>
 */

require dirname(__FILE__) . '/admin_header.php';

$moduleAdmin = Admin::getInstance();
$moduleAdmin->displayNavigation('about.php');
Admin::setPaypal('$upress'); //'xoopsfoundation@gmail.com');
$moduleAdmin->displayAbout(false);

require dirname(__FILE__) . '/admin_footer.php';
