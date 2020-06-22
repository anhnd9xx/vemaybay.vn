@extends('layout_searchflight')
@section('searchflight')


@if(session('success'))
    <script>    
        alert("{{ session('success') }}")
    </script>
    @endif
<div class="ftl-flight-list" id="ftl-flight-list0" leg="0" flight-type="domestic" style="display: block;">
    <div class="ftl-flight-header">
        <div class="ftl-icon"></div>
        <div class="ftl-flight-title">
            <p style="font-size: 20px !important;">
                @if($flights[0]->StartPoint == "HAN")
                <span style="font-size: 20px !important;">Hà Nội, Việt Nam (HAN)</span> 
                @elseif($flights[0]->StartPoint == "DAD")
                <span style="font-size: 20px !important;"> Đà Nẵng, Việt Nam (DAD)</span>
                @else
                <span style="font-size: 20px !important;">Hồ Chí Minh, Việt Nam (SGN)</span>
                @endif
                <i class="fa fa-long-arrow-right"></i> 
                @if($flights[0]->EndPoint == "HAN")
                <span style="font-size: 20px !important;"> Hà Nội, Việt Nam (HAN)</span> 
                @elseif($flights[0]->EndPoint == "DAD")
                <span style="font-size: 20px !important;"> Đà Nẵng, Việt Nam (DAD)</span>
                @else
                <span style="font-size: 20px !important;">Hồ Chí Minh, Việt Nam (SGN)</span>
                @endif
            </p>
            <p>Ngày: {{ $flights[0]->StartDate }}</p>      
        </div>
    </div>
    <div class="progress-wrap progress" data-progress-percent="100">
        <div class="progress-bar progress" style="left: 555px;"></div>
    </div>
    <div class="ftl-flight-main">
  
        <!-- foreach here -->
        @foreach ($flights as $flight)
        <div class="ftl-flight-item ">
            <ul class="ftl-flight-info">
                <li>
                @if($flight->Airline == "VN")
                    <img src="public/frontend/images/vn.gif">
                    <p>Vietnam Airlines</p>
                @elseif($flight->Airline == "VJ")
                    <img src="public/frontend/images/vj.gif">
                    <p>Vietjet Air</p>
                @elseif($flight->Airline == "QH")
                    <img src="public/frontend/images/qh.gif">
                    <p>Bamboo Airways</p>
                @endif
                </li>
                <li>
                <div class="ftl-flight-city">
                    @if($flight->StartPoint == "HAN")
                        <span style="font-size: 14px !important;">Hà Nội</span> 
                    @elseif($flight->StartPoint == "DAD")
                        <span style="font-size: 14px !important;"> Đà Nẵng</span>
                    @else
                        <span style="font-size: 14px !important;">Hồ Chí Minh</span>
                    @endif
                </div>
                <div class="ftl-flight-time">{{ $flight->StartTime }}</div>
                </li>
                <li>
                <div class="ftl-flight-numb">{{ $flight->FlightNumber }}     </div>
                <div class="ftl-flight-line">
                    <div class="ftl-flight-fly ftl-line"></div>
                </div>   
                </li>
                <li>
                <div class="ftl-flight-city">
                    @if($flight->EndPoint == "HAN")
                        <span style="font-size: 14px !important;"> Hà Nội</span> 
                    @elseif($flight->EndPoint == "DAD")
                        <span style="font-size: 14px !important;"> Đà Nẵng</span>
                    @else
                        <span style="font-size: 14px !important;">Hồ Chí Minh</span>
                    @endif
                </div>
                <div class="ftl-flight-time">{{ $flight->EndTime }}</div>
                </li>
                <li>
                <div class="ftl-flight-price">{{ number_format($flight->FareAdtFull) }} <span>VND</span></div>
                <button type="button" onclick="buy()">Chọn chuyến bay</button>   
                </li>
            </ul>
            
            <div class="ftl-box-item">
                  <p style="color:#e74c3c;font-weight:bold;"><i class="fa fa-info-circle"></i> Chi tiết chuyến bay</p>
                  <ul class="ftl-box-item-flight">
                    <li>
                        @if($flight->Airline == "VN")
                            <img src="public/frontend/images/vn.gif">
                            <p>Vietnam Airlines</p>
                        @elseif($flight->Airline == "VJ")
                            <img src="public/frontend/images/vj.gif">
                            <p>Vietjet Air</p>
                        @elseif($flight->Airline == "QH")
                            <img src="public/frontend/images/qh.gif">
                            <p>Bamboo Airways</p>
                        @endif
                    </li>
                    <li>
                        @if($flight->ListSegment[0]->StartPoint == "HAN")
                            <span><b>Hà Nội - HAN</b></span>
                            <span><i>Sân bay Nội Bài</i></span>
                        @elseif($flight->ListSegment[0]->StartPoint == "DAD")
                            <span><b>Đà Nẵng - DAD</b></span>
                            <span><i>Sân bay Đà Nẵng</i></span>
                        @elseif($flight->ListSegment[0]->StartPoint == "SGN")
                            <span><b>Hồ Chí Minh - SGN</b></span>
                            <span><i>Sân bay Tân Sơn Nhất</i></span>
                        @endif    
                        <span>Cất cánh: <b> {{ $flight->ListSegment[0]->StartTime }}</b></span>
                        <span>Ngày: <b>{{ $flight->ListSegment[0]->StartDate }}</b></span>    
                    </li>
                    <li>
                        @if($flight->ListSegment[0]->EndPoint == "HAN")
                            <span><b>Hà Nội - HAN</b></span>
                            <span><i>Sân bay Nội Bài</i></span>
                        @elseif($flight->ListSegment[0]->EndPoint == "DAD")
                            <span><b>Đà Nẵng - DAD</b></span>
                            <span><i>Sân bay Đà Nẵng</i></span>
                        @elseif($flight->ListSegment[0]->EndPoint == "SGN")
                            <span><b>Hồ Chí Minh - SGN</b></span>
                            <span><i>Sân bay Tân Sơn Nhất</i></span>
                        @endif    
                        <span>Hạ cánh: <b> {{ $flight->ListSegment[0]->EndTime }}</b></span>
                        <span>Ngày: <b>{{ $flight->ListSegment[0]->EndDate }}</b></span>    
                    </li>
                    <li>      
                        <span>Chuyến bay: <b>{{ $flight->ListSegment[0]->FlightNumber }}</b></span>      
                        <span>Thời gian bay:<b> {{ $flight->ListSegment[0]->Duration }}</b></span>      
                        <span>Hạng chỗ:<b> {{ $flight->ListSegment[0]->Class }}</b></span>      
                        <span>Máy bay: <b>{{ $flight->ListSegment[0]->Plane }}</b></span>    
                    </li>
                  </ul>
               </div>
               <div class="ftl-box-item">
                  <p><i class="fa fa-eye"></i> Chi tiết giá vé</p>
                  <ul class="ftl-box-item-fare">
                     <li><b>Hành khách</b></li>
                     <li><b>Số lượng</b></li>
                     <li><b>Giá vé</b></li>
                     <li><b>Thuế và phí</b></li>
                     <li><b>Tổng tiền</b></li>
                  </ul>
                  <ul class="ftl-box-item-fare">
                     <li>Người lớn</li>
                     <li>{{ $flight->Adt }}</li>
                     <li>{{ $flight->FareAdtFormat }}</li>
                     <li>{{ $flight->TotalFeeTaxAdtFormat }}</li>
                     <li>{{ $flight->FareAdtFullFormat }}</li>
                  </ul>
                  <ul class="ftl-box-item-fare">
                     <li>Trẻ em</li>
                     <li>{{ $flight->Chd }}</li>
                     <li>{{ $flight->FareChdFormat }}</li>
                     <li>{{ $flight->TotalFeeTaxChdFormat }}</li>
                     <li>{{ $flight->FareChdFullFormat }}</li>
                  </ul>
                  <ul class="ftl-box-item-fare">
                     <li>Em bé</li>
                     <li>{{ $flight->Inf }}</li>
                     <li>{{ $flight->FareInfFormat }}</li>
                     <li>{{ $flight->TotalFeeTaxInfFormat }}</li>
                     <li>{{ $flight->FareInfFullFormat }}</li>
                  </ul>
                  <ul class="ftl-box-item-fare ftl-total">
                     <li>Tổng giá vé (VND):</li>
                     <li>{{ $flight->TotalPriceFormat }}</li>
                  </ul>
               </div>
               <div class="ftl-box-item">
                  <p><i class="fa fa-ticket"></i> Điều kiện giá vé</p>
                  @if($flight->Airline == "VJ")
                  <div class="ftl-fare-rule">
                     <div><span style="font-size: 12pt;">*&nbsp;<em><span style="color: #ff0000;"><span>Lưu&nbsp;</span>ý quan trọng:</span></em> Quý khách vui lòng check lại &nbsp;thông tin chuyế<span>n bay trư</span>ớc ngày bay 24 tiếng và thực hiện đúng thứ tự hành trình bay trên vé, nếu chặng nào không bay vui lòng báo lại Vemaybay.vn để<span>&nbsp;đư</span>ợc hỗ trợ<span>&nbsp;tránh trư</span>ờng hợp booking bị hủy chỗ .<br></span></div>
                     <ul>
                        <li><span style="font-family: &quot;Times New Roman&quot;; font-size: 12pt;">Hành lý xách tay: 07 kg</span></li>
                        <li><span style="font-family: &quot;Times New Roman&quot;; font-size: 12pt;">Hành lý ký gửi: Chọn mua bước sau</span></li>
                        <li style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;"><span>Thay đổi chuyến bay: Được ph</span><span>ép thay đổi trước 12h, phí 374,000VNĐ + chênh lệch</span></li>
                        <li><span style="font-family: &quot;Times New Roman&quot;; font-size: 12pt;">Nâng Hạng: Được phép thay đổi trước 12h, phí 374,000VNĐ + chênh lệch</span></li>
                        <li><span style="font-family: &quot;Times New Roman&quot;; font-size: 12pt;">Đổi Hành Trình: Được phép thay đổi trước 12h, phí 374,000VNĐ + chênh lệch</span></li>
                        <li><span style="font-family: &quot;Times New Roman&quot;; font-size: 12pt;">Đổi Tên Hành Khách: Được phép thay đổi trước 12h, phí 374,000VNĐ + chênh lệch (Đối với hạng vé tiết kiệm (promo) thì không được phép đổi tên)</span></li>
                        <li><span style="font-family: &quot;Times New Roman&quot;; font-size: 12pt;">Hoàn vé : không được phép.</span></li>
                     </ul>
                  </div>
                  @elseif($flight->Airline == "VN")
                  <div class="ftl-fare-rule">
                    <div style="box-sizing: border-box;">
                        <div><span style="font-family: &quot;Times New Roman&quot;;"><span style="font-size: 16px;">*<em><span style="color: #ff0000;">Lưu ý</span></em></span></span><span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;"><em><span style="color: #ff0000;">&nbsp;quan trọng:</span></em> Quý khách vui lòng check lại &nbsp;thông tin chuyế</span><span style="font-size: 12pt; font-family: &quot;Microsoft Sans Serif&quot;;">n bay trư</span><span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;">ớc ngày bay 24 tiếng và thực hiệ</span><span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;">n đúng th</span><span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;">ứ tự hành trình bay trên vé, nếu chặng nào không bay vui lòng báo lạ</span><span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;">i Vemaybay.vn đ</span><span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;">ể</span><span style="font-size: 12pt; font-family: &quot;Microsoft Sans Serif&quot;;"> đư</span><span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;">ợc hỗ trợ</span><span style="font-size: 12pt; font-family: &quot;Microsoft Sans Serif&quot;;"> tránh trư</span><span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;">ờng hợp booking bị hủy chỗ .</span></div>
                        <p><span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;">Chuyến bay có số hiệu: VN4xxx thì quý khách sẽ thực hiện chuyến bay trên hãng JetStar Pacific, hành lý xách tay theo qui định của JetStar và làm thủ tục tại JetStar.</span></p>
                        <ol style="font-family: Arial; font-size: 14px; margin-top: 0px; margin-bottom: 0px;"></ol>
                    </div>
                    </div>
                    @elseif($flight->Airline == "QH")
                    <div class="ftl-fare-rule">
                    <div><span style="font-family: &quot;Times New Roman&quot;;">*&nbsp;</span><span style="font-family: &quot;Microsoft Sans Serif&quot;;">Lưu&nbsp;</span>ý quan trọng: Quý khách vui lòng check lại &nbsp;thông tin chuyế<span style="font-family: &quot;Microsoft Sans Serif&quot;;">n bay trư</span>ớc ngày bay 24 tiếng và thực hiện đúng thứ tự hành trình bay trên vé, nếu chặng nào không bay vui lòng báo lại Vemaybay.vn để<span style="font-family: &quot;Microsoft Sans Serif&quot;;">&nbsp;đư</span>ợc hỗ trợ<span style="font-family: &quot;Microsoft Sans Serif&quot;;">&nbsp;tránh trư</span>ờng hợp booking bị hủy chỗ .<br></div>
                    <ul>
                        <li>Hành lý xách tay: 07 kg</li>
                        <li>Hành lý ký gửi: Chọn mua bước sau</li>
                        <li>Thay đổi chuyến bay: Được phép thay đổi trước 12h, phí 374,000VNĐ + chênh lệch</li>
                        <li>Nâng Hạng: Được phép thay đổi trước 12h, phí 374,000VNĐ + chênh lệch</li>
                        <li>Đổi Hành Trình: Được phép thay đổi trước 12h, phí 374,000VNĐ + chênh lệch</li>
                        <li>Đổi Tên Hành Khách: Được phép thay đổi trước 12h, phí 495,000VNĐ + chênh lệch (Đối với hạng vé tiết kiệm thì không được phép đổi tên)</li>
                    </ul>
                    </div>
                    @endif
               </div>
            <div class="ftl-flight-box-detail"></div>
        </div>


@endforeach


@endsection

