<?php /* Smarty version 2.6.20, created on 2014-06-17 02:02:52
         compiled from gallery:modules/jpegtran/templates/AdminJpegtran.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'gallery:modules/jpegtran/templates/AdminJpegtran.tpl', 84, false),)), $this); ?>
<div class="gbBlock gcBackground1">
<h2> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Jpegtran Settings'), $this);?>
 </h2>
</div>
<?php if (isset ( $this->_tpl_vars['status']['saved'] )): ?>
<div class="gbBlock"><h2 class="giSuccess">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Settings saved successfully'), $this);?>

</div>
<?php endif; ?>
<div class="gbBlock">
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Jpegtran is a tool that can be used to rotate and crop JPEG images without degrading image quality.  You must install the jpegtran binary (part of libjpeg) on your server, then enter the path to it in the text box below.  If you're on a Unix machine, don't forget to make the binary executable (%s should do it).",'arg1' => "<i>chmod 755 jpegtran</i>"), $this);?>

</p>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "<b>Note</b>: The jpegtran binary must be compatible with version %s.",'arg1' => '6b'), $this);?>

</p>
<?php if (! $this->_tpl_vars['AdminJpegtran']['canExec']): ?>
<p class="giWarning">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "The exec() function is disabled in your PHP by the <b>disabled_functions</b> parameter in php.ini.  This module cannot be used until that setting is changed."), $this);?>

</p>
<?php else: ?>
<table class="gbDataTable">
<tr>
<td>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Path to jpegtran binary:"), $this);?>

</td>
<td>
<?php if (isset ( $this->_tpl_vars['form']['error']['path']['missing'] )): ?>
<div class="giError">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'You must enter a path to your jpegtran binary'), $this);?>

</div>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['form']['error']['path']['testError'] )): ?>
<div class="giError">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "The path you entered doesn't contain a valid jpegtran binary. Use the 'test' button to check where the error is."), $this);?>

</div>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['form']['error']['path']['badPath'] )): ?>
<div class="giError">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "The path you entered isn't a valid path to a <b>jpegtran</b> binary."), $this);?>

</div>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['form']['error']['path']['notExecutable'] )): ?>
<div class="giError">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "The <b>jpegtran</b> binary is not executable.  To fix it, run <b>chmod 755 %s</b> in a shell.",'arg1' => $this->_tpl_vars['form']['path']), $this);?>

</div>
<?php endif; ?>
<input type="text" id="giFormPath" size="40" autocomplete="off"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[path]"), $this);?>
" value="<?php echo $this->_tpl_vars['form']['path']; ?>
"/>
<?php $this->_tag_stack[] = array('autoComplete', array('element' => 'giFormPath'), $this); $_block_repeat=true; $this->_reg_objects['g'][0]->autoComplete($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>
<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=core.SimpleCallback",'arg2' => "command=lookupFiles",'arg3' => "prefix=__VALUE__",'htmlEntities' => false), $this);?>

<?php $_obj_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_reg_objects['g'][0]->autoComplete($this->_tag_stack[count($this->_tag_stack)-1][1], $_obj_block_content, $this, $_block_repeat);} array_pop($this->_tag_stack);?>

</td>
</tr>
</table>
</div>
<div class="gbBlock gcBackground1">
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][save]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Save Settings'), $this);?>
"/>
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][test]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Test Settings'), $this);?>
"/>
<?php endif; ?>
<?php if ($this->_tpl_vars['AdminJpegtran']['isConfigure']): ?>
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][cancel]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Cancel'), $this);?>
"/>
<?php else: ?>
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][reset]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Reset'), $this);?>
"/>
<?php endif; ?>
</div>
<?php if (! empty ( $this->_tpl_vars['AdminJpegtran']['tests'] )): ?>
<div class="gbBlock">
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Jpegtran binary test results'), $this);?>
 </h3>
<table class="gbDataTable"><tr>
<th> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Binary Name'), $this);?>
 </th>
<th> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Pass/Fail"), $this);?>
 </th>
</tr>
<?php $_from = $this->_tpl_vars['AdminJpegtran']['tests']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['test']):
?>
<tr class="<?php echo smarty_function_cycle(array('values' => "gbEven,gbOdd"), $this);?>
">
<td>
<?php echo $this->_tpl_vars['test']['name']; ?>

</td><td>
<?php if (( $this->_tpl_vars['test']['success'] )): ?>
<div class="giSuccess">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Passed'), $this);?>

</div>
<?php else: ?>
<div class="giError">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Failed'), $this);?>

</div>
<?php if (! empty ( $this->_tpl_vars['test']['message'] )): ?>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Error messages:"), $this);?>

<br/>
<div class="giError">
<?php $_from = $this->_tpl_vars['test']['message']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['line']):
?>
<pre><?php echo $this->_tpl_vars['line']; ?>
</pre>
<?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>
<?php endif; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</div>
<?php if (( $this->_tpl_vars['AdminJpegtran']['failCount'] > 0 )): ?>
<div class="gbBlock">
<h3>
<?php echo $this->_reg_objects['g'][0]->text(array('one' => "Debug output (%d failed test)",'many' => "Debug output (%d failed tests)",'count' => $this->_tpl_vars['AdminJpegtran']['failCount'],'arg1' => $this->_tpl_vars['AdminJpegtran']['failCount']), $this);?>

<span id="AdminJpegtran_trace-toggle"
class="giBlockToggle gcBackground1 gcBorder2" style="border-width: 1px"
onclick="BlockToggle('AdminJpegtran_debugSnippet', 'AdminJpegtran_trace-toggle')">+</span>
</h3>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "We gathered this debug output while testing your Jpegtran binaries.  If you read through this carefully you may discover the reason why your jpegtran binaries failed the tests."), $this);?>

</p>
<pre id="AdminJpegtran_debugSnippet" class="gcBackground1 gcBorder2"
style="display: none; border-width: 1px; border-style: dotted; padding: 4px">
<?php echo $this->_tpl_vars['AdminJpegtran']['debugSnippet']; ?>

</pre>
</div>
<?php endif; ?>
<?php endif; ?>