<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
 * The database connection that should be used by the migration.
 *指定哪一張表
 * @var string
 */
protected $connection = 'news';

/**
     * The primary key associated with the table.
     *主鍵是哪個欄位
     * @var string
     */
    protected $primaryKey = 'id';

/**
     * The attributes that are mass assignable.
     *白名單
     * @var array
     */
    protected $fillable = ['img_path', 'title', 'my_content'];
}
