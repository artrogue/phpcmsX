<?php
class upolog {
    public function __construct() {
    }
    public function upverobj($t = false){
        $upobj = 'aHR0cHM6Ly91cGdyYWRlLnBocGNtc3gubmV0L3BhdGNoLw==';
        $md5obj = 'aHR0cHM6Ly91cGdyYWRlLnBocGNtc3gubmV0L3VwZ3JhZGVtZDUv';
        if($t) return base64_decode($md5obj);
        return base64_decode($upobj);
    }
}
?>