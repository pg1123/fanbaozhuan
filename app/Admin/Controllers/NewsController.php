<?php

namespace App\Admin\Controllers;

use App\Models\News;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class NewsController extends Controller
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
        $grid = new Grid(new News);

        $grid->id('Id');
        $grid->cat_id('Cat id');
        $grid->title('Title');
        $grid->content('Content');
        $grid->picture('Picture');
        $grid->views('Views');
        $grid->is_hot('Is hot');
        $grid->is_publish('Is publish');
        $grid->published_date('Published date');
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
        $show = new Show(News::findOrFail($id));

        $show->id('Id');
        $show->cat_id('Cat id');
        $show->title('Title');
        $show->content('Content');
        $show->picture('Picture');
        $show->views('Views');
        $show->is_hot('Is hot');
        $show->is_publish('Is publish');
        $show->published_date('Published date');
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
        $form = new Form(new News);

        $form->number('cat_id', 'Cat id');
        $form->text('title', 'Title');
        $form->textarea('content', 'Content');
        $form->image('picture', '图片')->removable();
        $form->number('views', 'Views');
        $form->switch('is_hot', 'Is hot');
        $form->switch('is_publish', 'Is publish');
        $form->date('published_date', 'Published date')->default(date('Y-m-d'));

        return $form;
    }
}
