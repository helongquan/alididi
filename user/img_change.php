<!DOCTYPE html>
<html>
<head>
    <title>轮播图</title>
</head>
<body>

<script>
    var tags=$("fd").getElementByTagName("li");
    var cats=$("fd").getElementByTagName("p");
    var current;
    var timer=3000;
    function disAll(){
        for (var i = 0; i < tags.length; i++) {
            tags[i].className="";
            cats[i].className="";
            cats[i].style.display="none";
        }
    }
    function setNow(){
        for (var i = 0; i < tags.length; i++) {
            if(tags[i].className=="now"){
                current=i;
            }
        }
    }
    </script>
    <script>
    // 设置手动切换效果
    for (var j = 0; j < tags.length; j++) {
        tags[j].onmouseover=function(){
            clearInterval(h);
            disAll();
            this.className="now";
            setNow();
            cats[current].style.display="block";
            cats[current].className="now";
        }
        tags[j].onmouseout=function(){
            setNow();
            h=setInterval("goNext()",3000);
        }
    }
</script>
<script>
    // 设置自动切换效果
    function goNext(){
        setNow();
        current+=1;
        if (current>=parentInt(tags.length)) {
            current=0;
            disAll();
            cats[0].style.display="block";
            tags[0].className="now";
            cats[0].className="now";
        }else{
            disAll();
            cats[current].style.display="block";
            cats[current].className="now";
            tags[current].className="now";
        }
    }
    var h=setInterval("goNext()",timer);
    function $(obj){
        return document.getElementById(obj);
    }
</script>

    <div class="fd">
    <p class="now"><img src="pic1.jpg"></p>
    <p style="display:none"><img src="pic2.jpg"></p>
    <p style="display:none"><img src="pic3.jpg"></p>
    <p style="display:none"><img src="pic4.jpg"></p>
    <ul>
        <li class="now">1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
    </ul>
</div>
</body>
</html>
