<?php

 /**
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
 if (isset($this->error)) : ?>
	<div class="contact-error">
		<?php echo $this->error; ?>
	</div>
<?php endif; ?>

<div class="contact-form">
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate form-horizontal">
		<fieldset>
			<p><?php echo JText::_('COM_CONTACT_FORM_LABEL'); ?></p>
			<div class="container">
				<div class="row form-group">
					<div class="col-lg-4">
						<?php echo $this->form->getLabel('contact_name'); ?>
						<?php echo $this->form->getInput('contact_name'); ?>
						<?php echo $this->form->getLabel('contact_email'); ?>
						<?php echo $this->form->getInput('contact_email'); ?>
						<?php echo $this->form->getLabel('contact_subject'); ?>
						<?php echo $this->form->getInput('contact_subject'); ?>
					</div>
					<div class="col-lg-4 form-group">
						<?php echo $this->form->getLabel('contact_message'); ?>
						<?php echo $this->form->getInput('contact_message'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 form-group">
						<?php 	if ($this->params->get('show_email_copy')){ ?>
						<?php echo $this->form->getLabel('contact_email_copy'); ?>
						<?php echo $this->form->getInput('contact_email_copy'); ?>
						<?php 	} ?>
						<?php //Dynamically load any additional fields from plugins. ?>
						<?php foreach ($this->form->getFieldsets() as $fieldset): ?>
							<?php if ($fieldset->name != 'contact'):?>
								<?php $fields = $this->form->getFieldset($fieldset->name);?>
								<?php foreach($fields as $field): ?>
									<?php if ($field->hidden): ?>
										<?php echo $field->input;?>
									<?php else:?>
										<dt>
											<?php echo $field->label; ?>
											<?php if (!$field->required && $field->type != "Spacer"): ?>
												<span class="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL');?></span>
											<?php endif; ?>
										</dt>
										<dd><?php echo $field->input;?></dd>
									<?php endif;?>
								<?php endforeach;?>
							<?php endif ?>
						<?php endforeach;?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<button class="button btn btn-primary validate" type="submit"><?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?></button>
						<input type="hidden" name="option" value="com_contact" />
						<input type="hidden" name="task" value="contact.submit" />
						<input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
						<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
						<?php echo JHtml::_( 'form.token' ); ?>
					</div>
				</div>
			</div>
			
				
			

				
				
		</fieldset>
	</form>
</div>
