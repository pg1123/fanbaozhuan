<?php

namespace App\Admin\Controllers;

use App\Models\News;
use App\Models\NewsCat;
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
        $grid->newscat()->name('栏目')->sortable();
        $grid->title('Title');
        //$grid->content('Content');
        //$grid->picture('Picture');

        $states = [
            'on' => ['value' => 1, 'text' =>'Yes', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'No', 'color' => 'danger'],
        ];
        $grid->is_publish('发布')->switch($states);
        $grid->is_hot('热门')->switch($states);
        $grid->views('Views');
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
        $show->cat_id('栏目');
        $show->title('Title');
        $show->content('Content');
        $show->picture('Picture');
        $show->is_publish('Is publish');
        $show->is_hot('Is hot');
        $show->views('Views');
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
        $newsCats = NewsCat::all();
        $catsList = [];
        foreach ($newsCats as $c) {
            $catsList[$c->id] = $c['name'];
        }
        $form->select('cat_id', '栏目')->options($catsList);

        $form->text('title', 'Title');
        $form->editor('content', 'Content');
        $form->image('picture', '图片')->removable();
        $form->number('views', 'Views');
        $form->switch('is_hot', 'Is hot');
        $form->switch('is_publish', 'Is publish');
        $form->date('published_date', 'Published date')->default(date('Y-m-d'));

        return $form;
    }
}
