<?php

$page = UNL_Templates::factory('Fixed');
$page->doctitle = '<title>UNL | Media Hub | Manager</title>';
$page->titlegraphic = '<h1>UNL MediaHub Manager</h1>';

$page->leftRandomPromo = '';

$page->navlinks = '
<ul>
    <li><a href="'.UNL_MediaYak_Manager::getURL().'">My Channels</a></li>
</ul>';

$page->maincontentarea = UNL_MediaYak_OutputController::display($this->output, true);

echo $page;