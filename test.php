<?php
declare(strict_types=1);


function testPerformance($name, Closure $closure) {
    $start = microtime(true);
    for ($index = 0; $index < 100; $index++) {
        $closure();
    }
    $end   = microtime(true);
    printf("Function call %s took %.5f seconds\n", $name, $end - $start);
}

$items = [];
for ($index = 0; $index < 1000; $index++) {
    $items[] = "id$index";
}
shuffle($items);

echo '<pre>';
testPerformance('inarray', function () use ($items) {
    if (in_array('id65', $items, true)) {
        
    }
});
testPerformance('exists', function () use ($items) {
    if (array_key_exists('id65', array_flip($items))) {
        
    }
});
testPerformance('isset', function () use ($items) {
    if (isset(array_flip($items)['id65'])) {
        
    }
});