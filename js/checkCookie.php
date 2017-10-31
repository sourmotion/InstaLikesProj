<?php
/**
 * Created by PhpStorm.
 * User: Philipp
 * Date: 29.10.2017
 * Time: 14:09
 */

require_once '../login_signin/checkerToken.php';

if(tokenSetAndRight())
    echo true;
else
    echo false;