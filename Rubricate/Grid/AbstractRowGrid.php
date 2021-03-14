<?php 

/*
 * @package     Rubricate Grid
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/grid
 * 
 */


namespace Rubricate\Grid;

use Rubricate\Element\IGetElement;
use Rubricate\Element\CreateElement;
use Rubricate\Element\StrElement;


abstract class AbstractRowGrid implements IGetElement
{

    private $row = array();


    public function __construct()
    {
    }


    abstract protected function getRow();
    abstract protected function getColFormat();
    
    public function addCol($size, IGetElement $elem, $attrArr = array())
    {
        $str  = $this->getColFormat();
        $attr = $attrArr;

        $this->row[] = new ColGrid($str, $size, $elem, $attr);
    } 


    public function getElement()
    {
        $r = new CreateElement('div');
        $r->setAttribute('class', $this->getRow());
        $r->addChild(new StrElement("\n"));

        foreach ($this->row as $e) {
            $r->addChild($e);
        }

        return $r->getElement() . "\n\n";
    } 



}

