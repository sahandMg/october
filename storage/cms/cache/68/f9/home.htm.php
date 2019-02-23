<?php 
class Cms5c716692a9ef6948720203_852a5829fc53d704efc4df6cef775f79Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
