<!DOCTYPE>
<html>
<header>
<link href="css/bootstrap-main.css" rel="stylesheet">
<meta charset="utf-8">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    function oneRep(checkbox){
        if(checkbox){
            document.getElementById('labLable').innerHTML = "تقرير رايات عملي";
            document.getElementById('labInput').innerHTML = "<input type=\"file\" name=\"lab\" class=\"form-control-file\" accept=\"application/vnd.ms-excel\" required>";
        } else {
            location.reload();
        }
    }
    
    function selectWeeks(select){
        if(select == 2){
            document.getElementById("weeksFrom").innerHTML = "<input type=\"number\" name=\"week_from\" max=\"17\" class=\"form-control\" placeholder=\"من\">";
            document.getElementById("weeksTo").innerHTML = "<input type=\"number\" name=\"week_to\" max=\"18\" class=\"form-control\" placeholder=\"إلى\">";
        } else {
            document.getElementById("weeksTo").innerHTML = " ";
            document.getElementById("weeksFrom").innerHTML = " ";
        }
    
    }
</script>
</header>
<body>
<div class="header">
    <img src="img/logo.png" >
</div>
<div class="container">
    <div>
        @if (Session::has('success'))
            <div class="alert alert-success text-center flash">
                <h3> {{Session::get('success')}}</h3>
            </div>
        @endif
    </div>
    <div class="content">
        <form method="POST" action="getReport">
            @csrf
            <div class="form-group text-center">
                <input type="checkbox" onchange="oneRep(this.checked)" name="theo_lab" title="النظري"> نظري و عملي  
            </div>
            <div id="twoRep">
                <div class="form-group text-right">
                    <label for="theo"> تقرير رايات </label>
                    <input type="file" name="theo"  class="form-control-file" id="theo" accept="application/vnd.ms-excel" required>
                </div>
                <div class="form-group text-right" id="labDiv">
                    <label for="lab" id="labLable"></label>
                    <span id="labInput"> <span>
                </div>
            </div>
            <div class="form-group text-right">
                <label for="sel1"> أختر مدة الفترة:</label>
                <select class="form-control" name="get_weeks" onchange="selectWeeks(this.value)" id="sel1">
                    <option value="1">كل الأسابيع</option>
                    <option value="2">تحديد الأسابيع</option>
                </select>
            </div>
            <div id="weeks">
                <div class="form-row form-group">
                    <div class="col-6" id="weeksFrom">
                    </div>
                    <div class="col-6" id="weeksTo">
                    </div>
                </div>
            </div>
            <center>
            <div class="form-group">
                <input type="submit" name="submit" value="الحصول على التقرير النهائي">
            </div>
            </center>
        </form>
    </div>
</div>
</body>
</html>