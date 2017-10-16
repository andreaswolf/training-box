<?php
$it = new DirectoryIterator(__DIR__ . '/../');

$environments = [];
foreach ($it as $env) {
    if (!$env->isDir() || $env->getBasename() == basename(__DIR__) || substr($env->getBasename(), 0, 1) == '.') {
        continue;
    }

    $environments[] = [
        'name' => $env->getBasename()
    ];
}
?>
<html>
<head>

</head>

<body>

<h1>TYPO3 Vagrant box</h1>

<p>This box provides a ready-to-go TYPO3 development environment, based on Ubuntu 16.04 with Apache and MySQL.</p>

<p>New environments can be added by creating a new folder in /www in the box (or ./www in the folder of the devbox on
your machine). See below for instructions</p>

The following environments exist:

<ul>
<?php
    foreach ($environments as $env) {
        ?><li><a href="http://<?php echo $env['name'] ?>.training.a-w.io/"><?php echo $env['name'] ?></a></li><?php
    }
?>
</ul>


<h2>Kickstarting a TYPO3 project</h2>

<p>To create a new TYPO3 project, perform the following steps:</p>

<ul>
    <li><strong>inside the box, in <tt>/www</tt></strong>
        <ol>
            <li>run <tt>create-project typo3/cms-base-distribution <em>name-of-env</em> 8.7.0</tt></li>
            <li><tt>cd <em>name-of-env</em>/web</tt></li>
            <li><tt>touch FIRST_INSTALL</tt></li>
        </ol>
    </li>
    <li><strong>on your machine</strong>
        <ol>
            <li>open <tt>Vagrantfile</tt> and add <em>name-of-env</em> to the <em>environments</em> variable</li>
            <li>run <tt>vagrant provision</tt> to apply the change</li>
            <li>in your browser, go to http://<em>name-of-env</em>.training.a-w.io and follow the instructions</li>
        </ol>
    </li>
</ul>

</body>
</html>
