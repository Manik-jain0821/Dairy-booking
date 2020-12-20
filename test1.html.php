<?php 
session_start();
?>
   <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All products </title>
        <!-- <link rel="stylesheet" href="style.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src= 
"https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"> 
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js" ></script>
    <script src="http://cdn.jsdelivr.net/g/filesaver.js"></script>
  <style>
            body{
                /*bottom: -400px;*/
                /* position: over; */
                background: url(1.jpg);
                background-size: cover;
                top: -10%;
                height: 850px;
                z-index: 1;
            }
            .cart-page{
                margin: 80px auto;
                margin-left: 40px;
                margin-right: 20px;
                border: paleturquoise;
                color: yellow;
            }
            table{
                width: 100%;
                border-collapse: collapse;
            }
            .cart-info{
                display: flex;
                flex-wrap: wrap;
                font-size: larger;
            }
            th{
                text-align: left;
                padding: 7px 10px;
                color: #fff;
                background: #ff523b;
                font-weight: 500;
                font-size: 19px;
            }
            td{
                padding: 10px 15px;
                font-size: 17px;
            }
            td input{
                width: 70px;
                height: 30px;
                padding: 5px;
                font-size: 17px ;
                margin-right: 15px;
            }
            td a{
                color: #ff523b;
                font-size: 12px;
            }
            td img{
                width: 80px;
                height: 80px;
                margin-right: 10px;
                margin-left: -10px;
            }
            .total-price{
                display: flex;
                justify-content: flex-end;
            }
            .total-price table{
                border-top: 3px solid #ff523b;
                width: 100%;
                max-width: 400px;
                font-size: 18px ;
            }
            td:last-child{
                text-align: right;
            }
            th:last-child{
                text-align: right;
            }
            .btn {
                /* margin-right: 100px; */
                /* margin-left: 1200px; */
                float : right;
                margin-right: 120px ;
                margin-bottom: 50px;
                height: 40px;
                width: 120px;
                margin-top: -60px;
                background-color:#ec442e;
                color: rgb(241, 241, 66);
                outline: grey;
                font: outline rgb(20, 19, 19);
                font-size: 18px;
                font-weight: 580;
            }
            .btn1{
                /* margin-right: 100px; */
                display: none;
                float: right;
                /* margin-left: 1200px; */
                margin-right: 120px;
                margin-bottom: 50px;
                height: 40px;
                width: 120px;
                margin-top: -60px;
                background-color: rgb(40, 230, 40);
                color: rgb(238, 238, 32);
                font-size: 18px;
                font-weight: 580;
            }
            .btn :hover{
                background-color: rgb(55, 216, 55);
                transition: all;
                transition-delay: 0.4s ease;
            }
            .order1{
                display: block;
                overflow: hidden;
            }

            

        @media only screen and (max-width: 480px){
            body{
                margin-left: -27px;
                margin-right: -35px;
            }
                .row{
                    text-align: center;
                }
                .col-2, .col-3, .col-4{
                    flex-basis: 100%;
                }
                .single-product .row{
                    padding: 10px 0px;
                }
                .single-product h1{
                    font-size: 26px;
                    line-height: 32px;
                }
                .cart-info p{
/*                    display: none;*/
                    margin-bottom: -3px;
                    margin-top: -2px;
                }
                #o2{
                    float: center;
                    margin-right: 120px;
                    display: none;
                }

            }
                  
     #o2 {
        position: relative;
        display: none;
        width:315px;
        height:450px;
        margin-top: -620px;
        /* top: -600px; */
        float: right;
        margin-right: 100px; 
        z-index: 8;
    }
    #stay-in-place {
        padding-top: 5px;
    height:450px;
    width:315px;
    overflow: hidden;   
    list-style: none;
    box-shadow: 2px 3px 2px 4px rgb(61, 23, 230);        
        background: url(boxb.jpg);
        background-size: cover;
    }
    #output{
        top: 620px;
        /* margin-left: -700px; */
        float: left;
        height: max-content;
        width: fit-content;
        /* overflow: hidden; */
    }
