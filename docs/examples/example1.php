<?php
/**
 * This example demonstrates the usage of the UNL Templates.
 *
 * 
 * @package UNL_Templates
 */

ini_set('display_errors',true);
error_reporting(E_ALL);
set_include_path(realpath(dirname(__FILE__).'/../../src').PATH_SEPARATOR.realpath(dirname(__FILE__).'/../../../UNL_DWT').PATH_SEPARATOR.realpath(dirname(__FILE__).'/includes/pear/php'));
require_once 'UNL/Templates.php';
$page = UNL_Templates::factory('Fixed', array('sharedcodepath' => 'sharedcode'));
$page->addScript('test.js');
$page->addScriptDeclaration('function sayHello(){alert("Hello!");}');
$page->addStylesheet('foo.css');
$page->addStyleDeclaration('.foo {font-weight:bold;}');
$page->titlegraphic     = '<h1>Hello UNL Templates</h1>';
$page->maincontentarea  = '<p>This is my main content.</p>';
$page->navlinks         = '<ul><li>Hello world!</li></ul>';
$page->leftRandomPromo  = '';
$page->maincontentarea  .= highlight_file(__FILE__, true);
$page->loadSharedcodeFiles();
echo $page;