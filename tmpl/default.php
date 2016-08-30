<?php
 /**
 * @package jlvkcommunity_messages
 * @author Kunicin Vadim (vadim@joomline.ru)
 * @version 1.0.0
 * @copyright (C) 2016 by JoomLine (http://www.joomline.net)
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
 *
*/

$doc = JFactory::getDocument();
$doc->addScript("//vk.com/js/api/openapi.js?127");
if ($link==0){
	$linknone = '<div style="text-align: right;"><a href="http://afisha-msk.ru/" target="_blank" style="text-decoration:none; color: #c0c0c0; font-family: arial,helvetica,sans-serif; font-size: 5pt; ">afisha-msk.ru</a></div>';
	}
else {}

if ($mode==0){
	$modeon = 'shown: "1"';
	}
else {}
?>

<div id="jlvk_community_messages<?php echo $group_id;?>">
<?php echo $linknone;?>
</div>
<script type="text/javascript">
VK.Widgets.CommunityMessages("jlvk_community_messages<?php echo $group_id;?>", <?php echo $group_id;?>, {<?php echo $modeon;?>});
</script>

