<?php 

/*
 * @package     Rubricate
 * @author      Estefanio N Santos<estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/grid
 * @copyright   2017-2018
 * 
 */


namespace Rubricate\Grid;

use Rubricate\Element\IGetElement;
use Rubricate\Element\CreateElement;
use Rubricate\Element\StrElement;


abstract class AbstractRowGrid implements IGetElement
{

    private $row = array();
    private $column;



    public function __construct()
    {
    }


    abstract protected function getRowAttrStrClass();
    abstract protected function getColAttrStrClassWrap();
    
    public function addCol($size, IGetElement $elem, $attrArr = array())
    {
        $str  = $this->getColAttrStrClassWrap();
        $attr = $attrArr;

        $this->row[] = new ColGrid($str, $size, $elem, $attr);
    } 


    public function getElement()
    {
        $r = new CreateElement('div');
        $r->setAttribute('class', $this->getRowAttrStrClass());
        $r->addChild(new StrElement("\n"));

        foreach ($this->row as $e) {
            $r->addChild($e);
        }

        return $r->getElement() . "\n\n";
    } 



}

