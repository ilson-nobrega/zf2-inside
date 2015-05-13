<?php
/**
 * @author: Ilson Nóbrega <ilson@inobrega.com.br>
 * @since: 04/05/2015 - 23:29
 */

require_once 'library\Zend\Loader\StandardAutoloader.php';

$loader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
$loader->registerNamespace('SON', 'library/SON');
$loader->register();

$definitionList = new Zend\Di\DefinitionList(array(
    new Zend\Di\Definition\ArrayDefinition(include __DIR__ . '/data/di/SON-definition.php'),
    $runtime = new Zend\Di\Definition\RuntimeDefinition()
));

$di = new \Zend\Di\Di($definitionList);
$di->instanceManager()->setParameters('SON\Db\Connection', array(
    'server' => 'localhost',
    'dbname' => 'banco',
    'user'  =>  'postgres',
    'password' => 123456
));
$di->instanceManager()->addAlias('Produto', 'SON\Produto');
$produto = $di->get('Produto');

print_r($produto);exit;
$categoria = $di->get('SON\Categoria');

@Zend\Di\Display\Console::export($di);