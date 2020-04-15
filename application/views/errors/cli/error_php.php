<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

Se ha encontrado un error PHP

Gravedad:    <?php echo $severity, "\n"; ?>
Mensaje:     <?php echo $message, "\n"; ?>
Nombre del archivo:    <?php echo $filepath, "\n"; ?>
Número de línea: <?php echo $line; ?>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

Backtrace:
<?php	foreach (debug_backtrace() as $error): ?>
<?php		if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>
	Archivo: <?php echo $error['file'], "\n"; ?>
	Linea: <?php echo $error['line'], "\n"; ?>
	Función: <?php echo $error['function'], "\n\n"; ?>
<?php		endif ?>
<?php	endforeach ?>

<?php endif ?>
