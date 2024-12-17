<?php session_start();
// var_dump($_SESSION);
// exit;
$user_id = $_SESSION['user_id'];
include('connection/connection.php');

$sql1 = "SELECT * FROM client WHERE client_id=$user_id";
$result1 = $connection->query($sql1);
$user = $result1->fetch_assoc();

$sql = "SELECT * FROM invoice WHERE client_id=$user_id";
$result = $connection->query($sql);
$cart = $result->fetch_assoc();

// exit;
// var_dump($cart);exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>


<body>
    <div class="tables-container">
        <div class="delivery-info-container">
            <h2 class="section-title">Delivery Information</h2>
            <section class="checkout-container">
                <div class="delivery-info">
                    <form method="post" action="order.php">
                        <div class="form-group">
                            <label for="name">Usert Name</label>
                            <input type="text" id="name" name="first_name" value="<?php echo $user['username'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="<?php echo $user['email'] ?>">
                        </div>


                        <div class="form-group">
                            <label for="mobile">Phone</label>
                            <input type="tel" id="mobile" name="mobile">
                        </div>

                        <div class="form-group">
                            <label for="city">City:</label>
                            <select id="city" name="city" required>
                                <option value="" disabled selected>Select your city</option>
                                <!-- Beirut Governorate -->
                                <option value="beirut">Beirut</option>

                                <!-- Mount Lebanon -->
                                <option value="jounieh">Jounieh</option>
                                <option value="baabda">Baabda</option>
                                <option value="aley">Aley</option>
                                <option value="chouf">Chouf</option>
                                <option value="matn">Matn</option>

                                <!-- North Lebanon -->
                                <option value="tripoli">Tripoli</option>
                                <option value="zgharta">Zgharta</option>
                                <option value="bcharre">Bcharre</option>
                                <option value="batroun">Batroun</option>
                                <option value="minieh-danniyeh">Minieh-Danniyeh</option>

                                <!-- South Lebanon -->
                                <option value="sidon">Sidon</option>
                                <option value="tyre">Tyre</option>
                                <option value="jezzine">Jezzine</option>

                                <!-- Bekaa -->
                                <option value="baalbek">Baalbek</option>
                                <option value="zahle">Zahle</option>
                                <option value="hermel">Hermel</option>

                                <!-- Nabatieh -->
                                <option value="nabatieh">Nabatieh</option>
                                <option value="bint-jbeil">Bint Jbeil</option>
                                <option value="marjeyoun">Marjeyoun</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="state">GOV:</label>
                            <select id="state" name="state" required>
                                <option value="" disabled selected>Select your governorate</option>
                                <option value="beirut-governorate">Beirut Governorate</option>
                                <option value="mount-lebanon">Mount Lebanon</option>
                                <option value="north-lebanon">North Lebanon</option>
                                <option value="south-lebanon">South Lebanon</option>
                                <option value="bekaa">Bekaa</option>
                                <option value="nabatieh">Nabatieh</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="zip">ZIP</label>
                            <input type="text" id="zip" name="zip" placeholder="Enter Zip code">
                        </div>
                        <div class="form-group">
                            <label for="address">Street Address</label>
                            <input type="text" id="address" name="address" placeholder="Enter Street Address">
                        </div>
                </div>
            </section>
        </div>

        <?php

        $subtotal = 0;
        $shipping = 5;
        $total = 0;

        // Calculate totals
        foreach ($cart as $item) {
            $subtotal += $item['product_price'] * $item['quantity'];
        }
        $total = $subtotal + $shipping;
        ?>

<form action="order.php" method="POST">
    <div class="order-summary-container">
        <h2 class="order-title">Order Summary</h2>
        <section class="order-summary-section">
            <div class="summary-container">
                <div class="order-summary">
                    <div class="cart-container">
                        <?php if (!empty($cart)): ?>
                            <?php foreach ($cart as $index => $item): ?>
                                <div class="order-item d-flex align-items-center justify-content-between mb-3"
                                    style="border-bottom: 1px solid #ddd; padding-bottom: 10px;">
                                    <!-- Product Details -->
                                    <div class="item-details flex-grow-1" style="text-align: left;">
                                        <p class="mb-1 fw-bold"><?php echo htmlspecialchars($item['product_name']); ?></p>
                                        <input type="hidden" name="cart[<?php echo $index; ?>][product_name]"
                                               value="<?php echo htmlspecialchars($item['product_name']); ?>">
                                    </div>

                                    <!-- Quantity -->
                                    <div class="item-quantity" style="flex: 0 0 60px; text-align: center;">
                                        <p class="quantity mb-0 fw-bold" style="line-height: 1.5; font-size: 16px;">
                                            <?php echo htmlspecialchars($item['quantity']); ?>
                                        </p>
                                        <input type="hidden" name="cart[<?php echo $index; ?>][quantity]"
                                               value="<?php echo htmlspecialchars($item['quantity']); ?>">
                                    </div>

                                    <!-- Price -->
                                    <div class="item-price text-end" style="flex: 0 0 80px;">
                                        <p class="price mb-0 fw-semibold" style="line-height: 1.5; font-size: 16px;">
                                            $<?php echo number_format($item['product_price'], 2); ?>
                                        </p>
                                        <input type="hidden" name="cart[<?php echo $index; ?>][product_price]"
                                               value="<?php echo htmlspecialchars($item['product_price']); ?>">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>Your cart is empty!</p>
                        <?php endif; ?>
                    </div>

                    <!-- Totals Section -->
                    <div class="summary-totals">
                        <div class="subtotal">
                            <span>Subtotal (<?php echo array_sum(array_column($cart, 'quantity')); ?> items)</span>
                            <span>$<?php echo number_format($subtotal, 2); ?></span>
                        </div>
                        <div class="shipping">
                            <span>Shipping</span>
                            <span><?php echo $shipping > 0 ? '$' . number_format($shipping, 2) : 'FREE'; ?></span>
                        </div>
                        <div class="total">
                            <strong>Total</strong>
                            <strong>$<?php echo number_format($total, 2); ?></strong>
                        </div>
                    </div>

                    <input type="hidden" name="total" value="<?php echo $total; ?>">
                </div>
                <button type="submit" class="submit-btn">Submit Order</button>
            </div>
        </section>
    </div>
