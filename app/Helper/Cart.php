<?php 
    namespace App\Helper;
    class Cart{
         //$items lưu trữ các thông tin sản phẩm
        public $items;
        public function __construct()
        {
            $this->items = session('cart'); //_trước khi qua hàm add sẽ qua hàm này, và items có dữ liệu rồi
        }
        //ham thêm sản phẩm 
        public function add($data,$quantity=1){
            
            if(isset($this->items[$data['id']])){
                $this->items[$data['id']]['quantity'] += 1;
            }
            else{
                $this->items[$data['id']] = $data;
                $this->items[$data['id']]['quantity'] = $quantity;
            }
            
            //Session trong laravel
            session([
                'cart'=>$this->items //add thêm thôi
            ]);
        }
        // hàm xóa sản phẩm trong giỏ hàng
        public function delete_cart($id){
            if($this->items[$id]){
                unset($this->items[$id]);
                session(['cart'=>$this->items]);
                return true;
            }else{
                return false;
            }
        }
        // hàm update số lượng trong giỏ hàng
        public function update_carts($id,$quantity){
            $quantity = is_numeric($quantity) ? $quantity : 1;
            $quantity = $quantity > 0 ? ceil($quantity) : 1;
            if(isset($this->items[$id])){
                $this->items[$id]['qty'] = $quantity;
                session(['cart' => $this->items]);
            }
        }
        // hàm xóa toàn bộ giỏ hàng
        public function clear_cart(){
            session(['cart'=>[]]);
        }
        //Hàm tính tổng tiền tất cả sản phẩm trong giỏ hàng
        public function total($typePrice){
            $tong = 0;
            if (count($this->items)){
                foreach($this->items as $item){
                    $tong = $tong+($item['qty']*$item[$typePrice]);   
                }
            }
            return $tong;
        }

        public function totalqty(){
            $sumqty = 0;
            if (count($this->items)){
                foreach($this->items as $item){
                    $sumqty = $sumqty+($item['qty']);   
                }
            }
            return $sumqty;
        }
        
    }       

