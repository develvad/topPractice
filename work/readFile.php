<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucan
 * Date: 15/9/15
 * Time: 19:32
 */

$fp = fopen("base.json", "r");

$res = fread($fp);


printf($linea = fgets($fp));