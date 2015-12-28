		<!-- 页面底部 开始 -->
		<div class="footer">
		    <div class="table-responsive">
		        <table class="table table-hover">
		            <tbody>
		                <ul class="bottom_navbar">
		                    <li id="index_cloth">
		                        <dl>
		                            <h4>服装区</h4>
		                            <dt>男装类</dt>
		                                <dd><a href="#/ClothForBoy">老年装</a></dd>
		                                <dd><a href="#/ClothForBoy">中年装</a></dd>
		                                <dd><a href="#/ClothForBoy">青少装</a></dd>
		                                <dd><a href="#/ClothForBoy">童装</a></dd> 
		                            <dt>女装类</dt>
		                                <dd><a href="#/ClothForGirl">老年装</a></dd>
                                        <dd><a href="#/ClothForGirl">中年装</a></dd>
                                        <dd><a href="#/ClothForGirl">青少装</a></dd>
                                        <dd><a href="#/ClothForGirl">童装</a></dd>  
		                        </dl>    
		                    </li>
		                    <li id="index_live">
		                        <dl>
		                             <h4>家居区</h4>
		                            <dt>家电类</dt>
		                                <dd><a href="#/LiveForElectronic">微波炉</a></dd>
		                                <dd><a href="#/LiveForElectronic">电磁炉</a></dd>
		                                <dd><a href="#/LiveForElectronic">电冰箱</a></dd>
		                                <dd><a href="#/LiveForElectronic">其他</a></dd> 
		                            <dt>家具类</dt>
		                                <dd><a href="#/LiveForFurniture">椅子</a></dd>
		                                <dd><a href="#/LiveForFurniture">床</a></dd>
		                                <dd><a href="#/LiveForFurniture">桌子</a></dd>
		                                <dd><a href="#/LiveForFurniture">其他</a></dd>
		                        </dl>             
		                    </li>
		                    <li id="index_electronic">
		                        <dl>
		                            <h4>电子产品</h4>
		                            <dt>智能类</dt>
		                                <dd><a href="#/EleForIntel">手机</a></dd>
		                                <dd><a href="#/EleForIntel">相机</a></dd>
		                                <dd><a href="#/EleForIntel">PC机</a></dd>
		                                <dd><a href="#/EleForIntel">其他</a></dd> 
		                            <dt>配件类</dt>
		                                <dd><a href="#/EleForParts">眼镜</a></dd>
		                                <dd><a href="#/EleForParts">手环</a></dd>
		                                <dd><a href="#/EleForParts">阅读器</a></dd>
		                                <dd><a href="#/EleForParts">其他</a></dd> 
		                        </dl>            
		                    </li>
		                    <li id="index_food">
		                        <dl>
		                            <h4>食品区</h4>
		                            <dt>干货类</dt>
		                                <dd><a href="#/FoodForDry">干果</a></dd>
		                                <dd><a href="#/FoodForDry">肉类</a></dd>
		                                <dd><a href="#/FoodForDry">蜜饯</a></dd>
		                                <dd><a href="#/FoodForDry">其他</a></dd> 
		                            <dt>生鲜类</dt>
		                                <dd><a href="#/FoodForDamp">鱼类</a></dd>
		                                <dd><a href="#/FoodForDamp">蟹类</a></dd>
		                                <dd><a href="#/FoodForDamp">贝壳类</a></dd>
		                                <dd><a href="#/FoodForDamp">其他</a></dd>
		                        </dl>           
		                    </li>
		                </ul>
		            </tbody>
		        </table>
		    </div> 
		    <p>Copyright © 2016-2020 <a href="<?php echo get_option('home'); ?>"> <?php bloginfo('name'); ?></a> &nbsp;All rights reserved. 版权所有</p>
		<?php wp_footer();?>
		</div>
		<!-- 页面底部 结束--> 
     </div>


     <!-- vue.js加载 开始 -->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/vue/vue.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/vue/vue-router.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/vue/vue-strap.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/yoochoice/yoo.js"></script>
        
        <script src="<?php bloginfo('template_directory'); ?>/js/comps/foo.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/comps/acc.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/comps/Newest.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/comps/ClothForBoy.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/comps/ClothForGirl.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/comps/LiveForElectronic.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/comps/LiveForFurniture.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/comps/EleForIntel.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/comps/EleForParts.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/comps/FoodForDry.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/comps/FoodForDamp.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/comps/Shopping.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/comps/bp.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/index.js"></script>
        <!-- vue.js加载 结束 --> 
</body>
</html>