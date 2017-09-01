<?php
/**
 * Created by PhpStorm.
 * User: dubz
 * Date: 2017/9/1
 * Time: 13:49
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * 此模型的连接名称。
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * 与模型关联的数据表。
     *
     * @var string
     */
    protected $table = 'wp_posts';
}
