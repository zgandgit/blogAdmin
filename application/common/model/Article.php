<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-08
 * Time: 22:53
 */

namespace app\common\model;


class Article extends Base
{

    public function resource()
    {
        return $this->hasOne('Resource','id','cover', 'left');
    }

    public function classify()
    {
        return $this->hasOne('Classify','id','fid', 'left');
    }

    public function lists($condition = [],$order = '',$page = 0,$num = 10){

        $rows = $this;
        $rows->alias('a');
        $rows->join('resource b','a.cover = b.id','left');
        $rows->join('classify c','a.fid = c.id','');
        $rows->where($condition);
        $rows->field('a.*,c.name,b.url as cove_url');
        return $this->paginate($num);

    }

    public function findArticle($id){
        $rows = $this;
        $rows->alias('a');
        $rows->where(['a.id'=>$id]);
        $rows->join('resource b','a.cover = b.id','left');
        $rows->join('classify c','a.fid = c.id','');
        $rows->field('a.*,c.name,b.url as cove_url');
        return $this->find();
    }

    public function apiList($record){

        $query = $this;
        $query->with('resource');
        $query->with('classify');
        //查询默认帖子的分类
        $clist = model('Classify')->where(['superior_id'=>config('classify.articleFid')])->column('id');
        $sort = $record['sort'];//最新 最热 评论

        if(!empty($record['title'])){
            $query->where('title','like','%'.$record['title'].'%');
        }

        if(!empty($record['fid'])){
            $query->where(['fid'=>$record['fid']]);
        }else{
            $query->where('fid','in',$clist);
        }

        $order = 'add_time desc';
        if($sort == 'newest'){//点赞最多
            $order.= ',praise desc';
        }else if($sort == 'comment'){//有评论
            $order.= ',discuss desc';
        }
        $query->order($order);
        $data = $query->paginate($record['num'],false,[
            'page'     => $record['page']
        ]);

        return $data->toArray();

    }

    public function details($id){

        $query = $this;
        $query->with('resource');
        $query->with('classify');
        $query->where(['id'=>$id]);
        $data = $query->find();
        return $data->toArray();

    }



}