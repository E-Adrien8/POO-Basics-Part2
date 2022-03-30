<?php
require_once 'Vehicle.php';
require_once 'Truck.php';

$truck = new Truck('pink', 2, 3000);


$truck -> setstorageCapacity(202);
echo $truck -> reallyEmptyTruck($truck);
echo $truck -> forward();