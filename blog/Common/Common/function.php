<?php
/********************数据检测的时候用到，检查爱好的数据，如果少于2就返回错误***********************************/
function check_hobby($arg){
		if(count($arg)<2){
			return false;
		}

	}
	

	/**
	 * @param   $[path] [<kindEditor的存放路径>]
	 * @param   $[form] [<表单的name>]
	 * @param   $[tex] [<textarea的name>]
	 * @return [string] [<引入kindeditor 的js代码>]
	 */

function kindEditor($path,$form,$tex){
		$KE = '';
	$KE.= 	"<link rel=\"stylesheet\" href=\"".$path."/themes/default/default.css\" />";
	$KE.='<link rel="stylesheet" href="'.$path.'/plugins/code/prettify.css" />';
	$KE.='<script charset="utf-8" src="'.$path.'/kindeditor.js"></script>';
	$KE.='<script charset="utf-8" src="'.$path.'/lang/zh_CN.js"></script>';
	$KE.='<script charset="utf-8" src="'.$path.'/plugins/code/prettify.js"></script>';
	$KE.='<script>';
	$KE.='KindEditor.ready(function(K) {';
		$KE.='var editor1 = K.create(\'textarea[name="'.$tex.'"]\', {';
				$KE.="cssPath : '".$path."/plugins/code/prettify.css',";
				$KE.="uploadJson : '".$path."/php/upload_json.php',";
				$KE.="fileManagerJson : '".$path."/php/file_manager_json.php',";
				$KE.="allowFileManager : true,";
				$KE.="afterCreate : function() {";
				$KE.="var self = this;";
				$KE.="K.ctrl(document, 13, function() {";
				$KE.="self.sync();";
				$KE.="K('form[name=$form]')[0].submit();";
				$KE.="});";
				$KE.="K.ctrl(self.edit.doc, 13, function() {";
					$KE.="self.sync();";
					$KE.="K('form[name=$form]')[0].submit();";
					$KE.="});";
				$KE.="}";
			$KE.="});";
			$KE.="prettyPrint();";
		$KE.="});";
	$KE.="</script>";
	return $KE;
}
/******************发送邮件 ***********************************/
 function send_mail($sendto_email, $subject,$username,$body){    
        Vendor('PHPMailer.PHPMailerAutoload'); 
        $mail = new PHPMailer();    
        $mail->IsSMTP();                  // send via SMTP    
        $mail->Host = "smtp.126.com";   // SMTP servers    
        $mail->SMTPAuth = true;           // turn on SMTP authentication    
        $mail->Username = "wuyu_cheng1";     // SMTP username  注意：普通邮件认证不需要加 @域名    
        $mail->Password = "19890801wu"; // SMTP password    
        $mail->From = "wuyu_cheng1@126.com";      // 发件人邮箱    
        $mail->FromName =  "吴玉成";  // 发件人    

        $mail->CharSet = "utf-8";   // 这里指定字符集！    
        $mail->Encoding = "base64";    
        $mail->AddAddress($sendto_email,"$username");  // 收件人邮箱和姓名    
        $mail->AddReplyTo("wuyu_cheng1@126.com","126.com");    
        $mail->WordWrap = 50; // set word wrap 换行字数    
        //$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment 附件    
        //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    
        $mail->IsHTML(true);  // send as HTML    
        // 邮件主题    
        $mail->Subject = $subject;    
        // 邮件内容    
        $mail->Body = "<html><head><meta http-equiv=\"Content-Language\" content=\"zh-cn\"><meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\"></head><body>$body</body><html>";                                                                          
        $mail->AltBody ="text/html";  
        return $mail->Send();  
        if(!$mail->Send())    
        {    
           return  $mail->ErrorInfo;    
            exit;    
        }    
        else {    
            return "success";    
        }    
    } 
    /**************************用于ueditor中的内容过滤，防止xss攻击************************************************/   
    function  RemoveXss($data){
    	require_once "./HtmlPurifier/HTMLPurifier.auto.php";

		$_clean_xss_config = HTMLPurifier_Config::createDefault();
		$_clean_xss_config->set('Core.Encoding', 'UTF-8');
		// 设置保留的标签
		$_clean_xss_config->set('HTML.Allowed','div,b,strong,i,em,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src]');
		$_clean_xss_config->set('CSS.AllowedProperties', 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align');
		$_clean_xss_config->set('HTML.TargetBlank', TRUE);
		$_clean_xss_obj = new HTMLPurifier($_clean_xss_config);
		// 执行过滤
		return $_clean_xss_obj->purify($data);
    }
