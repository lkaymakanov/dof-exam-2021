<?php
	require 'Predis/Autoloader.php';
	
	Predis\Autoloader::register();

	$phphost = gethostname();
	$redishost = 'db-host';
	$client = new Predis\Client([
		'scheme' => 'tcp',
      'host'   => $redishost,
      'port'   => 6379,
	]);

	$tools = array
	(
	array("Chef", "chef-logo.png"),
	array("Consul", "consul-logo.png"),
	array("Docker", "docker-logo.png"),
	array("Elastic Stack", "elastic-stack-logo.png"),
	array("Kubernetes", "kubernetes-logo.png"),
	array("Minikube", "minikube-logo.png"),
	array("Nomad", "nomad-logo.png"),
	array("Packer", "packer-logo.png"),
	array("Puppet", "puppet-logo.png"),
	array("Saltstack", "salt-stack-logo.png"),
	array("Terraform", "terraform-logo.png"),
	array("Vault", "vault-logo.png")
	);
	$tool = rand(0,10);
?>
<html>
	<head>
		<title>Myriad of DevOps Tools</title>
	</head>
	<body style="background-color: #ffffff;">
		<div align="center">
			<h1>New tool every day, keeps the boss ... satisfied :)</h1>
			<br /><br /><br />
			<img width="800px" src="images/<?php echo $tools[$tool][1]; ?>" alt="<?php echo $tools[$tool][0]; ?>">
			<br /><br /><br />
			<h4><?php echo $tools[$tool][0]; ?> has been seen <b><?php $value = $client->incr("tool:".$tool); print($value." "); ?></b>time(s) so far.</h4>
			<br />
			<h2>Refresh for more ...</h2>
			<br /><br /><br />
			<small>Running on host <b><?php echo $phphost; ?></b> and visited <b><?php $value = $client->incr("visited:".$phphost); print($value." "); ?></b>time(s) so far.</small>
			<br /><br /><br />
			<i>Powered by <b>PHP</b> and <b>Redis</b></i>
		</div>
	</body>
</html>
