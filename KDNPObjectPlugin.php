<?php

/**
 * KDNP Object Linker plugin.
 */
class KDNPObjectPlugin extends Omeka_Plugin_AbstractPlugin
{

    protected $_filters = array('insertKDNPObject' => array('Display', 'Item', 'Item Type Metadata', 'KDNP Object'));


    public function insertKDNPObject($text, $args)
    {
     header("Location:  $text");
     exit;
    }

}