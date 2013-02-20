<?php //netteCache[01]000397a:2:{s:4:"time";s:21:"0.40387300 1361349947";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:77:"/Users/livingstonefultang/Documents/apigen/templates/default/deprecated.latte";i:2;i:1347143210;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: /Users/livingstonefultang/Documents/apigen/templates/default/deprecated.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'hg9b4ouon8')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb6b5a3616be_title')) { function _lb6b5a3616be_title($_l, $_args) { extract($_args)
?>Deprecated<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb334b0e7272_content')) { function _lb334b0e7272_content($_l, $_args) { extract($_args)
?><div id="content">
	<h1><?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()) ?></h1>


<?php if ($deprecatedClasses): ?>	<table class="summary" id="classes">
	<caption>Classes summary</caption>
<?php call_user_func(reset($_l->blocks['classes']), $_l, array('items' => $deprecatedClasses) + get_defined_vars()) ?>
	</table>
<?php endif ?>

<?php if ($deprecatedInterfaces): ?>	<table class="summary" id="interfaces">
	<caption>Interfaces summary</caption>
<?php call_user_func(reset($_l->blocks['classes']), $_l, array('items' => $deprecatedInterfaces) + get_defined_vars()) ?>
	</table>
<?php endif ?>

<?php if ($deprecatedTraits): ?>	<table class="summary" id="traits">
	<caption>Traits summary</caption>
<?php call_user_func(reset($_l->blocks['classes']), $_l, array('items' => $deprecatedTraits) + get_defined_vars()) ?>
	</table>
<?php endif ?>

<?php if ($deprecatedExceptions): ?>	<table class="summary" id="exceptions">
	<caption>Exceptions summary</caption>
<?php call_user_func(reset($_l->blocks['classes']), $_l, array('items' => $deprecatedExceptions) + get_defined_vars()) ?>
	</table>
<?php endif ?>

<?php if ($deprecatedMethods): ?>	<table class="summary" id="methods">
	<caption>Methods summary</caption>
<?php $iterations = 0; foreach ($deprecatedMethods as $method): ?>	<tr>
		<td class="name"><a href="<?php echo htmlSpecialChars($template->classUrl($method->declaringClassName)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($method->declaringClassName, ENT_NOQUOTES) ?></a></td>
		<td class="name"><code><a href="<?php echo htmlSpecialChars($template->methodUrl($method)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($method->name, ENT_NOQUOTES) ?>()</a></code></td>
		<td>
<?php if ($method->hasAnnotation('deprecated')): $iterations = 0; foreach ($method->annotations['deprecated'] as $description): if ($description): ?>
					<?php echo $template->annotation($description, 'deprecated', $method) ?><br />
<?php endif ;$iterations++; endforeach ;endif ?>
		</td>
	</tr>
<?php $iterations++; endforeach ?>
	</table>
<?php endif ?>

<?php if ($deprecatedConstants): ?>	<table class="summary" id="constants">
	<caption>Constants summary</caption>
<?php $iterations = 0; foreach ($deprecatedConstants as $constant): ?>	<tr>
<?php if ($constant->declaringClassName): ?>
		<td class="name"><a href="<?php echo htmlSpecialChars($template->classUrl($constant->declaringClassName)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($constant->declaringClassName, ENT_NOQUOTES) ?></a></td>
		<td class="name"><code><a href="<?php echo htmlSpecialChars($template->constantUrl($constant)) ?>
"><b><?php echo Nette\Templating\Helpers::escapeHtml($constant->name, ENT_NOQUOTES) ?></b></a></code></td>
<?php else: if ($namespaces || $classes || $interfaces || $traits || $exceptions): ?>
		<td class="name"><?php if ($constant->namespaceName): ?><a href="<?php echo htmlSpecialChars($template->namespaceUrl($constant->namespaceName)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($constant->namespaceName, ENT_NOQUOTES) ?>
</a><?php endif ?>
</td>
<?php endif ?>
		<td<?php if ($_l->tmp = array_filter(array('name'))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
><code><a href="<?php echo htmlSpecialChars($template->constantUrl($constant)) ?>
"><b><?php echo Nette\Templating\Helpers::escapeHtml($constant->shortName, ENT_NOQUOTES) ?></b></a></code></td>
<?php endif ?>
		<td>
<?php $iterations = 0; foreach ($constant->annotations['deprecated'] as $description): if ($description): ?>
					<?php echo $template->annotation($description, 'deprecated', $constant) ?><br />
<?php endif ;$iterations++; endforeach ?>
		</td>
	</tr>
<?php $iterations++; endforeach ?>
	</table>
<?php endif ?>

<?php if ($deprecatedProperties): ?>	<table class="summary" id="properties">
	<caption>Properties summary</caption>
<?php $iterations = 0; foreach ($deprecatedProperties as $property): ?>	<tr>
		<td class="name"><a href="<?php echo htmlSpecialChars($template->classUrl($property->declaringClassName)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($property->declaringClassName, ENT_NOQUOTES) ?></a></td>
		<td class="name"><a href="<?php echo htmlSpecialChars($template->propertyUrl($property)) ?>
"><var>$<?php echo Nette\Templating\Helpers::escapeHtml($property->name, ENT_NOQUOTES) ?></var></a></td>
		<td>
<?php $iterations = 0; foreach ($property->annotations['deprecated'] as $description): if ($description): ?>
					<?php echo $template->annotation($description, 'deprecated', $property) ?><br />
<?php endif ;$iterations++; endforeach ?>
		</td>
	</tr>
<?php $iterations++; endforeach ?>
	</table>
<?php endif ?>

<?php if ($deprecatedFunctions): ?>	<table class="summary" id="functions">
	<caption>Functions summary</caption>
<?php $iterations = 0; foreach ($deprecatedFunctions as $function): ?>	<tr>
<?php if ($namespaces): ?>		<td class="name"><?php if ($function->namespaceName): ?>
<a href="<?php echo htmlSpecialChars($template->namespaceUrl($function->namespaceName)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($function->namespaceName, ENT_NOQUOTES) ?>
</a><?php endif ?>
</td>
<?php endif ?>
		<td class="name"><code><a href="<?php echo htmlSpecialChars($template->functionUrl($function)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($function->shortName, ENT_NOQUOTES) ?></a></code></td>
		<td>
<?php $iterations = 0; foreach ($function->annotations['deprecated'] as $description): if ($description): ?>
					<?php echo $template->annotation($description, 'deprecated', $function) ?><br />
<?php endif ;$iterations++; endforeach ?>
		</td>
	</tr>
<?php $iterations++; endforeach ?>
	</table>
<?php endif ?>
</div>
<?php
}}

//
// block classes
//
if (!function_exists($_l->blocks['classes'][] = '_lbb8d9db8dec_classes')) { function _lbb8d9db8dec_classes($_l, $_args) { extract($_args)
;$iterations = 0; foreach ($items as $class): ?>	<tr>
		<td class="name"><a href="<?php echo htmlSpecialChars($template->classUrl($class)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($class->name, ENT_NOQUOTES) ?></a></td>
		<td>
<?php $iterations = 0; foreach ($class->annotations['deprecated'] as $description): if ($description): ?>
					<?php echo $template->annotation($description, 'deprecated', $class) ?><br />
<?php endif ;$iterations++; endforeach ?>
		</td>
	</tr>
<?php $iterations++; endforeach ;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = '@layout.latte'; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
 $active = 'deprecated' ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 