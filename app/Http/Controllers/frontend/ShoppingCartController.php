<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Image;
use App\ProductSize;
use App\Size;
use Cart;
use App\Http\Requests\AddCartRequest;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['total'] = Cart::getTotal();
        $data['items'] = Cart::getContent();
        return view('frontend.cart.shoppingCart',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $product_id = $request->product_id;
            $size_id = $request->size_id;
            $product = Product::find($product_id);
            $price_sale = $product->price - ($product->price*$product->sale)/100;
            $image = Image::select('slug')->where('product_id',$product_id)->where('status',1)->orderBy('updated_at','desc')->first();
            $cart = Cart::add(array(
                    'id' => $product_id.$size_id,
                    'name' => $product->name,
                    'price' => $price_sale,
                    'quantity' => 1,
                    'attributes' => array('image' => $image->slug,'price_goc'=> $product->price, 'slug'=> $product->slug,'sale'=> $product->sale,'size_id' => $request->size_id, 'product_id' => $product_id)
                ));

                ?>
        <li><a class="active-icon" href="<?php echo route('shoppingCart-user'); ?>"  style="margin-top: 1%;color: #000;font-size: 25px;position: relative;">
                        <i class="fas fa-shopping-cart" style="margin-top: 9px"></i><span style="border-radius: 50px;padding: 1px 5px;background:#ff6517;color:#fff;font-size: 15px;position: absolute; top: 0px; right:-7px;font-size: 13px"><?php echo Cart::getTotalQuantity(); ?></span>
                     </a>
                <ul class="sub-icon2 list">
                    <li>
                        <div class="row" style="margin-bottom: 20px">
                <?php
            foreach(Cart::getContent() as $item){ 
                     $size = Size::select('name')->where('id',$item->attributes->size_id)->first(); 
                ?>
                    <div class="row" style="padding: 10px">
                        <div class="col-lg-4">
                        <img src="<?php echo asset($item->attributes->image); ?>" alt="" style="width: 80px">
                        </div>
                        <div class="col-lg-8" style="padding-right: 20px;line-height: 15px">
                            <span style="font-size: 12px;"><?php echo $item->name; ?></span>
                            <div class="col-lg-5">
                                <br><span>x<?php echo $item->quantity; ?> </span><span style="background: url(//theme.hstatic.net/1000243581/1000361905/14/bg-variant-checked.png?v=131) no-repeat right bottom #fff; padding:3px 5px; border: 1px solid #ccc;"><?php echo $size->name; ?></span> 
                            </div>
                            <div class="col-lg-7" style="line-height: 10px">
                                <br><span style="font-size: 12px;color: #ed4e4e"><?php echo number_format($item->price*$item->quantity,0); ?> ₫</span>
                                <!-- <button class="glyphicon glyphicon-remove deleteCart" data-idcart="  $item->id; ?>" style="color:red;text-decoration:none;border: none;background: #fff;"></button> -->

                                <a href=" <?php echo route('delete-cart-user',$item->id); ?>" class="glyphicon glyphicon-remove" style="color:red;text-decoration:none;"></a>
                            </div>
                        </div>
                    </div>
                <?php
            } ?>
                <div class="row" style="text-align: left;">
                    <span style="margin-left: 40px;margin-top: 20px">Tổng tiền:  <span style="font-size: 15px;color: #ed4e4e;margin-left: 40px" ><?php echo number_format(Cart::getTotal()); ?> ₫</span></span>
                </div>
                </div>
                
                <div class="row" style="margin-top: 10px">
                    <a href="<?php echo route('shoppingCart-user'); ?>" style="color: #fff;background: #000;text-decoration: none;padding: 7px 20px;margin-right: 10px;margin-left: 30px;border-radius: 0">XEM GIỎ HÀNG</a>
                    <?php if(Cart::getTotal() > 0) { ?>
                    <a href="<?php echo route('show-checkout-user'); ?>" style="color: #fff;background: #f72b3f;text-decoration: none;padding: 7px 20px;border-radius: 0">THANH TOÁN</a>
                    <?php }else{ ?>
                    <a href="<?php echo route('shoppingCart-user'); ?>" style="color: #fff;background: #f72b3f;text-decoration: none;padding: 7px 20px;border-radius: 0">THANH TOÁN</a>
                    <?php } ?>
                </div>
            </li>
        </ul>

    </li>
                        <?php
        }else{
            return response()->json([], 400);
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) //update quantity product cart
    {
        $cart = Cart::update($request->id, array(
          'quantity' => array(
              'relative' => false,
              'value' => $request->qty
          ),
        ));
        if ($cart) {
            return response()->json([], 200);
        }else{
            return response()->json([], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAjax(Request $request)
    {
        if($request->ajax())
        {
            $id = $request->cart_id;
            Cart::remove($id);


            ?>
        <li><a class="active-icon" href=" <?php echo route('shoppingCart-user'); ?>"  style="margin-top: 1%;color: #000;font-size: 25px;position: relative;">
                        <i class="fas fa-shopping-cart" style="margin-top: 9px"></i><span style="border-radius: 50px;padding: 1px 5px;background:#ff6517;color:#fff;font-size: 15px;position: absolute; top: 0px; right:-7px;font-size: 13px"><?php echo Cart::getTotalQuantity(); ?></span>
                     </a>
                <ul class="sub-icon2 list">
                    <li>
                        <div class="row" style="margin-bottom: 20px">
                <?php
            foreach(Cart::getContent() as $item){ 
                     $size = Size::select('name')->where('id',$item->attributes->size_id)->first(); 
                ?>
                    <div class="row" style="padding: 10px">
                        <div class="col-lg-4">
                        <img src="<?php echo asset($item->attributes->image); ?>" alt="" style="width: 80px">
                        </div>
                        <div class="col-lg-8" style="padding-right: 20px;line-height: 15px">
                            <span style="font-size: 12px;"><?php echo $item->name; ?></span>
                            <div class="col-lg-5">
                                <br><span>x<?php echo $item->quantity; ?> </span><span style="background: url(//theme.hstatic.net/1000243581/1000361905/14/bg-variant-checked.png?v=131) no-repeat right bottom #fff; padding:3px 5px; border: 1px solid #ccc;"><?php echo $size->name; ?></span> 
                            </div>
                            <div class="col-lg-7" style="line-height: 10px">
                                <br><span style="font-size: 12px;color: #ed4e4e"><?php echo number_format($item->price*$item->quantity,0); ?> ₫</span>
                               <!--  <button class="glyphicon glyphicon-remove deleteCart" data-idcart="  $item->id; ?>" style="color:red;text-decoration:none;border: none;background: #fff;"></button> -->

                                <a href=" <?php echo route('delete-cart-user',$item->id); ?>" class="glyphicon glyphicon-remove" style="color:red;text-decoration:none;"></a>
                            </div>
                        </div>
                    </div>
                <?php
            } ?>
                <div class="row" style="text-align: left;">
                    <span style="margin-left: 40px;margin-top: 20px">Tổng tiền:  <span style="font-size: 15px;color: #ed4e4e;margin-left: 40px" ><?php echo number_format(Cart::getTotal()); ?> ₫</span></span>
                </div>
                </div>
                
                <div class="row" style="margin-top: 10px">
                    <a href="<?php echo route('shoppingCart-user'); ?>" style="color: #fff;background: #000;text-decoration: none;padding: 7px 20px;margin-right: 10px;border-radius: 0">XEM GIỎ HÀNG</a>
                    <?php if(Cart::getTotal() > 0) { ?>
                    <a href="<?php echo route('show-checkout-user'); ?>" style="color: #fff;background: #f72b3f;text-decoration: none;padding: 7px 20px;border-radius: 0">THANH TOÁN</a>
                    <?php }else{ ?>
                    <a href="<?php echo route('shoppingCart-user'); ?>" style="color: #fff;background: #f72b3f;text-decoration: none;padding: 7px 20px;border-radius: 0">THANH TOÁN</a>
                    <?php } ?>
                </div>
            </li>
        </ul>

    </li>
                        <?php

        }
    }

    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
}
