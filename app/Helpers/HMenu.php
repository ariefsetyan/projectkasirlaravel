<?php
if (!function_exists("GetMenu")){
    function GetMainMenu(){
        return \App\Models\Menus::with('subMenu')->where('is_active','=','t')->where('menus_id','=',0)->get()->toArray();
    }
}
