<?php
	namespace Home\Controller;
	use Think\Controller;
	class FormController extends Controller{
		public function insert(){
			$Form = D('Form');
			if($Form->create()){
				$result = $Form ->add();
				if($result){
					$this->success('数据添加成功！');
					
				}else{
					$this->error($Form->getError());
				}
			}else{
				$this->error($Form->getErrot());
			}
		}
		
     //定义自动验证
 
    protected $_validate = array(
         array('title','require','标题必须'),
	 )	;
	 //定义自动完成
    protected  $_auto = array(
        array('create_time','time',1,'function'),
	  
	  
	  )	;
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	}
	
	
	
	
	
	?>