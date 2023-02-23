<?php 

class Post extends Controller{
    private $postModel;
    private $catModel;
    public function __construct()
    {
        $this->postModel = $this->model("PostModel");
        $this->catModel = $this->model("CategoryModel");
    }
    public function home($params=[])
    {
        $data = [
            "cats"=>"",
            "posts"=>""
        ];
        $data['cats'] = $this->catModel->getAllCategory();
        $data['posts'] = $this->postModel->getPostCatId($params[0]);
        $this->view("admin/post/home",$data);
    }
    public function create()
    {
        $data = [
            'title'=>'',
            'desc'=>'',
            'file'=>'',
            'content'=>'',
            'title_err'=>'',
            'desc_err'=>'',
            'file_err'=>'',
            'content_err'=>'',
            'cats' => ''
        ];
        $data['cats'] = $this->catModel->getAllCategory();
       if($_SERVER['REQUEST_METHOD'] == "POST")
       {
            $files=$_FILES['file'];
            $data['title'] = $_POST['title'];
            $data['desc'] = $_POST['desc'];
            $data['content'] = $_POST['content'];
            if(empty($data['title']))
            {
                $data['title_err'] = "Title must be supply!";
            }
            if(empty($data['desc']))
            {
                $data['desc_err'] = "Description must be supply!";
            }
            if(empty($data['content']))
            {
                $data['content_err'] = "Content must be supply!";
            }
            if(empty($data['file']))
            {
                $data['file_err'] = "Choose File must be supply!";
            }

            if(empty($data['title_err']) && empty($data['desc_err']) && empty($data['content_err']))
            {

                if(!empty($files['name']))
                {
                    move_uploaded_file($files['tmp_name'],"assets/uploads/" . $files['name']);
                    if($this->postModel->insertPost($_POST['cat_id'],$data['title'],$data['desc'],$files['name'],$data['content']))
                    {
                        flash("post_success", "Post insert Successfully!");
                        redirect(URLROOT . 'post/home/1');
                    }else{
                       
                        $this->view("admin/post/create",$data);
                    }
                }else{
                    flash("post_fail", "Please insert A fail!");
                    $this->view("admin/post/create", $data);
                }
            }else{
                $this->view("admin/post/create", $data);
            }

           
       }else{
            $this->view("admin/post/create",$data);
       }
    }
    public function show($params=[])
    {
        $post= $this->postModel->getPostById($params[0]);
        $data = ["post" => $post];
        $this->view("admin/post/show",$data);
    }
    public function edit($params=[])
    {
        $data = [
            'title'=>'',
            'desc'=>'',
            'file'=>'',
            'content'=>'',
            'title_err'=>'',
            'desc_err'=>'',
            'file_err'=>'',
            'content_err'=>'',
            'cats' => ''
        ];
        $data['cats'] = $this->catModel->getAllCategory();
       if($_SERVER['REQUEST_METHOD'] == "POST")
       {
            $files=$_FILES['file'];
            $filename=$_FILES['file']['name'];

            $data['title'] = $_POST['title'];
            $data['desc'] = $_POST['desc'];
            $data['content'] = $_POST['content'];
            if(empty($data['title']))
            {
                $data['title_err'] = "Title must be supply!";
            }
            if(empty($data['desc']))
            {
                $data['desc_err'] = "Description must be supply!";
            }
            if(empty($data['content']))
            {
                $data['content_err'] = "Content must be supply!";
            }
            if(empty($data['file']))
            {
                $data['file_err'] = "Choose File must be supply!";
            }

            if(empty($data['title_err']) && empty($data['desc_err']) && empty($data['content_err']))
            {

                if(!empty($files['name']))
                {
                    move_uploaded_file($files['tmp_name'],"assets/uploads/" . $files['name']);
                   
                }else{
                   $filename = $_POST['old_file'];
                }
                $curId=getCurrentId();
                deleteCurrentId();
                if($this->postModel->updatePost($curId,$_POST['cat_id'],$data['title'],$data['desc'],$filename,$data['content']))
                {
                    flash("ref_succ","Post edit Success.");
                     redirect(URLROOT."post/show/".$curId);
                }else{
                     flash("ref","Post edit fail! try again.");
                     redirect(URLROOT."post/edit/".$curId);
                }
            }else{
                $this->view("admin/post/create", $data);
            }           
       }else{
        setCurrentId($params[0]);
        $data['cats']=$this->catModel->getAllCategory();
        $data['post']= $this->postModel->getPostById($params[0]);
        $this->view("admin/post/edit",$data);
       }
      
    }
  
}