<?php

namespace App\Admin\Controllers;

use App\Models\App;
use App\Models\AppCat;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class AppController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('平台列表')
            ->description('(苹果赚钱，阅读赚钱，安卓赚钱，综合赚钱)')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new App);

        $grid->id('ID')->sortable();
        $grid->appcat()->name('栏目')->sortable();
        //$grid->column('appcat.name','栏目');
        $grid->name('平台名称')->sortable();
        $grid->keywords('关键词');
        $grid->abstract('简介');
        //$grid->picture('图片');
        $states = [
            'on' => ['value' => 1, 'text' =>'Yes', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'No', 'color' => 'danger'],
        ];
        $grid->is_publish('发布')->switch($states);
        $grid->is_recommend('推荐(热门)')->switch($states);
        /*$grid->column('设置')->switchGroup([
            'is_publish' => '发布',
            'is_recommend' => '推荐(热门)'
        ], $states);*/

        $grid->publish_date('发布时间');
        $grid->created_at('创建时间');
        $grid->updated_at('更新时间');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(App::findOrFail($id));

        $show->id('Id');
        $show->cat_id('栏目');
        $show->name('平台名称');
        $url = env('APP_URL').'/uploads';
        $show->logo('logo')->setEscape(false)->as(function ($logo) {
            return "<img src=". env('APP_URL') . "/uploads/{$logo}>";
        });
        $show->keywords('关键词');
        $show->abstract('简介');
        $show->picture('图片')->setEscape(false)->as(function ($pictures) {
            $data='';
            //$pictures=json_decode($pictures);
            if (count($pictures) > 0) {
                foreach ($pictures as $picture) {
                    $data = $data . '<img style="display:inline;float:left; width:30%; padding-right:1px" src=' . env('APP_URL') . "/uploads/{$picture}>";
                }
            }
            return $data;
        });
        $show->is_publish('发布');
        $show->is_recommend('推荐(热门)');
        $show->publish_date('发布时间');
        $show->created_at('创建时间');
        $show->updated_at('更新时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new App);
        $appCats = AppCat::all();
        $catsList = [];
        foreach ($appCats as $c) {
            $catsList[$c->id] = $c['name'];
        }
        $form->select('cat_id', '栏目')->options($catsList);
        $form->text('name', '平台名称');
        $form->image('logo', '平台Logo');
        $form->textarea('keywords', '关键词');
        $form->textarea('abstract', '简介');
        $form->multipleImage('picture', '图片')->removable();
        $states = [
            'on' => ['value' => 1, 'text' =>'Yes', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'No', 'color' => 'danger'],
        ];
        $form->switch('is_publish', '发布')->states($states);
        $form->switch('is_recommend', '推荐(热门)')->states($states);
        $form->datetime('publish_date', '发布时间')->default(date('Y-m-d H:i:s'));

        return $form;
    }

    public function sort(Request $request)
    {
        $entity = App::findOrFail($request->id);
        print_r($entity);exit;
        $positionEntity = App::findOrFail($request->positionEntityId);

        if ($request->type == 'moveAfter') {
            $entity->moveAfter($positionEntity);
        } else {
            $entity->moveBefore($positionEntity);
        }

        return ['success' => true];
    }

}