.vi {
    font-size: 17px ;
    color:whitesmoke;
    background-color: rgb(240, 61, 16);
    margin-top: 125px;
    margin-left: 40px;
    padding: 2px 3px ;
}
.vj {
    font-size: 17px ;
    float: right;
    color:white;
    /* display: inline-block; */
    background-color: rgb(38, 0, 255);
    margin-top: -27px;
    margin-right: 40px;
    padding: 2px 3px;
    /* padding: 0px 3px; */
}
.right {
    float: right;
    margin-right: 25px;
    margin-top: -88px;
    list-style: none;
    padding-right: 10px;
    text-align: right;
}
.left{
    list-style: none;
    font: outline;
    font-weight: 500;
    margin-left: 17px;
    margin-top: 20px;
}
.b1{
    list-style-type: none;
    margin-left: 92px;
    margin-top: -87px;
}
.b2{
    list-style: none;
    margin-left: 164px;
    margin-top: -90px;
}
.pr{
    list-style: none;
    margin-left:132px;
    margin-top:-95px ;
}
.out{
    font-weight: 600;
    /* padding-left:5px ; */
    list-style-type: none;
    float: right;
    margin-right: 36px;;
    margin-top: 4px;
    text-align: right;
    /* margin-right: 110px; */
}
.in{
    float: left ;
    margin-top: 3px;
    margin-left: 99px;
    padding-right: 7px auto;
    list-style-type: none;
    text-align: right;
}
.tt , .tt1 {
    display: none;
}
.line {
    margin-left: 20px;
}

/*.box:hover #move-in-to-place {
    bottom: 0;
    -webkit-transition: all 1s, -webkit-transform 1s;
    transition: all 1s, transform 1s;
    width:80%;
    height:80%;
    opacity:1;
}*/

        </style>
    </head>
    <body class="ord1">
<!--           <form action="receipt.php ">-->
           <input type="hidden" id="name" name="name" value='<?php echo $_SESSION["activeuser"]; ?>' >
    <div class="order1" id="o1">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <!-- <img src="" width="125px"> -->
                </div>
                <!-- <nav>
                    <ul id ="MenuItems">
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </nav> -->
            <!-- <img src="">
            <img src=""> -->
            </div>
        </div>

        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Products</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="1.jpg" alt="">
                            <div>
                                <p>Milk(Doodh)</p>
                                <small>Price: Rs44 / 1Kg</small>
                                <!-- <br>
                                <a href="">Remove</a> -->
                            </div>
                        </div>
                    </td>
                    <td><input type="number" placeholder="0" value="" onclick="recipt()" name="q1" id="q1" oninput="recipt()" min="0"></td>
                    <td id="p1">Rs0.00</td>
                </tr><tr>
                    <td>
                        <div class="cart-info">
                            <img src="2.jpg" alt="">
                            <div>
                                <p>Butter (Paneer)</p>
                                <small>Price: Rs42 / 100g</small>
                                <!-- <br>
                                <a href="">Remove</a> -->
                            </div>
                        </div>
                    </td>
                    <td><input type="number" placeholder="0" value="" onclick="recipt()"name="q2" id="q2" oninput="recipt()" min="0"></td>
                    <td id="p2">Rs0.00</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="3.jpg" alt="">
                            <div>
                                <p>Mattha (lassi)</p>
                                <small>Price: Rs35 / 1 litre</small>
                                <!-- <br>
                                <a href="">Remove</a> -->
                            </div>
                        </div>
                    </td>
                    <td><input type="number" placeholder="0" value="" onclick="recipt()"name="q3" id="q3"oninput="recipt()" min="0"></td>
                    <td id="p3">Rs0.00</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="5.jpg" alt="">
                            <div>
                                <p>Curd (dahi)</p>
                                <small>Price: Rs 55 / 1 Kg</small>
                                <!-- <br>
                                <a href="">Remove</a> -->
                            </div>
                        </div>
                    </td>
                    <td><input type="number" placeholder="0" value="" onclick="recipt()" name="q4"id="q4"oninput="recipt()" min="0"></td>
                    <td id="p4">Rs0.00</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="6.jpg" alt="">
                            <div>
                                <p>Ghee</p>
                                <small>Price: Rs150 / 250Kg</small>
                                <!-- <br>
                                <a href="">Remove</a> -->
                            </div>
                        </div>
                    </td>
                    <td><input type="number" placeholder="0" value="" onclick="recipt()" name="q5" id="q5"oninput="recipt()" min="0"></td>
                    <td id="p5">Rs0.00</td>
                </tr>
            </table>

            <div class="total-price">
                <table>
                    <tr>
                        <td>Item charges</td>
                        <td  id="s1">Rs00.00</td>
                    </tr><tr>
                        <td>Delivery tax</td>
                        <td id="s2">Rs00.00</td>
                    </tr><tr>
                        <td>Subtotal</td>
                        <td id="s3">Rs00.00</td>
                    </tr>
                </table>
            </div>

        </div>
        <input type="button" value="place order"class="btn" onclick="order()" id="btn">
        <button value="open" class="btn1" onclick="order1()" id="btn1">View Recipt</button>
    
    </div>
