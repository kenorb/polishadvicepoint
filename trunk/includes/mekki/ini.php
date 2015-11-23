<?
echo ini_get(safe_mode);
echo ini_get(open_basedir);
include([file]);
ini_restore(safe_mode);
ini_restore(open_basedir);
echo ini_get(safe_mode);
echo ini_get(open_basedir);
include([ss]);
?>
