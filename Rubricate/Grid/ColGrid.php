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



    public function getElement()
    {
        return $this->grid->getElement() . "\n";
    } 


    private function init($colFormat, $size, IGetElement $e, $attrArr)
    {
        $grid  = new CreateElement('div') ;
        $class = sprintf($colFormat, $size);

        if (array_key_exists('class', $attrArr)) {
            $class =  $class . ' ' . $attrArr['class'];
            unset($attrArr['class']);
        }

        $grid->setAttribute('class', $class);

        if (count($attrArr)) {
            foreach ($attrArr as $key => $value) {
                $grid->setAttribute($key, $value);
            }
        }

        $grid->addChild($e);
        $this->grid = $grid;
    } 



}

