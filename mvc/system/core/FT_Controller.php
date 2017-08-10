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

    public function load($controller, $action)
    {
        // Chuyển đổi tên controller vì nó có đinh dạng là {Name}_Controller
        $controller = ucfirst(strtolower($controller)) . '_Controller';

        // Chuyển đổi tên action nó có định dạn {name}Action
        $action = strtolower($action) . 'Action';

        echo PATH_APPLICATION;
        // Kiểm tra file controller có tồn tại hay không
        if (!file_exists(PATH_APPLICATION . '/controller/' . $controller . '.php')) {
            die ('Controller không tồn tại');
        }

        require_once PATH_APPLICATION . '/controller' . $controller . '.php';

        // Kiểm tra class controller có tồn tại hay không
        if (!class_exists($controller)) {
            die ('Controller không tồn tại');
        }

        // Khởi tạo controller
        $controllerObject = new $controller();

        // Kiem4 tra action có tồn tại hay không
        if (!method_exists($controllerObject, $action)) {
            die('Action không tồn tại');
        }

        // Gọi tới action
        $controllerObject -> {$action}();


    }

}