<?php
/**
 * Denis Spalenza
 *
 * @category   Spalenza
 * @package    Spalenza_Jamef
 * @author     Denis Spalenza <deniscsz@gmail.com>
 * @license    http://denisspalenza.com/new-bsd-license/ New BSD License
 */

$installer = $this;

/* @var $installer Mage_Catalog_Model_Resource_Eav_Mysql4_Setup */
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$installer->startSetup();

// Add volume to prduct attribute set
$codigo = 'volume_comprimento';
$config = array(
    'position' => 1,
    'required'=> 0,
    'label' => 'Comprimento (cm)',
    'type' => 'int',
    'input'=>'text',
    'apply_to'=>'simple,bundle,grouped,configurable',
    'note'=>'Comprimento da embalagem do produto (Para cálculo de PAC, mínimo de 16)'
);

$setup->addAttribute('catalog_product', $codigo , $config);

// Add volume to prduct attribute set
$codigo = 'volume_altura';
$config = array(
    'position' => 1,
    'required'=> 0,
    'label' => 'Altura (cm)',
    'type' => 'int',
    'input'=>'text',
    'apply_to'=>'simple,bundle,grouped,configurable',
    'note'=>'Altura da embalagem do produto (Para cálculo de PAC, mínimo de 2)'
);

$setup->addAttribute('catalog_product', $codigo , $config);

// Add volume to prduct attribute set
$codigo = 'volume_largura';
$config = array(
    'position' => 1,
    'required'=> 0,
    'label' => 'Largura (cm)',
    'type' => 'int',
    'input'=>'text',
    'apply_to'=>'simple,bundle,grouped,configurable',
    'note'=>'Largura da embalagem do produto (Para cálculo de PAC, mínimo de 11)'
);

$setup->addAttribute('catalog_product', $codigo , $config);

$installer->endSetup();