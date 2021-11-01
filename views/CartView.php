<?php 
    $this->fileLayout= "LayoutTrangTrong.php";
?>
<div class="cart" style="margin: 20px;border:1px solid black">
          <form action="/Cart/Update" method="post">
            <div class="table-responsive">
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                        <th scope="col">Ảnh sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá bán lẻ</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6"><a href="index.php?controller=cart&action=destroy" class="button pull-left">Xóa toàn bộ</a> <a href="index.php" class="button pull-right black">Tiếp tục mua hàng</a>
                            <input type="submit" class="button pull-right" value="Cập nhật"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
          </form>
          <div class="total-cart"> Tổng tiền thanh toán:
            88,990,000₫ <br>
            <a href="/Cart/Checkout" class="button black">Thanh toán</a> </div>
        </div>