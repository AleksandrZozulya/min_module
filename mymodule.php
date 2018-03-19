<?php
if ( !defined( '_PS_VERSION_' ) )
exit;
class MyModule extends Module
{
public function __construct()
{
$this->name = 'mymodule';
$this->tab = 'Test';
$this->version = 2.0;
$this->author = 'Alexandr Zozulya';
$this->need_instance = 0;
parent::__construct();
$this->displayName = $this->l( 'My module' );
$this->description = $this->l( 'Description of my module.' );
}
public function install()
{
	return (parent::install() && $this->registerHook('header') && $this->registerHook('footer'));
}
public function hookFooter($params)
{	
	return $this->display(__FILE__, 'mymodule.tpl');
}
public function uninstall()
{
if ( !parent::uninstall() )
Db::getInstance()->Execute( 'DELETE FROM `' . _DB_PREFIX_ . 'mymodule`' );
parent::uninstall();
}
public function hookLeftColumn( $params )
{
global $smarty;
return $this->display( __FILE__, 'mymodule.tpl' );
}
public function hookRightColumn( $params )
{
return $this->hookLeftColumn( $params );
}
}


?>