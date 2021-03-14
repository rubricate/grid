# Rubricate Grid

```
$ composer require rubricate/grid
```

## Example


### Class RowGridHelper

```php
<?php
# file: RowGridHelper.php

class RowGridHelper extends Rubricate\Grid\AbstractRowGrid
{

    private $row = 'row';
    private $col = 'col-%s';

    protected function getRow()
    {
        return $this->row;
    }


    protected function getColFormat()
    {
        return $this->col;
    }
}

```



### Grid Container

```php
<?php
# file: container.php

use Rubricate\Element\CreateElement;
use Rubricate\Element\StrElement;

$div = new CreateElement('div');

$row = new RowGridHelper();
$row->addCol(4, new StrElement('.col-4'));
$row->addCol(4, new StrElement('.col-4'));
$row->addCol(4, new StrElement('.col-4'));
$div->addChild($row);


$row = new RowGridHelper();
$row->addCol('sm-4', new StrElement('.col-sm-4'));
$row->addCol('sm-4', new StrElement('.col-sm-4'));
$row->addCol('sm-4', new StrElement('.col-sm-4'));
$div->addChild($row);


$row = new RowGridHelper();
$row->addCol('md-4', new StrElement('.col-md-4'));
$row->addCol('md-4', new StrElement('.col-md-4'));
$row->addCol('md-4', new StrElement('.col-md-4'));
$div->addChild($row);


$row = new RowGridHelper();
$row->addCol('lg-4', new StrElement('.col-lg-4'));
$row->addCol('lg-4', new StrElement('.col-lg-4'));
$row->addCol('lg-4', new StrElement('.col-lg-4'));
$div->addChild($row);


$row = new RowGridHelper();
$row->addCol('xl-4', new StrElement('.col-xl-4'));
$row->addCol('xl-4', new StrElement('.col-xl-4'));
$row->addCol('xl-4', new StrElement('.col-xl-4'));
$div->addChild($row);


echo $div->getElement();

```



### Example Page

```php
<?php
    
include '../vendor/autoload.php';

?><html>
  <header>
    <link href="bootstrap.min.css" />
  </header>
  <body>
    <div class="container">
        <?php include 'container.php'; ?>
    </div>
 </body>
</html>
<body>
```



