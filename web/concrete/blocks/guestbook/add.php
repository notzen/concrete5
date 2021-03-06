<? defined('C5_EXECUTE') or die("Access Denied."); ?>

<?=t('Title')?><br />
<input type="text" name="title" value="<?=t('Comments')?>:" /><br /><br />

<?=t('Date Format')?><br/>
<input type="text" name="dateFormat" value="<?=t('M jS, Y')?>" />
<div class="ccm-note">(<?=t('Enter a <a href="%s" target="_blank">PHP date string</a> here.', 'http://www.php.net/date')?>)</div>
<br/>

<?=t('Comments Require Moderator Approval?')?><br/>
<input type="radio" name="requireApproval" value="1" /> <?=t('Yes')?><br />
<input type="radio" name="requireApproval" value="0" checked="checked" /> <?=t('No')?><br /><br />

<?=t('Posting Comments is Enabled?')?><br/>
<input type="radio" name="displayGuestBookForm" value="1" checked="checked" /> <?=t('Yes')?><br />
<input type="radio" name="displayGuestBookForm" value="0" /> <?=t('No')?><br /><br />

<?=t('Authentication Required to Post?')?><br/>

<input type="radio" name="authenticationRequired" value="0" checked /> <?=t('Email Only')?><br />
<input type="radio" name="authenticationRequired" value="1" /> <?=t('Users must login to C5')?><br /><br />

<?=t('Solving a <a href="%s" target="_blank">CAPTCHA</a> Required to Post?', 'http://en.wikipedia.org/wiki/Captcha')?><br/>
<input type="radio" name="displayCaptcha" value="1" checked="checked" /> <?php echo t('Yes')?><br />
<input type="radio" name="displayCaptcha" value="0" /> <?php echo t('No')?><br /><br />

<?=t('Alert Email Address when Comment Posted')?><br/>
<input name="notifyEmail" type="text" value="<?=$notifyEmail?>" size="30" /><br /><br />

