
<style>
    body{
        color: black;
    }
    .editable{
        color: #0a508e;
    }
    table{
        text-align: center;
    }
    table td {
        padding-right: 7px;
    }

    table:first-child th {
        padding: 10px;
    }
    table:last-child td {
        width: 20%;
    }

    select {
        background: none;
        border: none;
    }
    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 1px;
        text-overflow: '';
    }

    .logos img {
        width: 30%;
    }
    input[type='date']{
        border: none;
        background:none;
    }
    input[type="time"]{
        width:120px;
        border: none;
        clip-path: inset(0 17px 0 0);
        outline:none;
        outline:0;
    }

    /* @media print { */
    #cer{
        height: 21cm;
        width: 29.7cm;
        background-image: url("/images/background.png");
        background-size:contain;
        margin-top: 70px;
        /* change the margins as you want them to be. */
        }
    /* } */

</style>
<div class="container" dir="rtl" style="" id="cer" style="">

    <img src="{{ asset('images/top.png') }}" style="width:29.7cm">
    {{-- <div class="row logos" style="margin-top: 7cm;"> --}}
        {{-- <div class="col-md-4">
            <img src="{{ asset('images/school_logo.png') }}" alt="">
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4 text-left">
            <img src="{{ asset('images/agency_logo.png') }}" alt="">
        </div> --}}
    {{-- </div> --}}

    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="text-center">
                شهادة اجتياز مستوى
                <label contenteditable="true" class="editable"> -- </label>
                لعام
                1440
                -
                1441
                هـ
            </h2>
        </div>

        <div class="col-12">
            <h4 class="text-center">
              الحمد لله رب العالمين والصلاة و السلام على أشرف الأنبياء و المرسلين نبينا محمد وعلى آله وصحبه  أجمعين
            </h4>

            <h4 class="text-center" >
                تشهد ادارة  مركز فاطمة بنت محمد صلى اللًه عليه وسلم
                <select id="shift">
                    <option value="morning"> الصباحية </option>
                    <option value="evening"> المسائية </option>
                </select>
                بأن
                <span style="margin-right: 5px;"> : </span>

            </h4>

            <h4 class="text-center font-weight-bold">
                الدارسة
                <span style="margin-right: 5px;" > : </span>
                <label contenteditable="true" id="studentName" class="editable" > -- </label>
                قد اجتازت المستوى
                <span style="margin-right: 5px;"> : </span>
                <label contenteditable="true" class="editable"> -- </label>

            </h4>

            <h4 class="text-center">
                سائلين المولى أن يوفقها للعلم النافع و العمل الصالح و أن يرزقها الدرجات العلى في الجنة
                <span style="margin-right: 5px;"> .. </span>
            </h4>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        {{-- table --}}
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table width='100%' border="1" id="cer_table" >
                <tr>
                    <th> المادة </th>
                    <th> الدرجة  الكلية </th>
                    <th> المجموع النهائي للفصل الدراسي الاول  </th>
                    <th> المجموع النهائي للفصل الدراسي الثانى  </th>
                    <th> مجموع الفصلين </th>
                </tr>

                <tr>
                    <td> القرأن الكريم </td>
                    <td class="cell r_1_c_0" contenteditable='true'> 120 </td>
                    <td class="cell r_1_c_1" contenteditable='true'></td>
                    <td class="cell r_1_c_2" contenteditable='true'></td>
                    <td class="cell r_1_c_3"></td>
                </tr>

                <tr>
                    <td> مرأجعة القرأن </td>
                    <td class="cell r_2_c_0" contenteditable='true'> 120 </td>
                    <td class="cell r_2_c_1" contenteditable='true'></td>
                    <td class="cell r_2_c_2" contenteditable='true'></td>
                    <td class="cell r_2_c_3"></td>
                </tr>

                <tr>
                    <td> السلوك و المواظبة </td>
                    <td class="cell r_3_c_0" contenteditable='true'> 40 </td>
                    <td class="cell r_3_c_1" contenteditable='true'></td>
                    <td class="cell r_3_c_2" contenteditable='true'></td>
                    <td class="cell r_3_c_3"></td>
                </tr>

            </table>

            <table width='100%' border="1" style="text-align:right;">
                <tr>
                    <td>
                        المجموع الكلي <span style="margin-right: 5px;"> : </span> <span id="totalResult" ></span>

                    </td>

                    <td>
                        النسبة <span style="margin-right: 5px;"> : </span> <span id="pt" ></span>

                    </td>

                    <td>
                        التقدير<span style="margin-right: 5px;"> : </span> <span id="ratting" ></span>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <div class="row text-center" style="margin-top: 10px;" >
        <div class="col-md-4">
            <h5>
                اسم المعلمة
                <span style="margin-right: 5px;"> : </span>

                <br>
                <label contenteditable="true" style="margin-top: 10px;" >

                </label>
                <select style="text-align: center;color:#0a508e;" id="teachers">
                    <option value="1" > عزيزة إبراهيم صالح الجوهر </option>
                    <option value="2" > بشاير بنت عبدالجليل بن عبدالله الحمد </option>
                    <option value="3" > شعاع عثمان عبدالله الحافظ </option>
                    <option value="4" > وفاء عبدالباري فرحات </option>
                    <option value="5" > إلهام بنت أمين بن محمد الحبيشي  </option>
                    <option value="6" > سعاد محمد علي عمر </option>
                    <option value="7" > صباح منيف ناصر العتيبي </option>
                    <option value="8" > عائشة محمد عيسى العجاج </option>
                    <option value="9" > لطيفة محمد عبدالله بوطويبه </option>
                    <option value="10"> آيات حمدي أبو طالب محمد عدوي </option>
                    <option value="11"> عائشة عثمان عبدالله الحافظ </option>
                    <option value="12"> هدى أحمد محمد الملحم </option>
                    <option value="13">انهار بنت عبدالعزيز بن حمد القعيمي </option>
                    <option value="14">حصه بنت صالح بن سعد المرشود </option>
                    <option value="15"> منيرة حمد فايز الفايز </option>
                    <option value="16"> حنان صالح كرامة السعدي </option>
                    <option value="17"> راوية علي خضر المعيدي </option>
                    <option value="18"> فوزية بنت ابراهيم بن صالح الملحم </option>

                </select>
                <input type="text" value="{{ asset('images/techers/') }}" hidden id="techer_images_path">
                <img src="{{asset('images/techers/1.png')}}" width="100px" style="display: block;margin:auto;" id="teacher_sign">


            </h5>

        </div>

        <div class="col-md-4"
        {{-- style="background-image: url({{asset('images/stamp.png')}});background-size:cover;" --}}
        >
            <h5 class="font-weight-bold" >
                <label style="z-index: 100000000" > الختم </label>
                <br>
                <input type="text" id="morning_shift" value="{{ asset('images/morning_shift.png') }}" hidden>
                <input type="text" id="eveing_shift"  value="{{ asset('images/evening_shift.png') }}" hidden>
                <img src="{{ asset('images/morning_shift.png') }}" id="shift_stamp" width="30%" alt=""
                style="
                    position: absolute;
                    top: -10px;
                    right: 35%;
                    z-index: 10000;
                    "
                >
            </h5>
        </div>

        <div class="col-md-4">
            <h5>
                مديرة المركز
                <br>
                <span contenteditable="true" style="margin-top: 10px;display:block;" class="editable">سماح بنت عبد المحسن البريك</span>
                <img src="{{asset('images/signature.png')}}" width="150px" style="display: block;margin:auto;">
            </h5>

            <div style="text-align: right;margin:0px;">
                حرر في
                {{-- <input type="date" value="date()" onload="getDate()" class="" id="date" required > --}}
                <label contenteditable="true">--</label>
                هـ
            </div>
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" style="transform:translate(0px,-20px); ">

        </div>
    </div> --}}

