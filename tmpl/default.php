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
$doc->addScript("//vk.com/js/api/openapi.js?136");
?>

<div id="jlvk_community_messages<?php echo $group_id;?>">
<?php echo $linknone;?>
</div>
<script type="text/javascript">
VK.Widgets.CommunityMessages("jlvk_community_messages<?php echo $group_id;?>", <?php echo $group_id;?>, {<?php echo $expandedon;?>widgetPosition: "<?php echo $widgetPosition;?>",<?php echo $disableNewMessagesSoundon;?><?php echo $disableExpandChatSoundon;?><?php echo $disableButtonTooltipon;?> tooltipButtonText: "<?php echo $tooltipButtonText;?>",buttonType: "blue_circle"});
</script>

