<?php if (! defined('PATH_SYSTEM')) die ('Bad rquested!');

/**
 * @package     FT_Framework
 * @author      Kevin
 * @email       mrtvie@gmail.com
 * @Copyright   Copyright(c) 2017
 */
class FT_Controller
{
    //đối tượng view
    protected $view = NULL;

    //đối tượng model
    protected $model = NULL;

    //đối tượng library
    protected $library = NULL;

    //đối tượng helper
    protected $helper = NULL;

    //đối tượng config
    protected $config = NULL;


    /**
     * Hàm khởi tạo
     * @desc: Load các thư viện cần thiết
     */

    public function __construct()
    {
    }

    /**
     * Hàm chạy ứng dụng
     *
     * @desc    tham số truyền vào gồm controller và action
     */

}