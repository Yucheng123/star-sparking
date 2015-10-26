// Empty JS for your own code to be here

$("#carousel-574495").carousel({interval:3000})
//$(".carousel slide").carousel({interval:3000})
//回复栏的处理
function addComment(cid){

	if($("#secondcomment-"+cid).length<=0){
		var str = '<ul id="secondcomment-'+cid+'"></ul>';

		$("#comment-"+cid).append(str);	
		//console.log("hello");
	
	}
	var len= $("#secondcomment-"+cid).length+1;
	$("#secondcomment-"+cid).append("<li id='secondcomment-"+cid+"-"+len+"'></li>");
	$("#secondcomment-"+cid+"-"+len).append($("#commentadd"));
	$("#parentcomment").val(cid);
	$("#commentadd h3").append('<h6><a href="javascript:;"><span onclick="removecomment('+cid+')">点击这里取消回复</span></a></h6>')

}
//点击”取消回复“后表格恢复原位
function removecomment(cid){
	//console.log("hello");
	$("#parentcomment").val("0");
	$("#commentadd h3 h6").remove();//去除”取消回复“这段话
	$("#commentadd").insertBefore($('#commentlist'));//表格恢复原位
	$("#secondcomment-"+cid).remove();//添加的ul去除
}