<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BuilderGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:generator {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate CRUD controller view model';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    protected function getColumn($name)
    {
        return DB::table("information_schema.COLUMNS")
        ->select('COLUMN_NAME')
        ->where('table_schema', env('DB_DATABASE'))
        ->where('TABLE_NAME', $name)->get();
    }

    protected function getStub($type)
    {
        if ($type == "Controller" || $type == "Model") {
            return file_get_contents(resource_path("stubs/$type.stub"));
        } else {

            if ($type == "index.blade") {
                return file_get_contents(resource_path("stubs/$type.stub"));
            }
            if ($type == "form.blade") {
                return file_get_contents(resource_path("stubs/$type.stub"));
            }
            if ($type == "edit.blade") {
                return file_get_contents(resource_path("stubs/$type.stub"));
            }
            if ($type == "show.blade") {
                return file_get_contents(resource_path("stubs/$type.stub"));
            }
        }
    }

    protected function controller($name)
    {
        $datas = $this->getColumn($name);

        $controllerTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePlural}}',
                '{{modelNameSingular}}',
                '{{id}}'
            ],
            [
                $name,
                strtolower(str::plural($name)),
                strtolower($name),
                $datas[0]->COLUMN_NAME
            ],
            $this->getStub('Controller')
        );
        file_put_contents(app_path("/Http/Controllers/{$name}Controller.php"), $controllerTemplate);
    }

    protected function model($name)
    {
        $datas = $this->getColumn($name);
        foreach ($datas as $data) {

            $col[] = "'" . $data->COLUMN_NAME . "'";
        }
        $col = implode(",\n", $col);
        $modelTemplate = str_replace(
            ['{{modelName}}', '{{modelNamePlural}}', '{{modelNameSingular}}', '{{col}}'],
            [$name, strtolower(str::plural($name)), strtolower($name), $col],
            $this->getStub('Model')
        );
        file_put_contents(app_path("/Models/{$name}.php"), $modelTemplate);
    }

    protected function view_form($datas, $name)
    {
        $form = array();
        foreach ($datas as $data) {
            $form[] = "<div class='form-group'>
                        {!! Form::label('$data->COLUMN_NAME'); !!}
                        {{ Form::text('$data->COLUMN_NAME', null, array_merge(['class' => 'form-control','placeholder'=>'$data->COLUMN_NAME'])) }}
                     </div>";
        }
        $form_html = implode("\n", $form);
        $viewTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePlural}}',
                '{{modelNameSingular}}',
                '{{form}}',
            ],
            [$name, strtolower(str::plural($name)), strtolower($name), $form_html,],
            $this->getStub('form.blade')
        );

        file_put_contents(resource_path("/views/" . strtolower($name) . "/form.blade.php"), $viewTemplate);
    }

    protected function view_edit($datas, $name)
    {
        $form = array();
        foreach ($datas as $data) {
            $param = '$' . strtolower($name) . '->' . $data->COLUMN_NAME;
            $form[] = "<div class='form-group'>
                        {!! Form::label('$data->COLUMN_NAME'); !!}
                        {{ Form::text('$data->COLUMN_NAME',$param, array_merge(['class' => 'form-control','placeholder'=>'$data->COLUMN_NAME'])) }}
                     </div>";
        }
        $form_html = implode("\n", $form);
        $dataid = DB::table("information_schema.COLUMNS")
        ->select('COLUMN_NAME')
        ->where('table_schema', env('DB_DATABASE'))
        ->where('TABLE_NAME', $name)->where('COLUMN_KEY', 'PRI')->get()->toArray();
        $id = '$' . strtolower($name) . '->' . $dataid[0]->COLUMN_NAME;
        $viewTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePlural}}',
                '{{modelNameSingular}}',
                '{{form}}',
                '{{id}}'
            ],
            [$name, strtolower(str::plural($name)), strtolower($name), $form_html, $id],
            $this->getStub('edit.blade')
        );

        file_put_contents(resource_path("/views/" . strtolower($name) . "/edit.blade.php"), $viewTemplate);
    }

    protected function view_show($datas, $name)
    {
        $form = array();
        foreach ($datas as $data) {
            $param = '$' . strtolower($name) . '->' . $data->COLUMN_NAME;
            $form[] = "<div class='form-group'>
                            <strong>$data->COLUMN_NAME</strong>
                            {!!" . $param . "!!}
                        </div>";
        }
        $form_html = implode("\n", $form);

        $viewTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePlural}}',
                '{{modelNameSingular}}',
                '{{form}}',
            ],
            [$name, strtolower(str::plural($name)), strtolower($name), $form_html],
            $this->getStub('show.blade')
        );
        file_put_contents(resource_path("/views/" . strtolower($name) . "/show.blade.php"), $viewTemplate);
    }

    protected function view($name)
    {
        $datas = $this->getColumn($name);
        $header = array();
        $body = array();
        foreach ($datas as $data) {

            $header[] = "<th>$data->COLUMN_NAME</th>";
            $body[] = '<td>{{$data->' . $data->COLUMN_NAME . '}}</td>';
            $column[] = "{data:'$data->COLUMN_NAME',name:'$data->COLUMN_NAME'},";
        }
        $tab_heder = implode(" ", $header);
        $tab_body = implode(" ", $body);
        $col = implode(" ", $column);
        $viewTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePlural}}',
                '{{modelNameSingular}}',
                '{{header}}',
                '{{body}}',
                '{{id}}',
                '{{tbody}}'
            ],
            [$name, strtolower(str::plural($name)), strtolower($name), $tab_heder, $tab_body, $datas[0]->COLUMN_NAME, $col],
            $this->getStub('index.blade')
        );
        if (!file_exists(resource_path("/views/" . strtolower($name)))) {
            File::makeDirectory(resource_path("/views/" . strtolower($name)), 0777, true);
        } else {
            File::deleteDirectory(resource_path("/views/" . strtolower($name)));
            File::makeDirectory(resource_path("/views/" . strtolower($name)), 0777, true);
        }

        file_put_contents(resource_path("/views/" . strtolower($name) . "/index.blade.php"), $viewTemplate);

        $this->view_form($datas, $name);

        $this->view_edit($datas, $name);

        $this->view_show($datas, $name);
    }
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $this->controller($name);
        $this->model($name);
        $this->view($name);
        //create api route
        File::append(
            base_path('routes/web.php'),
            "Route::get('" . str::plural(strtolower($name)) . "', [App\Http\Controllers\\" . $name . "Controller::class, 'index'])->name('".strtolower($name).".index');
            Route::get('" . str::plural(strtolower($name)) . "/create', [App\Http\Controllers\\" . $name . "Controller::class, 'create'])->name('".strtolower($name).".create');
            Route::post('" . str::plural(strtolower($name)) . "/store', [App\Http\Controllers\\" . $name . "Controller::class, 'store'])->name('".strtolower($name).".store');
            Route::get('" . str::plural(strtolower($name)) . "/show/{id}', [App\Http\Controllers\\" . $name . "Controller::class, 'show'])->name('".strtolower($name).".show');
            Route::get('" . str::plural(strtolower($name)) . "/edit/{id}', [App\Http\Controllers\\" . $name . "Controller::class, 'edit'])->name('".strtolower($name).".edit');
            Route::post('" . str::plural(strtolower($name)) . "/update/{id}', [App\Http\Controllers\\" . $name . "Controller::class, 'update'])->name('".strtolower($name)."update');
            Route::get('" . str::plural(strtolower($name)) . "/destroy/{id}', [App\Http\Controllers\\" . $name . "Controller::class, 'destroy'])->name('".strtolower($name).".delete');
      "
        );
    }
}
