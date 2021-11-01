<?php 
    include "models/CartModel.php";
    class CartController extends Controller{
        use CartModel;
        public function __construct(){
            // ktra neu gio hang chua ton tai thi khoi tao no
            if(isset($_SESSION['cart'])== false)
                $_SESSION['cart'] = array();
        }
        // hien thi danh sach cac san pham trong gio hang
        public function index(){
            $this->loadView("CartView.php");
        }
        // them san pham vao gio hang
        public function create(){
            $id = isset($_GET["id"]) ? $_GET["id"] : 0;
            // goi han trong model
            $this->cartAdd($id);
            header("location:index.php?controller=cart");
        }
    }
?>