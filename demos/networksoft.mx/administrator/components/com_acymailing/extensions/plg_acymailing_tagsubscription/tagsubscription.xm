<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE install SYSTEM "http://dev.joomla.org/xml/1.5/plugin-install.dtd">
<install type="plugin" version="1.5" method="upgrade" group="acymailing">
	<name>AcyMailing Tag : Manage the Subscription</name>
	<creationDate>avril 2014</creationDate>
	<version>4.6.2</version>
	<author>Acyba</author>
	<authorEmail>dev@acyba.com</authorEmail>
	<authorUrl>http://www.acyba.com</authorUrl>
	<copyright>Copyright (C) 2009-2014 ACYBA SARL - All rights reserved.</copyright>
	<license>http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL</license>
	<description>This plugin enables you to add link to manage the subscription of the user</description>
	<files>
		<filename plugin="tagsubscription">tagsubscription.php</filename>
	</files>
	<params addpath="/components/com_acymailing/params">
		<param name="help" type="help" label="Help" description="Click on the help button to get some help" default="plugin-tagsubscription"/>
		<param name="unsubscribetemplate" type="radio" default="0" label="Display the unsubscribe page" description="Select if you want to display the unsubscribe page (when the user clicks on the unsubscribe link) without any Joomla module (no template) or inside your default Joomla Template">
			<option value="0">Standard template</option>
			<option value="1">No template</option>
		</param>
		<param name="unsubscribeitemid" type="text" size="2" default="0" label="Unsubscribe Page Itemid" description="Itemid attached to your unsubscribe page" />
		<param name="listunsubscribe" type="radio" default="0" label="Add list-unsubscribe header" description="If you insert an unsubscribe link, should Acy also insert the link in the list-unsubscribe field? See www.list-unsubscribe.com">
			<option value="0">JOOMEXT_NO</option>
			<option value="1">JOOMEXT_YES</option>
		</param>
		<param name="listunsubscribeemail" type="text" size="20" default="" label="List-unsubscribe e-mail" description="The GMail feedback loops works with a list-unsubscribe e-mail address. By default Acy will add the reply-to e-mail address but you can specify another e-mail address there" />
		<param name="modifytemplate" type="radio" default="0" label="Display the modify your subscription" description="Select if you want to display the modify your subscription page (when the user clicks on the modify you subscription link) without any Joomla module (no template) or inside your default Joomla Template">
			<option value="0">Standard template</option>
			<option value="1">No template</option>
		</param>
		<param name="modifyitemid" type="text" size="2" default="0" label="Modify your subscription Page Itemid" description="Itemid attached to your modify your subscription page" />
		<param name="confirmtemplate" type="radio" default="0" label="Display the confirmation page" description="Select if you want to display the confirmation page (when the user clicks on the confirmation link) without any Joomla module (no template) or inside your default Joomla Template">
			<option value="0">Standard template</option>
			<option value="1">No template</option>
		</param>
		<param name="confirmitemid" type="text" size="2" default="0" label="Confirmation Page Itemid" description="Itemid attached to your confirmation page" />
		<param name="displayfilter_mail" type="radio" default="1" label="Display filter" description="Display the subscription filter on the Newsletter creation interface">
			<option value="0">JOOMEXT_NO</option>
			<option value="1">JOOMEXT_YES</option>
		</param>
	</params>
	<config>
		<fields name="params" addfieldpath="/components/com_acymailing/params">
			<fieldset name="basic">
				<field name="help" type="help" label="Help" description="Click on the help button to get some help" default="plugin-tagsubscription"/>
				<field name="unsubscribetemplate" type="radio" default="0" label="Display the unsubscribe page" description="Select if you want to display the unsubscribe page (when the user clicks on the unsubscribe link) without any Joomla module (no template) or inside your default Joomla Template">
					<option value="0">Standard template</option>
					<option value="1">No template</option>
				</field>
				<field name="unsubscribeitemid" type="text" size="2" default="0" label="Unsubscribe Page Itemid" description="Itemid attached to your unsubscribe page" />
				<field name="listunsubscribe" type="radio" default="0" label="Add list-unsubscribe header" description="If you insert an unsubscribe link, should Acy also insert the link in the list-unsubscribe field? See www.list-unsubscribe.com">
					<option value="0">JOOMEXT_NO</option>
					<option value="1">JOOMEXT_YES</option>
				</field>
				<field name="listunsubscribeemail" type="text" size="20" default="" label="List-unsubscribe e-mail" description="The GMail feedback loops works with a list-unsubscribe e-mail address. By default Acy will add the reply-to e-mail address but you can specify another e-mail address there" />
				<field name="modifytemplate" type="radio" default="0" label="Display the modify your subscription" description="Select if you want to display the modify your subscription page (when the user clicks on the modify you subscription link) without any Joomla module (no template) or inside your default Joomla Template">
					<option value="0">Standard template</option>
					<option value="1">No template</option>
				</field>
				<field name="modifyitemid" type="text" size="2" default="0" label="Modify your subscription Page Itemid" description="Itemid attached to your modify your subscription page" />
				<field name="confirmtemplate" type="radio" default="0" label="Display the confirmation page" description="Select if you want to display the confirmation page (when the user clicks on the confirmation link) without any Joomla module (no template) or inside your default Joomla Template">
					<option value="0">Standard template</option>
					<option value="1">No template</option>
				</field>
				<field name="confirmitemid" type="text" size="2" default="0" label="Confirmation Page Itemid" description="Itemid attached to your confirmation page" />
				<field name="displayfilter_mail" type="radio" default="1" label="Display filter" description="Display the subscription filter on the Newsletter creation interface">
					<option value="0">JOOMEXT_NO</option>
					<option value="1">JOOMEXT_YES</option>
				</field>
			</fieldset>
		</fields>
	</config>

</install>
