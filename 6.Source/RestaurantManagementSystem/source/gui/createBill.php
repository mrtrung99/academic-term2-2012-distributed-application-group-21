<?php
//check is_login
session_start();
$is_login = isset($_SESSION['is_login']) ? $_SESSION['is_login'] : false;
$staff_type = isset($_SESSION['staff_type']) ? $_SESSION['staff_type'] : "";

// check login
if ($is_login == false) {
	require_once '../configure/GeneralFunctions.php';
	echo GeneralFunctions::Alert("Bạn chưa đăng nhập.");
	header("Location: index.php");
}

// hard code to test staff_type
$staff_type = "NV Thu Ngan";
if ($staff_type != "NV Thu Ngan") {
	require_once '../configure/GeneralFunctions.php';
	echo GeneralFunctions::Alert("Bạn không có đủ quyền để thực hiện chức năng này.");
	header("Location: home.php");
}

require_once '../configure/IncludeGenerator.php';
require_once '../controller/GUIGenerator.php';

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>T4V RESTAURANT</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/createBill.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/start/jquery-ui-1.8.20.custom.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/jquery-ui-timepicker-addon.css" type="text/css" media="all" />   
        <script src="../js/lib/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../js/lib/jquery.jcarousel.pack.js" type="text/javascript"></script>
        <script src="../js/lib/jquery-ui-1.8.20.custom.min.js" type="text/javascript"></script>
        <script src="../js/lib/jquery-ui-timepicker-addon.js" type="text/javascript"></script>
        <script src="../js/lib/jquery.numericupdown.js" type="text/javascript"></script>
        
        <script src="../js/module_create_bill.js" type="text/javascript"></script>
        <script src="../js/general_functions.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="page" class="shell">
            <!-- Logo + Search + Navigation -->
            <?php
            echo IncludeGenerator::LogoGenerate(); 
            ?>
            <!-- END Logo + Search + Navigation -->                                  
            <!-- Main -->
            <div id="main">	
                <!-- Menu -->
                <div ><img id="button-show" title="Click here" src="../css/images/button-next.gif"/></div>
                <div id="menuDiv" class="menu" style="display:none">
                    <ul>
                        <li><a href="javascript:addBill()"><img src="../css/images/plusIcon.png" title="Thêm hóa đơn"/></a></li>
                        <li><a href="javascript:billingManagement()"><img src="../css/images/cashierIcon.png" title="Quản lý và thanh toán hóa đơn"/></a></li>
                    </ul>
                </div>
                <!-- END Menu -->         
                <!-- Main content -->
                <div class="main-content">             
                    <div id="slider-holder">
                        <ul>
                            <li>
                                <!-- Div for bill general info -->
                                <div class="bill-general-info">
                                    <table>
                                        <tr>
                                            <td>Ngày lập</td>
                                            <td><input id="date_founded" type="text" class="dtpker"></input></td>
                                            <td><button id="btnSearchFood" onclick="javascript:searchFood()">Lấy món ăn</button></td>                                
                                        </tr>
                                        <tr>
                                            <td>Mã phiếu đặt chỗ</td>
                                            <td><input id="bookingID" type="text"></input></td>
                                            <td><button id="bookingSearchBut">Tìm kiếm</button></td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- END Div for bill info -->
                                <!-- Div for food detail -->                    
                                <div id="food-list-detail" class="food-detail">
                                    <p>Chọn món ăn nhập vào hóa đơn</p>
                                    <table>
                                        <tr>
                                            <th><input type="checkbox" id="checkAllCBox" onclick="checkAllCBoxClicked();"></input></th>
                                            <th>Món ăn</th>
                                            <th>Giá thành</th>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></input></td>
                                            <td>Gà rán</td>
                                            <td>15.000</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></input></td>
                                            <td>Xà lách trộn</td>
                                            <td>5.500</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></input></td>
                                            <td>Trứng cút chiên</td>
                                            <td>5.000</td>
                                        </tr>
                                    </table>
                                    <!-- END food-tab -->
                                    <button class="nextBut" id="addFoodAmountBut">Nhập số lượng</button>
                                </div>

                            </li>
                            <li>
                                <!-- Div for food amount -->
                                <div class ="food-amount">
                                    <table>
                                        <!-- Note: to create a user-friendly GUI, set value of food amount (so luong mon an) to 1 (default)-->
                                        <tr>                                
                                            <th>Món ăn</th>
                                            <th>Giá thành</th>
                                            <th>Số lượng</th>
                                        </tr>
                                        <tr>                                
                                            <td>Gà rán</td>
                                            <td>15.000</td>
                                            <td><input type="text" value="1"></input></td>
                                        </tr>
                                        <tr>                                
                                            <td>Xà lách trộn</td>
                                            <td>5.500</td>
                                            <td><input type="text" value="1"></input></td>
                                        </tr>
                                    </table>
                                    <button class="backBut">Trở về</button>
                                    <button class="nextBut" >Kế tiếp</button>
                                </div>
                                <!-- END Div for food amount -->
                            </li>
                            <li>
                                <!-- Div for creating bill confirmation -->
                                <div class="bill-confirmation" title="Xác nhận lập hóa đơn">
                                    <p>Xin xác nhận lại thông tin đã nhập và nhấp "Lưu"</p>
                                    <table>                                        
                                        <tr>
                                            <td>Ngày lập</td>
                                            <td>14:00 12/10/2012</td>                                
                                        </tr>
                                        <tr>
                                            <td>Mã phiếu đặt chỗ</td>
                                            <td>456</td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>                                
                                            <th>Món ăn</th>
                                            <th>Giá thành</th>
                                            <th>Số lượng</th>
                                        </tr>
                                        <tr>                                
                                            <td>Gà rán</td>
                                            <td>15.000</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>                                
                                            <td>Xà lách trộn</td>
                                            <td>5.500</td>
                                            <td>5</td>
                                        </tr>
                                    </table>
                                    <button class="backBut">Trở về</button>
                                    <button>Lưu</button>
                                </div>
                                <!-- END Div for creating bill confirmation -->
                            </li>
                        </ul>
                    </div>
                    <!-- END Div for food detail -->                    
                </div>
                <!-- END Main content -->
            </div>
            <!-- END Main --> 

            <!-- Additional -->
            <!-- booking-search-dialog-->
            <div class="booking-search-dialog"  title="Tìm kiếm phiếu đặt chỗ">
                <!-- booking-search-table -->
                <div class="booking-search-div">
                    <table>
                        <tr>
                            <td>Ngày lập</td>
                            <td><input id="date_booking_founded" type="text" class="dtpker" ></input></td>
                        </tr>
                        <tr>
                            <td>Họ tên khách hàng</td>
                            <td><input id="customer_name" type="text"></input></td>
                        </tr>
                        <tr>
                            <td>Số CMND</td>
                            <td><input id="customer_id" type="text"></input></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><input id="customer_phone" type="text"></input></td>
                        </tr>
                    </table>
                    <button id="bookingSearchDialogBut">Tìm kiếm</button>
                </div>
                <!-- END booking-search-table -->
                <div id="booking-detail-div" class="booking-detail-div">
                    <table>
                        <tr>
                            <th>Mã phiếu</th>
                            <th>Ngày lập</th>
                            <th>Họ tên khách hàng</th>
                            <th>Số CMND</th>
                            <th>Số điện thoại</th>
                            <th>Người tiếp nhận</th>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>14:00 19/5/2012</td>
                            <td>Hà Thị Phương Thảo</td>
                            <td>29136889999</td>
                            <td>0944164989</td>
                            <td>Lê Văn Tuấn</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- END Addtitional -->         
            <!-- Footer -->
            <div id="footer">
                <p class="right">&copy; 2012 - T4V Restaurant &nbsp; Designed by T4V Group
                    <p>
                        <a href="#">Trang chủ</a><span>&nbsp;</span>
                        <a href="#">Giới thiệu</a><span>&nbsp;</span>
                        <a href="#">Liên hệ</a><span>&nbsp;</span>
                        <div class="cl">&nbsp;</div>
                    </p>
                </p>
            </div>
            <!-- END Footer -->
        </div> 
        <!-- END page -->        
    </body>

</html>