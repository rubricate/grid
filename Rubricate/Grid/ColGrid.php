<?php 

declare(strict_types=1);

namespace Rubricate\Grid;

use Rubricate\Element\IGetElement;
use Rubricate\Element\CreateElement;

class ColGrid implements IGetElement
{
    private $grid;
    private $colFormat;

    public function __construct(
        $colFormat, $size, $e, $attrArr = array() 
    )
    {
        self::init($colFormat, $size, $e, $attrArr);
    }

    public function getElement(): string
    {
        return $this->grid->getElement() . "\n";
    } 

    private function init($colFormat, $size, IGetElement $e, $attrArr): void
    {
        $grid  = new CreateElement('div') ;
        $class = sprintf($colFormat, $size);

        if (array_key_exists('class', $attrArr)) {
            $class =  $class . ' ' . $attrArr['class'];
            unset($attrArr['class']);
        }

        $grid->setAttribute('class', $class);

        if (count((array) $attrArr)) {
            foreach ($attrArr as $key => $value) {
                $grid->setAttribute($key, $value);
            }
        }

        $grid->addChild($e);
        $this->grid = $grid;
    } 

}

