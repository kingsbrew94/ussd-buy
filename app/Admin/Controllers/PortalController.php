<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Portal;

class PortalController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Portal';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Portal());

        $grid->column('id', __('Id'));
        $grid->column('phoneNumber', __('PhoneNumber'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Portal::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('phoneNumber', __('PhoneNumber'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Portal());

        $form->text('phoneNumber', __('PhoneNumber'))
        ->rules(function ($form) {
            if (!$id = $form->model()->id) {
                return 'unique:Portal,phoneNumber';
            }
        });
        $form->select('status',__('Status'))->options([
            'WhiteListed' => 'WhiteList',
            'BlackListed' => 'BlackList',
        ])->default('WhiteListed');

        return $form;
    }
}