</div>

<div class="row text-center" style="margin-top: 10%">
    {{-- <div class="col-md-12">
        <button onclick="reload()" style="display: none;" id="reload"> انشاء شهادة اخرى </button>
    </div> --}}
    <div class="col-md-12">
        <button onclick="capture()"> تصدير صورة </button>
        <button onclick="CreatePDFfromHTML()"> تصدير pdf </button>
    </div>
</div>

<a href="" id="imageplaceholder"></a>

<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script>
function reload(){
    location.reload();
}
function disableEdit(){

    $(".editable").each(function(index,element){
        $(element).removeAttr("contenteditable");
    });

    $("#reload").show();



}
const capture = () => {

//   disableEdit();

    //scale up your element
    // var ELEMENT = jQuery("#cer");
    // ELEMENT.css({
    // 'transform': 'scale(3)',
    // '-ms-transform': 'scale(3)',
    // '-webkit-transform': 'scale(3)' });
    const name = document.querySelector('#studentName').innerHTML ;

    html2canvas(document.querySelector("#cer"),{scrollY: -window.scrollY}).then(canvas => {
        var old = document.querySelector('canvas');
        if(old != null){
            old.remove();
        }
        document.body.appendChild(canvas);
    }).then(() => {
        var canvas = document.querySelector('canvas');
        canvas.style.display = 'none';
        var image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
        //scale back your element
        // ELEMENT.css({
        // 'transform': '',
        // '-ms-transform': '',
        // '-webkit-transform': '' });
        var a = document.getElementById("imageplaceholder");
        a.setAttribute('download', name+'.png');
        a.setAttribute('href', image);
        a.click();

    });
};

// const btn = document.getElementById('btn');
// btn.addEventListener('click', capture)


