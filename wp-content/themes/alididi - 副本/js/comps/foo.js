Yoo.modules.Foo = Vue.extend({
    template: '<div class="panel-body">
					   <table class="table table-bordered table-hover">
					   	<thead>
					   		<tr>
					   			<th>品牌编号</th>
					   			<th>品牌名称</th>
					   			<th>品牌描述</th>
		                        <th>控制器</th>
					   		</tr>
					   	</thead>
					   	<tbody>
					   		<tr>
					   			<td>1</td>
					   			<td>三星</td>
					   			<td>三星Q470系列，在2014年停产</td>
		                        <td>
		                            <button type="button" class="btn btn-info"><i class="glyphicon glyphicon-list"></i> info</button>
		                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-user"></i> 身份</button>
		                            <div class="btn-group">
		                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">更多<span class="caret"></span></button>
		                                    <ul class="dropdown-menu" role="menu">
		                                        <li><a href="">核心产品</a></li>
		                                        <li><a href="">业务</a></li>
		                                        <li class="divider"></li>
		                                        <li><a href="">关于</a></li>
		                                    </ul>
		                            </div>        
		                        </td>
					   		</tr>
					   		<tr>
					   			<td>2</td>
					   			<td>苹果</td>
					   			<td>iPhone4s，据说这款产品是乔布斯的绝作</td>
		                        <td>
		                            <button type="button" class="btn btn-info"><i class="glyphicon glyphicon-list"></i> info</button>
		                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-user"></i> 身份</button>
		                            <div class="btn-group">
		                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">更多<span class="caret"></span></button>
		                                    <ul class="dropdown-menu" role="menu">
		                                        <li><a href="">核心产品</a></li>
		                                        <li><a href="">业务</a></li>
		                                        <li class="divider"></li>
		                                        <li><a href="">关于</a></li>
		                                    </ul>
		                            </div>        
		                        </td>
					   		</tr>
					   		<tr>
					   			<td>3</td>
					   			<td>诺基亚</td>
					   			<td>老牌手机制造巨头，来自芬兰</td>
		                        <td>
		                            <button type="button" class="btn btn-info"><i class="glyphicon glyphicon-list"></i> info</button>
		                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-user"></i> 身份</button>
		                            <div class="btn-group">
		                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">更多<span class="caret"></span></button>
		                                    <ul class="dropdown-menu" role="menu">
		                                        <li><a href="">核心产品</a></li>
		                                        <li><a href="">业务</a></li>
		                                        <li class="divider"></li>
		                                        <li><a href="">关于</a></li>
		                                    </ul>
		                            </div>        
		                        </td>
					   		</tr>
					   	</tbody>
					   </table>
					   <!-- 分页代码 开始 -->
		               <div class="page_bottom">
		    			   <ul class="pagination">
				   				<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
				   				<li class="active"><a href="#">1</a></li>
				   				<li><a href="#">2</a></li>
				   				<li><a href="#">3</a></li>
				   				<li><a href="#">4</a></li>
				   				<li><a href="#">5</a></li>
				   				<li><a href="#">&raquo;</a></li>
		    			   	</ul>
		                </div>
					   	<!-- 分页代码 结束 -->
					</div>'
});