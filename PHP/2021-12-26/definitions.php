<?php

const MAX_REDIRECTS_PER_MINUTE = 10;

$errorDefinitions = [


800 => sprintf('Reached %s limit links per minute.', MAX_REDIRECTS_PER_MINUTE),
801 =>'Missing link.',
801 =>'Link has unknown inputs.'

];
