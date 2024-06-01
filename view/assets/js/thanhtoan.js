// Giỏ hàng
var totalmoney = document.querySelector("#totalMoney") //Tổng tiền các sản phẩm 

//Sản phẩm
var dongia = document.querySelectorAll(".dongia") //Đơn giá sản phẩm
var soluong = document.querySelectorAll(".soluong") //Số lượng sản phẩm
var thanhtien = document.querySelectorAll(".thanhtien") //Thành tiền = giá * số lượng sản phẩm
for(let i = 0; i< dongia.length; i++){
    if(dongia[i].value != "" && soluong[i].value != ""){
      let money = Number(dongia[i].value) * Number(soluong[i].value)
      thanhtien[i].textContent = money
      tongTien()
    }
}

// Hàm xử lý sự kiện thay đổi giá và số lượng để tự động cập nhật đơn giá và tính tổng tiền khi mua hàng

for(let i = 0; i< dongia.length; i++){
    dongia[i].addEventListener("input", function() {
        if(dongia[i].value != "" && soluong[i].value != ""){
            let money = Number(dongia[i].value) * Number(soluong[i].value)
            thanhtien[i].textContent = money
            tongTien()
        }
    })
    soluong[i].addEventListener("input", function() {
        if(dongia[i].value != "" && soluong[i].value != ""){
            let money = Number(dongia[i].value) * Number(soluong[i].value)
            thanhtien[i].textContent = money
            tongTien()
        }
    })
}

//Hàm tính toán lại tổng tiền khi có sự thay đổi giá hoặc số lượng ở các sản phẩm.

function tongTien(){
    let tong = 0
    for(let i = 0; i< thanhtien.length; i++){
        tong += Number(thanhtien[i].textContent)
    }
    totalmoney.textContent = `${tong} VNĐ`;
}

//trang thành tiền
var soluongs = document.querySelectorAll(".soluongtt");
var gias = document.querySelectorAll(".dongiatt");
var thanhTiens = document.querySelectorAll(".thanhtientt");
var tongtientt = document.getElementById("tongtientt");
// Hàm tính thành tiền 1 sản phẩm
function tinhThanhTienSP(soluong, gia) {
return Number(soluong) * Number(gia);
}
// Hàm tính tổng tiền
function tinhTongTien() {
    var tongTien = 0;
    for(var i = 0; i < soluongs.length; i++) {
        // Lấy giá trị từng phần tử
    var soluong = soluongs[i].textContent;
    var gia = gias[i].textContent;
    // Tính thành tiền 1 sản phẩm
    var thanhTien = tinhThanhTienSP(soluong, gia);
    // Gán kết quả vào phần tử thanhTiens
    thanhTiens[i].textContent = thanhTien;
    // Cộng dồn tổng tiền
    tongTien += thanhTien;
}
return tongTien;
}
// Gọi hàm
var tongTien = tinhTongTien();
// Gán kết quả
tongTien += " VNĐ";
tongtientt.textContent = tongTien;