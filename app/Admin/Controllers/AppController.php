<?php

namespace App\Admin\Controllers;

use App\Models\App;
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
            ->header('Index')
            ->description('description')
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

        $grid->id('Id');
        $grid->cat_id('Cat id');
        $grid->name('Name');
        $grid->keywords('Keywords');
        $grid->abstract('Abstract');
        $grid->imgs('Imgs');
        $grid->is_publish('Is publish');
        $grid->is_recommend('Is recommend');
        $grid->publish_date('Publish date');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

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
        $show->cat_id('Cat id');
        $show->name('Name');
        $show->keywords('Keywords');
        $show->abstract('Abstract');
        $show->imgs('Imgs');
        $show->is_publish('Is publish');
        $show->is_recommend('Is recommend');
        $show->publish_date('Publish date');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

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

        $form->number('cat_id', 'Cat id');
        $form->text('name', 'Name');
        $form->textarea('keywords', 'Keywords');
        $form->textarea('abstract', 'Abstract');
        $form->textarea('imgs', 'Imgs');
        $form->switch('is_publish', 'Is publish');
        $form->switch('is_recommend', 'Is recommend');
        $form->datetime('publish_date', 'Publish date')->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
