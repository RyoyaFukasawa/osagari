<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    protected $title = 'Users';

    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('name_kana', __('Name_Kana'));
        $grid->column('gender_id', __('Gender_id'));
        $grid->column('email', __('Email'));
        $grid->column('google_id', __('Google_id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('name_kana', __('Name_Kana'));
        $show->field('gender_id', __('Gender_id'));
        $show->field('email', __('Email'));
        $show->field('google_id', __('Google_id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new User());

        $form->text('id', __('Id'));
        $form->text('name', __('Name'));
        $form->text('name_kana', __('Name_Kana'));
        $form->select('gender_id', __('Gender_id'))->options([1 => '男性', 2 => '女性']);
        $form->email('email', __('Email'));
        $form->text('google_id', __('Google_id'));
        $form->datetime('created_at', __('Created at'));
        $form->datetime('updated_at', __('Updated at'));

        return $form;
    }
}
