<div id="header">用户头像选择</div>
    <div id="contains">
        <select name="myMenu" id="change" onchange="check(this)">
            <option value="<?php bloginfo('template_directory'); ?>/images/pic1.jpg">头像1</option>
            <option value="<?php bloginfo('template_directory'); ?>/images/pic2.jpg">头像2</option>
            <option value="<?php bloginfo('template_directory'); ?>/images/pic3.jpg">头像3</option>
            <option value="<?php bloginfo('template_directory'); ?>/images/pic4.jpg">头像4</option>
        </select>
        <img id="showTime" src="<?php bloginfo('template_directory'); ?>/images/pic1.jpg">
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