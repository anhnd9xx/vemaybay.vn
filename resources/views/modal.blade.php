




<div class="modal fade" id="buy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:750px">
      <div class="modal-header">
        <h5 class="modal-title"  >Đặt chỗ và chọn phương thức thanh toán</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="width:750px">
        @if(session('error'))
        <p style="color:#e74c3c;">Vui lòng kiểm tra lại thông tin nhập!</p>
        @endif
        <form action="{{URL::to('/ticket')}}" method="post">
        {{ csrf_field() }}
            <div class="ftl-fare-wraper" id="ftl-contact">
               <div class="ftl-title" style="font-weight:bolder;font-size:20px;padding-top:15px;color:#2ecc71;with 100%;text-align:center">Thông tin liên hệ người đặt vé</div>
               <div class="ftl-option">
                  <ul class="ftl-contact">
                     <li>
                        <p>Quý danh</p>
                        <div class="ftl-input-group">
                           <select class="ftl-input" name="ftl-contact">
                              <option value="1">Quý ông</option>
                              <option value="2">Quý bà</option>
                           </select>
                        </div>
                     </li>
                     <li>
                        <p>Họ tên<span class="ftl-required"> *</span></p>
                        <div class="ftl-input-group"><input class="ftl-input ftl-req" type="text" placeholder="Họ tên" name="name" maxlength="100"></div>
                     </li>
                     <li>
                        <p>Điện thoại<span class="ftl-required"> *</span></p>
                        <div class="ftl-input-group"><input class="ftl-input ftl-req" type="tel" placeholder="Điện thoại" name="phone" maxlength="15"></div>
                     </li>
                     <li>
                        <p>Email<span class="ftl-required"> *</span></p>
                        <div class="ftl-input-group"><input class="ftl-input ftl-req" type="email" placeholder="Email" name="email" maxlength="100"></div>
                     </li>
                     <li>
                        <p>Địa chỉ</p>
                        <div class="ftl-input-group"><input class="ftl-input" type="text" placeholder="Địa chỉ" name="address" maxlength="250"></div>
                     </li>
                     <li>
                        <p>Ghi chú</p>
                        <div class="ftl-input-group"><textarea class="ftl-input" type="text" placeholder="Yêu cầu đặc biệt" name="ftl-contact" maxlength="250"></textarea></div>
                     </li>
                  </ul>
               </div>
               <div class="ftl-option ftl-boder-top">
                  <label class="ftl-checkbox ftl-invoice-title"><input type="checkbox" name="ftl-select-invoice"><span class="ftl-checkbox-mark"></span>Tôi muốn xuất hóa đơn</label>
                  <div id="ftl-invoice"></div>
               </div>
            </div>




