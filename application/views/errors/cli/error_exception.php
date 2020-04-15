<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

Se encontró una excepción no capturada

Tipo:        <?php echo get_class($exception), "\n"; ?>
Mensaje:     <?php echo $message, "\n"; ?>
Nombre del archivo:    <?php echo $exception->getFile(), "\n"; ?>
Número de línea: <?php echo $exception->getLine(); ?>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

Backtrace:
<?php	foreach ($exception->getTrace() as $error): ?>
<?php		if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>
	Archivo: <?php echo $error['file'], "\n"; ?>
	Línia: <?php echo $error['line'], "\n"; ?>
	Función: <?php echo $error['function'], "\n\n"; ?>
<?php		endif ?>
<?php	endforeach ?>

<?php endif ?>
