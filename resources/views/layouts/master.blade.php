<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name ="viewport" content="width=device-width , initial-scale=1.0">
<meta http-equiv = "X-UA-Compatible" content = "ie=edge">
<title>@yield('title','test')</title>
<link rel="stylesheet" href="{{ asset('vendor/asdd/bootstrap/css/bootstrap.min.css') }}" >
<link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" >
<link rel="stylesheet" href="{{ asset('css/style.css') }}" >
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"> </script>
</head>
<body>
     <nav class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <a class ="navbar-brand" href="#">BikeShop</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">หน้าแรก</a></li>
                    <li><a href="#">หน้าแรก</a></li>
                    <li><a href="#">หน้าแรก</a></li>
                </ul>
                
            </div>
        </div>
    </nav>
   {{--}} <div class="panel panel-success">
        <div class="panel-heading">
            <div class="panel-title">
                <strong>หัวข้อ</strong>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>ราคาขาย</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P001</td>
                        <td>ชุดจักรยาน</td>
                        <td>2500.00</td>
                    </tr>
                    <tr>
                        <td>P002</td>
                        <td>หมวก</td>
                        <td>1500.00</td>
                    </tr>
                    <tr>
                        <td>P003</td>
                        <td>ชุดเกียร์</td>
                        <td>4500.00</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <a href="#" class="btn btn-default"><i class="fa fa-home"></i> หน้าหลัก</a>
        <a href="#" class="btn btn-success"><i class="fa fa-save"></i> บันทึก</a>
        <a href="#" class="btn btn-info"><i class="fa fa-edit"></i> แก้ไข</a>
        <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> ลบ</a>
        <div class="panel-body">
            <div class="form-inline">
                 <td> <input type="text" class="form-control" placeholder="ชื่อผู้ใช้"> </td>
                 <td><input type="password" class="form-control" placeholder="รหัสผู้ใช้"></td>
                 <td> <button class="btn btn-primary">เข้าสู้ระบบ</button></td>

            </div>
            <div class="form-group has-error">
                <label>ชื่อนามสกุล</label>
                <input type="text" class="form-control">
                <div class="help-block">กรุณากรอกชื่อนามสกุล</div>
            </div>
            <div class="form-group">
                    <label>ที่อยู่</label>
                    <textarea name="" id=""  rows="4" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">เพิ่มข้อมูล</button>
            </div>
                   
               
        </div>
    </div> --}}
  
    @yield("content")
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"> </script>

</body>
</html>