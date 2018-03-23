<?php

    function fileManager($class = null, $field = true)
    {
        $path = $field
            ? 'filemanager/dialog.php?type=0&sort_by=date&akey=Pn34pn&field_id=filemanager-url'
            : 'filemanager/dialog.php?type=0&sort_by=date&akey=Pn34pn';

        return " <a href='".asset($path)."' class='btn btn-primary btn-lg filemanager $class'><i class='fa fa-image'></i> Images</a>";
    }

    function getPropByLang($object,$property,$lang=null){
        if($lang) return $object[$lang.'_'.$property];
        return $object[app('translator')->getLocale().'_'.$property];
    }