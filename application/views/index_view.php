
<html lang="th" >
  <head>
    <meta charset="utf-8">
    <title>Mockup</title>
  </head>
  <?=css_asset('bootstrap.min.css')?>
  <?=css_asset('site.css')?>
  <?=css_asset('jquery.dataTables.min.css')?>
  <body>
    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
          SMART SERVICE
        </a>
      </div>
    </nav>

    <div class="container site-box">
      <div class="card">
        <div class="card-header">
          การขอรับบริการตรวจสินค้าส่งออก
        </div>
        <div class="card-body">
          <div class="card-title">
            <div class="row">
              <div class="col-sm-6 text-right">
                  Job No. xxx
              </div>
              <div class="col-sm-6 text-left">
                  Oder No. xxxx
              </div>
            </div>
          </div>
            <?php $text = array('1.กรอกคำร้อง','2.ทบทวนคำขอและตรวจสภาพ','3.อยู่ระหว่างการให้บริการ','4.สิ้นสุดการให้บริการ'); ?>
            <?php foreach ($text as $key => $value):?>
            <svg xmlns="http://www.w3.org/2000/svg"  width="215" height="90" viewBox="0 0 183.58 74.38">
              <a href="#" class="cls-fill">
                    <text x="80"
                      y="40"
                      fill="#000"
                      text-anchor="middle"
                      alignment-baseline="middle">
                      <?=$value?>
                  </text>
              <polygon class="cls-1" points="157 73.38 1 73.38 1 5.38 157 5.38 182.33 39.38 157 73.38"/>
            </a>
            </svg>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="site-box">
        <div class="card">
          <div class="card-header">
           ขั้นตอนการให้บริการ
          </div>
          <div class="card-body">
            <div class="card-title">
              งานบริการของท่านกำลังอยู่ในขั้นตอนวงกลมสีแดง
            </div>
            <div class="mermaid text-center">
              graph TB
                   A("รับแบบคำขอรับบริการและตัวอย่าง   ") --> B{"ทบทวนคำขอและตรวจสภาพ<br/>รายละเอียดของตัวอย่าง"}
                   B -->|"ไม่ผ่าน"| A;
                   B -->|"ผ่าน"| C["แยกประเภทของตัวอย่าง/ตั้งรหัส"]
                   style C stroke:#f00,stroke-width:4px
                   C --> D["จ่ายค่าบริการกับเจ้าหน้าที่การเงิน"]
                   D --> E["ออกใบนัดรับหนังสือแจ้งผลการวัดรังสี"]

              </div>
          </div>
        </div>
      </div>

      <!--  popup div -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">เพิ่ม / แก้ไข การแจ้งเตือน</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-5">
                  <form>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label text-popup-header">หัวข้อแจ้งเตือน</label>
                      <input type="text" class="form-control" id="notification_topic">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label text-popup-header">ข้อความแจ้งเตือน</label>
                      <textarea class="form-control" id="notification_text"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label text-popup-header">ช่องทางการแจ้งเตือน</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="channel_0">
                        <label class="form-check-label text-popup-body">
                          Email
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="channel_1">
                        <label class="form-check-label text-popup-body">
                          Web notifications
                        </label>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <label for="message-text" class="col-form-label text-popup-header">แจ้งเตือนใคร</label>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="alert_to_0">
                      <label class="form-check-label text-popup-body" >
                        ลูกค้า
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="alert_to_1">
                      <label class="form-check-label text-popup-body">
                        ผู้ที่เกี่ยวข้องในขั้นตอนทุกคน
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="alert_to_2">
                      <label class="form-check-label text-popup-body" >
                        ผู้ที่เกี่ยวข้องในในการให้บริการทุกคน
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label text-popup-header">แจ้งเตือนเมื่อ</label>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="alert_status_0">
                      <label class="form-check-label text-popup-body" >
                        ไปยังขั้นตอน "รับแบบคำขอรับบริการและตัวอย่าง" ด้วยเงื่อนไข "ไม่ผ่าน"
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="alert_status_1">
                      <label class="form-check-label text-popup-body" >
                        ไปยังขั้นตตอน "แยกประเภท / ตั้งรหัสตัวอย่าง" ด้วยเงื่อนไข "ผ่าน"
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="alert_status_2">
                      <label class="form-check-label text-popup-body">
                        เข้ามายังขั้นตอนนี้
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">บันทึก</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end popup div -->

      <div class="site-box">
        <div class="card">
          <div class="card-header">
           การแจ้งเตือน
          </div>
          <div class="card-body">
            <div class="card-title">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">เพิ่มการแจ้งเตือน</button>
            </div>
             <div class="box-table table table-hover">
               <table id="myTable">
                 <thead>
                   <tr>
                    <th>ลำดับ</th>
                    <th>หัวข้อแจ้งเตือน</th>
                    <th>แจ้งเตือนใคร</th>
                    <th>แจ้งเตือนเมื่อ</th>
                    <th>ช่องทาง</th>
                    <th>กิจกรรม</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- dataTables -->
                </tbody>
               </table>
             </div>
          </div>
        </div>
      </div>
    </div>

  </body>
  <?=js_asset('jquery-3.3.1.js')?>
  <?=js_asset('bootstrap.min.js')?>
  <?=js_asset('mermaid.min.js')?>
  <?=js_asset('jquery.dataTables.min.js')?>

  <script>
  var alert_status = ['ไปยังขั้นตอน "รับแบบคำขอรับบริการและตัวอย่าง" ด้วยเงื่อนไข "ไม่ผ่าน"',
                      'ไปยังขั้นตตอน "แยกประเภท / ตั้งรหัสตัวอย่าง" ด้วยเงื่อนไข "ผ่าน"',
                      'เข้ามายังขั้นตอนนี้'];
  var alert_to     = ['ลูกค้า',
                      'ผู้ที่เกี่ยวข้องในขั้นตอนทุกคน',
                      'ผู้ที่เกี่ยวข้องในในการให้บริการทุกคน'];

      $(document).ready( function () {
        mermaid.initialize({startOnLoad:true});
        var t = $('#myTable').DataTable();
        $.get( "./json_data/all", function( data ) {
              $.each(JSON.parse(data), function(i, e){
                t.row.add( [
                       i+1 ,
                       e.notification_topic,
                       alert_to[e.alert_to],
                       alert_status[e.alert_status],
                       channel(e.channel),
                       '<a href="javascript:;" id="myHref" class="py-2" onclick="editData('+i+')">[แก้ไข]</a><a href="javascript:;" id="myHref" class="py-2" onclick="deleteData('+i+')">[ลบ]</a>'
                   ] ).draw( false );
               });
        });
    } );
    function channel(i) {
      var channel  = ['Email','Web'];
      var res = "";
      $.each(i, function(e){
        var text = channel[e];
        res = res.concat((e+1)+"."+text+"<br />");
      });
      return res;
    }
    function editData(id) {
      resetModel();
      $('#exampleModal').modal('toggle')
      $.get( "./json_data/"+id, function( data ) {
        var data =JSON.parse(data);
        $("#notification_topic").val(data.notification_topic);
          $.each(data.channel, function(e){
            $('#channel_'+e).prop('checked', true);
          });
        $('#alert_to_'+data.alert_to).prop('checked', true);
        $('#alert_status_'+data.alert_status).prop('checked', true);
      });
    }
    function deleteData(id) {
      alert("ทำการลบข้อมูลลำดับที่ : "+id)
    }
    function resetModel() {
      $('#exampleModal').on('hidden.bs.modal', function (e) {
          $(this)
            .find("input,textarea,select")
               .val('')
               .end()
            .find("input[type=checkbox], input[type=radio]")
               .prop("checked", "")
               .end();
        })
    }
  </script>
</html>
