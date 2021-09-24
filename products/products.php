<?php
function showProduct($iconClass,$type,$code,$version,$title,$price,$ram,$cpu,$rom){
$product="
    <div class='col-md-4'>
            <div class='card text-center shadow my-4 py-4 position-relative'>
              <span
                class='
                  position-absolute
                  top-0
                  start-50
                  translate-middle
                  badge
                  rounded-pill
                  bg-danger
                  fw-bold
                  fs-6
                '
              >
                <span>Code:</span><span>$code</span>
              </span>
                <div class='card-body'>
                    <i class='$iconClass'></i>
                    <p class='lead card-title fw-bold my-3'>هاست $type</p>
                    <p class='lead card-title fw-bold my-3'>نسخه $type: $version</p>

                    <p class='card-text text-muted'>
                    $title                 
                    </p>
                    <p class='card-text text-muted'>
                        <span> قیمت(تومان): </span> <span>$price</span>
                    </p>
                    <p class='card-text text-muted'>
                        <span> $ram </span> <span>:RAM</span>
                    </p>
                    <p class='card-text text-muted'>
                        <span>$cpu </span> <span>:CPU</span>
                    </p>
                    <p class='card-text text-muted'>
                        <span>$rom</span> <span>:ROM</span>
                    </p>
                    <br />
                <button class='btn btn-primary'>
                  <span><i class='bi bi-cart-plus'></i></span> افزودن به سید
                  خرید
                </button>
              </div>
            </div>
          </div>
          ";
echo $product;
}
?>