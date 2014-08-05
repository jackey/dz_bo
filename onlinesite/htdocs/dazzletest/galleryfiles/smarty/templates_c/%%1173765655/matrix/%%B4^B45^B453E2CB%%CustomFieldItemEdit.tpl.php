<?php /* Smarty version 2.6.20, created on 2014-06-17 01:52:09
         compiled from gallery:modules/customfield/templates/CustomFieldItemEdit.tpl */ ?>
<div class="gbBlock">
<?php if (isset ( $this->_tpl_vars['form']['adminFlag'] )): ?>
<p class="giDescription">
<a href="<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "controller=customfield.CustomFieldItemAdmin",'arg2' => "cfAdmin=".($this->_tpl_vars['form']['adminFlag']),'arg3' => "itemId=".($this->_tpl_vars['form']['itemId']),'arg4' => "return=true"), $this);?>
">
<?php if ($this->_tpl_vars['form']['adminFlag'] == 2): ?>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Override global custom field settings for this album'), $this);?>

<?php else: ?>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Edit custom field settings for this album'), $this);?>

<?php endif; ?>
</a>
</p>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['form']['fields'] )): ?>
<table class="gbDataTable">
<?php $_from = $this->_tpl_vars['form']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['value']):
?>
<tr><td><?php echo $this->_tpl_vars['field']; ?>
</td><td>
<?php if (isset ( $this->_tpl_vars['form']['choices'][$this->_tpl_vars['field']] )): ?>
<select name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[fields][".($this->_tpl_vars['field'])."]"), $this);?>
">
<option value="">&laquo; <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'No Value'), $this);?>
 &raquo;</option>
<?php $_from = $this->_tpl_vars['form']['choices'][$this->_tpl_vars['field']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['choice']):
?><option<?php if ($this->_tpl_vars['choice'] == $this->_tpl_vars['value']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['choice']; ?>
</option><?php endforeach; endif; unset($_from); ?>
</select>
<?php else: ?>
<input type="text" size="40"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[fields][".($this->_tpl_vars['field'])."]"), $this);?>
" value="<?php echo $this->_tpl_vars['value']; ?>
"/>
<?php endif; ?>
</td></tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>
</div>
<?php if (! empty ( $this->_tpl_vars['form']['fields'] )): ?>
<div class="gbBlock gcBackground1">
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][save]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Save'), $this);?>
"/>
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][reset]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Reset'), $this);?>
"/>
</div>
<?php endif; ?>