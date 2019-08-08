<?php 
class Cms5d4b462276fe8722133370_b608990cbfef77517521c9dbeeff3f09Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
