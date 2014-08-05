<?php /* Smarty version 2.6.20, created on 2014-06-17 02:01:28
         compiled from gallery:modules/multilang/templates/CantActivate.tpl */ ?>
<div class="gbBlock gcBackground1">
<h2> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'MultiLanguage Settings'), $this);?>
 </h2>
</div>
<div class="gbBlock">
<div class="giWarning">
<?php ob_start(); ?>
<a href="http://php.net/gettext"><?php echo $this->_reg_objects['g'][0]->text(array('text' => 'gettext'), $this);?>
</a>
<?php $this->_smarty_vars['capture']['gettext'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Your webserver does not support localization.  Please instruct your system administrator to reconfigure PHP with the %s option enabled.",'arg1' => $this->_smarty_vars['capture']['gettext']), $this);?>

</div>
</div>
<div class="gbBlock gcBackground1">
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][continue]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Continue'), $this);?>
"/>
</div>