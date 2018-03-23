<?php

    function fileManager()
    {
        return " <a href='".asset('filemanager/dialog.php?type=0&sort_by=date&akey=Pn34pn')."' class='btn btn-primary btn-lg filemanager'><i class='fa fa-image'></i> Images</a>";
    }

    function getPropByLang($object,$property,$lang=null){
        if($lang) return $object[$lang.'_'.$property];
        return $object[app('translator')->getLocale().'_'.$property];
    }