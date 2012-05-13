<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>T4V RESTAURANT</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/start/jquery-ui-1.8.20.custom.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/jquery-ui-timepicker-addon.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/seatManagement.css" type="text/css" media="all" />
        <script src="../js/lib/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../js/lib/jquery.jcarousel.pack.js" type="text/javascript"></script>
        <script src="../js/lib/jquery-ui-1.8.20.custom.min.js" type="text/javascript"></script>
        <script src="../js/lib/jquery-ui-timepicker-addon.js" type="text/javascript"></script>
        <script src="../js/seatManagementFunc.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="page" class="shell">
            <!-- Logo + Search + Navigation -->
            <div id="top">
                <div class="cl">&nbsp;</div>
                <h1 id="logo"><a href="#">T4V RESTAURANT</a></h1>          
                <div class="cl">&nbsp;</div>
                <div id="navigation">
                    <ul>
                        <li><a href="#" class="active"><span>Trang chủ</span></a></li>                        
                        <li><a href="#"><span>Giới thiệu</span></a></li>
                        <li><a href="#"><span>Liên hệ</span></a></li>
                    </ul>
                </div>	
            </div>
            <!-- END Logo + Search + Navigation -->                                  
            <!-- Main -->
            <div id="main">	
                <!-- Menu -->
                <div ><img id="button-show" title="Click here" src="../css/images/button-next.gif"/></div>
                <div id="menuDiv" class="menu" style="display:none">
                    <ul>
                        <li><a href="#"><img src="../css/images/plusIcon.png" title="Đặt chỗ"/></a></li>
                        <li><a href="#"><img src="../css/images/tableIcon.png" title="Danh sách bàn"/></a></li>
                    </ul>
                </div>
                <!-- END Menu -->             
                <div class="main-content">
                    <div id="main-header">ĐẶT CHỖ</div>
                    <div class="customerInfo">
                        <table>
                            <tr>
                                <td>Họ tên khách hàng</td>
                                <td><input type="text"></input></td>
                            </tr>
                            <tr>
                                <td>Chứng minh nhân dân</td>
                                <td><input type="text"></input></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td><input type="text"></input></td>
                            </tr>
                        </table>
                    </div>
                    <div class="bookingDetailInfo">
                        <table id="bookingDetailInfoTable">
                            <tr>
                                <td>Mã bàn ăn</td>
                                <td><input type="text"></input></td><br/>
                            </tr>
                            <tr>
                                <td>Từ</td>
                                <td><input type="text" class="fromDtPker"></input></td>
                                <td>Đến</td>
                                <td><input type="text" class="toDtPker"></input></td>
                            </tr>
                        </table>                        
                    </div>
                    <div class="buttonToolBar">
                        <button>Lưu</button>
                        <button onclick="addTable();">Thêm bàn ăn</button>
                        <button id="searchTableBut">Tra cứu bàn ăn</button>
                    </div>
                </div>              
                <!-- END Main content -->
            </div>
            <!-- END Main -->
            <!-- Footer -->
            <div id="footer">
                <p class="right">&copy; 2012 - T4V Restaurant &nbsp; Design by T4V Group
                    <p>
                        <a href="#">Trang chủ</a><span>&nbsp;</span>
                        <a href="#">Giới thiệu</a><span>&nbsp;</span>
                        <a href="#">Liên hệ</a><span>&nbsp;</span>
                        <div class="cl">&nbsp;</div>
                    </p>
                </p>
            </div>
            <!-- END Footer -->        
            <!-- Addtional -->
            <!-- Table Info Dialog -->
            <div class="tableInfoDialog">
                <div class="main-content-dialog">
                    <!-- Search food table -->
                    <div class="search-table">
                        <table>
                            <tr>
                                <td>Nhà hàng</td>
                                <td>
                                    <select>
                                        <option selected>Nội bộ</option>
                                        <option>Tất cả</option>
                                        <option>A</option>
                                        <option>B</option>
                                    </select>
                                </td>                      
                            </tr>
                            <tr>
                                <td>Khu vực</td>
                                <td>
                                    <select>
                                        <option selected>Tất cả</option>
                                        <option>Bình thường</option>
                                        <option>VIP</option>
                                    </select>
                                </td>
                                <td>Tình trạng</td>
                                <td><select>
                                        <option value="allStt" selected>Tất cả</option>
                                        <option value="availStt">Chưa đặt</option>
                                        <option value="notAvailStt">Đã đặt</option>                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Từ</td>
                                <td>
                                    <input type="text" class="fromDtPker"></input>
                                </td>
                                <td>Đến</td>
                                <td>
                                    <input type="text" class="toDtPker"></input><br/>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><button>Tìm kiếm</button></td>
                            </tr>
                        </table>                                                

                    </div>
                    <!-- END search table -->
                    <!-- Table of food table -->
                    <div class="foodTableTbl">
                        <!-- Dialog for information about region (khu vuc ban an) -->
                        <div id="regionInfoDialog" title="Thông tin khu vực">
                            <p>Mô tả trang trí</p>
                        </div>
                        <!-- END Dialog for information about region (khu vuc ban an) -->
                        <!-- Dialog for booking detail -->
                        <div id="bookingDetailDialog" title="Thông tin đặt chỗ">
                            <table>
                                <tr>
                                    <th>Khách hàng</th>
                                    <th>Từ</th>
                                    <th>Đến</th>
                                    <th>Giá đặt(VND)</th>
                                </tr>
                                <tr>
                                    <td>T4V</td>
                                    <td>16:00 12/3/2012 </td>
                                    <td>20:00 12/3/2012 </td>
                                    <td>250.000</td>
                                </tr>
                                <tr>
                                    <td>T4V</td>
                                    <td>16:00 15/3/2012 </td>
                                    <td>20:00 15/3/2012 </td>
                                    <td>250.000</td>
                                </tr>
                            </table>
                        </div>
                        <!-- END Dialog for booking detail -->
                        <table>
                            <tr>
                                <th>MÃ BÀN ĂN</th>
                                <th>TÊN KHU VỰC</th>
                                <th>GIÁ THÀNH</th>
                                <th>SỐ NGƯỜI</th>
                                <th>TÌNH TRẠNG</th>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td><a onclick="regionInfoLinkClicked();" href="#">VIP</td>
                                <td>1.200.000</td>
                                <td>10</td>
                                <td>Chưa đặt</td>
                            </tr>       
                            <tr>
                                <td>123</td>
                                <td>
                                    <a onclick="regionInfoLinkClicked();" href="#">Bình thường</a>                                
                                </td>                               
                                <td>1.200.000</td>
                                <td>10</td>
                                <td><a onclick="bookingDetailLinkClicked();" href="#">Chi tiết</a></td>
                            </tr>       
                        </table>

                    </div>
                </div>
                <!-- END table of food table -->
            </div>  
            <!-- END table info Dialog -->
            <br />
    </body>

</html>