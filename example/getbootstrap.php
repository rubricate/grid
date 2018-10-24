<?php
include '../vendor/autoload.php';

    
class RowGrid extends Rubricate\Grid\AbstractRowGrid
{

    private $row = 'row';
    private $col = 'col-%s';

    protected function getRowAttrStrClass()
    {
        return $this->row;
    }


    protected function getColAttrStrClassWrap()
    {
        return $this->col;
    }
}


?><!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Grid Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css" media="all">
        body { padding-top: 2rem; padding-bottom: 2rem; }

        h3 { margin-top: 2rem; }

        .row { margin-bottom: 1rem; }
        .row .row { margin-top: 1rem; margin-bottom: 0; }

        [class*="col-"] {
          padding-top: 1rem; padding-bottom: 1rem;
          background-color: rgba(86, 61, 124, .15);
          border: 1px solid rgba(86, 61, 124, .2);
        }

        hr { margin-top: 2rem; margin-bottom: 2rem; }

    </style>
  </head>

  <body>
    <div class="container">

      <h1>Bootstrap grid examples</h1>
      <p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>

      <h2>Five grid tiers</h2>
      <p>There are five tiers to the Bootstrap grid system, one for each range of devices we support. Each tier starts at a minimum viewport size and automatically applies to the larger devices unless overridden.</p>

<?php

use Rubricate\Element\CreateElement;
use Rubricate\Element\StrElement;

$div = new CreateElement('div');

$row = new RowGrid();
$row->addCol(4, new StrElement('.col-4'));
$row->addCol(4, new StrElement('.col-4'));
$row->addCol(4, new StrElement('.col-4'));
$div->addChild($row);


$row = new RowGrid();
$row->addCol('sm-4', new StrElement('.col-sm-4'));
$row->addCol('sm-4', new StrElement('.col-sm-4'));
$row->addCol('sm-4', new StrElement('.col-sm-4'));
$div->addChild($row);


$row = new RowGrid();
$row->addCol('md-4', new StrElement('.col-md-4'));
$row->addCol('md-4', new StrElement('.col-md-4'));
$row->addCol('md-4', new StrElement('.col-md-4'));
$div->addChild($row);


$row = new RowGrid();
$row->addCol('lg-4', new StrElement('.col-lg-4'));
$row->addCol('lg-4', new StrElement('.col-lg-4'));
$row->addCol('lg-4', new StrElement('.col-lg-4'));
$div->addChild($row);


$row = new RowGrid();
$row->addCol('xl-4', new StrElement('.col-xl-4'));
$row->addCol('xl-4', new StrElement('.col-xl-4'));
$row->addCol('xl-4', new StrElement('.col-xl-4'));
$div->addChild($row);


echo $div->getElement();

?>

    </div> <!-- /container -->
  </body>
</html>