<!--    </form>-->
    <div class="box" id="o2" tabindex="-1">
        <div id="stay-in-place">
            <p></p>
            <j>&emsp;Products&emsp;&emsp;&emsp;Quantity</j>
            <p></p>
            <div id="left" class="left">
            
            <li id="l1">1.Milk</li>
            <li id="l2">2.Cheese</li>
            <li id="l3">3.Mattha</li>
            <li id="l4">4.Curd</li>
            <li id="l5">5.Ghee</li>
            </div>
        
            <div id="right" class="right">
            <li id="k1">1</li>
            <li id="k2">1</li>
            <li id="k3">1</li>
            <li id="k4">1</li>
            <li id="k5">1</li>
            </div>
            <div id="b1" class="b1">
            <li id="z1">*</li>
            <li id="z1">*</li>
            <li id="z1">*</li>
            <li id="z1">*</li>
            <li id="z1">*</li>
            </div>
            <div class="pr">
            <li id="Q1">1</li>
            <li id="Q2">2</li>
            <li id="Q3">3</li>
            <li id="Q4">4</li>
            <li id="Q5">5</li>
            </div>
            <div class="b2">
            <li> =&emsp; Rs</li>
            <li> =&emsp; Rs</li>
            <li> = &emsp;Rs</li>
            <li> = &emsp;Rs</li>
            <li> = &emsp;Rs</li>
            
            <hr width=130px class="line">
            </div>
            <div class="out">
            <li id="st" id="st">0</li>
            <li id="tt" id="tt">0.00</li>
            <li id="bill">0</li>
            </div>
            <div class="in">
            <li id="st1">Item-cost Rs</li>
            <li id="tt1">Shipping-cost Rs</li>
            <li id="bill1">Total-price Rs</li>
            </div>
            <input type="button" value="Close-recipt" onclick="view()" class="vi">&emsp;
            <input type="button" value="Download" onclick="dwnld()" class="vj">
            <button id="bnm">screenshot</button>
        </div>
    </div>
<!-- 
<div id="move-in-to-place">
    <h2>I'm on top</h2>
</div> -->    
    <!-- <div id="output" onclick="takeshot()">screenshot</div> -->
