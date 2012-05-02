<?php use_helper('I18N'); ?>

<?php
slot('title', __("Authorization Step"));
?>

<div id="content">
	<div class="module">

		<form method="post" action="<?php echo url_for('@sfOauthAuthorize'); ?>">
			<input type="hidden" name="redirect_uri" value="<?php echo $redirect_uri; ?>"/>
			<input type="hidden" name="response_type" value="code"/>
			<input type="hidden" name="client_id" value="<?php echo $consumer["consumer_key"]; ?>"/>
			<?php echo __('Do you want authorize <b>%consumer_name%</b> to access to your data ?', array('%consumer_name%' => $consumer["name"])); ?>
			<p>

			<p>  <?php echo __('Permissions used by this application: <b>%scope%</b>', array('%scope%' => $consumer["scope"])); ?></p>
			<input type="submit" name="accept" value="Yes"/>
			<input type="submit" name="accept" value="No"/>
			</p>
		</form>
	</div>
</div>
