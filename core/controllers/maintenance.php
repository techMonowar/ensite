<?php
defined('APP_NAME') or die(header('HTTP/1.0 403 Forbidden'));

/*
 * @author Enbiit
 * @name: Rainbow PHP Framework
 * @copyright © 2017 Enbiit.com
 *
 */

$protocol = ('HTTP/1.1' == $_SERVER["SERVER_PROTOCOL"]) ? 'HTTP/1.1' : 'HTTP/1.0';
header("$protocol 503 Service Unavailable", true, 503);
header('Retry-After: 3600');

$pageTitle = trans('Site is down for maintenance',$lang['130'],true);
$message = htmlspecialchars_decode($other['other']['maintenance_mes']);
?>
<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $pageTitle; ?></title>

<style>
<?php echo getMyData(LIB_DIR.'maintenance.css'); ?>
</style>

</head>
<body>

	<div id="wrapper">
		<div id="container">
			<div id="content_container">
				
				<div id="imageBox">
				
                    <img alt="<?php echo $pageTitle; ?>" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFMAAABMCAIAAACeUBwZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyOUE4RDIxMDczMEFFMTExODJEM0Q4OTYwNEIzQzM1RCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoxNzc4Nzc4QzBBNzcxMUUxOTNCRTgxQUIyNTRCMzQ4MiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoxNzc4Nzc4QjBBNzcxMUUxOTNCRTgxQUIyNTRCMzQ4MiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1LjEgV2luZG93cyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjI5QThEMjEwNzMwQUUxMTE4MkQzRDg5NjA0QjNDMzVEIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjI5QThEMjEwNzMwQUUxMTE4MkQzRDg5NjA0QjNDMzVEIi8+IDwvcmRmOkRlc2NyaXB0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"/>

                </div>
				
				<div id="message_1">
					<?php trans('We are currently down for maintenance',$lang['131']); ?>
				</div>
				
				<div id="message_2">
                        <?php echo $message; ?>					
					<div class="clear"></div>
				</div>
				
				<div class="clear"></div>
			</div>
			<div id="footer_container">
				<ul>
					<li style="text-align: center;"><?php echo $copyright; ?></li>
				</ul>
				
				<div class="clear"></div>
			</div>
			
			<div class="clear"></div>
		</div>
		
		<div class="clear"></div>
	</div>

</body>
</html>
<?php die(); ?>