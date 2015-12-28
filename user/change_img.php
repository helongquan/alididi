<div id="header">用户头像选择</div>
    <div id="contains">
        <select name="myMenu" id="change" onchange="check(this)">
            <option value="pic1.jpg">头像1</option>
            <option value="pic2.jpg">头像2</option>
            <option value="pic3.jpg">头像3</option>
            <option value="pic4.jpg">头像4</option>
        </select>
        <img id="showTime" src="pic1.jpg">
        <script>
        function check(obj){
            var src=obj.value;
            $("showTime").src=src;
        }
        function $(obj){
            return document.getElementById(obj);
        }
        </script>
    </div>