//Create PDf from HTML...
function CreatePDFfromHTML() {

    // disableEdit();
    // name
    var name = $("#studentName").html();
    //scale up your element
    var ELEMENT = jQuery("#cer");
    // ELEMENT.css({
    // 'transform': 'scale(3)',
    // '-ms-transform': 'scale(3)',
    // '-webkit-transform': 'scale(3)' });
    html2canvas(
        document.querySelector("#cer"),{scrollY: -window.scrollY}
            ).then(function(canvas){
        var wid = 0 ;
        var hgt = 0 ;
        var img = canvas.toDataURL("image/png", wid = canvas.width, hgt = canvas.height);
        var hratio = hgt/wid
        var doc = new jsPDF('L','pt','a4');

        //scale back your element
        // ELEMENT.css({
        //     'transform': '',
        //     '-ms-transform': '',
        //     '-webkit-transform': '' });

        let width = doc.internal.pageSize.getWidth()
        let height = doc.internal.pageSize.getHeight()

        let widthRatio = width / canvas.width
        let heightRatio = height / canvas.height

        let ratio = widthRatio > heightRatio ? heightRatio : widthRatio
        // var width = doc.internal.pageSize.width;
        // var height = width * hratio

        doc.addImage(img,'JPEG',-7,0, ( canvas.width * ratio ) + 7 , canvas.height * ratio - 30 );
        doc.save(name+'.pdf');
    });
}

//     var today = new Date();
// document.getElementById("date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
</script>


<script defer>
    $(document).ready(function(){
        $("#shift").on('change',function(){

            if($(this).val() == "morning" ){
            // console.log( $("#shift_stamp").attr("src") );
                $("#shift_stamp").attr("src", $("#morning_shift").val());
            }else if($(this).val() == "evening" ){
                $("#shift_stamp").attr("src", $("#eveing_shift").val());
            }
        });

        $("#teachers").on('change',function(){

            var path = $("#techer_images_path").val();
            var selected = path + "/" + $(this).val() + ".png"
            $("#teacher_sign").attr("src",selected)
        });


        $('.cell').on("keypress keyup blur",function (event) {
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ( (event.which < 48 || event.which > 57) ) {

                if( event.which != 46 ){
                    event.preventDefault();
                }

            }

            calc();
        });

    });
    function calc(){

        var total = 280.0 ;

        var r_cell_1 = parseFloat( ( $(".r_2_c_0").html().replace("<br>",''))  )
        var r_cell_2 = parseFloat( ( $(".r_1_c_0").html().replace("<br>",''))  )
        var r_cell_3 = parseFloat( ( $(".r_3_c_0").html().replace("<br>",''))  )
        if( isNaN(r_cell_2) || isNaN(r_cell_1) || isNaN(r_cell_3) ){

        }else{
            total = r_cell_2 + r_cell_1 + r_cell_3
        }

        var cell_1 = parseFloat( ( $(".r_1_c_1").html().replace("<br>",''))  );
        var cell_2 = parseFloat( ( $(".r_1_c_2").html().replace("<br>",''))  );
        var cell_3 = $(".r_1_c_3");
        if( isNaN(cell_1) || isNaN(cell_2) ){
            // console.log("pass");
            // return false ;
        }else{
            cell_3.html( (cell_1 + cell_2).toFixed(2) );
        }

        var cell_1 = parseFloat( ( $(".r_2_c_1").html().replace("<br>",''))  );
        var cell_2 = parseFloat( ( $(".r_2_c_2").html().replace("<br>",''))  );
        var cell_6 = $(".r_2_c_3");
        if( isNaN(cell_1) || isNaN(cell_2) ){
            // console.log("pass");
            // return false ;
        }else{
            cell_6.html( (cell_1 + cell_2).toFixed(2) );
        }

        var cell_1 = parseFloat( ( $(".r_3_c_1").html().replace("<br>",''))  );
        var cell_2 = parseFloat( ( $(".r_3_c_2").html().replace("<br>",''))  );
        var cell_9 = $(".r_3_c_3");
        if( isNaN(cell_1) || isNaN(cell_2) ){
            // console.log("pass");
            // return false ;
        }else{
            cell_9.html( (cell_1 + cell_2).toFixed(2) );
        }

        var cell_3 = parseFloat( ( $(".r_1_c_3").html().replace("<br>",''))  );
        var cell_6 = parseFloat( ( $(".r_2_c_3").html().replace("<br>",''))  );
        var cell_9 = parseFloat( ( $(".r_3_c_3").html().replace("<br>",''))  );
        if( isNaN(cell_3) || isNaN(cell_6) || isNaN(cell_9) ){

        }else{
            var result = cell_9 + cell_6 + cell_3 ;
            $("#totalResult").html( result );

            var pt = (result / total) * 100.0 ;
            $("#pt").html( pt.toFixed(2) );

            if( parseInt(pt) >= 90 && parseInt(pt) <= 100 ){
                $("#ratting").html(" ممتاز ");
            }else if( parseInt(pt) >= 80 && parseInt(pt) < 90 ){
                $("#ratting").html(" جيد جدا ");
            }else if( parseInt(pt) >= 70 && parseInt(pt) < 80 ){
                $("#ratting").html(" جيد ");
            }else if( parseInt(pt) >= 60 && parseInt(pt) < 70 ){
                $("#ratting").html(" مقبول ");
            }else{
                $("#ratting").html(" رسوب ");
            }
            // console.log(  );
        }

    }
</script>

