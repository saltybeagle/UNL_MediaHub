<?php

$page = UNL_Templates::factory('Fixed');
if (isset($GLOBALS['UNLTEMPLATEDEPENDENTSPATH'])) {
    UNL_Templates::$options['templatedependentspath'] = $GLOBALS['UNLTEMPLATEDEPENDENTSPATH'];
}
$page->doctitle = '<title>UNL | Media Hub | Manager</title>';
$page->titlegraphic = '<h1>UNL MediaHub Manager</h1>';
$page->addStyleSheet('/ucomm/templatedependents/templatecss/components/forms.css');
$page->addScript(UNL_MediaYak_Manager::getURL().'templates/scripts/jquery-1.3.1.min.js');
$page->head .= '<script type="text/javascript">
      $(document).ready(function() {

        $("#itunes_header ol").hide();
        $("#mrss_header ol").hide();
        
        $("#itunes_header legend").click(function() {
          $("#itunes_header ol").toggle(400);
          return false;
        });
        $("#mrss_header legend").click(function() {
          $("#mrss_header ol").toggle(400);
          return false;
        });
      });

</script>';
$page->leftRandomPromo = '';

$page->navlinks = '
<ul>
    <li><a href="'.UNL_MediaYak_Manager::getURL().'">My Channels</a></li>
</ul>';

$page->collegenavigationlist = '
<ul>
    <li>'.$this->user->uid.'</li>
    <li>Logout</li>
</ul>';
$page->maincontentarea = UNL_MediaYak_OutputController::display($this->output, true);

echo $page;
