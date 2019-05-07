<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<label for="file">扫二维码:</label>
    <div id="img1">

    </div>
    <p>
        <img src="erweima/ImageFormat.Png" />
    </p>
    <script type="text/javascript">
function pay_status(){
   var order_id = $("#order_id").val();
   $.ajax({  
    url:'http://' + window.location.host+ '/home/cart/pay_status_check',
    dataType:'json', 
    type:'post',  
    data:{'order_id':order_id}, 
    success:function(data){
        window.clearInterval(int); //销毁定时器
        setTimeout(function(){
          //跳转到结果页面，并传递状态
          window.location.href="http://127.0.0.1/erweima.php";
        },1000)
    }, 
    error:function(){  
      alert("error");
       
    },  
 
 });
}
//启动定时器
var int=self.setInterval(function(){pay_status()},1000);
</script>
</body>
</html>

<?php 
//       public function pay_status_check(){
//         $order_id = I("order_id");
//         $result = M('table')->where("order_id = $order_id")->find();
//         echo $result['pay_status'];
//       }
 ?>