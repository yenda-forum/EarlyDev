<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require 'lib/smarty/libs/Smarty.class.php';

$smarty = new Smarty;

$theme = 'Bootstrap3';

$smarty->setTemplateDir('customizations/templates/'.$theme.'/');
$smarty->setCompileDir('lib/smarty/templates_c/');
$smarty->setConfigDir('lib/smarty/configs/');
$smarty->setCacheDir('lib/smarty/cache/');

//$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$array = array(
                        array('id'=>"1",'name'=>"Test", 'description'=>"Testforum", 'lastPost'=>date("d.m.Y H:i", 0), 'lastPostName'=>"-/-", 'lastPostCreator'=>"-/-", 'subforums'=>
                                array(
                                    array(
                                    'id'=> "2", 'name'=>"SubForum1"
                                    )
                                )
                            ),
                        array('id'=>"1",'name'=>"Test", 'description'=>"Testforum", 'lastPost'=>date("d.m.Y H:i", 0), 'lastPostName'=>"-/-", 'lastPostCreator'=>"-/-", 'subforums'=>
                                array(
                                    array(
                                    'id'=> "2", 'name'=>"SubForum1"
                                    )
                                )
                            )             
                        );

$smarty->assign('Name', "Yenda Forums");
$smarty->assign('template_dir', 'customizations/templates/'.$theme);
$smarty->assign('forums', $array);

$smarty->display('index.tpl');
