<?php 

/*
 * @package     Rubricate
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/senun
 * @copyright   2017-2018
 * 
 */


namespace Rubricate\Grid;

use Rubricate\Element\IGetElement;
use Rubricate\Element\CreateElement;


class ColGrid implements IGetElement
{

    private $grid;
    private $attrClassStrWrap;

    public function __construct(
        $attrClassStrWrap, $size, $e, $attrArr = array() 
    )
    {
        self::init($attrClassStrWrap, $size, $e, $attrArr);
    }



    public function getElement()
    {
        return $this->grid->getElement() . "\n";
    } 


    private function init($attrClassStrWrap, $size, IGetElement $e, $attrArr)
    {
        $grid  = new CreateElement('div') ;
        $class = sprintf($attrClassStrWrap, $size);

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

