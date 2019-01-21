<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-19
 * Time: 19:41
 */

namespace app\common\model;


class Course extends Base
{

    public function courseList(){
        $rows = $this;
        $rows->alias('a');
        $rows->join('resource b','a.cover = b.id','left');
        $rows->field('a.*,b.url as cove_url');
        return $this->select();
    }

}