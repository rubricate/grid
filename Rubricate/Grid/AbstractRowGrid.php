<?php 

declare(strict_types=1);

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
    
    public function addCol($size, IGetElement $elem, $attrArr = array()): void
    {
        $str  = $this->getColFormat();
        $attr = $attrArr;

        $this->row[] = new ColGrid($str, $size, $elem, $attr);
    } 

    public function getElement(): string
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