<div class="ftl-fare-wraper">
   <div class="ftl-title" style="font-weight:bolder;font-size:20px;padding-top:15px;color:#2ecc71;with 100%;text-align:center">Phương thức thanh toán  </div>
   <div class="">
      <ul class="ftl-payment">
        <h4>Vui lòng lựa chọn 1 trong các hình thức thanh toán sau:</h4>
         <li >
            <div class="">     <i class="fa fa-check-circle ftl-active"></i>     <span>Thanh toán tại văn phòng Vemaybay.vn</span>  </div>
            <div class="ftl-payment-content ">
               <p style="text-align: left;"><span style="font-size: 12pt;">Sau khi đặt vé thành công, quý khách vui lòng đến văn phòng VeMayBay.vn để thanh toán và nhận vé.</span></p>
               <table style="width: 659.9px;  height: 174px;" cellspacing="0" cellpadding="3">
                  <tbody>
                     <tr>
                        <td style="width: 100%; text-align: left; border-color: #c0c0c0; border-width: 1px; border-style: solid;">
                           <div>
                              <table style="width: 519.05px; height: 124px; " cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td><span style="font-size: 14pt;"><strong><span style="color: #c0c0c0;">VP chính</span></strong></span></td>
                                       <td><span style="font-size: 14pt;">145 Điện Biên Phủ, P.ĐaKao, Q.1, HCM</span></td>
                                    </tr>
                                    <tr>
                                       <td><span style="font-size: 14pt;"><span style="color: #c0c0c0;"><strong>CN Hà Nội</strong></span></span></td>
                                       <td><span style="font-size: 14pt;">23D Hàm Long, Q.Hoàn Kiếm, Hà Nội</span></td>
                                    </tr>
                                    <tr>
                                       <td><span style="font-size: 14pt;"><span style="color: #c0c0c0;"><strong>CN Đà Nẵng</strong></span></span></td>
                                       <td><span style="font-size: 14pt;">6 Duy Tân, Q.Hải Châu, Đà Nẵng <br></span></td>
                                    </tr>
                                    <tr>
                                       <td><strong><span style="font-size: 14pt; color: #ff9900;">Hotline</span></strong><br></td>
                                       <td><span style="color: #ff9900;"><span style="font-size: 14pt;">(028) 38 256 256 - 0932 126 988</span></span></td>
                                    </tr>
                                 </tbody>
                              </table>
                              <br>
                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
               <br>
            </div>
         </li>
         <li >
            <div class="">     <i class="fa fa-check-circle ftl-active"></i>     <span>Giữ chỗ miễn phí và thanh toán qua chuyển khoản</span>  </div>
            <div class="ftl-payment-content ">
               <p style="text-align: center;"><span style="font-size: 14pt;">Sau khi đặt vé thành công, VeMayBay.vn sẽ gửi vé điện tử về email của Quý khách.</span></p>
               <div style="text-align: center;">
                  <div id="payment4-info">
                     <table style="width: 649px; height: 517px; " cellspacing="2" cellpadding="0">
                        <tbody>
                           <tr>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">&nbsp;<br></td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">Vietcombank – PGD Số 7</td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">0071000899766<br>      <em style="color: #63adb3;">Công ty TNHH VeMayBay VN</em></td>
                           </tr>
                           <tr>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;"><br></td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">ACB – PGD Lê Ngô Cát</td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">4323707<br>      <em style="color: #63adb3;">Công ty TNHH VeMayBay VN</em></td>
                           </tr>
                           <tr>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;"><br></td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">Sacombank – PGD Nguyễn Công Trứ</td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">060207451056<br>       <em style="color: #63adb3;">Công ty TNHH VeMayBay VN</em></td>
                           </tr>
                           <tr>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;"><br></td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">Agribank – CN Trung Tâm Sài Gòn</td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">1900201451339<br>      <em style="color: #63adb3;">Công ty TNHH VeMayBay VN</em></td>
                           </tr>
                           <tr>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;"><br></td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">DongAbank – CN Quận 1</td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">013360710003<br>       <em style="color: #63adb3;">Công ty TNHH VeMayBay VN</em></td>
                           </tr>
                           <tr>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;"><br></td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">BIDV – CN Sài Gòn</td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">14010001539853<br>       <em style="color: #63adb3;">Công ty TNHH VeMayBay VN</em></td>
                           </tr>
                           <tr>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;"><br></td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">Vietinbank – Chi nhánh 7</td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">114002684176<br>       <em style="color: #63adb3;">Công ty TNHH VeMayBay VN</em></td>
                           </tr>
                           <tr>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;"><br></td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">Techcombank – CN Hồ Chí Minh</td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">19128339526017<br>       <em style="color: #63adb3;">Công ty TNHH VeMayBay VN</em></td>
                           </tr>
                           <tr>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;"><br></td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">VPBank – CN Hồ Chí Minh&nbsp;</td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">205769878<br>      <em style="color: #63adb3;">Công ty TNHH <em>VeMayBay VN</em>&nbsp;</em></td>
                           </tr>
                           <tr>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;"><br></td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">VIB – CN Quận 2</td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">604704060087976<br>      <em style="color: #63adb3;">Công ty TNHH XD TM DL Hồng Ngọc Hà</em></td>
                           </tr>
                           <tr>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;"><br></td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">Saigon Commecial Bank – Chi nhánh HCM</td>
                              <td style="border-color: #999999; border-width: 1px; border-style: solid;">0010100312600001<br>       <em style="color: #63adb3;">Công ty TNHH XD TM DL Hồng Ngọc Hà</em></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div style=" text-align: center;">&nbsp; <br></div>
               <div style="text-align: center;"><br></div>
            </div>
         </li>
         <li name="payment-method" value="3">
            <div class="">     <i class="fa fa-check-circle ftl-active"></i>     <span>Thanh toán tận nơi</span>  </div>
            <div class="ftl-payment-content ">
               <div>
                  <span style="font-size: 12pt;">Sau khi đặt vé thành công, nhân viên VeMayBay.vn sẽ đến tận nơi để giao vé và thanh toán</span>
                  <div style=" text-align: left;">&nbsp;<span style="font-size: 12pt;"><br></span></div>
                  <p><span style="font-size: 12pt;"><span style="color: #ff9900;"><span style="font-size: 14pt;">Với hình thức này, quý khách sẽ mất phí giao vé là                 <strong>0 VNĐ.</strong>                 Quý khách vui lòng điền đầy đủ thông tin địa chỉ để nhân viên giao vé và thu tiền                      </span></span></span></p>
                  <span style="font-size: 14pt;">         </span>
                  <p><strong><span style="font-size: 12pt;">Lưu ý: Hình thức thanh toán này chỉ áp dụng cho các địa chỉ tại khu vực nội thành TP Hồ Chí Minh</span></strong><br></p>
               </div>
               <br>
            </div>
         </li>
         <li name="payment-method" value="4">
            <div class="ftl-group">     <i class="fa fa-check-circle ftl-active"></i>     <span>Thanh toán tại Family Mart, B’S Mart, Circle K...</span>  </div>
            <div class="ftl-payment-content ftl-block">
               <p><span style="font-size: 12pt;">Sau khi đặt vé thành công, nhân viên VeMayBay sẽ liên hệ quý khách để gửi mã thanh toán tại cửa hàng.                                     </span></p>
               <table style="width: 657px;  height: 268px;" cellspacing="0" cellpadding="3">
                  <tbody>
                     <tr>
                        <td style="width: 100%; border-width: 1px; border-style: solid; border-color: #c0c0c0;">
                           <div>
                              <p>Sau khi hoàn tất đơn hàng Quý khách nhận&nbsp;<strong>mã thanh toán&nbsp;</strong>do nhân viên VeMayBay.vn cung cấp.&nbsp;Đến quầy thanh toán và cung cấp cho nhân viên cửa hàng tiện lợi:</p>
                              <ol>
                                 <li><strong>Mã thanh toán.</strong></li>
                                 <li><strong>Số điện thoại dùng để đặt vé.</strong> <br></li>
                              </ol>
                              <p><strong>Lưu ý:&nbsp;</strong>Tổng Tiền Thanh Toán&nbsp;=&nbsp;Tổng Tiền Vé&nbsp;(của VeMayBay.vn) +&nbsp;Phí Tiện Lợi&nbsp;(1.2% trên Tổng Tiền Vé – chưa bao gồm VAT).</p>
                              <p>Thông báo cho nhân viên VeMayBay.vn tại hotline&nbsp;<strong><span style="color: #ff9900;">(028)38.256.256</span></strong><em>&nbsp;</em>hoặc<em>&nbsp;</em><span style="color: #ff9900;"><strong>0932.126.988</strong></span><em>&nbsp;</em><span style="text-decoration-line: underline;">(sau 6 giờ chiều)<em>&nbsp;</em></span>rằng bạn đã <span style="color: #ff9900;"><a href="https://www.vemaybay.vn/thong-tin-can-biet/thanh-toan-tai-cac-cua-hang-tien-loi-247#ixzz5rvwHh2Jc">Thanh toán tại các Cửa Hàng Tiện Lợi 24/7</a></span><br></p>
                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
               <br>
            </div>
         </li>
      </ul>
   </div>

</div>






          <div class="form-group float-right">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="submit" class="btn btn-primary" >Xác nhận</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
