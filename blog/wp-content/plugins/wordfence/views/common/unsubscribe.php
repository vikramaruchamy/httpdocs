<?php
if (!defined('WORDFENCE_VERSION')) { exit; }

/**
 * Presents an unsubscribe confirmation.
 *
 * Expects $jwt, $email, and $state to be defined when applicable.
 *
 * @var string $jwt The JWT for the unsubscribe request.
 * @var string $email The plaintext email address being unsubscribed.
 * @var string $state The state of the confirmation. 'bad' is the bad/expired token prompt. 'resent' is the confirmation that an unsubscribe email as re-sent. 'prompt' is the confirmation prompt. 'unsubscribed' is the completion view.
 */

switch ($state) {
	case 'bad':
		$title = __('Unsubscribe from Security Alerts', 'wordfence');
		break;
	case 'resent':
		$title = __('Unsubscription Confirmation Sent', 'wordfence');
		break;
	case 'unsubscribed':
		$title = __('Unsubscribe Successful', 'wordfence');
		break;
	case 'prompt':
		$title = __('Confirm Unsubscribe', 'wordfence');
		break;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo esc_html($title); ?></title>
	<style>
		html {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			line-height: 1.42857143;
			color: #333;
			background-color: #fff;
		}
		
		h1, h2, h3, h4, h45, h6 {
			font-weight: 500;
			line-height: 1.1;
		}
		
		h1 { font-size: 36px; }
		h2 { font-size: 30px; }
		h3 { font-size: 24px; }
		h4 { font-size: 18px; }
		h5 { font-size: 14px; }
		h6 { font-size: 12px; }
		
		h1, h2, h3 {
			margin-top: 20px;
			margin-bottom: 10px;
		}
		h4, h5, h6 {
			margin-top: 10px;
			margin-bottom: 10px;
		}
		
		.btn {
			background-color: #00709e;
			border: 1px solid #09486C;
			border-radius: 4px;
			box-sizing: border-box;
			color: #ffffff;
			cursor: pointer;
			display: inline-block;
			font-size: 14px;
			font-weight: normal;
			letter-spacing: normal;
			line-height: 20px;
			margin: 5px 0px;
			padding: 12px 6px;
			text-align: center;
			text-decoration: none;
			vertical-align: middle;
			white-space: nowrap;
			word-spacing: 0px;
		}
		
		hr {
			margin-top: 20px;
			margin-bottom: 20px;
			border: 0;
			border-top: 1px solid #eee
		}
		
		.btn.disabled, .btn[disabled] {
			background-color: #9f9fa0;
			border: 1px solid #7E7E7F;
			cursor: not-allowed;
			filter: alpha(opacity=65);
			-webkit-box-shadow: none;
			box-shadow: none;
			opacity: .65;
			pointer-events: none;
		}
	</style>
</head>
<body>

<h3><?php echo esc_html($title); ?></h3>

<?php if ($state == 'unsubscribed'): ?>
<p><?php esc_html_e('The email address provided has been unsubscribed from future alert emails.', 'wordfence'); ?></p>
<?php elseif ($state == 'resent'): ?>
<p><?php esc_html_e('If the email address provided was on the alert email list, it has been sent an unsubscribe link.', 'wordfence'); ?></p>
<?php elseif ($state == 'bad'): ?>
<p><?php esc_html_e('Please enter an email address to unsubscribe from alerts. If this email address exists on the alert email list, it will receive a confirmation link to unsubscribe.', 'wordfence'); ?></p>
<form method="POST" action="<?php echo esc_attr(wfUtils::getSiteBaseURL() . '?_wfsf=removeAlertEmail'); ?>">
	<p><input type="email" name="email" id="email" placeholder="you@example.com"></p>
	<input type="hidden" name="resend" value="1">
	<p><input type="submit" class="btn" value="Unsubscribe"></p>
</form>
<?php elseif ($state == 'prompt'): ?>
<p><?php echo esc_html(sprintf(/* translators: Email address. */ __('Please confirm the unsubscribe request for %s.', 'wordfence'), $email)); ?></p>
<form method="POST" action="<?php echo esc_attr(wfUtils::getSiteBaseURL() . '?_wfsf=removeAlertEmail&jwt=' . $jwt); ?>">
	<input type="hidden" name="confirm" value="1">
	<p><input type="submit" class="btn" value="Unsubscribe"></p>
</form>
<?php endif; ?>

<p style="color: #999999;margin-top: 2rem;"><em><?php esc_html_e('Generated by Wordfence at ', 'wordfence'); ?><?php echo gmdate('D, j M Y G:i:s T', wfWAFUtils::normalizedTime()); ?>.<br><?php esc_html_e('Your computer\'s time: ', 'wordfence'); ?><script type="application/javascript">document.write(new Date().toUTCString());</script>.</em></p>

</body>
</html>