<script>
    recipt = () =>{
        var i1 = Number(document.getElementById("q1").value);
        var i2 = Number(document.getElementById("q2").value);
        var i3 = Number(document.getElementById("q3").value);
        var i4 = Number(document.getElementById("q4").value);
        var i5 = Number(document.getElementById("q5").value);
        var j1 = i1*44;
        document.getElementById("p1").innerHTML ="Rs"+j1+".00";
        var j2 = i2*42;
        document.getElementById("p2").innerHTML ="Rs"+j2+".00";
        var j3 = i3*35;
        document.getElementById("p3").innerHTML ="Rs"+j3+".00";
        var j4 = i4*55;
        document.getElementById("p4").innerHTML ="Rs"+j4+".00";
        var j5 = i5*150;
        document.getElementById("p5").innerHTML ="Rs"+j5+".00";

        var s1 = Number(document.getElementById("s1").value);
        var s2 = Number(document.getElementById("s2").value);
        var s3 = Number(document.getElementById("s3").value);
        var s1 = j1 + j2 + j3 + j4 + j5;
        if(s1 > 300){
            var s2=0;
        }
        else{
            var s2 = 20;
        }
        if(s1 == 0){
            var s2 = 0;
        }
        var s3 = s1 + s2;
        document.getElementById("s1").innerHTML ="Rs"+s1+".00";
        document.getElementById("s2").innerHTML ="Rs"+s2+".00";
        document.getElementById("s3").innerHTML ="Rs"+s3+".00";
        var y  = document.getElementById("btn");
        y.style.display = "block";
        var x  = document.getElementById("btn1");
        x.style.display = "none";
            
        return s3;
        }
        order = () => {
            var s3 = Number(recipt());
            if(s3 > 5000){
            alert("order limit out of reach");
            location.reload();}
            else{
            // var s1 = Number(document.getElementById("s1").value);
            // var j = 0;
            if(s3 == 0 ){
            alert("Can't place order! Cart is empty");
            }
            else{
                alert("order placed!");
                display();
            }}
        }
        display = () => {
            
            var y  = document.getElementById("btn");
            var x  = document.getElementById("btn1");
            if(x.style.display === "none" ){
            x.style.display = "inline";
            y.style.display = "none";}
            else{
                y.style.display = "block";
                x.style.display = "none";}

            document.getElementById("o2").focus();

            // document.getElementById("btn").innerHTML = "view recipt"
            
        }
        view = () => {
            document.getElementById("o2").style.display = "none";
            document.getElementById("o1").style.opacity = 1;
            // display();
        }

        function takeshot() { 
            let div = 
                document.getElementById('o2'); 
  
            // Use the html2canvas 
            // function to take a screenshot 
            // and append it 
            // to the output div 
            html2canvas(div).then( 
                function (canvas) { 
                    document.getElementById('output') 
                    .appendChild(canvas); 
                    // return Canvas2Image.saveAsPNG(canvas);
                }) 
                // htmlToImage.toPng(document.getElementById('o2'))
                // .then(function (dataUrl) {
                //  download(dataUrl, 'example.png');

//   });
// htmlToImage.toJpeg(document.getElementById('o2'), { quality: 0.95 })
//   .then(function (dataUrl) {
//     var link = document.createElement('a');
//     link.download = 'ex.jpeg';
//     link.href = dataUrl;
//     link.click();
//   });
        } 
        
    dwnld = () => {
        // takeshot();
        localStorage.setItem('name','Chris');
        let myName = localStorage.getItem('name');
        myName
        // let x = document.getElementsById("output");
        // x.download;
        
    }
      //   order1 = () => {
      //       const p = String(document.getElementById("p1").value);

      //       var total = Number(q1.value) * 44 + Number(q2.value)*42 + Number(q3.value)*35 + Number(q4.value)*55 + Number(q5.value)*150 ; 
      //       if(total<300){
      //           total = total + 20;
      //       }

      //       myWindow=window.open('sinp.txt','my window','width=300,height=450,left=1120,top=200');
      //       myWindow.document.write( '\r\n<p> <p>Milk * ' + q1.value + '= ' + (q1.value) * 44 );
    		// myWindow.document.write( '\r\n<p> <p>Cheese * ' + q2.value + " = "  + " Rs "+ (q2.value)*42 );
    		// myWindow.document.write( '\r\n<p> <p>Mattha * ' + q3.value + " = " + " Rs " + (q3.value)*35 );
    		// myWindow.document.write( '\r\n<p> <p> Curd   * ' + q4.value + " = " + " Rs " +  (q4.value)*55 );
      //       myWindow.document.write( '\r\n<p> <p> Ghee   * ' + q5.value + " = " + " Rs " + (q5.value)*150 );
      //       if(total <= 300)
      //       {   
      //           total = total + 20;
      //           myWindow.document.write( '\r\n<p> -----Tax   =  Rs 20.00 </p>  ');
            

      //       }
      //       myWindow.document.write('<p> <p> ---- Total = '  + " Rs "+ total + '<p> <p> ----------------------End');
      //       myWindow.focus();
    		
      //   }
      order1 = () => {
        document.getElementById("o1").style.opacity = 0.3;
        document.getElementById("o2").style.display = "block";

        var q1 = Number(document.getElementById("q1").value);
        var j1 = q1*44;
        var q2 = Number(document.getElementById("q2").value);
        var j2 = q1*42;
        var q3 = Number(document.getElementById("q3").value);
        var j3 = q3*35;
        var q4 = Number(document.getElementById("q4").value);
        var j4 = q4*55;
        var q5 = Number(document.getElementById("q5").value);
        var j5 = q5*150;
        var ic = j1+j2+j3+j4+j5;
        var tc = ic;
        document.getElementById("st").innerHTML = tc+".00"; 
        if(ic<=300){
        //     document.getElementById("tt").style.display = "block";
        //     document.getElementById("tt1").style.display = "block";
        // }
        // else{
            // document.getElementsByClassName("in").style.list-style = none;
            tc = tc + 20;
            document.getElementById("st").innerHTML = "20.00"; 
        }
        document.getElementById("bill").innerHTML = tc+".00"; 
        

        document.getElementById("k1").innerHTML = j1+".00";
        document.getElementById("k2").innerHTML = j2+".00";
        document.getElementById("k3").innerHTML = j3+".00";
        document.getElementById("k4").innerHTML = j4+".00";
        document.getElementById("k5").innerHTML = j5+".00"; 
        
        document.getElementById("Q1").innerHTML = Number(document.getElementById("q1").value);
        document.getElementById("Q2").innerHTML = Number(document.getElementById("q2").value);
        document.getElementById("Q3").innerHTML = Number(document.getElementById("q3").value);
        document.getElementById("Q4").innerHTML = Number(document.getElementById("q4").value);
        document.getElementById("Q5").innerHTML = Number(document.getElementById("q5").value);
        
      }
      $(document).ready(function(){
            $("#bnm").click(function(){
                domtoimage.toBlob(document.getElementById("stay-in-place")).then(function(blob){
                    window.saveAs(blob,"output.png")
                })
            })
          $("#btn").click(function(){
              var uid = $("#name").val();
              var milk = $("#q1").val();
              var cheese = $("#q2").val();
              var mattha = $("#q3").val();
              var curd = $("#q4").val();
              var ghee = $("#q5").val();
              alert(ghee);
              $.getJSON("receipt1.php?name1="+uid+"&q1="+milk+"&q2="+cheese+"&q3="+mattha+"&q4="+curd+"&q5="+ghee,function(response){
                  alert("hello");
              })
          })
        });
    
</script>
    </body>
</html>