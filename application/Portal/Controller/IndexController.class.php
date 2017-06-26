<?php

namespace Portal\Controller;

use Common\Controller\HomebaseController;

/**
 * 首页
 */
class IndexController extends HomebaseController
{
    // 首页
    public function index()
    {
        $this->assign('title', '首页');
        $this->display(":index");
    }

    // 联系我们
    public function contact()
    {
        $this->assign('title', '联系我们');
        $this->display(":contact");
    }

    // 关于我们
    public function about()
    {
        $this->assign('title', '关于我们');
        $this->display(":about");
    }

    // 案例分享
    public function share()
    {
        $this->assign('title', '案例分享');
        $this->display(":share");
    }

    // 成功案例
    public function succ()
    {
        $this->assign('title', '成功案例');
        $this->display(':success');
    }

    // 法律法规
    public function law()
    {
        $this->assign('title', '法律法规');
        $this->display(':law');
    }

    // 知识产权交易
    public function trade()
    {
        $this->assign('title', '知识产权交易');
        $this->display(':trade');
    }

    // 文章详情
    public function detail()
    {
        $post_id = $_GET['pid'];
        $this->assign('title', '文章详情');
        $this->assign('pid', $post_id);

        $this->display(':article');
    }

    // 业务范围
    public function area()
    {
        $key = I('get.cat', '驰名商标');

        $article = M('Posts')->where("post_title like '$key%' ")->select();
        $this->assign('cat', $key);
        $this->assign('article', $article[0]);
        $this->assign('title', '业务范围');
        $this->display(':area');
    }

    // 企业动态
    public function news()
    {
        $this->assign('title', '企业动态');
        $this->display(':news');
    }

}