<?php
function loadlogo()
{
    $sql = "select *from logo_header";
    $listlogo = pdo_query($sql);
    return $listlogo;
}
