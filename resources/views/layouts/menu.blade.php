<?php
    $datas = \App\Models\Menus::where('is_active','=','t')->where('perent_menu_id','=',0)->get();
    $menu = "";
    foreach ($datas as $key => $row){
        if (\App\Models\Menus::where('perent_menu_id','=',$row->id)->count() >0){
            $menu .= '
                <li class="treeview">
                    <a href="#">
                        <i class="'.(!empty($row->icon)?$row->icon:"fa fa-circle-o").'"></i> <span>'.$row->name_menu.'</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">';
            $get_menu = \App\Models\Menus::where('perent_menu_id','=',$row->id)->get();
            foreach ($get_menu as $key => $value){
                $menu .= '<li><a href="'.route($value->route).'"><i class="'.(!empty($value->icon)?$value->icon:"fa fa-circle-o").'"></i> '.$value->name_menu.'</a></li>';
            }
            $menu .= '</ul></li>';
        }else{
            $menu .= '
                <li>
                    <a href="'.route($row->route).'">
                        <i class="fa fa-dashboard"></i> <span>'.$row->name_menu.'</span>

                    </a>
                </li>
                ';
        }
    }
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('asset/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            {!! $menu !!}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
