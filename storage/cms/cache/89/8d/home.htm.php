<?php 
class Cms5d4c5a47c1f65719172044_1e46f6614f8c67d7df2cbe85dec23a6eClass extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
