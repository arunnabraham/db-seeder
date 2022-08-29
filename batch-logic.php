<?php
$limit = 21;
$batch = 5;
batchInsert($limit, $batch);
function batchInsert(int $limit, int $batch): void
{
    $remaining = $limit % $batch;
    $init = 1;
    $sequence = 1;
    $batchEnd = floor($limit / $batch);
    for ($i = $init; $i <= $batch; $i++) {

        for ($j = $sequence; $j <= batchLimit($batchEnd, $i); $j++) {
           $batchData[] = allocateData([

           ]);
        }

        $sequence = batchLimit($batchEnd, $i) + 1;
       // echo 'Next Batch!!' . PHP_EOL;
    }
    if ($remaining > 0) {
        batchInsert($remaining, 1);
    }
}

function batchLimit(int $batchEnd, int $i): int
{
    return $batchEnd * $i;
}

function allocateData(array $data)
{
    return $data;
}