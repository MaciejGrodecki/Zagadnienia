<?php
class DateController extends CController
{
    public function actionIndex()
    {
        Date::GetCurrentDate();
    }

    public function actionAdd()
    {
        $currentDate = date('d.m.Y');
        $newDate = date('Y-m-d', strtotime($currentDate. ' + 2 days'));

        $this->render('add', array('date' => $newDate));
    }
}