<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Teste</title>
</head>
<body>
    <div align="center">
        <h1>TESTE</h1>
        <p>Arquivo de teste de template Rain TPL</p>
    </div>
    <br>
    <hr>
    <br>
    <div align="center">
        <h2>May the force be with you <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
        <p>PHP Version : <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
    </div>
    <br>
    <hr>
    <br>
    <h2>Week</h2>
	<ul>
		<?php $counter1=-1;  if( isset($week) && ( is_array($week) || $week instanceof Traversable ) && sizeof($week) ) foreach( $week as $key1 => $value1 ){ $counter1++; ?>
		<li>
			<?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?>
		</li>
		<?php } ?>
	</ul>
</body>
</html>