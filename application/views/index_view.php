
<html lang="th" >
  <head>
    <meta charset="utf-8">
    <title>Mockup</title>
  </head>
  <?=css_asset('bootstrap.min.css')?>
  <?=css_asset('site.css')?>
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
    </div>

  </body>
  <?=js_asset('jquery-3.3.1.js')?>
  <?=js_asset('bootstrap.min.js')?>
  <?=js_asset('mermaid.min.js')?>

  <script>
  mermaid.initialize({startOnLoad:true});
  </script>
</html>
