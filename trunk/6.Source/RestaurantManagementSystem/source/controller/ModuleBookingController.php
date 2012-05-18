<?php
require_once '../dal/BookingDAO.php';
require_once '../dal/TableDAO.php';
class ModuleBookingController{


	/**
	 * @author thanhtuan
	 * main search_Booking method
	 * @param $restaurant string
	 * @param $area string
	 * @param $status bit
	 * @param $from date(example 18-5-2012 7:10:00 AM)
	 * @param $to date (example 18-5-2012 9:10:00 AM)
	 * @return gui information about booking
	 * */
	public function searchAvailableTable($restaurant,$area,$status,$from,$to){

		$dao = new TableDAO() ;
		$array = $dao->getAvailableTable($restaurant,$area,$status,$from, $to);
		$data = "";
		$data = $data." <table>
		<tr>
		<th>MÃ BÀN ĂN</th>
		<th>TÊN KHU VỰC</th>
		<th>GIÁ THÀNH</th>
		<th>SỐ NGƯỜI</th>
		<th>TÌNH TRẠNG</th>
		</tr>
		<tr>  " ;
		foreach ($array as $value){

			$TenKV = isset($value["TenKV"]) ? $value["TenKV"] : "";
			$MaBanAn = isset($value["MaBanAn"]) ? $value["MaBanAn"] : "";
			$GiaThanh = isset($value["GiaThanh"]) ? $value["GiaThanh"] : "";
			$SoNguoi = isset($value["SoLuong"]) ? $value["SoLuong"] : "";
			$TinhTrang =  isset($value["TinhTrang"]) ? $value["TinhTrang"] : "";
			$TinhTrang_change = "";


			$data = $data."<td>$MaBanAn</td>";
			$data = $data."<td><a onclick='regionInfoLinkClicked();' href='#'>$TenKV</td>";
			$data = $data."<td>$GiaThanh</td>";
			$data = $data. "<td>$SoNguoi</td>";
			if($TinhTrang == "0"){
					
				$TinhTrang_change = "Chưa đặt";
				$data  = $data."<td>Chưa đặt</td>";
			}
			else{
					
				$data  = $data."<td><a onclick='bookingDetailLinkClicked();' href='#'>Chi tiết</a></td>";
			}
			$data = $data."</tr>";
		}

		$data = $data."</table>";

		$data = $data ."</div>";
		return $data;

	}


	/**
	 * @author thanhtuan
	 * main detail_Booking method
	 * @param $ID string
	 * @return gui information about detail booking of table food
	 * */
	public function detailBooking($ID_Table){

		$dao = new TableDAO() ;//supose
		$array = $dao->getDetail($ID_Table);
		$data = "";
		$data = $data." <table>
		<tr>
		<th>Khách Hàng</th>
		<th>Từ</th>
		<th>Đến</th>
		<th>Giá</th>
		</tr>
		<tr>  " ;
		foreach ($array as $value){

			$KhachHang= isset($value[""]) ? $value["TenKV"] : "";
			$Tu($value["TuThoiGian"]) ? $value["TuThoiGian"] : "";
			$Den = isset($value["DenThoiGian"]) ? $value["DenThoiGian"] : "";
			$Gia = isset($value["GiaThanh"]) ? $value["GiaThanh"] : "";

			$data = $data."<td>$KhachHang</td>";
			$data = $data."<td>$Tu</td>";
			$data = $data."<td>$Den</td>";
			$data = $data. "<td>$Gia</td>";
			$data = $data."</tr>";
		}

		$data = $data."</table>";

		$data = $data ."</div>";
		return $data;
	}
	/**
	 * @author thanhtuan
	 * main  decribe_Decoration method
	 * @param $id string

	 * @return gui information about decribe Decoration for area.
	 * */
	public function decribeDecoration($id){


		$dao = new TableDAO() ;//supose
		$result = $dao->getDecribe($ID_Table);
		$data =  "<p>Mô tả trang trí</p>";
		$data = $data."<p>$result</p>";
		return $data;

	}
	/**
	 *
	 * @author thanhtuan
	 * main save_Booking method
	 * @param $table array

	 * @return return true if success else  return false
	 *  * */
	public function saveBooking($table){

		try {
			foreach ($array as $value){
					

				$dao = new TableDAO() ;//suppose
				$dao->addTableTo($value); //suppose method DAO is addTableTo();
			}
			return true;
		} catch (Exception $e) {
			echo "Not Connect to database";
		}

		return false;
	}



	/*
	 * @author thanhtuan
	* @param $datime string
	* @return string $datetime after format.
	*/
	public function changeFormatDate($date)
	{
		$result = new DateTime($date);
		$result =  $result->format('Y-m-d H:i:s');
		return $result;
	}

}


// get action form request params
$action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : "";
switch ($action) {
	case "save":	
		$table = isset($_REQUEST["array"]) ? $_REQUEST["array"] : "";
	
		// do save
		$save = new ModuleBookingController();
		$reusult = $save->saveBooking($table);
		echo $reusult;
		break;
	case "searchAvailTable":
		$restaurant = isset($_REQUEST["res"]) ? $_REQUEST["res"] : "";
		$area= isset($_REQUEST["area"]) ? $_REQUEST["area"] : "";
		$status = isset($_REQUEST["status"]) ? $_REQUEST["status"] : "";
		$from= isset($_REQUEST["from"]) ? $_REQUEST["from"] : "";
		$to= isset($_REQUEST["to"]) ? $_REQUEST["to"] : "";
		
		//change format date : 2012-05-17 18:19:20
		if($from != "" && $to != ""){
			$format = new ModuleBookingController();
			$date_from = $format->changeFormatDate($from);
			$date_to =  $format->changeFormatDate($to);
		}
		
		try {
			// do search
			$search = new ModuleBookingController();
			$SearchResult = $search->searchAvailableTable($restaurant,$area,$status,$date_from, $date_to);
			echo $SearchResult;
		} catch (Exception $e) {
			echo "Not Connect to database";
		}
		break;
	case "detail":
		$id = isset($_REQUEST["ID"]) ? $_REQUEST["ID"] : "";
		
		try {
			// do view detail booking
			$detail_booking = new ModuleBookingController();
			$Result = $search->detailBooking($id);
			echo $Result;
		} catch (Exception $e) {
			echo "Not Connect to database! ";
		}
		break;
	case "decribe":
		$id = isset($_REQUEST["ID"]) ? $_REQUEST["ID"] : "";
		
		try {
			// do detail booking
			$decribe = new ModuleBookingController();
			$Result = $decribe->decribeDecoration($id);
			echo $Result;
		
		} catch (Exception $e) {
			echo "Not Connect to database";
		};
		break;
	default:
		break;
}

