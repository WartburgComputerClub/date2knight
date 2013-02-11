<h2>Matches</h2><?php
if (!$paid)
{
    ?><p>To see your matches, please donate $2 to a <?php echo(Settings::$organization);?> representative. <br />Email brett.peterson@wartburg.edu for more info.</p>
<h3>Representatives</h3>
<ul>
<li>brett.peterson@wartburg.edu</li>
<li>jonathan.juett@wartburg.edu</li>
<li>adam.kucera@petersonb.com</li>
<li>matthew.dickman@wartburg.edu</li>
</ul>
<h3>Faculty Advisor</h3>
<ul>
<li>Dr. Zelle (Science Center 353)</li>
</ul>
<?php
}
elseif ($paid)
{
    require_once("reportlib.php");

    $dates = getTopDates($_SESSION['id']);    
    $source = $_SESSION['id'];
    if ($dates != '') {
	foreach ($dates as $id => $score)
	    showMiniProfile($id,$source, $score);
    }
}
?><br class="reset-float">
