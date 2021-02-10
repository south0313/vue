<?php
    $i = 19;
    try {
        if ($i > 11) {
            throw new Exception("error");
        }
        
    } catch (Exception $e) {
        echo $e->getMessage();
    }