</form>



        </section>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #72355e;
                margin: 0;
                padding: 0;
            }


            h2.section-title {
                text-align: left;
                font-size: 28px;
                color: #333;
                margin-bottom: 15px;
                margin-left: -2%;
                font-family: 'Times New Roman', Times, serif;
            }

            /* edit title of"Order Summary" */
            h2.order-title {
                text-align: left;
                font-size: 28px;
                color: #333;
                margin-bottom: 15px;
                margin-right: 10px;
                font-family: 'Times New Roman', Times, serif;
            }

            .tables-container {
                display: flex;
                justify-content: space-between;
                /* توزيع الجدولين بجانب بعض */
                gap: 0px;
                padding: 40px;
            }

            .delivery-info-container {
                flex: 1;
                display: flex;
                flex-direction: column;
            }

            .order-summary-container {
                flex: 1;
                display: flex;
                flex-direction: column;

            }

            .checkout-container {
                display: flex;
                justify-content: flex-start;
                align-items: flex-start;
                width: 120%;
                margin-right: 10px;
            }

            .delivery-info {
                background-color: #fff;
                padding: 35px;
                width: 700px;
                height: 600px;
                margin-left: -20px;
            }

            .form-group {
                margin-bottom: 25px;
                display: flex;
                align-items: center;
                gap: 0px;
            }

            .form-group label {
                display: block;
                font-size: 14px;
                color: #555;
                margin-bottom: 0px;
                width: 10%;
                margin-right: -4px;
            }


            .form-group input {
                width: 100%;
                padding: 15px;
                border: 1px solid #ccc;
                font-size: 16px;
            }


            .form-group select {
                width: 100%;
                padding: 15px;
                border: 1px solid #ccc;
                font-size: 16px;
                background-color: #fff;
                color: #555;
                box-sizing: border-box;
                /* لضبط الحجم مع المسافات الداخلية */
            }


            .order-summary-section {
                display: flex;
                justify-content: center;
                padding: 20px;
                min-height: 580px;
            }

            .summary-container {
                width: 110%;
                height: 105%;
                background-color: #fff;
                padding: 20px;
                margin-top: -19px;
                margin-left: -8px;
                margin-right: -45px;
                padding-bottom: 47px;
            }

            .order-summary {
                border-bottom: 1px solid #ddd;
                padding-bottom: 20px;
                min-height: 400px;
            }

            .order-item {
                display: flex;
                align-items: center;
                justify-content: space-between;
                /*border-bottom: 1px solid #ddd;*/
                padding: 10px 0;
                position: relative;
            }

            .remove-item-btn {
                position: absolute;
                top: -3px;
                right: -10px;
                background: none;
                border: none;
                font-size: 28px;
                cursor: pointer;
                color: #f00;
                /* لون الزر */
            }

            .order-item img {
                max-width: 100px;
                margin-right: 10px;
            }

            .item-details {
                flex-grow: 1;
            }

            .item-quantity {
                display: flex;
                align-items: center;

            }

            .quantity-btn {
                background-color: #f0f0f0;
                border: 1px solid #ccc;
                padding: 7px;
                margin: 0 5px;
            }


            .payment-summary {
                padding: 10px;
                margin-bottom: -5px;
            }


            .apply-btn {
                background-color: #fae1eb;
                color: white;
                border: none;
                padding: 10px;
                cursor: pointer;
                width: 80px;
            }

            .apply-btn:hover {
                background-color: #fae1eb;
            }

            .summary-totals {
                display: flex;
                flex-direction: column;
            }

            .summary-totals div {
                display: flex;
                justify-content: space-between;
                padding: 10px 0;
            }

            .summary-totals .total {
                border-top: 1px solid #ddd;
                padding-top: 15px;
                font-weight: bold;
            }


            /* Modal Styles */
            .modal {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.6);
                justify-content: center;
                align-items: center;
                z-index: 1000;
            }

            .modal-content {
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                text-align: center;
                max-width: 400px;
                width: 90%;
            }

            .confirm-btn {
                background-color: #fae1eb;
                color: white;
                padding: 10px 20px;
                border: none;
            }

            /* تنسيق عنوان "Payment Method" */
            h2.payment-title {
                text-align: left;
                font-size: 25px;
                color: #333;
                margin-bottom: 25px;
                /* المسافة تحت العنوان */
                margin-top: 50px;
                margin-left: 0px;
                font-family: 'Times New Roman', Times, serif;
            }

            /* تنسيق الحاوية المشتركة */
            .section-container {
                background-color: #fae1eb;
                /* لون الخلفية للحاوية */
                padding: 20px;
                /* إزالة المسافات الداخلية إن وجدت */
                margin-top: -180px;
                /* تقليل المسافة فوق الحاوية لتحريكها للأعلى */
                width: 720px;
                /* عرض مناسب للحاوية */
                margin-right: 10px;
                /* المسافة من اليسار */
            }


            /* تنسيق قسم "Payment Method" */
            .payment-method {
                background-color: #fff;
                padding: 0px 10px;
                width: 750px;
                /* عرض مناسب للقسم */
                margin-top: -22px;
                /* المسافة فوق القسم */
                margin-left: 0px;
            }

            /* تنسيق خيارات الدفع */
            .payment-method label {
                display: inline-block;
                font-size: 16px;
                color: #555;
                margin-bottom: 30px;
                /* المسافة بين خيارات الدفع */
                position: relative;
                /* ضروري لوضع الـ checkboxes بجانب النص */
                padding-left: 25px;
                /* المسافة بين الـ radio button والنص */
            }

            .payment-method input[type="radio"] {
                position: absolute;
                left: 0;
                top: 26%;
                transform: translateY(-50%);
            }

            /* تنسيق التأكيد على خيارات الدفع */
            .payment-method input[type="radio"]+span {
                margin-left: 5px;
                /* مسافة بين الـ radio button والنص */
            }

            /* تنسيق النص الخاص بخيارات الدفع */
            .payment-method span {
                font-size: 16px;
                color: #555;
            }

            .payment-method form {
                display: flex;
                gap: 90px;
                flex-wrap: wrap;
                top: 15px;
            }


            form {
                position: relative;
                /* للسماح بوضع الزر في مكان محدد داخل النموذج */
            }

            .submit-btn {
                position: absolute;
                margin-top: -70px;
                /* محاذاة من الأسفل */
                margin-right: 10px;
                right: 15px;
                /* محاذاة إلى اليسار */
                padding: 10px 50px;
                font-size: 16px;
                transition: background-color 0.3s ease;
                background-color: #72355e;
                color: white;
                border: none;
                cursor: pointer;
            }

            .submit-btn:hover {
                background-color: #45a049;
            }
        </style>

        <script>
            // Function to update subtotal and total
            function updateSummary() {
                let items = document.querySelectorAll('.order-item');
                let subtotal = 0;
                let totalItems = 0;

                items.forEach(item => {
                    let price = parseFloat(item.querySelector('.price').textContent.replace('$', ''));
                    let quantity = parseInt(item.querySelector('.quantity').textContent);
                    subtotal += price * quantity;
                    totalItems += quantity;
                });

                // تحديث النصوص في واجهة المستخدم
                document.querySelector('.subtotal span:nth-child(2)').textContent = '$' + subtotal.toFixed(2);
                document.querySelector('.total strong:nth-child(2)').textContent = '$' + subtotal.toFixed(2);
                document.querySelector('.subtotal span:nth-child(1)').textContent = 'Subtotal (${totalItems} items)';
            }

            // Function to update item quantity
            function updateQuantity(button, increase) {
                let quantityElement = button.parentElement.querySelector('.quantity');
                let currentQuantity = parseInt(quantityElement.textContent);

                // Increment or decrement quantity
                currentQuantity += increase ? 1 : -1;

                // Ensure quantity does not go below 0
                currentQuantity = Math.max(currentQuantity, 0);

                // Update quantity display
                quantityElement.textContent = currentQuantity.toString().padStart(2, '0');
                updateSummary();
            }

            // Add event listeners to quantity buttons
            document.querySelectorAll('.quantity-btn').forEach(button => {
                button.addEventListener('click', function() {
                    let increase = this.textContent.trim() === '+';
                    updateQuantity(this, increase);
                });
            });
            // Function to remove an order item
            function removeItem(button) {
                let orderItem = button.closest('.order-item');
                orderItem.remove();
                updateSummary();
            }

            // Add event listeners to remove buttons
            document.querySelectorAll('.remove-item-btn').forEach(button => {
                button.addEventListener('click', function() {
                    removeItem(this);
                });
            });
        </script>
</body>

</html>